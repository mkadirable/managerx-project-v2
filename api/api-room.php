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
    <script src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <!--<Script type="text/javascript">
      $(document).ready(function(){
       $('html,body').animate({scrollTop:99999999},800);
      });
  </Script> -->
    </head>
    <body>   
<?php
session_start();
$idroom=$_SESSION['idhost'];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.hakuna.live/v1/live-room/'.$idroom.'/participants',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"maxListLen":100}',
  CURLOPT_HTTPHEADER => array(
    'authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJoYWt1bmFJZCI6Im14ZnNnOWcyOHp0aG0yMiIsInN1YiI6IjEwODY0NTYzNzYwMzI1ODYwMTQ4MkBHT09HTEUiLCJjb3VudHJ5IjoiSUQiLCJleHBpcmVkIjoxNjI2NDI3NjEyNTg2LCJ0aW1lWm9uZUlkIjoiQXNpYVwvSmFrYXJ0YSIsInJvbGVzIjpbIlVTRVIiXSwiYXV0aGVudGljYXRpb25OZWVkZWQiOmZhbHNlLCJpc3MiOiJoYWt1bmEiLCJpc3N1ZWF0IjoxNjI2MzQxMjEyNTg2LCJpZCI6MzE2NjU2OCwicmVnaW9uIjoiU0VBIiwianRpIjoiNTI0YTFjZWYtNmE5OC00N2FiLTkwMTctNDhhOGQzMThhZmYzIn0.GrY8VmXNLrQrSKGNp7p5g_z-i0jkyM2tNQUjx7O-Eh0',
    'Content-Type: application/json',
    'Cookie: __cfruid=e1e54a93dee26c800da8e1aff46f81dbef28e811-1626377995'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$aw=json_decode($response);
$countparticipant=$aw->participants;
$count=count($countparticipant);
echo '<table border="0">';
echo "<tbody>";
for ($i=0; $i<$count; $i++){
    $nickname=$aw->participants[$i]->displayName;
    $photo=$aw->participants[$i]->profileImageUrl;
    $idaccout=$aw->participants[$i]->hakunaId;
    $platform=$aw->participants[$i]->platform;

    echo "<tr>";
    echo'<td rowspan="2"><img src="'.$photo.'" width="80px" height="80px"></td>';
    echo'<td><b>'.$nickname.'</b><br><font size="2" >'.$idaccout.' 📱 '.$platform.'</font></td>';
    echo'<td rowspan="2"></td>';
    echo'</tr>';
    echo'<tr>';
    echo'<td>&nbsp;</td>';
    echo'</tr>';
}
echo "</tbody>";
echo "</table>";
?>

    </body>