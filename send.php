<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$name = urldecode($name);
$phone = urldecode($phone);
$email = urldecode($email);
$name = trim($name);
$phone = trim($phone);
$email = trim($email);
echo $name;
echo "<br>";
echo $email;
if (mail("denisbanana@mail.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email ,"From: info@retargpro.github.io \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
