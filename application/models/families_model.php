<?php

/**
 * This model contains ...
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       
 * @since      
 */

class Families_model extends CI_Model{

    /**
     * Default constructor
     */
    public function __construct() 
    {
    }

    /**
     * Get family information of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getFamilyProfile($id) {
        $this->db->select('*');
        $this->db->from('families AS par');
        $this->db->join('candidates AS c', 'c.candidate_id = par.candidate_id' ); //tbl family join with tbl candidate
        $this->db->where('c.candidate_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    /**
     * Add data to family profile
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function addFamilyProfile($fAge,$fOccupation,$fSpecify,$fHealth,$fHealthSpec,$fEdu,$mAge,
      $mOccu,$mSpecify,$mhealthStatus,$mHealthSpec,$mEdu,$numSiblings,$marriedStatus,$separated,$numFamily,$studentRank,$candidateID)
    {
        $data = array(
            'f_age' => $fAge != "" ? $fAge : null,
            'f_occupation' => $fOccupation != "" ? $fOccupation : null,
            'f_health' => $fHealth != "" ? $fHealth : null,
            'f_edu' => $fEdu != "" ? $fEdu : null,
            'm_age' => $mAge != "" ? $mAge : null,
            'm_occupation' => $mOccu != "" ? $mOccu : null,
            'm_health' => $mhealthStatus != "" ? $mhealthStatus : null,
            'm_edu' => $mEdu != "" ? $mEdu : null,
            'number_sibbling' => $numSiblings != "" ? $numSiblings : null,
            'number_maried' => $marriedStatus != "" ? $marriedStatus : null,
            'number_separated' => $separated != "" ? $separated : null,
            'number_family_living' => $numFamily != "" ? $numFamily : null,
            'stu_rank' => $studentRank != "" ? $studentRank : null,
            'f_occupation_comment' => $fSpecify != "" ? $fSpecify : null,
            'm_occupation_comment' => $mSpecify != "" ? $mSpecify : null,
            'f_health_comment' => $fHealthSpec != "" ? $fHealthSpec : null,
            'm_health_comment' => $mHealthSpec != "" ? $mHealthSpec : null,
            'candidate_id' => $candidateID != "" ? $candidateID : null
        );
        $this->db->select('*');
        $this->db->from('families');
        $this->db->where('candidate_id',$candidateID);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
          $this->db->where('candidate_id',$candidateID);
          $this->db->update('families',$data);
        } else {
          $insert = $this->db->insert('families',$data);
        }

        if ($this->db->affected_rows() > 0) {
           return true;
        } else {
            return false;
        }
    }

    /**
     * Update family information of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function uFamilyProfile($id,$fAge,$fOccupation,$fotherOccupationSpecify,$fHealth,$fatherhealthIssues,$fEducation,$mAge,$mOccupation,$mOccupationSpecify,$mhealth,$mhealthSpecify,$mEducation,$siblings,$Married,$Separated,$liveInHouse,$sRank)
    {
        $data = array(
            'f_age' => $fAge,
            'f_occupation' => $fOccupation,
            'f_health' => $fHealth,
            'f_edu' => $fEducation,
            'm_age' => $mAge,
            'm_occupation' => $mOccupation,
            'm_health' => $mhealth,
            'm_edu' => $mEducation,
            'number_sibbling' => $siblings,
            'number_maried' => $Married,
            'number_separated' => $Separated,
            'number_family_living' => $liveInHouse,
            'stu_rank' => $sRank,
            'f_occupation_comment' => $fotherOccupationSpecify,
            'm_occupation_comment' => $mOccupationSpecify,
            'f_health_comment' => $fatherhealthIssues,
            'm_health_comment' => $mhealthSpecify,
            'candidate_id' => $id
        );
        $this->db->where('families.candidate_id',$id);
        $this->db->update('families',$data);
    }

}
?>
