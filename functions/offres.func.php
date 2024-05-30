<?php
function getAllOffres($type){
    global $db;
    $req = $db->query("
     SELECT * FROM offres WHERE type = $type
     ");
     $offres =[];
     while ($offre =$req->fetchObject()) {
        $offres[] = $offre;
     }
     return $offres;
}
// function getAllLocations(){
//     global $db;
//     $req = $db->query("
//      SELECT * FROM offres WHERE type = 0
//      ");
//      $offres =[];
//      while ($offre =$req->fetchObject()) {
//         $offres[] = $offre;
//      }
//      return $offres;
// }