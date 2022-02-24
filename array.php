<!DOCTYPE html>  
<html>  
<body>  

    <style>
      class {
        border-radius: 50%;
        width: 15px;
        height: 15px;
        padding: 10px;
        margin:15px;
        border: 2px solid #000;
        text-align: center;
        display: inline-block;
        
      }

    </style>

  <!--original element in sequence-->
  

<?php
$num = array("<class>34</div>","<class>4</div>","<class>5</div>","<class>-23</div>","<class>100</div>");
echo $num[0]. $num[1]. $num[2]. $num[3]. $num[4];
?>

  <!--swap first and last element-->
<?php
echo $num[4]. $num[1]. $num[2]. $num[3]. $num[0];
?>

</body>  
</html>   