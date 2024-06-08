<?php
global $urls;
global $type;
$fmt = new NumberFormatter( 'de_DE', NumberFormatter::CURRENCY );
 //$type = getAllOffres($urls[1] == "ventes" ? 1 : 0);
 //ALternative \\
 switch ($urls[1]) {
         case 'ventes':
             $type = 1;
             break;
         case 'locations':
             $type = 0;
             break;
         case 'allOffres':
             $type = 3;
             break;

         default:
              header("Location:index.php");
             break;
 }
// if ($urls[1]== "ventes") {
//     $type = 1;
// }elseif ($urls[1]=="locations") {
//     $type = 0;
// }elseif ($urls[1]=="allOffres") {
//     $type = 3;
// }else {
//     header("Location:index.php");
// }
$offres = getAllOffres($type);
?>
<nav>
    <div class="nav-wrapper teal darken">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li class=<?= $urls[1] == "allOffres" ? "active" : ""?> > <a href="?page=offres-allOffres">Voir Tout</a></li>
            <li class=<?= $urls[1] == "ventes" ? "active" : ""?> ><a href="?page=offres-ventes">A vendre</a></li>
            <li class=<?= $urls[1] == "locations" ? "active" : ""?> ><a href="?page=offres-locations">A louer</a></li>
        </ul>
    </div>
</nav>
<!-- Remplissage des colonne par du php -->
<?php foreach ($offres as $offre) { ?>
    <div class="col s6">
        <div class="card horizontal">
            <div class="card-image center-align">
                <div>
                    <img style="width: 400px;" src=<?= $offre->image ?>>
                </div>
                <div>
                    <h6 class="teal-text text-lighten-2  " href="#"><?= $fmt->formatCurrency($offre->prix, "XOF")."\n";  ?></h6>
                </div>
            </div>
            <div class="card-stacked">
                <div>
                    <h4 class="header"><?= $offre->model ?></h4>
                    <?php
                        if ($offre->vip==1) {
                            echo('<span class="material-icons amber-text" style="float: right;">
                            stars
                        </span>');
                        }
                    ?>
                </div>
                <div class="card-content">
                    <div class="chip teal lighten-2">
                        <?= $offre->marque ?>
                    </div>
                    <div class="chip">
                        <?php if ($offre->neuve == 1) {
                            echo ("Neuve");
                        } else {
                            echo ("Occasion");
                        } ?>
                    </div>
                    <div class="chip">
                        <?php if ($offre->garantie == 1) {
                            echo ("Garantie");
                        } else {
                            echo ("Non Garantie");
                        } ?>
                    </div>
                    <div class="chip green accent-3">
                        <?= $offre->kilometrage . " km" ?>
                    </div>
                    <div class="chip">
                        <?= "Année: " . $offre->year ?>
                    </div>
                    <div class="chip ">
                        <?= "Exterieur: " . $offre->couleur_externe ?>
                    </div>
                    <div class="chip">
                        <?= "Interieur: " . $offre->couleur_interne ?>
                    </div>
                    <div class="chip cyan accent-3">
                        <?= "Boite: " . $offre->boite_de_vitesse ?>
                    </div>
                    <div class="chip">
                        <?= $offre->nombre_de_portes . " portes" ?>
                    </div>
                    <div class="chip  light-blue lighten-1">
                        <?= "Carburant: " . $offre->energie ?>
                    </div>

                    <div class="card-action right-align">
                        <a href="">
                            <span class="material-icons teal-text">
                                more_horiz
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>