<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Lambda in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="define lambda expression in java,example of lambda expression in java,example of lambda expression in java 8,example program for lambda expression in java,how to use a lambda expression java,how to use lambda expression,how to use lambda expression in jav,,how to write lambda expression in java,how to write lambda expression in java 8,if condition in lambda expression java,if condition using lambda expression in java,java lambda expression find item in list,java lambda expressions in java 8,lambda expression in java 7 example,lambda expression in java 8,lambda expression in java 8 example,lambda expression in java 8 for loop,lambda expression in java 8 with example,lambda expression in java example code,lambda expression in java examples,lambda expression in java for beginners,lambda expression in java list,lambda expression in java programs,lambda expression in java with example,lambda function in java example,type of lambda expression in java 8,why lambda expression in java 8,why to use lambda expression injava,why use lambda expression in java,why we use lambda expression in java,lambda expression in java,lambda expression in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
  <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

   <style>
     .green
     {
          color:#02BC13;
          font-weight: 500;
     }
     .red
     {
          color: #D70723;
          font-weight: 500;
     }
     table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 130px;
}
th, td {
  
  padding: 10px;
  text-align: left;
}
td
{
  font-weight: 400;
}
 @media screen and (max-width: 1200px)
  {
    table, th, td {
      margin-left: 65px;
    }
  }
  @media screen and (max-width: 840px)
  {
    table, th, td {
      margin-left: 100px;
    }
  }
  @media screen and (max-width: 750px)
  {
    table, th, td {
      margin-left: 65px;
    }
  }
  @media screen and (max-width: 665px)
  {
    table, th, td {
      margin-left: 10px;
    }
  }
  @media screen and (max-width: 512px)
  {
    table, th, td {
      margin-left: 0px;
    }
  }
   @media screen and (max-width: 438px)
  {
    table, th, td {
      font-size: 14px;
    }
  }
   @media screen and (max-width: 380px)
  {
    table, th, td {
      font-size: 13px;
    }
  }
  @media screen and (max-width: 345px)
  {
    table{
      font-size: 11px;
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
  <a class="active" href="java_basic_Lambda_Expression.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Lambda Expression</a>
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
 
<h1 id="problemhead">Lambda Expression in java</h1><br><br>
<p id="content_p">Lambda Expression used to loop Iteration , method declaration and etc. If you want to define the abstract method without creating the any other class , you can use Lambda Expression. Thats a main reason for using Lambda Expression in method.</p>

<br><br><br><hr><br><br><br>


<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
import java.util.ArrayList;

public class Main
{
      public static void main(String[] args) 
      {
            ArrayList&ltInteger> num = new ArrayList&ltInteger>();

            num.add(10);
            num.add(20);
            num.add(30);

            num.forEach(i -> System.out.println(i));
      }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
  
<pre>
10
20
30
</pre>
    </div>
<br><br><br><br><hr><br><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
interface A
{
      void show();
}

public class Main
{
      public static void main(String[] args) 
      {
            A obj;
            obj = () ->
            {
                   System.out.print("show");
            };
            obj.show();
      }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
show
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
