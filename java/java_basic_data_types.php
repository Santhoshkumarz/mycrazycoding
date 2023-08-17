<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Data types in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="all data types in java,array data types in java,basic data types in java,built in data types in java,class data types in java,data type in java char,data type in java int,data type in java integer,data type in java value,data types in java array,data types in java class,data types in java example,data types in java language,data types in java math,data types in java tutorial,data types in java tutorial point,data types in java,data types in java with example,data types in java with example programs,examples of data types in java,get data type in java,integer data types in java,number data types in java,Data Types in java,Data Types in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
   

    <style>

.content
{
   overflow-x: auto;
}
table
  {
    width: 100%;
     font-family: 'Open Sans', sans-serif;
     border-collapse: collapse;


  }
  table,tr
  {
     
     font-size: 15px;
    
    
  }
  
  table,th,td
  {
   
     padding: 15px;
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
    
  }


#inside
{
     font-family: 'Open Sans', sans-serif;
    padding-left:20%;
    font-size:15px;
    list-style-type:disc;
}
  table tr:nth-child(odd){background-color: #f2f2f2;}
 
  #inside
  {
        padding-left:20%;
        list-style-type:decimal;
  }
  #inside li
  {
    padding: 5px;
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
  <a class="active" href="java_basic_data_types.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Datatypes</a>
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

<h1 id="problemhead">Data Types in java</h1><br><br>
<p id="content_p">DataTypes is used to store the different types of data and size like a "int,float and String ..etc."</p>
<br><br><br><hr><br><br><br>
 <h1 id="problemhead">Types of Data Type</h1><br><br>
 <ol id="inside">
   <li>Primitive DataTypes</li>
   <li>Non Primitive DataTypes.</li>
 </ol>     
	 
	  <br><br><br><hr><br><br><br>
	  
<h1 id="problemhead">1. Primitive DataTypes</h1><br><br>
<p id="content_p">Primitive DataTypes has a specific size and value.Example(int,float,char,..etc).This datatypes are limited size.</p>
<br><br><br><br>
 <table>
  
  <tr>
    <th style="width: 20%">Data Types</th>
    <th style="width: 20%">Size</th>
    <th style="width: 60%">Limit</th>
   
  </tr>
  <tr>
    <td>byte</td>
    <td>1 byte</td>
    <td>-128 to 127</td>
   
  </tr>
  <tr>
    <td>short</td>
    <td>2 byte</td>
     <td>-32,768 to 32,767</td>
   
  </tr>
  <tr>
    <td>int</td>
    <td>4 byte</td>
     <td>-2,147,483,648 to 2,147,483,647</td>
   
  </tr>
  <tr>
    <td>float</td>
    <td>4 byte</td>
     <td>It's store 5 to 6 decimal points.</td>
  
  </tr>
   <tr>
    <td>double</td>
    <td>8 byte</td>
     <td>It's store 15 decimal points.</td>
   
  </tr>
   <tr>
    <td>char</td>
    <td>2 byte</td>
     <td>It's store single character.</td>
   
  </tr>
  <tr>
    <td>long</td>
    <td>8 byte</td>
     <td>-9,223,372,036,854,775,808 to 9,223,372,036,854,775,807</td>
   
  </tr>
  <tr>
    <td>boolean</td>
    <td>1 byte</td>
     <td>It's store true or false</td>
  
  </tr>
</table>


	  <br><br><br><hr><br><br><br>

 <div class="box">
  <div class="heading">byte</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        byte a=1;
    }
}
</pre>
    </div></div>
    <br><br><br><hr><br><br><br>


  <div class="box">
  <div class="heading">short</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        short a=1;
    }
}
</pre>
    </div></div>
     <br><br><br><hr><br><br><br>




  <div class="box">
  <div class="heading">int</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        int a=111;
    }
}
</pre>
    </div></div>
    <br><br><br><hr><br><br><br>



  <div class="box">
  <div class="heading">float</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        float f=1.2f;
    }
}
</pre>
    </div></div>
     <br><br><br><hr><br><br><br>





  <div class="box">
  <div class="heading">double</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        double d=1.232151;
    }
}
</pre>
    </div></div>
    <br><br><br><hr><br><br><br>




  <div class="box">
  <div class="heading">char</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        char c='z';
    }
}
</pre>
    </div></div>
    <br><br><br><hr><br><br><br> 


    


  <div class="box">
  <div class="heading">long</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        long l=456165486l;
    }
}
</pre>
    </div></div>
     <br><br><br><hr><br><br><br>



  <div class="box">
  <div class="heading">boolean</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        boolean a=true;
    }
}
</pre>
    </div></div>
    <br><br><br><br><hr><br><br><br><br>


<h1 id="problemhead">2. Non Primitive DataTypes</h1><br><br><br>
<p id="content_p">Non Primitive DataTypes is a user declare.Its size and value is not specified.</p>
<br><br><br>
 <table>
  
  <tr>
    <th>Data Types</th>
    <th>Size</th>
  </tr>
 
   <tr>
    <td>String</td>
    <td>Not declare</td>
   
  </tr>
   <tr>
    <td>Array</td>
    <td>Not declare</td>
   
  </tr>
  <tr>
    <td>Class</td>
    <td>Not declare</td>
   
  </tr>
  <tr>
    <td>Interface</td>
    <td>Not declare</td>
  
  </tr>
   <tr>
    <td>etc...</td>
    <td>Not declare</td>
  
  </tr>
</table><br><br><br>

  <div class="box">
  <div class="heading">String</div>
    <div class="src">
    
<pre>
public class Main
{
    public static void main(String[] args) 
    {
        String str="mycrazycoding";
    }
}
</pre>
    </div></div>
     
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
