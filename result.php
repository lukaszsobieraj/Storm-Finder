<?php
require 'vendor\autoload.php';

ini_set("enable_dl", true);
$place = $_POST['place'];
$direction = $_POST['directionfield'];
$lightnings = $_POST['lightningsfield'];
$distance = $_POST['distancefield'];
$radius = intval($_POST['radiusfield']);
$period = intval($_POST['periodfield']);
$directionCheck = $_POST['direction'];
$lightningsCheck = $_POST['lightnings'];
$radiusCheck = $_POST['radius'];
$periodCheck = $_POST['period'];
$distanceCheck = $_POST['distance'];


$burzeDzisNet = new \KrzysiekPiasecki\BurzeDzisNet\BurzeDzisNet(
        new \KrzysiekPiasecki\BurzeDzisNet\Endpoint(
        'API KEY'
        )
);
$point = $burzeDzisNet->locate($place);
$storm = $burzeDzisNet->getStorm($point, $radius);
$direction = $storm->direction();
$lightnings = $storm->lightnings();
$distance = $storm->distance();
$period = $storm->period();
$alerts = $burzeDzisNet->getWeatherAlert($point);
$tornado = $alerts->getAlert('tornado');
$stormAlert = $alerts->getAlert('storm');
$heat = $alerts->getAlert('heat');
$frost = $alerts->getAlert('frost');
$wind = $alerts->getAlert('wind');
$precipitation = $alerts->getAlert('precipitation');
$directionInput = null;
$lightningsInput = null;
$periodInput = null;
$distanceInput = null;
$radiusInput = null;
$invisibleInput = "style='display:none'";

if($direction == null){
    $direction = 'no data ';
}
if($lightnings == null){
    $lightnings = 'no occured ';
}
if($distance == null){
    $distance = 'no data ';
}

if ($directionCheck != 'on') {
    $directionInput = "style='display:none'";
}
if ($lightningsCheck != 'on') {
    $lightningsInput = "style='display:none'";
}
if ($radiusCheck != 'on') {
    $radiusInput = "style='display:none'";
}
if ($periodCheck != 'on') {
    $periodInput = "style='display:none'";
}
if ($distanceCheck != 'on') {
    $distanceInput = "style='display:none'";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>See a results</title>
        <link rel="stylesheet"  href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet"  href="materialize/css/materialize.min.css"/>
        <link rel="stylesheet"  href="lukas.css"/>
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <table>
                <h2>Storm results for <? echo($place) ?></h2>
                <thead>
                    <tr>
                        <th data-field="direction" name="result-direction" <? echo $directionInput ?>>Direction</th>
                        <th data-field="distance" name="result-distance" <? echo $distanceInput ?>>Distance</th>
                        <th data-field="lightnings" name="result-lightnings" <? echo $lightningsInput ?>>Lightnings</th>
                        <th data-field="radius"  name="result-radius" <? echo $radiusInput ?>>Radius</th>
                        <th data-field="period"  name="result-period" <? echo $periodInput ?>>Period of time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-field="direction" name="result-direction" <? echo $directionInput ?>> <? echo($direction)?></td>
                        <td data-field="distance" name="result-distance" <? echo $distanceInput ?>> <? echo($distance)?></td>
                        <td data-field="lightnings" name="result-lightnings" <? echo $lightningsInput ?>> <? echo($lightnings)?></td>
                        <td data-field="radius"  name="result-radius" <? echo $radiusInput ?>> <? echo($radius)?></td>
                        <td data-field="period"  name="result-period" <? echo $periodInput ?>> <? echo($period)?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <a href="index.php" class="btn btn-default">Try another place</a>
            <script type="text/javascript" src="stormscript.js"></script>
            <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
        </div>
    </body>
</html>
