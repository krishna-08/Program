<html>
<body>

<form action="leap.php" method="post">

Enter year:<input type="number" name="yr"/>
<br><br>
<input type="submit" name="submit" value="Check"/>

</form>
<?php
if($_POST)
{
$y=$_POST['yr'];

if($y%100==0)
{
 if($y%400==0)
 {
  $e="$y is a leap year";
 }
 else
 $e="$y is not a leap year";
}
else if($y%4==0)
$e="$y is a leap year";
else 
$e="$y is not a leap year";

}
?>
<input type="text" value="<?php echo"$e" ?>">

</body>
</html>
