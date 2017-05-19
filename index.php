<?php

	require "php-uk/textlocal.class.php";

	if (isset($_POST['uye_ol']) === true && empty($_POST['uye_ol']) === false) {

		$phone = "+905315426368";

		$code = substr(str_shuffle("1234567890"), 0, 6);
		    
        $tl = new Textlocal("fatihtutar93@gmail.com", "67bfdc4c8deca2a66cc37e4be55857b70549c10748714c6b39a445dfe942aa1b");

        $sendSms = $tl->sendSms([$phone], "Onay Kodunuz: ".$code, "aktivasyon");

        if($sendSms->status == "success") {

            header("Location:sms.php?step=2&phone=".$phone);

        }else {

            echo "SMS Gönderilirken Bir Sorun Oluştu";

        }

	}

?>

<!doctype html>

<html>
	 
	<head>

	</head>

	<body>

		<form action="" method="POST" class="form-horizontal">

			<button type="submit" name="uye_ol" value=" " class="btn btn-primary">Üye Ol</button>

		</form>		

	</body>

</html>