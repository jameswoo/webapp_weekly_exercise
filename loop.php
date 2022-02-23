<!DOCTYPE html>
<html>
<body>
<title>loop</title>
<
echo "<select name=month>";
for($i=0;$i<=11;$i++){
$month=date('F',strtotime("first day of -$i month"));
echo "<option value=$month>$month</option> ";
}
echo "</select>";

<!--year-->
echo "<select name=year>";
for($i=0;$i<=5;$i++){
$year=date('Y',strtotime("last day of +$i year"));
echo "<option name='$year'>$year</option>";
}
echo "</select>";
</body>
</html>