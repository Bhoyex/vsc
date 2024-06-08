<?php
function getAllOffres($type){
      global $db;
      if($type == 3){
         $req = $db->query("
         SELECT * FROM offres ORDER BY vip DESC
         ");
         $offres =[];
         while ($offre =$req->fetchObject()) {
            $offres[] = $offre;
         }
      }
      elseif ($type == 1) {
         $req = $db->query("
         SELECT * FROM offres WHERE type = $type ORDER BY vip DESC
         ");
         $offres =[];
         while ($offre =$req->fetchObject()) {
            $offres[] = $offre;
         }
      }elseif ($type == 0) {
         $req = $db->query("
         SELECT * FROM offres WHERE type = $type ORDER BY vip DESC
         ");
         $offres =[];
         while ($offre =$req->fetchObject()) {
            $offres[] = $offre;
         }
      }  
      
     return $offres;
}

