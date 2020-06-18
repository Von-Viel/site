<?php
include '../header.php';
$schedule = json_decode(file_get_contents("https://radio.tildeverse.org/api/station/1/schedule"), true);
?>

<h1><a href="https://tilderadio.org"><img style="width:75px;" src="../logos/tilderadio-green.png">tilderadio.org</a></h1>
<br>
<h4>upcoming broadcasts</h4>

<?php foreach ($schedule as $item): ?>
<p><?=$item["name"]?> - <?=$item["start"]?>-<?=$item["end"]?></p>
<?php endforeach; ?>

<?php include '../footer.php'; ?>
