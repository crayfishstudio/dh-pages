<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="modern.home@ukr.net";  // e-mail админа 
 
$date=date("d.m.y"); // число.месяц.год 
$time=date("H:i"); // часы:минуты:секунды 
  // На какую страничку переходит после отправки письма 
 
//---------------------------------------------------------------------- // 
 
// Принимаем данные с формы 
 
$name=$_POST['username'];
$phone=$_POST['userphone'];


// Проверяем валидность e-mail 
 


$msg=" 
Ім'я: $name
Телефон: $phone
"; 

 // Отправляем письмо админу  
mail("$adminemail", "$date $time Нова заявка з modernhome.com.ua", "$msg");  
 
// Выводим сообщение пользователю 
 
print "<script language='Javascript'><!-- 
function reload() {location.replace('https://modernhome.com.ua/popup.html')}; setTimeout('reload()', 0); 
//--></script>";  
exit; 
?>