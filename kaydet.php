<?php 
if($_POST)
{
$ad=$_POST["ad"];
$tc=$_POST["tc"];
$tel=$_POST["tel"];
$mail=$_POST["mail"];
$takipno=$_POST["takipno"];
include "baglan.php";
$query=$db->prepare("INSERT INTO kayit set ad=?,tc=?,tel=?,mail=?,takipno=?");
$EKLE=$query->execute(array($ad,$tc,$tel,$mail,$takipno));
header("Location:indexold.php");
}

?>