<?php
	

function getRealIP()
{

    if (isset($_SERVER["HTTP_CLIENT_IP"]))
    {
        return $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
        return $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
    {
        return $_SERVER["HTTP_X_FORWARDED"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
    {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    }
    elseif (isset($_SERVER["HTTP_FORWARDED"]))
    {
        return $_SERVER["HTTP_FORWARDED"];
    }
    else
    {
        return $_SERVER["REMOTE_ADDR"];
    }

}

function validarCaptcha(){
		if(isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"]){

		var_dump($_POST);
		$secret = "6LcKiswUAAAAACYHBgbUUsNMFqJiWP2dECJRVdBU";
		$ip = $_SERVER["REMOTE_ADDR"];
		$captcha = $_POST["g-recaptcha-response"];
		$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
		echo("<br>");
		echo("<br>");
		var_dump($result);
		$array = json_decode($result,TRUE);
		echo("<br>");
		echo("<br>");
		if($array["success"]){
			echo("ERES HUMANO");
		}else{
			header('Location: ../forms/inicio.html');
		}
		
	}else{
		?>
<script> alert ("Complete el captcha");</script>
<?php
		header('Location: ../forms/login.html');
	}
}


?>