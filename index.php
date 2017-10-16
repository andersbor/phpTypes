<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>PHP types</title>
</head>
<body>
<?php
$age = "42";

$doubleAge = 2 * $age;
echo "doubleAge: " . $doubleAge . "<br />";

$something = NULL;

echo "Type of age: " . gettype($age) . "<br />";
echo "Type of doubleAge: " . gettype($doubleAge) . "<br />";
echo "something: " . $something;
echo " Type of something: " . gettype($something) . "<br />";

$something = 42;
echo "something: " . $something;
echo "  Type of something: " . gettype($something) . "<br />";

$something = "Anders";
echo "something: " . $something;
echo " Type of something: " . gettype($something) . "<br />";

$result = 4 + "2abv";
echo "result: " . $result;
echo " Type of result: " . gettype($result) . "<br />";
?>
<h2>Function types</h2>

<?php
$tal = 45;
function GetSomething($parameter)
{

    $tal = 9;
    if ($parameter < 42) {
        return "small";
    } else {
        return $tal;
    }
}

$result = GetSomething(23);
echo $result;
echo " Type of result: " . gettype($result) . "<br />";

$result = GetSomething(66);
echo $result;
echo " Type of result: " . gettype($result) . "<br />";

$result = GetSomething("anders");
echo $result;
echo " Type of result: " . gettype($result) . "<br />";
?>

</body>
</html>