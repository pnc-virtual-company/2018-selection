<?php

/**
 * This model contains ...
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       
 * @since      
 */

class Home_assets_model extends CI_Model{

    /**
     * Default constructor
     */
    public function __construct() 
    {
    }

    /**
     * Get the home assets of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getHomeAssets($id) {
        $this->db->select('*');
        $this->db->from('home_assets AS h');
        $this->db->join('candidates AS c', 'c.candidate_id = h.candidate_id' );
        $this->db->where('c.candidate_id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Add home assets of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    function addHomeAssets($refrigerator,$radio,$airCon,$riceCooker,$lcdTV,$colorTV,$chComputer,$exComputer,$fCabinet,$dvd,$smartPhone,$phone,$cheapCam,$expenCam,$cheapSofa,$exSofa,$gasCooker,$fruitBlender,$elecCooker,$motoBike,$farmMachine,$car,$vihicleComment,$cow,$buffalo,$pig,$animalCmt,$farmSize,$farmCmt,$sumQuantity5,$sumQuantity3,$globalAsset,$certificate,$specifyLevel,$candidateID)
    {
        $data = array(
            'h_refrigerator' => $refrigerator != "" ? $refrigerator : null,
            'h_air_condictioner' => $airCon != "" ? $airCon : null,
            'h_lcd_tv' => $lcdTV != "" ? $lcdTV : null,
            'h_computer_big_100' => $exComputer != "" ? $exComputer : null,
            'h_furnished_big_300' => $fCabinet != "" ? $fCabinet : null,
            'h_smartphone_big_100' => $smartPhone != "" ? $smartPhone : null,
            'h_camera_big_100' => $expenCam != "" ? $expenCam : null,
            'h_sofa_big_300' => $exSofa != "" ? $exSofa : null,
            'h_motobike_big_500' => $motoBike != "" ? $motoBike : null,
            'h_farming_machine' => $farmMachine != "" ? $farmMachine : null,
            'h_car_truck' => $car != "" ? $car : null,
            'h_cow' => $cow != "" ? $cow : null,
            'h_buffaloe' => $buffalo != "" ? $buffalo : null,
            'h_pig' => $pig != "" ? $pig : null,
            'h_farm_size' => $farmSize != "" ? $farmSize : null,
            'h_radio' => $radio != "" ? $radio : null,
            'h_rice_cooker' => $riceCooker != "" ? $riceCooker : null,
            'h_color_tv' => $colorTV != "" ? $colorTV : null,
            'h_computer_smal_100' => $chComputer != "" ? $chComputer : null,
            'h_dvd_player' => $dvd != "" ? $dvd : null,
            'h_phone_smal_100' => $phone != "" ? $phone : null,
            'h_camera_small_100' => $cheapCam != "" ? $cheapCam : null,
            'h_sofa_smal_300' => $cheapSofa != "" ? $cheapSofa : null,
            'h_gascooker' => $gasCooker != "" ? $gasCooker : null,
            'h_fruit_blender' => $fruitBlender != "" ? $fruitBlender : null,
            'h_electrical_cooker' => $elecCooker != "" ? $elecCooker : null,
            'h_vehicles_comment' => $vihicleComment != "" ? $vihicleComment : null,
            'h_animals_comment' => $animalCmt != "" ? $animalCmt : null,
            'h_farm_comment' => $farmCmt != "" ? $farmCmt : null,
            'h_total_x5' => $sumQuantity5 != "" ? $sumQuantity5 : null,
            'h_total_x3' => $sumQuantity3 != "" ? $sumQuantity3 : null,
            'h_glbal_total' => $globalAsset != "" ? $globalAsset : null,
            'h_poverty_certificate' => $specifyLevel != "" ? $specifyLevel : null,
            'candidate_id' => $candidateID != "" ? $candidateID : null
        );
        $this->db->select('*');
        $this->db->from('home_assets');
        $this->db->where('candidate_id',$candidateID);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
          $this->db->where('candidate_id',$candidateID);
          $this->db->update('home_assets',$data);
        } else {
          $insert = $this->db->insert('home_assets',$data);
        }
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Update the home assets of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function uHomeAssets($id,$refrigerator,$radio,$conditioner,$ricecooker,$lcdTV,$colorTV,$camera1,$camera2,$furnished,$dvdPlayer,$smartphone,$phone,$computer1,$computer2,$sofa1,$sofa2,$gascooker,$fruit,$electrical,$motobike,$farming,$car,$vehiclesComment,$cow,$buffaloe,$pig,$animalComment,$farmSize,$farmComment,$sumQuantity5,$sumQuantity3,$globalAsset,$certificate,$specifyLevel) 
    {
        $data = array(
            'h_refrigerator'                        => $refrigerator,
            'h_air_condictioner'                  => $conditioner,
            'h_lcd_tv'                                  => $lcdTV,
            'h_computer_big_100'               => $computer1,
            'h_furnished_big_300'              => $furnished,
            'h_smartphone_big_100'           => $smartphone,
            'h_camera_big_100'                  => $camera1,
            'h_sofa_big_300'                      => $sofa1,
            'h_motobike_big_500'              => $motobike,
            'h_farming_machine'                 => $farming,
            'h_car_truck'                            => $car,
            'h_cow'                                      => $cow,
            'h_buffaloe'                              => $buffaloe,
            'h_pig'                                      => $pig,
            'h_farm_size'                           => $farmSize,
            'h_radio'                                   => $radio,
            'h_rice_cooker'                        => $ricecooker,
            'h_color_tv'                             => $colorTV,
            'h_computer_smal_100'           => $computer2,
            'h_dvd_player'                         => $dvdPlayer,
            'h_phone_smal_100'                => $phone,
            'h_camera_small_100'             => $camera2,
            'h_sofa_smal_300'                  => $sofa2,
            'h_gascooker'                          => $gascooker,
            'h_fruit_blender'                    => $fruit,
            'h_electrical_cooker'              => $electrical,
            'h_vehicles_comment'             => $vehiclesComment,
            'h_animals_comment'              => $animalComment,
            'h_farm_comment'                 => $farmComment,
            'h_total_x5'                           => $sumQuantity5,
            'h_total_x3'                           => $sumQuantity3,
            'h_glbal_total'                       => $globalAsset,
            'h_poverty_certificate'         => $certificate,
            'h_level'                                 => $specifyLevel,
            'candidate_id'         => $id
        );
        $this->db->where('home_assets.candidate_id',$id);
        $this->db->update('home_assets', $data );
    }

}
?>
