<?php
if((isset($_POST['call-name']))&&(isset($_POST['phone'])&&$_POST['phone']!="")){
  $ip = $_SERVER['REMOTE_ADDR'];
  $to = 'ivanigorolenyk@gmail.com';
  $subject = 'Запит на перезвон';
  $message = '
        <html>
            <head>
                <title>Call me back</title>
            </head>
            <body>
                <p><b>Имя:</b> '.$_POST['call-name'].';</p>
                <p><b>Телефон:</b> '.$_POST['phone'].';</p>
                <p><b>Сообщения:</b> '.$_POST['message'].';</p>
                <p><b>IP адрес отправителя:</b> '.$ip.';</p>
                <p><b>Странница отправки письма:</b> <a href="http://1551255.oleniuki.web.hosting-test.net/ajaxform-on-email/">
                Сайт с которого отправлено письомо</a> </p>
            </body>
        </html>';
  $headers  = "Content-type: text/html; charset=utf-8 \r\n";
  $headers .= "From: Site <info@mail.com>\r\n";
  mail($to, $subject, $message, $headers);

  echo json_encode(array('status' => 'success'));
} else {
  echo json_encode(array('status' => 'error'));
}

/*$ipAddress = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
}
echo $ipAddress;*/
?>
