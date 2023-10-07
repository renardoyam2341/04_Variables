<?php
echo"<h1>constant() function</h1>";
echo"<h3>As indicated by the name, this function will return the value of the constant.
This is useful when you want to retrieve value of a constant, but you do not know its name, 
i.e., it is stored in a variable or returned by a function.</h3>";
echo "<br>";

echo"<h1>constant() example</h1>";
define("MINSIZE", 50);
echo MINSIZE;
echo constant("MINSIZE");
echo "<br>";

echo"<h1>Differences between constants and variables are</h1>";
echo"<h3>There is no need to write a dollar sign ($) before a constant, where as in Variable one has to write a dollar sign.
<br>
Constants cannot be defined by simple assignment, they may only be defined using the define() function.
<br>
Constants may be defined and accessed anywhere without regard to variable scoping rules.
<br>
Once the Constants have been set, may not be redefined or undefined.</h3>";
echo "<br>";

echo"<h1>Valid and invalid constant names</h1>";
echo"// Valid constant names<br>
define(ONE, first thing);<br>
define(TWO2, second thing);<br>
define(THREE_3, third thing)<br>
// Invalid constant names<br>
define(2TWO, second thing);<br>
define(__THREE__, third value);";
echo "<br>";

echo"<h1>PHP Magic constants</h1>";
echo"PHP provides a large number of predefined constants to any script which it runs.
There are five magical constants that change depending on where they are used. For example, 
the value of __LINE__ depends on the line that it's used on in your script. These special 
constants are case-insensitive and are as follows:
The following table lists a few magical PHP constants along with their description: 
<br>Name and Description:
<br>
__LINE__ - The current line number of the file.<br>
__FILE__ - The full path and filename of the file. If used inside an include, the 
name of the included file is returned. Since PHP 
4.0.2, __FILE__ always contains an absolute path whereas in older 
versions it contained relative path under some circumstances.
<br>__FUNCTION__ - The function name. (Added in PHP 4.3.0) As of PHP 5 this constant 
returns the function name as it was declared (case-sensitive). In PHP 
4 its value is always lowercased.
<br>__CLASS__ - The class name. (Added in PHP 4.3.0) As of PHP 5 this constant 
returns the class name as it was declared (case-sensitive). In PHP 4 
its value is always lowercased.
<br>__METHOD__ - The class method name. (Added in PHP 5.0.0) The method name is 
returned as it was declared (case-sensitive)";
echo "<br>";

?>