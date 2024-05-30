<?php
require_once('./functions/main-functions.php');
//getAllOffres($db);
//printPHPError();
$page = null;



if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

$page = !$page ? "home" : $page;

$urls = explode("-", $page);
$page = $urls[0];

$allPages = scandir("pages/");

if (!in_array("$page.php", $allPages)) {
    $page = "404Error";
}

$functions_file = scandir("functions/");
if (in_array("$page.func.php", $functions_file)) {
    require_once("./functions/$page.func.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/materialize.css">
    <script src="./js/materialize.js"></script>
    <title>VSC</title>
</head>

<body>
    <?php require_once("./include/header.php"); ?>
    <div class="container">
        <?php require_once("./pages/$page.php"); ?>
    </div>
    <?php require_once("./include/footer.php"); ?>
</body>

</html>