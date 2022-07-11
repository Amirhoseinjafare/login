<?php
session_start();
?>
<?php
$p_n=$_GET["password"];
$y_n=$_GET["usename"]; //یوزر نیم اون فیلد رو اینجا گرفتم
$x =array("javad", "Amir", "mahan");
if (in_array($y_n, $x)&& $p_n==123456)
{
echo "welcom ";
$_SESSION["usename"]=$y_n;
$_SESSION["password"]=$p_n;
}
else
{
echo " your usename is not fund ";
}
 ?>