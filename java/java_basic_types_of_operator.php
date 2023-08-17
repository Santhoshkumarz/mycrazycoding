<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Types of operator in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="different types of operator in java,explain different types of operators in java,explain the types of operators in java,explain the types of operators in java with example,explain types of operators in java,how many types of operator in java,how many types of operators in java,types of arithmetic operators in java,types of assignment operators in java,types of binary operators in java,types of conditional operators in java,types of logical operators in java,types of operator in java,types of operators in java,types of operators in java programming,types of operators in java with examples,types of operators used in java,types of relational operators in java,types of ternary operator in java,types of unary operators in java,what is operator in java with example,Types of operator in java,Types of operator in java in mycrazycoding">
    
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
  .green
  {
     color: #C32708;
     font-weight: 500;
  }
  #inside
  {
        padding-left:25%;
        list-style-type:decimal;
  }
  #inside li
  {
    padding: 5px;
  }
@media screen and (max-width: 566px)
{
    table,tr
  {
     
     font-size: 15px;
    
    
  }
}
</style>

  </head>
  <body>
    <?php
   include "nav.php";
    ?>
    <div id="side" class="sidebar">

<div class="topics">
  <h1 id="H1">BASIC TURORIAL</h1>
  <a  href="java_index.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Introduction</a>
  <a href="java_basic_print.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Print</a>
  <a href="java_basic_input_get.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Input get</a>
  <a href="java_basic_data_types.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Datatypes</a>
  <a class="active" href="java_basic_types_of_operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Types of operator</a>
  <a href="java_basic_Keywords.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Keywords</a>
  <a href="java_basic_if.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> if,if else,..</a>
  <a href="java_basic_switch.php" id="A"><i class="fas fa-arrow-alt-circle-right"></i> Switch</a>
  <a href="java_basic_loop.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Loop</a>
  <a href="java_basic_array.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Array</a>
  <a href="java_basic_Math_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Math methods</a>
  <a href="java_basic_string_stringmethod.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> String/String methods</a>
  <a href="java_basic_Exception_Handling.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Exception Handling</a>
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
  <a href="java_basic_file_create.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Create-file</a>
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

<h1 id="problemhead">Operators in java</h1>
<br><br>
<p id="content_p">Operator is used to perform some operation.In java programming there are seven operators available.</p>
<br><br>
<br><hr><br><br><br>

<h1 id="problemhead">Types of operator</h1><br><br>
    <ol id="inside">
      <li>Arithmetic operator</li>
      <li>Relational operator</li>
      <li>Assignment operator</li>
      <li>Boolean Logiacal operator</li>
      <li>Bitwise operator</li>
      <li>Unary operator</li>
      <li>Ternary operator</li>
    </ol>

	  <br><br><br><hr><br><br><br>
<h1 id="problemhead">1. Arithmetic operator</h1><br><br>
<p id="content_p">Arithmetic operator used to perform the basic mathematics operation.</p>
<br><br><br>
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
public class Main
{
    public static void main(String[] args) 
    {

          int x = 5;
          int y = 4;

          System.out.println(x+y);

    }
}
</pre>
    </div></div> <br><br>
  <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
9
</pre>
    </div>
     <br> <br> <br><br><hr> <br> <br><br><br>





     <h1 id="problemhead">2. Relational operator</h1><br><br>
     <p id="content_p">It is also called the comparison operator.It used to compare the value.</p>
<br><br><br>
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
    <td>!=</td>
    <td>x!=y</td>
    <td>To compare the x and y values are not equal.</td>
  </tr>
  <tr>
    <td><</td>
    <td>x&lty</td>
    <td>To compare x values is greater than y values.</td>
  </tr>
  <tr>
    <td>></td>
    <td>x>y</td>
    <td>To compare x values is lesser than y values.</td>
  </tr>
   <tr>
    <td><=</td>
    <td>x<=y</td>
    <td>To compare x values is greater than or equal in y values.</td>
  </tr>
  <tr>
    <td>>=</td>
    <td>x>=y</td>
    <td>To compare x values is lesser than or equal in y values.</td>
  </tr>
   
</table>


     <br> <br><br>
 <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        int x = 5,y = 4;

        System.out.println(x==y);
        System.out.println(x!=y);
        System.out.println(x&lty);
        System.out.println(x>y);
        System.out.println(x<=y);
        System.out.println(x>=y);
    }
}
</pre>
    </div></div><br><br>
  <h2>output</h2>
 <br><br>
    <div class="output1">
    
<pre>
false
true
false
true
false
true
</pre>
    </div>
     <br> <br><br><br><hr> <br><br><br><br>






     <h1 id="problemhead">3. Assignment operator</h1><br><br>
       <p id="content_p">Assignment operator used to assign the value.But it's assign the value like , if x+=5 means x=x+5.</p>
<br><br><br>
 <table>
  
  <tr>
    <th>Operator</th>
    <th>Example</th>
    <th>How assign</th>
  </tr>
  <tr>
    <td>+=</td>
    <td>x+=10</td>
    <td>x=x+10</td>
  </tr>
  <tr>
    <td>-=</td>
    <td>x-=10</td>
    <td>x=x-10</td>
  </tr>
  <tr>
    <td>*=</td>
    <td>x*=10</td>
    <td>x=x*10</td>
  </tr>
  <tr>
    <td>/=</td>
    <td>x/=10</td>
    <td>x=x/10</td>
  </tr>
   <tr>
    <td>%=</td>
    <td>x%=10</td>
    <td>x=x%10</td>
  </tr>
  <tr>
    <td>&=</td>
    <td>x&=10</td>
    <td>x=x&10</td>
  </tr>
  <tr>
    <td>|=</td>
    <td>x|=10</td>
    <td>x=x|10</td>
  </tr>
  <tr>
    <td>^=</td>
    <td>x^=10</td>
    <td>x=x^10</td>
  </tr>
  <tr>
    <td>>=</td>
    <td>x>>=10</td>
    <td>x=x>>10</td>
  </tr>
  <tr>
    <td><<=</td>
    <td>x<<=10</td>
    <td>x=x<<10</td>
  </tr>
   
</table>


     <br> <br><br>
 <div class="box">
  <div class="heading">Example</div>
    <div id="Non_src">
    
<pre>
<span class="keyword">public class</span> Main
{
    <span class="keyword">public static void</span> main(<span class="Nonspec">String</span>[] args) 
    {
        <span class="keyword">int</span> x = <span class="digit">1</span>;

        x += 10;                   <span class="doubleslash">//x=x+10 => 1+10</span>
        
        System.out.print(x);     <span class="doubleslash">//x=11</span>           
    }
}
</pre>
    </div></div><br><br>
    <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
11
</pre>
    </div>
     <br><br> <br><br><hr> <br><br><br><br>





     <h1 id="problemhead">4. Boolean Logical operator</h1><br><br>
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


     <br> <br> <br> <br> 
 <h2>AND(<span class="green"> && </span>) operator</h2>
 <br><br> <br>
  <div class="box">
  <div class="heading">Example</div> 
    <div class="src">
    
 
<pre>public class Main
{
    public static void main(String[] args) 
    {
        int x=5,y=6;
        if((x<10)&&(x&lty))
        {
            System.out.println("Both are true");
        } 
    }
}
</pre>
    </div></div><br><br>
    <h2>Output</h2>
 <br><br> 
    <div id="output">
    
<pre>
Both condition are true
</pre>
    </div>



 <br><br> <br><br><hr> <br> <br><br><br>
 <h2>OR(<span class="green"> || </span>) operator</h2>
 <br><br> <br> 
  <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        int x=5,y=6;
        if((x==10)||(x&lty))
        {
            System.out.println("condition true");
        } 
    }
}
</pre>
    </div></div><br><br>
    <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
condition true
</pre>
    </div>


 <br><br> <br><br><hr> <br> <br><br><br>
 <h2>NOT(<span class="green"> ! </span>) operator</h2>
 <br><br> <br> 
  <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        int x=5;
        if(!(x==10))
        {
            System.out.println("condition true");
        } 
    }
}
</pre>
    </div></div><br><br>
    <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
condition true
</pre>
    </div>
     <br><br> <br><br><hr> <br> <br><br><br>




     <h1 id="problemhead">5. Bitwise operator</h1><br><br>
<p id="content_p">Bitwise operator used to perform the Logical operation and shift operation in a binary code.</p>

<br><br><br>
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
   <tr>
    <td>>>></td>
    <td>x>>>y</td>
    <td>Right shift filled with zero operator to perform the remove the last y number digit in x binary number.</td>
  </tr>
   
</table>


     <br> <br> <br><br>
 <h2>AND(<span class="green">&</span>) operator:</h2>
 <br><br><br>
  <div class="box">
  <div class="heading">Example</div>
    <div id="Non_src">
    
<pre>
<span class="keyword">public class</span> Main
{
    <span class="keyword">public static void</span> main(<span class="Nonspec">String</span>[] args) 
    {
        int x=<span class="digit">5</span>;                 <span class="doubleslash">// x=0 1 0 1</span>
        int y=<span class="digit">6</span>;                 <span class="doubleslash">// y=0 1 1 0</span>
        int z=x&y;               <span class="doubleslash">// z=0 1 0 0</span> 
        System.out.print(z);
    }
}
</pre>
    </div></div><br><br>
   <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
4
</pre>
    </div>
    <br><br> <br><br><hr> <br> <br><br><br>




 <h2>OR(<span class="green">|</span>) operator:</h2>
 <br><br><br>
  <div class="box">
  <div class="heading">Example</div>
    <div id="Non_src">

    
<pre>
<span class="keyword">public class</span> Main
{
    <span class="keyword">public static void</span> main(<span class="Nonspec">String</span>[] args) 
    {
        int x=<span class="digit">5</span>;                    <span class="doubleslash">// x=0 1 0 1</span>
        int y=<span class="digit">6</span>;                    <span class="doubleslash">// y=0 1 1 0</span>
        int z=x|y;                  <span class="doubleslash">// z=0 1 1 1</span> 
        System.out.print(z);
    }
}
</pre>
    </div></div><br><br>
   <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
7
</pre>
    </div>
   <br><br> <br><br><hr> <br> <br><br><br>






 <h2>XOR(<span class="green">^</span>) operator:</h2>
 <br><br><br>
  <div class="box">
  <div class="heading">Example</div>
    <div id="Non_src">
    
<pre>
<span class="keyword">public class</span> Main
{
    <span class="keyword">public static void</span> main(<span class="Nonspec">String</span>[] args) 
    {
        int x=<span class="digit">5</span>;                  <span class="doubleslash">// x=0 1 0 1</span>
        int y=<span class="digit">6</span>;                  <span class="doubleslash">// y=0 1 1 0</span>
        int z=x^y;                <span class="doubleslash">// z=0 0 1 1</span> 
        System.out.print(z);
    }
}
</pre>
    </div></div><br><br>
   <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
3
</pre>
    </div>
  <br><br> <br><br><hr> <br> <br><br><br>




 <h2>Leftshift(<span class="green"><<</span>) operator:</h2>
 <br><br><br>
  <div class="box">
  <div class="heading">Example</div>
    <div id="Non_src">
    
<pre>
<span class="keyword">public class</span> Main
{
    <span class="keyword">public static void</span> main(<span class="Nonspec">String</span>[] args) 
    {
        int x=<span class="digit">5</span>;                    <span class="doubleslash">// x=0 1 0 1</span>
        int y=x<<2;                 <span class="doubleslash">// y=0 1 0 1 0 0</span>
        System.out.print(y);
    }
}
</pre>
    </div></div><br><br>
   <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
20
</pre>
    </div>
   <br><br> <br><br><hr> <br> <br><br><br>



 <h2>Rightshift(<span class="green">>></span>) operator:</h2>
 <br><br><br>
  <div class="box">
  <div class="heading">Example</div>
    <div id="Non_src">
    
<pre>
<span class="keyword">public class</span> Main
{
    <span class="keyword">public static void</span> main(<span class="Nonspec">String</span>[] args) 
    {
        int x=<span class="digit">5</span>;                 <span class="doubleslash">// x=0 1 0 1</span>
        int y=x>>2;              <span class="doubleslash">// y=0 1</span>
        System.out.print(y);
    }
}
</pre>
    </div></div><br><br>
   <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
1
</pre>
    </div>
  <br><br> <br><br><hr> <br> <br><br><br>
 <h2>Right shift filled with zero(<span class="green">>>></span>):</h2>
 <br><br><br>
  <div class="box">
  <div class="heading">Example</div>
    <div id="Non_src">
    
<pre>
<span class="keyword">public class</span> Main
{
    <span class="keyword">public static void</span> main(<span class="Nonspec">String</span>[] args) 
    {
        int x=<span class="digit">8</span>;                  <span class="doubleslash">// x=1 0 0 0</span>
        int y=x>>>2;              <span class="doubleslash">// y=1 0</span>
        System.out.print(y);
    }
}
</pre>
    </div></div><br><br>
   <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
2
</pre>
    </div>
   <br><br> <br><br><hr> <br> <br><br><br>







     <h1 id="problemhead">6. Unary operator</h1><br><br>
     <p id="content_p">Unary operator used to increment or decrement the value.It's mostly using , looping and recursion function. It's increment/decrement the value only one by one.</p>

	 
	 <br><br><br>
 <table>
  
  <tr>
    <th>Operator</th>
    <th>Example</th>
    <th>Explain</th>
  </tr>
  <tr>
    <td>prefix Increment</td>
    <td>++x</td>
    <td>It's increment the value.</td>
  </tr>
  <tr>
    <td>prefix Decrement</td>
    <td>--x</td>
    <td>It's decrement the value.</td>
  </tr>
  <tr>
    <td>postfix Increment</td>
    <td>x++</td>
    <td>It's assign the value.But Not increment</td>
  </tr>
  <tr>
    <td>postfix Decrement</td>
    <td>x--</td>
    <td>It's assign the value.But not decrement</td>
   
</table>


     <br> <br><br>
 <div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        int x=5;
        System.out.println(x++);  
        System.out.println(x);    
    }
}
</pre>
    </div></div><br><br>
    <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
5
6
</pre>
    </div>
    <br><br> <br><hr> <br> <br><br><br>
	 
	 
 <div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        int x=5;
        System.out.println(++x);
        System.out.println(x);
    }
}
</pre>
    </div></div><br><br>
    <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
6
6
</pre>
    </div>
     <br><br> <br><br><hr> <br> <br><br><br>
 <div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        int x=5;
        System.out.println(x--);
        System.out.println(x);
    }
}
</pre>
    </div></div><br><br>
    <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
5
4
</pre>
    </div>
     <br><br> <br><br><hr> <br> <br><br><br>
	 
	 
	 
 <div class="box">
  <div class="heading">Example-4</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        int x=5;
        System.out.println(--x);
        System.out.println(x);
    }
}
</pre>
    </div></div><br><br>
    <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
4
4
</pre>
    </div>
  <br>  <br><br><br> <hr> <br> <br><br><br>



     <h1 id="problemhead">7. Ternary operator</h1><br><br>
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
public class Main
{
    public static void main(String[] args) 
    {
        int m=5,n=6;
        System.out.print(m&ltn?"n is greater":"m is greater"); 
    }
}
</pre>
    </div></div><br><br>
  <h2>Output</h2>
 <br><br>
    <div id="output">
    
<pre>
n is greater
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
</script><br><br><br>

   <?php
   include "footer.php";
    ?>



</div>




  </body>
</html>
