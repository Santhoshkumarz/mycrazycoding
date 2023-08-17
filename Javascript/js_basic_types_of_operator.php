<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Operator in javascript</title>
 
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
table
  {
    width: 100%;
    padding-left: 10px;
    font-family: 'Roboto', sans-serif;
     border-collapse: collapse;


  }
  b
  {
    font-weight: 500;
  }
  table,tr
  {
     
     font-size: 15px;
    
    
  }
  table
  {
    border-right: 1px solid #dddddd;
    border-left: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
  }
  table,th,td
  {
   
     padding: 15px;
     text-align: left;
     word-spacing: 3px;
    letter-spacing: 1px;
  }
  td,th
  {
     
  }

  th
  {
    background-color:#F2F3F4 ;
    color: black;
    font-weight: 700;
    
  }
table tr:nth-child(odd){background-color: #f2f2f2;}
</style>
   

  </head>
  <body>
  <?php
   include "nav.php";
    ?>

        <div id="side" class="sidebar">
  <div class="topics">
  <h1 id="H1">BASIC TURORIAL</h1>
  <a  href="" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Introduction</a>
  <a href=""  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Print</a>
  <a href="js_basic_variables.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Var, Let, Const</a>
  <a href=""  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Datatypes</a>
  <a href=""  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Types of operator</a>
  
  <a href="java_basic_if.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> if,if else,..</a>
  <a href="java_basic_switch.php" id="A"><i class="fas fa-arrow-alt-circle-right"></i> Switch</a>
  <a href="java_basic_loop.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Loop</a>
  <a href="java_basic_array.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Array</a>
  <a href="java_basic_Math_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Math methods</a>
  <a href="java_basic_string_stringmethod.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> String/String methods</a>
  
<br>
 
  <h1 id="H1">FUNCTIONS</h1>
  <a href="java_basic_function_main.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Function</a>
  <a href="java_basic_function.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Types of Function</a>
  <a href="java_basic_Varargs.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Variable Arguments (Varargs)</a>
  <a href="java_basic_recursion.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Recursion</a>
 <br>
 
  <h1 id="H1">OBJECT ORIENTED</h1>
  <a href="java_basic_class.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Class</a>
  <a href="java_basic_constructor.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Constructor</a>
  <a href="java_basic_inheritance.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Inheritance</a>
  <a href="java_basic_Overloading.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Method Overloading</a>
  <a href="java_basic_Overriding.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Method Overriding</a>
  <a href="java_basic_interface.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Interface</a>
  <a href="java_basic_Abstruct.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Abstract Class</a>
  <a href="java_basic_anonymous_class.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Anonymous class</a>
  <a href="java_basic_Wrapper.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Wrapper class</a>
  <a href="java_basic_innerclass.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Innerclass</a>
  <a href="java_basic_Iterator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Iterator</a>
  <a href="java_basic_encapsulation.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Encapsulation</a>
  <a href="java_basic_Enum.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Enum</a>
  <a href="java_basic_Package.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Package</a>
  <a href="java_basic_Thread.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Thread</a>
  <a href="java_basic_Multiple_Thread.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Multithread</a>
  <a href="java_basic_Lambda_Expression.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Lambda Expression</a>
 <br>

  <h1 id="H1">LIST</h1>
  <a href="java_basic_ArrayList.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> ArrayList</a>
  <a href="java_basic_LinkedList.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> LinkedList</a>
  <a href="java_basic_HashMap.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> HashMap</a>
  <a href="java_basic_HashSet.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> HashSet</a>
<br>

  <h1 id="H1">FILE HANDLING</h1>
  <a class="active" href="java_basic_file_create.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Create-file</a>
  <a href="java_basic_write_file.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Write-file</a>
  <a href="java_basic_read_file.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Read-file</a>
  <a href="java_basic_delete_file.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Delete-file</a>
  <br>
 
 
  <h1 id="H1">OTHERS</h1>
  <a href="Howto/howto_index.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Java How to</a>
<hr>
</div>
<br><br>
</div>


<div class="content">

<h1 id="problemhead">Operator in javascript </h1><br><br>
<p id="content_p">Operator is used to perform some operation.</p><br>

	  <br><br><br>

<h1 id="problemhead">Types of variable</h1><br><br>
<ol id="inside">
  <li>Arithmetic Operators</li>
  <li>Relational Operators</li>
  <li>Assignment Operators</li>
  <li>Logical Operators</li>

  <li>Bitwise Operators</li>

  <li>Ternary Operator</li>

</ol>
<br><br><br><hr><br><br><br>




<h1 id="problemhead">1. Arithmetic Operators</h1>
<br><br>
<p id="content_p">Arithmetic operator used to perform the basic mathematics operation.</p><br><br><br>
<table>
  
  <tr>
    <th>Operator</th>
    <th>Example</th>
    <th>Explain</th>
  </tr>
  <tr>
    <td>+</td>
    <td>x+y</td>
    <td>Add the number</td>
  </tr>
  <tr>
    <td>-</td>
    <td>x-y</td>
    <td>Subtract the number</td>
  </tr>
  <tr>
    <td>*</td>
    <td>x*y</td>
    <td>multiplying the number</td>
  </tr>
  <tr>
    <td>/</td>
    <td>x/y</td>
    <td>dividing the number</td>
  </tr>
   <tr>
    <td>%</td>
    <td>x%y</td>
    <td>remainder of the number</td>
  </tr>
   
</table>


  <br>  <br><br>
 <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
let a = 5, b = 6;

let c = a+b;

document.write(c);
</pre>
    </div></div> <br><br>
  <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
11
</pre>
    </div>
     <br> <br> <br><br><hr> <br> <br><br><br>







<h1 id="problemhead">2. Relational Operators</h1>
<br><br>
<p id="content_p">It is also called the comparison operator. It used to compare the value.</p><br><br><br>
<table>
  
  <tr>
    <th>Operator</th>
    <th>Example</th>
    <th>Explain</th>
  </tr>
  <tr>
    <td>==</td>
    <td>x==y</td>
    <td>To compare the x and y values are equal.</td>
  </tr>
  <tr>
    <td>===</td>
    <td>x===y</td>
    <td>To compare the x and y values and datatypes are equal.</td>
  </tr>
  <tr>
    <td>!=</td>
    <td>x!=y</td>
    <td>To compare the x and y values are not equal.</td>
  </tr>
  <tr>
    <td>!==</td>
    <td>x!==y</td>
    <td>To compare the x and y values and datatypes are not equal.</td>
  </tr>
   <tr>
    <td>&lt;</td>
    <td>x&lt;y</td>
    <td>To compare x values is greater than y values.</td>
  </tr>


   <tr>
    <td>></td>
    <td>x>y</td>
    <td>To compare x values is lesser than y values.</td>
  </tr>

   <tr>
    <td>&lt;=</td>
    <td>x&lt;=y</td>
    <td>To compare x values is greater than or equal in y values.</td>
  </tr>


   <tr>
    <td>>=</td>
    <td>x>=y</td>
    <td>To compare x values is lesser than or equal in y values.</td>
  </tr>
   
</table>


  <br>  <br><br>
 <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
let a = 5, b = 6;

document.write(a &lt; b);
</pre>
    </div></div> <br><br>
  <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
true
</pre>
    </div>
     <br> <br> <br><br><hr> <br> <br><br><br>












<h1 id="problemhead">3. Assignment Operator</h1>
<br><br>
<p id="content_p">Assignment operator used to assign the value. But it's assign the value like , if x+=5 means x=x+5.</p><br><br><br>
<table>
  
  <tr>
    <th>Operator</th>
    <th>Example</th>
    <th>How assign</th>
  </tr>
  <tr>
    <td>=</td>
    <td>x = 5</td>
    <td>x = 5</td>
  </tr>
  <tr>
    <td>+=</td>
    <td>x+=5</td>
    <td>x = x + 5 </td>
  </tr>

   <tr>
    <td>-=</td>
    <td>x-=5</td>
    <td>x = x - 5 </td>
  </tr>
  <tr>
    <td>*=</td>
    <td>x*=5</td>
    <td>x = x * 5 </td>
  </tr>
  <tr>
    <td>/=</td>
    <td>x/=5</td>
    <td>x = x / 5 </td>
  </tr>
   <tr>
    <td>%=</td>
    <td>x%=5</td>
    <td>x = x % 5</td>
  </tr>


   
</table>


  <br>  <br><br>
 <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
let x = 2;

x += 5;

document.write(x);
</pre>
    </div></div> <br><br>
  <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
7
</pre>
    </div>
     <br> <br> <br><br><hr> <br> <br><br><br>









<h1 id="problemhead">4. Logical Operator</h1>
<br><br>
<p id="content_p">It used to perform the logical operation between two or more condition.</p><br><br><br>
<table>

  <tr>
    <th>Operator</th>
    <th>Example</th>
    <th>Explain</th>
  </tr>
  <tr>
    <td>&&</td>
    <td>(condition1) <b>&&</b> (condition2)</td>
    <td>AND(&&) operator will become true , when all the conditions are true.</td>
  </tr>
  <tr>
    <td>||</td>
    <td>(condition1) <b>||</b> (condition2)</td>
    <td>OR(||) operator will become true , when any one condition is true.</td>
  </tr>
  <tr>
    <td>!</td>
    <td><b>!</b> (condition)</td>
    <td>NOT(!) operator perform the opposite of the condition.</td>
  </tr>
</table>


  <br>  <br><br><br><br>
 <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
let x = 5, y = 10;


if( (x==5) && (y==10) ) 
{
    document.write("True");
}
</pre>
    </div></div> <br><br>
  <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
True
</pre>
    </div>
     <br> <br> <br><br><hr> <br> <br><br><br>





<h1 id="problemhead">5. Bitwise Operator</h1>
<br><br>
<p id="content_p">Bitwise operator used to perform the Logical operation and shift operation in a binary code.</p><br><br><br>




<table>
  
  <tr>
    <th>Operator</th>
    <th>Example</th>
    <th>Explain</th>
  </tr>
  <tr>
    <td>&</td>
    <td>x&y</td>
    <td>To perform the AND operation of x,y binary code.</td>
  </tr>
  <tr>
    <td>|</td>
    <td>x|y</td>
    <td>To perform the OR operation of x,y binary code.</td>
  </tr>
  <tr>
    <td>^</td>
    <td>x^y</td>
    <td>To perform the XOR operation of x,y binary code.</td>
  </tr>
  <tr>
    <td><<</td>
    <td>x&lt&lty</td>
    <td>Left shift operator to perform the add the y number of 0's in x binary code in last.</td>
  </tr>
   <tr>
    <td>>></td>
    <td>x>>y</td>
    <td>Right shift operator to perform the remove the y number of binary code in last of x binary code.</td>
  </tr>

   
</table>


  <br>  <br><br><br><br>
 <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
let x = 5, y = 6;


document.write(x&y);
</pre>
    </div></div> <br><br>
  <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
4
</pre>
    </div>
     <br> <br> <br><br><hr> <br> <br><br><br>










     <h1 id="problemhead">6. Ternary operator</h1><br><br>
   <p id="content_p">Ternary operator to perform like if else statement. <b>"operand 1"</b> is a condition.if condition is true ,<b>"operand 2"</b> will be execute , otherwise <b>"operand 3"</b> will be execute.</p>
<br><br><br>
<h2>Syntax:</h2>
 <br><br><br>
    <div class="syntax">
    
<pre>
operand1 ? operand2 : operand3
</pre>
    </div>
  
  
     <br> <br><br>

 <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
let age = 20;

document.write(age>18 ? "Allow the party" : "Not Allow");
</pre>
    </div></div><br><br>
  <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
Allow the party
</pre>
    </div>


    
  <br><br><br><hr><br><br><br>



<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vertical -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7569865976437849"
     data-ad-slot="6174436937"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br><br><br>
<?php
   include "footer.php";
    ?>


</div>



  </body>
</html>
