<?php
// $offres = getAllOffres($urls[1] == "ventes" ? 1 : 0);
// ALternative \\
$type = $urls[1] == "ventes" ? 1 : 0;
$offres = getAllOffres($type);
?>

<!-- Remplissage des colonne par du php -->
<?php foreach ($offres as $offre) { ?>
    <div class="col s4">
        <div class="card horizontal">
            <div class="card-image">
                <img src=<?= $offre->image ?>>
            </div>
            <div class="card-stacked">
                <h4 class="header"><?= $offre->model ?></h4>
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
                    <?= $offre->kilometrage." km" ?>
                    </div>
                    <div class="chip">
                    <?= "Année: ".$offre->year ?>
                    </div>
                    <div class="chip ">
                    <?= "Exterieur: ".$offre->couleur_externe ?>
                    </div>
                    <div class="chip">
                    <?= "Interieur: ".$offre->couleur_interne ?>
                    </div>
                    <div class="chip cyan accent-3">
                    <?= "Boite: ".$offre->boite_de_vitesse ?>
                    </div>
                    <div class="chip">
                    <?= $offre->nombre_de_portes." portes"?>
                    </div>
                    <div class="chip  light-blue lighten-1">
                    <?= "Carburant: ".$offre->energie ?>
                    </div>
                    <div class="card-action">
                        <a class="teal-text text-lighten-2 " href="#"><b><?= $offre->prix ?> CFA</b></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>