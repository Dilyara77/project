<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 18.06.2018
 * Time: 14:35
 */
<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 18.06.2018
 * Time: 8:53
 */
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message=$_POST['message'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);
$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$comment = urldecode($comment);
$name = trim($name);
$email = trim($email);
$phone = trim($phone);
/**echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $message; **/

if (mail("ametbekirov2018@gmail.com", "Комментарий с сайта", "Name".$name."Email".$email."Phone: ".$phone."Message:".$message ,"From: bekirova.d.zi14@gmail.com \r\n"))
{     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>;