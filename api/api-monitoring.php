<?php
for ($k=1; $k<=4; $k++){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hakuna.live/v1/live-room/list/search/region?cursor='.$k.'&size=100',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im14ZnNnOWcyOHp0aG0yMiIsInN1YiI6IjEwODY0NTYzNzYwMzI1ODYwMTQ4MkBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI2NDI3NjEyNTg2LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI2MzQxMjEyNTg2LCJpZCI6MzE2NjU2OCwicmVnaW9uIjoiU0VBIiwianRpIjoiNTI0YTFjZWYtNmE5OC00N2FiLTkwMTctNDhhOGQzMThhZmYzIn0.GrY8VmXNLrQrSKGNp7p5g_z-i0jkyM2tNQUjx7O-Eh0',
    'content-type: application/json;charset=UTF-8',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
    'Cookie: __cfruid=3104c35ebff5fce5f2c75456b99fc1b1dce97efc-1624583014'
  ),
));

$response = curl_exec($curl);
curl_close($curl);

$aw=json_decode($response);


$totalid=$aw->rooms;
$totalroom=count($totalid);

for ($i=0; $i < $totalroom; $i++) { 
  $idrooom=$aw->rooms[$i]->roomId;
  $photo=$aw->rooms[$i]->publisherSlotStatus->publisherSlots[0]->participant->profileImageUrl;
  $idhknya=$aw->rooms[$i]->publisherSlotStatus->publisherSlots[0]->participant->hakunaId;
  $platform=$aw->rooms[$i]->publisherSlotStatus->publisherSlots[0]->participant->platform;
  $gender=$aw->rooms[$i]->publisherSlotStatus->publisherSlots[0]->participant->gender;
  $stars=$aw->rooms[$i]->publisherSlotStatus->publisherSlots[0]->participant->stars;
  $listeners=$aw->rooms[$i]->watching;
  $hostname=$aw->rooms[$i]->hostDisplayName;
  $rank=$i+1;
  if ($k==1){
    $rankz=$rank;
  }
  if ($k==2){
    $rankz=100+$rank;
  }
  if ($k==3){
    $rankz=200+$rank;
  }
  if ($k==4){
    $rankz=300+$rank;
  }
  echo '<a href="room-id.php?idroom='.$idrooom.'">';
  echo '<div class="row wish-item">';
  echo '<div class="col s12">';
  echo '<div class="wish-box">';
  echo '<div class="wi-img">';
  echo '<div class="wi-img-product">';
  echo '<img src="'.$photo.'" alt="product">';
  echo '</div>';
  echo '</div>';
  echo '<div class="wi-name">';
  echo '<div class="win-top">';
  echo '<div class="win-title">'.$rankz.'. '.$hostname.'</div>';
  echo '<div class="win-info"><font size="1">'.$idhknya.' | '.$idrooom.'</font></div>';
  echo '<div class="win-price"><font size="1">⭐'.$stars.' 👤 '.$listeners.' 👥 12 📱 '.$platform.'</font></div>';
  echo '</div>';
  echo '</div>';
  echo '</a>';
  echo '<div class="wi-remove">';
  echo '  <a href="#" onClick="takedown()"><i class="far fa-times-circle"></i></a>';
  echo '</div>';
  echo '<div class="clear"></div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  //echo "---------------------------------------------<br>";
  }
  if($totalroom<100){
    break;
  }
}
//echo $response;


//echo $response;
//echo '<td><a href="'.$photo.'" target="_blank"><img class="avatar border-gray" src="'.$photo.'"/></a>';
  