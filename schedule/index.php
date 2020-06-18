<?php
include '../header.php';
$schedule = json_decode(file_get_contents("https://radio.tildeverse.org/api/station/1/schedule?rows=1000&now=last%20monday"), true);

date_default_timezone_set("UTC");
function formatdate($date) {
    return date("D H:i", strtotime($date));
}
?>

<h1><a href="https://tilderadio.org"><img style="width:75px;" src="../logos/tilderadio-green.png">tilderadio.org</a></h1>
<h4>upcoming broadcasts</h4>
<p>all times in UTC</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th>dj</th>
            <th>time</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($schedule as $item): ?>
        <tr>
            <td><?=$item["name"]?></td>
            <td><?=formatdate($item["start"])?> - <?=formatdate($item["end"])?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include '../footer.php'; ?>
