<!DOCTYPE html>  
<html>  
<body>  
  <!--original element in sequence-->
<?php
$num = array(34, 4, 5, -23, 100);
echo $num[0] . ", " . $num[1] . " , " . $num[2] . "," . $num[3] . "," . $num[4];
?>
<br>
  <!--swap first and last element-->
  <?php
$num = array(34, 4, 5, -23, 100);
echo $num[4] . ", " . $num[1] . " , " . $num[2] . "," . $num[3] . "," . $num[0];
?>
</body>  
</html>  