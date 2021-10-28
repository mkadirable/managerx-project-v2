<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hakuna.live/v1/live-room/list/search/region?cursor=&size=3',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im14ZnNnOWcyOHp0aG0yMiIsInN1YiI6IjEwODY0NTYzNzYwMzI1ODYwMTQ4MkBHT09HTEUiLCJjb3VudHJ5IjoiWFgiLCJleHBpcmVkIjoxNjI1OTAyMTM0OTAyLCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI1ODE1NzM0OTAyLCJpZCI6MzE2NjU2OCwicmVnaW9uIjoiU0VBIiwianRpIjoiZGM4YWM4NjMtYzQxNC00ZjNkLThlYTYtNjMyZGExYzM4ZmFhIn0.ZQlsnvK0oWs_6YHo2eCKxZ6OsAgqrRj5dcULq6S_LYA',
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

  echo '<div class="news-item">';
  echo '<div class="news-tem-image">';
  echo '<img src="'.$photo.'">';
  echo '</div>';
  echo '<div class="news-item-info">';
  echo '<div class="list-news-title">'.$hostname.'</div>';
  echo "⭐ $stars 👤 $listeners 📱 $platform";
  echo '</div>';
  echo '</div>';
  //echo "---------------------------------------------<br>";
  }
//echo $response;


//echo $response;
//echo '<td><a href="'.$photo.'" target="_blank"><img class="avatar border-gray" src="'.$photo.'"/></a>';
  