<?php
if((isset($_POST['call-name']))&&(isset($_POST['phone'])&&$_POST['phone']!="")){
  $to = 'ivanigorolenyk@gmail.com';
  $subject = 'Запит на перезвон';
  $message = '
        <html>
            <head>
                <title>Call me back</title>
            </head>
            <body>
                <p><b>Имя:</b> '.$_POST['call-name'].'</p>
                <p><b>Телефон:</b> '.$_POST['phone'].'</p>
                <p><b>Сообщения:</b> '.$_POST['message'].'</p>
            </body>
        </html>';
  $headers  = "Content-type: text/html; charset=utf-8 \r\n";
  $headers .= "From: Site <info@mail.com>\r\n";
  mail($to, $subject, $message, $headers);

  echo json_encode(array('status' => 'success'));
} else {
  echo json_encode(array('status' => 'error'));
}
?>
