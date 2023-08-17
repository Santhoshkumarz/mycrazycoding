<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Exception Handling in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="basics of exception handling in java,built in exception handling in java,define exception handling in java,exception handling example in java,exception handling in for loop java,exception handling in java,exception handling in java 8,exception handling in java and its types,exception handling in java best practices,exception handling in java code,exception handling in java coding questions,exception handling in java example,exception handling in java example programs,exception handling in java exercises,exception handling in java for beginners,exception handling in java methods,exception handling in java practice,exception handling in java program,exception handling in java program with output,how to do exception handling in java,how to exception handling in java,exception handling in java,exception handling in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
      
      
      .green
      {
         color:#0D9419;
         font-weight: 600;
      }
  table
  {
    width: 100%;
  font-family: 'Roboto', sans-serif;
     border-collapse: collapse;


  }
  table,tr
  {
     
     font-size: 16px;
    
    
  }
  
  table,th,td
  {
   
     padding: 10px;
     text-align: left;
  }
  td,th
  {
     border: 1px solid #dddddd;
  }

  th
  {
    background-color:#F2F3F4 ;
    color: black;
    font-weight: 500;
  }
  table tr:nth-child(odd){background-color: #f2f2f2;}
  #exception
  {
      font-family: 'Roboto', sans-serif;
       display: block;
         padding: 5px;
         letter-spacing: 0.3px;
         padding-left: 30%;

         font-size: 16px;
         text-decoration: none;
         color: blue;
  }
  #exception:hover
  {
     text-decoration: underline;
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
  <a href="java_basic_types_of_operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Types of operator</a>
  <a href="java_basic_Keywords.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Keywords</a>
  <a href="java_basic_if.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> if,if else,..</a>
  <a href="java_basic_switch.php" id="A"><i class="fas fa-arrow-alt-circle-right"></i> Switch</a>
  <a href="java_basic_loop.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Loop</a>
  <a href="java_basic_array.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Array</a>
  <a href="java_basic_Math_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Math methods</a>
  <a href="java_basic_string_stringmethod.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> String/String methods</a>
  <a class="active" href="java_basic_Exception_Handling.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Exception Handling</a>
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

<h1 id="problemhead">Exception Handling in java</h1><br><br>


<p id="content_p">Exception Handling is used to Handling the Error. There is a two types of Exception:Checked Exception and Unchecked Exception. </p>

<br><br><br>
<hr><br><br><br>


<h1 id="problemhead">Types of of Exception Handling</h1><br><br>



<ol>
  <li>Checked Exception</li>
   <li>Unchecked Exception</li>
</ol>





<br><br><br>
<hr><br><br><br>





<h1 id="problemhead">1. Unchecked Exception</h1><br><br>
<p id="content_p">Unchecked Exception is to handle the Runtime Error.</p>
<br><br><br>



<div class="box">
  <div class="heading">Example</div>



    <div class="src">
    
<pre>
public class Main
{
     public static void main(String [] args)
     {   
          int a = 5;

          System.out.println(a/0);

          System.out.print("Hai");
     }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
<span class="red">Exception in thread "main" java.lang.ArithmeticException: / by zero
        at Main.main(Main.java:6)</span>
</pre>
    </div>
<br><br><br><br><br>
    <h2>Using Exception Handling</h2><br><br><br>
    <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
public class Main
{
     public static void main(String [] args)
     {   
          int a = 5;

          try
          {
              System.out.println(a/0);
          }
          catch(Exception e){ }

          System.out.print("Hai");
     }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
Hai
</pre>
    </div>




<br><br></b><hr><br><br><br>
<h1 id="problemhead">2.Checked Exception</h1><br><br>
<p id="content_p">Checked Exception is compile time Error.</p>
<br><br><br>


<div class="box">
  <div class="heading">Example</div>



	  <div class="src">
	  
<pre>
import java.io.*;
public class Main
{
    public static void main(String [] args) 
    {   
         BufferedReader read = new BufferedReader(new InputStreamReader(System.in));

         String s=read.readLine();
    }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
<span class="red">error: unreported exception IOException; must be caught or declared to be thrown
           String s=read.readLine();</span>
</pre>
    </div>
<br><br><br><br><br>
    <h2>Using Exception Handling</h2><br><br><br>
    <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
import java.io.*;
public class Main
{
    public static void main(String [] args) throws IOException
    {   
        BufferedReader read = new BufferedReader(new InputStreamReader(System.in));

        String s=read.readLine();
    }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
Input:mycrazycoding
</pre>
    </div>
<br><br><br><br><hr><br><br><br><br>
  <h2>Same Exceptions in Java</h2><br><br><br>




<table>
  
  <tr>
    <th style="width: 50%;">Checked Exceptions</th>
    <th style="width: 50%;">Unchecked Exceptions</th>
  </tr>
  <tr>
    <td>ClassNotFound Exception</td>
    <td>Arithmetic Exception</td>
  </tr>
  <tr>
    <td>NoSuchField Exception</td>
    <td>ArrayIndexOutOfBounds Exception</td>
  </tr>
  <tr>
    <td>NoSuchMethod Exception</td>
    <td>Null Pointer Exception</td>
  </tr>
  <tr>
    <td>Interrupted Exception</td>
    <td>ClassCast Exception</td>
  </tr>
   <tr>
    <td>IO Exception</td>
    <td>BufferOverflow Exception</td>
  </tr>
  <tr>
    <td>IllegalAccess Exception</td>
    <td>BufferUnderflow Exception</td>
  </tr>
   
</table><br><br><br><hr><br><br><br>
<h2>More About</h2><br><br>
<a id="exception" href="java_basic_Try_catch_block.php">1.Try catch block</a>
<a id="exception" href="java_basic_Multiple_Catch_Block.php">2.Multiple Catch Block</a>
<a id="exception" href="java_basic_Try_catch_finally.php">3.Try catch finally</a>
<a id="exception" href="java_basic_Throw_and_throws.php">4.Throw and throws</a>



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
