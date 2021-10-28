<html>
    <!DOCTYPE html>
    <html lang="en">
    
    <!-- Mirrored from uidevr.com/tf/asiapp/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 20:22:32 GMT -->
    <head>
    <meta charset="UTF-8">
    <title>ManagerX - Hakuna</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS  -->
    <link rel="stylesheet" href="../lib/font-awesome/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- materialize icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="../lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../lib/owlcarousel/assets/owl.theme.default.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="../lib/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../lib/slick/slick/slick-theme.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="../lib/Magnific-Popup-master/dist/magnific-popup.css">
  
    </head>
    <body>   
<div id="result-track">
<?php
//echo "ID HAKUNA TARGET: ";
//$idhk=trim(fgets(STDIN));
$idhk=$_POST['idhakuna'];
//echo "ID HAKUNA TARGET: ";
//$idhk=trim(fgets(STDIN));

ob_start();
for ($k=1; $k<4; $k++){
//--------------------------------------------------//
//-----------------TOTAL ROOMS LISTENERS------------------//
$curls = curl_init();
curl_setopt_array($curls, array(
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
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im9sOHpkMHhscGo1MzQyMiIsInN1YiI6IjExNjUxODA0ODUxMzk4NTYwMDg5NkBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI2MDM3NjI4MDE4LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI1OTUxMjI4MDE4LCJpZCI6MTY1NjkxNDAsInJlZ2lvbiI6IlNFQSIsImp0aSI6IjFiOTg1MDM3LWQ3ZDQtNDE3Yy1hZjcxLWY3YjFjYTg2ZDBkOCJ9.MG9JkgsSF33f9JgRNjJnz-7KTb52Prki4pZp6wG35vE',
    'content-type: application/json;charset=UTF-8',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
    'Cookie: __cfruid=3104c35ebff5fce5f2c75456b99fc1b1dce97efc-1624583014'
  ),
));

$responses = curl_exec($curls);
curl_close($curls);
$aws=json_decode($responses);
$totalid=$aws->rooms;
$aneh=count($totalid);
for ($i=0; $i < $aneh; $i++) { 
  $idrooom=$aws->rooms[$i]->roomId;
  $host=$aws->rooms[$i]->hostDisplayName;
  $hostroom= array (
      "$host"
    );
  $idid= array (
    "$idrooom"
  );
foreach ($idid as $diro) {
  //echo "idroom : $diro \n";
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.hakuna.live/v1/live-room/'.$diro.'/participants',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"maxListLen":100}',
    CURLOPT_HTTPHEADER => array(
      'content-type: application/json;charset=UTF-8',
      'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
      'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im9sOHpkMHhscGo1MzQyMiIsInN1YiI6IjExNjUxODA0ODUxMzk4NTYwMDg5NkBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI2MDM3NjI4MDE4LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI1OTUxMjI4MDE4LCJpZCI6MTY1NjkxNDAsInJlZ2lvbiI6IlNFQSIsImp0aSI6IjFiOTg1MDM3LWQ3ZDQtNDE3Yy1hZjcxLWY3YjFjYTg2ZDBkOCJ9.MG9JkgsSF33f9JgRNjJnz-7KTb52Prki4pZp6wG35vE',
      'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
      'Cookie: __cfruid=9b368df351839b63235320128f44b4646e78ee43-1625344656'
    ),
  ));
  
  $response = curl_exec($curl);
  $aw=json_decode($response);
  $jumlah=count($aw->participants);
  $rank=($i+1);
 
 
  //echo "jumlah : $jumlah \n";
  //echo "listeners: $listeners \n";
  echo "Checking at server $k on rank room $rank  <br>";
  flush();
  ob_flush();
  //echo "-----------------------------------";
  //echo "\n";
  for ($j=0; $j<=($jumlah-1); $j++){
    $nickname=$aw->participants[$j]->displayName;
    $idacc=$aw->participants[$j]->hakunaId;
    if ($idacc==$idhk){
      if ($k==1){
        $rankz=$rank;
      }
      if ($k==2){
        $rankz=200+$rank;
      }
      if ($k==3){
        $rankz=300+$rank;
      }
    echo '<hr color="#303030">';
    //echo "Target             : $nickname <br>";
    //echo "ID Account         : $idacc <br>";
    //echo "Berada di : <br>";
    //echo "Server             : $k <br>";
    //echo "Rank Room          : $rankz  <br>";
    //echo "Room ID            : $diro <br>";
    //echo "Host Name          : $host <br>";
    //echo "Listeners          : $jumlah <br>";
    echo '<table border="0">';
    echo "<tbody>";
    echo "<tr>";
    echo '<td colspan="2"><font color="white">Result :</font></td>';
    echo "</tr>";
    echo "<tr>";
    echo "<td>Target</td>";
    echo "<td>$nickname</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>ID Account</td>";
    echo "<td>$idacc</td>";
    echo "</tr>";
    echo "<tr>";
    echo '<td colspan="2"><font color="white">Berada di :</font></td>';
    echo "</tr>";
    echo "<tr>";
    echo "<td>Server</td>";
    echo "<td>$k</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Rank Room</td>";
    echo "<td>$rankz</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Room ID</td>";
    echo "<td>$diro</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Host Name</td>";
    echo "<td>$host</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>listeners</td>";
    echo "<td>$jumlah</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    break;



  } 
    //$dataroom= array (
      //"SERVER    : $k \n",
      //"ROOMID    : $diro \n",
      //"NOMOR     : $j \n",
      //"JUMLAH    : $jumlah \n",
      //"NICKNAME  : $nickname \n",
      //"ID HAKUNA : $idacc \n",
      //"jumlahdiro: $jumlahdiro \n",
      //"-----------------------------------",
      //"\n"
    //);
    //foreach ($dataroom as $datar) {
     // echo $dataroom;
    //}
  }

}
if ($idacc==$idhk){
  break;
  }
  

} 
if ($idacc==$idhk){
  break;
  }
if ($aneh<100){
    break;
  }
}//endfor first
if ($idacc!==$idhk){
  echo '<hr color="#303030">';
  echo "Result : <br>";
  echo "User tidak ditemukan ";
}
?> 
</div>
</body>
</html>