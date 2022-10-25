<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST['userphone']);

$token = "5702009277:AAHw8693PfbmZ3k0q31o0_24Ozxx14T9A2E";
$chat_id = "-854278451";
$text = "";



$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($formData as $key => $value){
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if($sendToTelegram){
  echo "Success";
} else{
    echo "Error";
  }

