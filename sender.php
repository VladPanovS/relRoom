<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$massagetype = $_POST['massagetype'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$massagetype = htmlspecialchars($massagetype);
$name = urldecode($name);
$phone = urldecode($phone);
$massagetype = urldecode($massagetype);
$name = trim($name);
$phone = trim($phone);
$massagetype = trim($massagetype);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("Chugaaa@gmail.com", "Заявка с сайта", "ФИО:".$name.". Телефон: ".$phone." Тип заказа: ".$massagetype." \r\n"))
 {     echo "<html> <head> <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
   <link rel=\"stylesheet\" type=\"text/css\" href=\"css/all.css\">
   </head>
    <title=\"relaxRoom - Cпасибо за заявку\"><body><p class=\"section-title\">
    Cообщение успешно отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.</p></body></html>";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
<!--Redirect to main-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://voop-demo.space/");}
window.setTimeout("changeurl();",4000);

</script>
