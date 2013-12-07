<?php
if (isset($_POST['login'])) {$login = $_POST['login']; if ($login == '') { unset($login);} }

if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

$pas=$_POST['p_word'];
if (empty($login) or empty($password)) 
{
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
if (($password)!=($pas))
{ 
exit ("Пароли не совпадают!Вернитесь назад и введите пароли ещё раз!");
}
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);


include ("bd.php"); 


$result = mysql_query("SELECT id FROM registration WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}

$result2 = mysql_query ("INSERT INTO registration (login,password) VALUES('$login','$password')");

if ($result2=='TRUE')
{
echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.html'>Главная страница</a>";
}
else {
echo "Ошибка! Вы не зарегистрированы.";
}
?>
