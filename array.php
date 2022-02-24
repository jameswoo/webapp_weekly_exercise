<!DOCTYPE html>  
<html>  
<body>  

    <style>
      class {
        border-radius: 50%;
        width: 15px;
        height: 15px;
        padding: 10px;
        border: 2px solid #000;
        text-align: center;
        display: inline-block;
      }
      class.arrange {
         display: inline-block;             
      }
    </style>

  <!--original element in sequence-->
  
 <class="arrange">
<?php
$num = array(34,4,5,-23,100);
echo "<class>$num[0] </div>" . "<class>$num[1] </div>" . "<class>$num[2] </div>" . "<class>$num[3] </div>" . "<class>$num[4] </div>";
?>
</div>

<br>
  <!--swap first and last element-->
  <?php
$num = array(34, 4, 5, -23, 100);
echo $num[4] . ", " . $num[1] . " , " . $num[2] . "," . $num[3] . "," . $num[0];
?>


</body>  
</html>  