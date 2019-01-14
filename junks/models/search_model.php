<?php

class Search_model extends Model {

    public function __construct() {
        parent::__construct();
    }
    function index(){ 
       
    }
    function loadspec() {
        $sql=  $this->db->select("SELECT DISTINCT spe_name FROM speciality_list");
        echo json_encode($sql);
    }
    function searchone() {
        $build1="SELECT COUNT(DISTINCT signup_tbl.id) AS number_result FROM signup_tbl , doc_profile, nur_profile, patient_tbl WHERE (doc_profile.uid=signup_tbl.id "
                . "OR signup_tbl.id=nur_profile.uid OR patient_tbl.uid=signup_tbl.id) ";
        $build2="";
        if (isset($_POST['funct1'])) {
            $lat=$_POST['lat'];$log=$_POST['long'];
            $build2.=" AND ((acos(sin(" . $lat . ") * sin(doc_profile.latitude) + cos(" . $lat . ") * cos(doc_profile.latitude) * cos(doc_profile.longitude - (" . $log . "))) * 6371 <=50)"
                    . " OR(acos(sin(" . $lat . ") * sin(nur_profile.latitude) + cos(" . $lat . ") * cos(nur_profile.latitude) * cos(nur_profile.longitude - (" . $log . "))) * 6371 <=50)"
                    . "OR(acos(sin(" . $lat . ") * sin(patient_tbl.latitude) + cos(" . $lat . ") * cos(patient_tbl.latitude) * cos(patient_tbl.longitude - (" . $log . "))) * 6371 <=50))";
        }
        if (isset($_POST['funct2'])) {
            $minage=$_POST['minage'];$maxage=$_POST['maxage'];
            $build2.=" OR((doc_profile.age BETWEEN '".$minage."' AND '".$maxage."')OR(nur_profile.age BETWEEN '".$minage."' AND '".$maxage."')OR"
                    . "(patient_tbl.age BETWEEN '".$minage."' AND '".$maxage."'))";
        }if (isset($_POST['funct3'])) {
            $gender=$_POST['gender'];
            $build2.=" OR ((nur_profile.gender = '".$gender."')OR (doc_profile.gender = '".$gender."') OR (patient_tbl.gender = '".$gender."'))";
        }if (isset($_POST['funct4'])) {
            $blood=$_POST['blood'];
            $build2.=" OR ((patient_tbl.bloodgroup = '".$blood."') OR (doc_profile.bloodgroup = '".$blood."') OR (nur_profile.bloodgroup = '".$blood."'))";
        }if (isset($_POST['funct5'])) {
             $gtype=$_POST['genotype'];
            $build2.=" OR ((patient_tbl.genotype = '".$gtype."') OR (doc_profile.genotype = '".$gtype."') OR (nur_profile.genotype = '".$gtype."'))";
        }if (isset($_POST['funct'])) {
             $spec=$_POST['spec'];
            $build2.=" OR ((doc_profile.speciality = '".$spec."') OR (nur_profile.speciality = '".$spec."'))";
        }
        $build1.=$build2;
        $sth=$this->db->select($build1);
//        echo $build1;
        echo json_encode($sth);
         return;
    }
   
   
}