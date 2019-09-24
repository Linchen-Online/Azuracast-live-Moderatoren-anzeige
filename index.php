<?php 

$station = "xx"; //ID Der Station bei Azuracast
$json_station = file_get_contents("https://domain-zu-azuracast.endung/api/nowplaying/".$station);
$obj_station = json_decode($json_station);
$live = $obj_station->live->streamer_name;
$pls = $obj_station->now_playing->playlist;
?>

<img src="//link-zur-den-bildern-die-angezeigt-werden.sollen/<?php if(empty($live)) {echo $pls;}else{echo $live;}
;?>.png" alt="<?php if(empty($live)) {echo $pls;}else{echo $live;}
?>" style="width:350px; height:auto;"><br>

