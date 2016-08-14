<html>
<head>

	<style> 
body {
			font-family: GreatVibes-Regular;
			font-size: 2em;
			background-color: #D8BFD8;		
		}
		@font-face {
			font-family: GreatVibes-Regular;
			src: url(GreatVibes-Regular.otf);
		}		

		p {text-align: center;}
		#gallery {
			width: 80%;

			height: 80%;
			margin-left: 10%;
			text-align: center;
			
		}
		img {
			border: solid 1px white;
			width: 150px;
			height: 180px;
			display: inline-block;

			-moz-transition: all 1s ease-out;
			-o-transition: all 1s ease-out;
			-webkit-transition: all 1s ease-out;	
		}
		img:hover {
			-webkit-transform: scale(1.3);
			-moz-transform: scale(1.3);
                        -o-transform: scale(1.3);		
		}
	</style>
</head>

<body>
<?php

   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
   //echo $msg . "\n";

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

//echo $user_ip; // Output IP address [Ex: 177.87.193.134]

$txt = $user_ip;

$str = " ip " . $txt . "\n";

mail("redhood@i.ua","My subject",$str);

?>

	<p>my doggy &#9748; mein hund</p>
        <p>&#9733; &#9733; &#9733;</p>

	<div id = "gallery"> 
		<img src="/dogs/pic1.jpg" alt="Smiley face">
		<img src="/dogs/pic2.jpg" alt="Smiley face">
		<img src="/dogs/pic3.jpg" alt="Smiley face">
		<img src="/dogs/pic4.jpg" alt="Smiley face">
		<img src="/dogs/pic5.jpg" alt="Smiley face">
		<img src="/dogs/pic6.jpg" alt="Smiley face">
		<img src="/dogs/pic7.jpg" alt="Smiley face">
		<img src="/dogs/pic9.jpg" alt="Smiley face">
		<img src="/dogs/pic10.jpg" alt="Smiley face">	
		<img src="/dogs/pic11.jpg" alt="Smiley face">
                <img src="/dogs/pic12.jpg" alt="Smiley face">	
		<img src="/dogs/pic13.jpg" alt="Smiley face">	
		<img src="/dogs/pic14.jpg" alt="Smiley face">	
		<img src="/dogs/pic15.jpg" alt="Smiley face">	
		<img src="/dogs/pic16.jpg" alt="Smiley face">	
		<img src="/dogs/pic17.jpg" alt="Smiley face">	
		<img src="/dogs/pic18.jpg" alt="Smiley face">	
		<img src="/dogs/pic19.jpg" alt="Smiley face">		
	</div>
</body>
</html>				
