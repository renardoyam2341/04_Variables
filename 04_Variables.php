<?php
echo"<h1>Integers</h1>";
$int_var = 12345;
echo "int_var = ";
print($int_var);
echo "<br>";
$another_int = -12345 + 12345;
echo "another_int = -12345 + 12345<br>";
echo "sum = ";
print($another_int);
echo "<br>";

echo"<h1>Doubles</h1>";
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;
echo"2.2888800 + 2.2111200 = ";
print($many + $many_2 = $few);
echo "<br>";

echo"<h1>Boolean</h1>";
if (TRUE)
print("This will always print<br>");

else
print("This will never print<br>");

echo"<h1>Interpreting other types as Booleans</h1>";
$true_num = 3 + 0.14159;
$true_str = "Tried and true";
$true_array[49] = "An array element";
$false_array = array();
$false_null = NULL;
$false_num = 999 - 999;
$false_str = "";
echo"true_num = ", $true_num;
echo "<br>";
echo"true_str = ", $true_str;
echo "<br>";
echo"true_array[49] = ", $true_array[49];
echo "<br>";
echo"false_array = ", "array()";
echo "<br>";
echo"false_null = ", $false_null;
echo "<br>";
echo"false_num = ", $false_num;
echo "<br>";
echo"false_str ", $false_str;
echo "<br>";

echo"<h1>NULL</h1>";
$my_var = NULL;
$my_var = null;

echo"<h1>String</h1>";
$string_1 = "This is a string in double quotes";
$string_2 = "This is a somewhat longer, singly quoted string";
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters
print("string_1 = This is a string in double quotes");
echo "<br>";
print("$string_2 = This is a somewhat longer, singly quoted string");
echo "<br>";
print("string_39 = This string has thirty-nine characters");
echo "<br>";
print("string_0 =");
echo "<br>";
$variable = "name";
$literally = 'My $variable will not print!\\n';
print($literally);
echo "<br>";
$literally = "My $variable will print!\\n";
print($literally);

echo"<h1>Here Document</h1>";
$channel =<<<_XML_
<channel>
<title>PHP Notes</title>
<link>http://menu.example.com/</link><br>
<description>Choose what to eat tonight.</description>
</channel>
_XML_;
echo <<<END
This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
<br />
END;
print $channel;

echo"<h1>Variable Naming</h1>";
echo"Variable names must begin with a letter or underscore character.";
echo "<br>";
echo " A variable name can consist of numbers, letters, underscores but you cannot use
characters like + , - , % , ( , ) . & , etc";
echo "<br>";

echo"<h1>PHP Variables</h1>";
$vari =<<<_XML_
<body><ul>
<li> Local variables</li>
<li>Function parameters</li>
<li>Global variabels</li>
<li>Static variables</li>
</ul>
</body>
_XML_;
print $vari;
echo "<br>";

echo"<h1>PHP Local Variables</h1>";
$x = 4;
function assignx () {

$x = 0;
print "\$x inside function is $x. ";}
assignx();
print "\$x outside of function is $x. ";

echo"<h1>PHP Function Parameters</h1>";
function multiply ($value) {
    $value = $value * 10;
    return $value;
   }
   $retval = multiply (10);
   Print "Return value is $retval\n";
   
echo"<h1>PHP Global Variables</h1>";
$somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();

echo"<h1>PHP Static Variables</h1>";
function keep_track() {
    STATIC $count = 0;
    $count++;
    print $count;
    print "
   ";
}
keep_track();
keep_track();
keep_track();

?>