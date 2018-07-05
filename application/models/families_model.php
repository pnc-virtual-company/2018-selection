<?php

/**
 * This model contains the add, update and get functions for the table `families`
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
     * [addFamilyProfile add a new row in the table `families` with the specific id $candidateID]
     * @param [int] $candidateID 
     * @param [int] $f_age          [father's age]
     * @param string $fOccupation   [father's occupation]
     * @param string $fOccupSpecify [father's occupation if not in the proposed list]
     * @param string $fHealth       [father's health]
     * @param string $fHealthSpec   [father's health comment if not healthy]
     * @param [int] $fEdu           [father's education]
     * @param [int] $mAge           [mother's age]
     * @param string $mOccupation   [mother's occupation]
     * @param string $mOccupSpecify [mother's occupation if not in the proposed list]
     * @param string $mhealth       [mother's health]
     * @param string $mHealthSpec   [mother's health comment if not healthy]
     * @param [int] $mEdu           [mother's education]
     * @param [int] $numSiblings    [candidate's siblings number]
     * @param [int] $married        [candidate's married siblings]
     * @param [int] $separated      [candidate's separated siblings]
     * @param [int] $liveInHouse    [number of people living in the family's house]
     * @param [int] $studentRank    [student's rank in his/ her family]
     */
    public function addFamilyProfile($candidateID,$fAge=null,$fOccupation='',$fOccupSpecify='',$fHealth='',$fHealthSpec='',$fEdu='-1',$mAge=null,$mOccupation='',$mOccupSpecify='',$mhealth='',$mHealthSpec='',$mEdu='-1',$numSiblings='-1',$married='-1',$separated='-1',$liveInHouse='',$studentRank='')
    {
        $data = array(
            'f_age' => $fAge == "" ? null : $fAge,
            'f_occupation' => $fOccupation,
            'f_health' => $fHealth,
            'f_edu' => $fEdu == "" ? -1 : $fEdu,
            'm_age' => $mAge == "" ? null : $mAge,
            'm_occupation' => $mOccupation,
            'm_health' => $mhealth,
            'm_edu' => $mEdu == "" ? -1 : $mEdu,
            'number_sibbling' => $numSiblings  == "" ? -1 : $numSiblings,
            'number_maried' => $married  == "" ? -1 : $married,
            'number_separated' => $separated  == "" ? -1 : $separated,
            'number_family_living' => $liveInHouse,
            'stu_rank' => $studentRank,
            'f_occupation_comment' => $fOccupSpecify,
            'm_occupation_comment' => $mOccupSpecify,
            'f_health_comment' => $fHealthSpec,
            'm_health_comment' => $mHealthSpec,
            'candidate_id' => $candidateID
        );
        $insert = $this->db->insert('families',$data);
    }

    /**
     * [uFamilyProfile updates a specific candidate's family profile information]
     * @param see previous function addFamilyProfile
     */
    public function uFamilyProfile($candidateID,$fAge=null,$fOccupation='',$fOccupSpecify='',$fHealth='',$fHealthSpec='',$fEdu='-1',$mAge=null,$mOccupation='',$mOccupSpecify='',$mhealth='',$mHealthSpec='',$mEdu='-1',$numSiblings='-1',$married='-1',$separated='-1',$liveInHouse='',$studentRank='')
    {
        $data = array(
            'f_age' => $fAge == "" ? null : $fAge,
            'f_occupation' => $fOccupation,
            'f_health' => $fHealth,
            'f_edu' => $fEdu == "" ? -1 : $fEdu,
            'm_age' => $mAge == "" ? null : $mAge,
            'm_occupation' => $mOccupation,
            'm_health' => $mhealth,
            'm_edu' => $mEdu == "" ? -1 : $mEdu,
            'number_sibbling' => $numSiblings  == "" ? -1 : $numSiblings,
            'number_maried' => $married  == "" ? -1 : $married,
            'number_separated' => $separated  == "" ? -1 : $separated,
            'number_family_living' => $liveInHouse,
            'stu_rank' => $studentRank,
            'f_occupation_comment' => $fOccupSpecify,
            'm_occupation_comment' => $mOccupSpecify,
            'f_health_comment' => $fHealthSpec,
            'm_health_comment' => $mHealthSpec,
            'candidate_id' => $candidateID
        );
        $this->db->where('families.candidate_id',$candidateID);
        $this->db->update('families',$data);
    }

        /**
     * [getFamilyProfile gets family profile information of a specific candidate]
     * @param  [int] $id [of the specific candidate]
     * @return [object]  [result of the query]
     */
    public function getFamilyProfile($id) {
        $this->db->select('*');
        $this->db->from('families AS par');
        $this->db->join('candidates AS c', 'c.candidate_id = par.candidate_id' ); //tbl family join with tbl candidate
        $this->db->where('c.candidate_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
}
?>
