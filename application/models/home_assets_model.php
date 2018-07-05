<?php

/**
 * This model contains the add, update and get functions related to the table `home_assets`
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
     * [addHomeAssets adds a new row in the table `home_assets` with the specified information]
     * @param [int] $candidateID       [id of the candidate]
     * @param [int] $refrigerator      [quantity]
     * @param [int] $radio             [quantity]
     * @param [int] $airCon            [quantity]
     * @param [int] $riceCooker        [quantity]
     * @param [int] $lcdTV             [quantity]
     * @param [int] $colorTV           [quantity]
     * @param [int] $chComputer        [quantity]
     * @param [int] $exComputer        [quantity]
     * @param [int] $fCabinet          [quantity]
     * @param [int] $dvd               [quantity]
     * @param [int] $smartPhone        [quantity]
     * @param [int] $phone             [quantity]
     * @param [int] $cheapCam          [quantity]
     * @param [int] $expenCam          [quantity]
     * @param [int] $cheapSofa         [quantity]
     * @param [int] $exSofa            [quantity]
     * @param [int] $gasCooker         [quantity]
     * @param [int] $fruitBlender      [quantity]
     * @param [int] $elecCooker        [quantity]
     * @param [int] $motoBike          [quantity]
     * @param [int] $farmMachine       [quantity]
     * @param [int] $car               [quantity]
     * @param [string] $vehicleComment [free text about the family's vehicles]
     * @param [int] $cow               [quantity]
     * @param [int] $buffalo           [quantity]
     * @param [int] $pig               [quantity]
     * @param [string] $animalCmt      [free text about the family's animals]
     * @param [int] $farmSize          [number of square meters]
     * @param [string] $farmCmt        [free text about the family's farm]
     * @param [int] $sumQuantity5      [sum of all quantities counting as coef 5 multiplied by 5]
     * @param [int] $sumQuantity3      [sum of all quantities counting as coef 3 multiplied by 3]
     * @param [int] $globalAsset       [total home assets score]
     * @param [string] $certificate    [whether the family has a poverty certificate:yes or no]
     * @param [int] $specifyLevel      [level of the povertty certificate]
     */
    function addHomeAssets($candidateID,$refrigerator=null,$radio=null,$airCon=null,$riceCooker=null,$lcdTV=null,$colorTV=null,$chComputer=null,$exComputer=null,$fCabinet=null,$dvd=null,$smartPhone=null,$phone=null,$cheapCam=null,$expenCam=null,$cheapSofa=null,$exSofa=null,$gasCooker=null,$fruitBlender=null,$elecCooker=null,$motoBike=null,$farmMachine=null,$car=null,$vehicleComment=null,$cow=null,$buffalo=null,$pig=null,$animalCmt=null,$farmSize=null,$farmCmt=null,$sumQuantity5=null,$sumQuantity3=null,$globalAsset=null,$certificate=null,$specifyLevel=null)
    {
        $data = array(
            'h_refrigerator' => $refrigerator,
            'h_air_condictioner' => $airCon,
            'h_lcd_tv' => $lcdTV,
            'h_computer_big_100' => $exComputer,
            'h_furnished_big_300' => $fCabinet,
            'h_smartphone_big_100' => $smartPhone,
            'h_camera_big_100' => $expenCam,
            'h_sofa_big_300' => $exSofa,
            'h_motobike_big_500' => $motoBike,
            'h_farming_machine' => $farmMachine,
            'h_car_truck' => $car,
            'h_cow' => $cow,
            'h_buffaloe' => $buffalo,
            'h_pig' => $pig,
            'h_farm_size' => $farmSize,
            'h_radio' => $radio,
            'h_rice_cooker' => $riceCooker,
            'h_color_tv' => $colorTV,
            'h_computer_smal_100' => $chComputer,
            'h_dvd_player' => $dvd,
            'h_phone_smal_100' => $phone,
            'h_camera_small_100' => $cheapCam,
            'h_sofa_smal_300' => $cheapSofa,
            'h_gascooker' => $gasCooker,
            'h_fruit_blender' => $fruitBlender,
            'h_electrical_cooker' => $elecCooker,
            'h_vehicles_comment' => $vehicleComment,
            'h_animals_comment' => $animalCmt,
            'h_farm_comment' => $farmCmt,
            'h_total_x5' => $sumQuantity5,
            'h_total_x3' => $sumQuantity3,
            'h_glbal_total' => $globalAsset,
            'h_poverty_certificate' => $certificate,
            'h_level' => $specifyLevel,
            'candidate_id' => $candidateID
        );
        $this->db->insert('home_assets',$data);
    }

    /**
     * [uHomeAssets description]
     * @param  see previous function addHomeAssets
     */
    public function uHomeAssets($candidateID,$refrigerator,$radio,$airCon,$riceCooker,$lcdTV,$colorTV,$chComputer,$exComputer,$fCabinet,$dvd,$smartPhone,$phone,$cheapCam,$expenCam,$cheapSofa,$exSofa,$gasCooker,$fruitBlender,$elecCooker,$motoBike,$farmMachine,$car,$vehicleComment,$cow,$buffalo,$pig,$animalCmt,$farmSize,$farmCmt,$sumQuantity5,$sumQuantity3,$globalAsset,$certificate,$specifyLevel) 
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
            'h_vehicles_comment' => $vehicleComment != "" ? $vehicleComment : null,
            'h_animals_comment' => $animalCmt != "" ? $animalCmt : null,
            'h_farm_comment' => $farmCmt != "" ? $farmCmt : null,
            'h_total_x5' => $sumQuantity5 != "" ? $sumQuantity5 : null,
            'h_total_x3' => $sumQuantity3 != "" ? $sumQuantity3 : null,
            'h_glbal_total' => $globalAsset != "" ? $globalAsset : null,
            'h_poverty_certificate' => $certificate != "" ? $certificate : null,
            'h_level' => $specifyLevel,
            'candidate_id' => $candidateID != "" ? $candidateID : null
        );
        $this->db->where('home_assets.candidate_id',$candidateID);
        $this->db->update('home_assets', $data );
    }

    /**
     * [getHomeAssets gets the home assets information of a specific candidate]
     * @param  [int] $id    [id of the specific candidate]
     * @return [object]     [result of the mysql query]
     */
    public function getHomeAssets($id) {
        $this->db->select('*');
        $this->db->from('home_assets AS h');
        $this->db->join('candidates AS c', 'c.candidate_id = h.candidate_id' );
        $this->db->where('c.candidate_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
}
?>
