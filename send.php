<?php
$subject = $_POST["form_subject"];
$message = "";
$tofile = $subject . ";";


//recaptcha
// если рекапча есть в форме, то посылаем запрос гуглу на проверку. Если что-то не так то не выполняем больше ничег ов этом скрипте
if (isset($_POST['g-recaptcha-response'])):
	$recaptcha = $_POST['g-recaptcha-response'];
	if(!empty($recaptcha)) :
		$secret = '6LeinmcUAAAAAMFhccNd24XniBp35DKJgTRN6By9';
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
		$curlData = curl_exec($curl);
		curl_close($curl);
		$curlData = json_decode($curlData, true);

		if(!$curlData['success']) :
			echo "fail recaptcha";
			die();
		endif;
	else :
		echo "empty recaptcha";
		die();
	endif;
endif;
//recaptcha


foreach ($_POST as $input_name => $input_val) {
	$input_val = htmlspecialchars(strip_tags(trim($input_val)));
	if ($input_name != "form_subject" && $input_name != "g-recaptcha-response" && $input_name != "user_policy") {
		if ( !strpos($input_name, '_label')){
			$input_label = $input_name . '_label';
			if (!empty($_POST[$input_label])) {
				$message .= $_POST[$input_label] . ": " . $input_val . "<br>";
			} else {
				$message .= $input_name . ": " . $input_val . "<br>";
			}
			$tofile .= $input_val . ";";
		}
	}
}

//запись в файл
$today = date("j.m.Y, G:i");
$tofile .= $today."\n";

$file = 'orders.csv';
$bom = "\xEF\xBB\xBF";
@file_put_contents($file, $bom . $tofile . file_get_contents($file));
//запись в файл конец

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('phpmailer.php');
require_once('phpmailer_exception.php');

$mail = new PHPMailer(true);

try {
	$mail->CharSet = 'utf-8';
	$mail->setFrom('no-reply@mail.ru', 'Имя От Кого');
	$mail->addAddress('andreiduffy@gmail.com');
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $message;

	//Обрабатываем файлы
	if (isset($_FILES)) { //если есть файлы в форме
		foreach ($_FILES as $file_item) {
			if (!is_array($file_item['error'])) { //проверяем множественное или нет поле файла
				if ($file_item['error'] == UPLOAD_ERR_OK) {
					$mail->addAttachment($file_item['tmp_name'],$file_item['name']);
				}
			} else {
				foreach ($file_item["error"] as $key => $error){
					if ($error == UPLOAD_ERR_OK) {
						$tmp_name = $file_item["tmp_name"][$key];
						$name = $file_item["name"][$key];
						$mail->addAttachment($tmp_name,$name);
					}
				}
			}
		}
	}
	//Обрабатываем файлы

	$mail->send();
	echo "Mail OK";
} catch (Exception $e) {
	echo "Mail FAIL: ".$e;
}
?>