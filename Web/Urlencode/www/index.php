<?php
if("admin"===$_GET[id]) {
  echo("<p>not allowed!</p>");
  exit();
}

$_GET[id] = urldecode($_GET[id]);
if($_GET[id] == "admin")
{
  echo "<p>Access granted!</p>";
  echo "<p>Flag: XBCTF{1_w4nn4_G3t_M0re_f14g} </p>";
}
?>

Do you know the backup file of the website?