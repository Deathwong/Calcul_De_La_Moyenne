<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$noteMath = "";
$coefMath = "";
$noteInfo = "";
$coefInfo = "";
$coefFrancais = "";
$noteFrancais = "";

if (empty($_POST["noteMath"])) {
    $noteMathErr = "la note de math est requise";
} else {
    $noteMath = handleEmptyInput($_POST["noteMath"]);
}

if (empty($_POST["coefMath"])) {
    $coefMathErr = "le coef de math est requis";
} else {
    $coefMath = handleEmptyInput($_POST["noteMath"]);
}

if (empty($_POST["noteInfo"])) {
    $noteInfoErr = "la note de math est requise";
} else {
    $noteInfo = handleEmptyInput($_POST["noteInfo"]);
}

if (empty($_POST["coefInfo"])) {
    $coefInfoErr = "la note de math est requise";
} else {
    $coefInfo = handleEmptyInput($_POST["coefInfo"]);
}

if (empty($_POST["noteFrancais"])) {
    $noteFrancaisErr = "la note de math est requise";
} else {
    $noteFrancais = handleEmptyInput($_POST["noteFrancais"]);
}

if (empty($_POST["coefFrancais"])) {
    $coefFrancaisErr = "la note de math est requise";
} else {
    $coefFrancais = handleEmptyInput($_POST["coefFrancais"]);
}

$noteTotalMath = (int)$noteMath * (int)$coefMath;

$noteTotalInfo = (int)$noteInfo * (int)$coefInfo;
;
$noteTotalFrancais = (int)$noteFrancais * (int)$coefFrancais;

$pointsTotal = $noteTotalMath + $noteTotalInfo + $noteTotalFrancais;
$coefTotal = $coefFrancais + $coefInfo + $coefMath;
$total = $coefTotal * 20;
$moyenne = $pointsTotal / $coefTotal;

function admission($moyenne)
{
    if ($moyenne >= 10) {
        echo("Admis");
    } else {
        echo("refusé");
    }
}

function handleEmptyInput($saisie): int
{

    if (empty($saisie)) {
        $saisie = 0;
    }
    return $saisie;
}

?>

<table class="tableMoyenne">
    <caption>Notes obtenues à l' examen :</caption>

    <tr>
        <td>Matière</td>
        <td>Coef</td>
        <td>Note/20</td>
        <td>Sous-total</td>
    </tr>

    <tr>
        <td class="contourCellule">Math</td>
        <td class="contourCellule"><?php echo $noteMath ?></td>
        <td class="contourCellule"><?php echo $noteMath ?> /20</td>
        <td class="contourCellule"><?php echo $noteTotalMath ?></td>
    </tr>
    <tr>
        <td class="contourCellule">Info</td>
        <td class="contourCellule"><?php echo $coefInfo ?></td>
        <td class="contourCellule"><?php echo $noteInfo ?> /20</td>
        <td class="contourCellule"><?php echo $noteTotalInfo ?></td>
    </tr>

    <tr>
        <td class="contourCellule">Français</td>
        <td class="contourCellule"><?php echo $coefFrancais ?></td>
        <td class="contourCellule"><?php echo $noteFrancais ?> /20</td>
        <td class="contourCellule"><?php echo $noteTotalFrancais ?></td>
    </tr>
    <tr>
        <td class="contourCellule">Total points : <?php echo "$pointsTotal sur $total" ?></td>
        <td class="contourCellule">moyenne : <?php echo $moyenne ?></td>
        <td class="contourCellule" colspan="2"><?php admission($moyenne); ?></td>
    </tr>

</table>

</body>