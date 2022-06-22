<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title></title>
</head>
<body>
<?php
function DisplayErrors()
{
global $errors;
echo "<b>Some error/s were encountered:</b><br>";
echo "<ol>";
foreach($errors as $k=>$v)
{
  echo"<li>$v</li>";
}
echo "</ol>";

echo "<a href=javascript:history.back()>Click here to Correct Errors</a>";


}





?>

</body>

</html>
