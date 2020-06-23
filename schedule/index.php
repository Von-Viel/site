<?php
date_default_timezone_set("UTC");
include '../header.php';
include 'apikey.php';

if (empty($apikey)) {
    die("missing api key");
}
$context = stream_context_create([
    "http" => [
        "method" => "GET",
        "header" => "X-API-Key: $apikey\r\n"
    ]
]);

$wk_begin = date("Y-m-d\TH:i:s\Z", strtotime("last sunday"));
$wk_end   = date("Y-m-d\TH:i:s\Z", strtotime("next sunday"));

$schedule = json_decode(
    file_get_contents(
        "https://radio.tildeverse.org/api/station/1/streamers/schedule?start=$wk_begin&end=$wk_end&timeZone=UTC",
        false,
        $context
    ),
    true
);

usort($schedule, function ($a, $b) {
    return $a["start"] < $b["start"] ? -1 : 1;
});

function formatdate($date) {
    return date("D M d H:i", strtotime($date));
}
?>

<h1><a href="https://tilderadio.org"><img style="width:75px;" src="../logos/tilderadio-green.png">tilderadio.org</a></h1>
<h4>upcoming broadcasts</h4>
<p>all times in UTC. current time is <?=formatdate("now")?>.</p>

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
            <td><?=$item["title"]?></td>
            <td><?=formatdate($item["start"])?> - <?=formatdate($item["end"])?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include '../footer.php'; ?>
