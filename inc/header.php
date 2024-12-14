<?php include 'db.php' ?>
<?php include 'action.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Պատվիրիր ամենօրյա սնունդը</title>

<link rel="stylesheet" href="./css/style.css">
<link rel="icon"
href="./img/logo.png">
</head>

<body>
<div  class="header">
<div class="footer">
<img src="./img/logo.png"
 alt="" class="logo">

<ul class="page">
  <li><a href="login.php">Մուտք</a></li>
 <li> <a href="re.php">Գրանցվել</a></li>
 <li><button type="submit" class="btn" onclick="openMap()" >Քարտեզ</button></li>
 <div class="map" id="map">
<h2>Նշեք Ձեր հասցեն՝ <b>ԱՄԵՆԱԱՐԱԳ ԱՌԱՔՈՒՄ</b> առաջարկելու համար</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18578.317285899244!2d43.83082120621528!3d40.7794564367874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4041fbf52c9e0279%3A0x98282e1362957c91!2sTumo%20Gyumri!5e1!3m2!1sen!2sam!4v1706462715248!5m2!1sen!2sam" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<button class="ok" type="button" onclick="closeMap()" >Ok</button>
 </div>
 <li><a href="index.html">Հիմնական էջ</a></li>
  
 
