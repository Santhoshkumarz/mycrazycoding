<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>arraycopy method in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="abstract class in java,abstract class in java example,class in array java,class in java,class in java attribute,class in java beginners,class in java code,class in java contains,class in java data type,class in java definition,class in java example,class in java example program,class in java exercises,class in java function,class in java oop,class in java program,class in java protected,class in java with example program,class in java with program,example of class in java,class in java,class in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<style>
  

        #fun
      {
         display: block;
         padding-left: 20%;
         font-size: 20px;
         text-decoration: none;
         color: blue;
      }
      #fun:hover
      {
        text-decoration: underline;
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

<h1 id="problemhead">System.arraycopy() in java</h1><br><br>

<p id="content_p">System.arraycopy() method used to copy the all elements in one array to another array.</p><br><br><br>

    <h2>Syntax:</h2><br><br>
    <div id="output">
    
<pre>
System.arraycopy(array, start_index, copy array, start_index, length)
</pre>
    </div>


<br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
import java.util.Arrays;

public class Main
{
      public static void main(String[] args) 
      {
            int a [] = {1,2,3,4,5};
            int b [] = new int[a.length];

            System.arraycopy(a,0,b,0,a.length);

            for (int i=0;i&ltb.length;i++) 
            {
              System.out.print(b[i]+" ");
            } 
      }
}
</pre>
    </div></div>

    <br><br>
<br>
    <h2>Output</h2><br><br>
    <div id="output">
    
<pre>
1 2 3 4 5
</pre>
    </div>

<br><br><br><hr><br><br><br>


    <h2>why System.arraycopy() method use?</h2><br><br>
    
<p id="content_p1">If you are copy the array like this " arraycopy = array ", if you change the array value the copy array value also changed.</p>
<br>
<p id="content_p1">In that Example-1 the "a" array value to copy the "b" array. And I change "a" array particular index value then the "b" array that index value also changed. So The "b" array is not a independent.</p>


<br>
<p id="content_p1">In that Example-2 the "b" array value not changed using System.arraycopy() method. Thats a main reason for using this method.</p>


<br><br><br>
    
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
import java.util.Arrays;

public class Main
{
      public static void main(String[] args) 
      {
            int a [] = {1,2,3,4,5};
            int b [] = new int[a.length];

            b = a;

            a[0] = 100;

            for (int i=0;i&ltb.length;i++) 
            {
              System.out.print(b[i]+" ");
            } 
      }
}
</pre>
    </div></div>
    <br><br>
<br>
    <h2>Output</h2><br><br>
    <div id="output">
    
<pre>
100 2 3 4 5
</pre>
    </div>
   
<br><br><br><hr><br><br><br>




<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
import java.util.Arrays;

public class Main
{
      public static void main(String[] args) 
      {
            int a [] = {1,2,3,4,5};
            int b [] = new int[a.length];

            System.arraycopy(a,0,b,0,a.length);

            a[0]=100;

            for (int i=0;i&ltb.length;i++) 
            {
              System.out.print(b[i]+" ");
            } 
      }
}
</pre>
    </div></div>
    <br><br>
<br>
    <h2>Output</h2><br><br>
    <div id="output">
    
<pre>
1 2 3 4 5
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
