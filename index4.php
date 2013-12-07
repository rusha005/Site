<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Гостевая книга</title>
</head>
<body>
<table cellpadding="10">
<tr>
<td class="head" colspan="3"><h1><p align="center" ><em>Здесь вы можете оставить комментарий.</em></h1><br> </p></td>
</td>
</tr>
<tr>
<td class="left1" ></td>
<td class="center1">
</td>
<td class="right1"><a href="index3.html"> <em></em> </a></td>
</tr>
<tr>
<td class="left2" ></td>
<td>
<?php include("read.php"); ?>
<table width=100%  height=100%>
<br/>
<form name="data" action="add.php" method="post">
<tr> <td> Ваше имя:</td>
<td> <input name="data[0]" type="text" value=""></td>
</tr>
<tr><td>Введите e-mail:</td>
<td> <input name="data[1]" type="text" value=""> </td>
</tr>
<tr><td> Текст Вашего сообщения:</td>
<td> <textarea name="data[2]" rows=5 cols=20 wrap="off"></textarea> </td> </tr>
</table>
<br/><br>
<input type="submit" name="add" value="Добавить комментарий"> <br/>
</form>
</td>
<td class="right2" ></td>
</tr>
<tr>
<td class="left3" ></td>
<td class="center3"></td>
<td class="right3"></td>
</tr>
</body>
</html>
