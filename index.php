<?php
    if(isset($_REQUEST['hub_challenge'])){
        $challenge=$_REQUEST['hub_challenge'];
        $token=$_REQUEST['hub_verify_token'];
    }

    if($token=="myCustomToken123"){
        echo $challenge;
    }
	
	$input=file_get_contents('php://input');
	var_dump($input);
?>

<html>
	
<head>
	<title>Test Tawk</title>
</head>
<body>
	<h1>Hello Tawk</h1>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a3d6558f4461b0b4ef8a449/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	</body>
	
