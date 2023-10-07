<?php
echo"<h1>PHP ─ OPERATOR TYPES</h1>";
echo"<br>";

echo"<h1>What is Operator?</h1>";
echo"Simple answer can be given using expression 4 + 5 is equal to 9. Here 
4 and 5 are called operands and + is called operator. PHP language supports following type 
of operators.";
echo"<br>";
echo"Arithmetic Operators<br>
Comparison Operators<br>
Logical (or Relational) Operators<br>
Assignment Operators<br>
Conditional (or ternary) Operator";
echo"<br>";
echo"The following arithmetic operators are supported by PHP language:
Assume variable A holds 10 and variable B holds 20 then:";

echo"<h1>Arithmetic Operators</h1>
Operator Description Example
<br>+ - Adds two operands - A + B will give 30
<br>- - Subtracts second operand from the first - A - B will give -10
<br>* - Multiply both operands - A * B will give 200
<br>/ - Divide the numerator by denominator - B / A will give 2
<br>% - Modulus Operator and remainder of after an  integer division - B % A will give 0
++ - Increment operator, increases integer value by one - A++ will give 11
-- - Decrement operator, decreases integer value by one - A-- will give 9
";
echo"<br>";

echo"<h1>Example</h1>";
$a = 42;
 $b = 20;
 
 $c = $a + $b;
 echo "Addition Operation Result: $c <br/>";
 $c = $a - $b;
 echo "Subtraction Operation Result: $c <br/>";
 $c = $a * $b;
 echo "Multiplication Operation Result: $c <br/>";
 $c = $a / $b;
 echo "Division Operation Result: $c <br/>";
 $c = $a % $b;
 echo "Modulus Operation Result: $c <br/>";
 $c = $a++;
 echo "Increment Operation Result: $c <br/>";
 $c = $a--;
 echo "Decrement Operation Result: $c <br/>";
echo"<br>";









?>