<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Wrapper in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="a wrapper class in java,create a wrapper class in java,create wrapper class in java,example for wrapper class in java,example of wrapper class in java,example wrapper class in java,explain wrapper class in java,functions of wrapper class in java,how to create a wrapper class in java,how to create wrapper class in java,how to declare wrapper class in java,how to make wrapper class in java,how to use wrapper class in java,integer wrapper class in java example,integer wrapper class in java source code,java program using wrapper class,java program wrapper class,methods of wrapper class in java,program of wrapper class in java,what is the use of wrapper class in java,what is wrapper class in java,why do we use wrapper class in java,why is wrapper class used in java,why use wrapper class in java,why we use wrapper class,why wrapper class in java,wrapper class in java,Wrapper class in java,Wrapper class in java in mycrazycoding">
    
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
    table
  {
    width: 100%;
    padding-left: 5px;
    font-family: 'Roboto', sans-serif;
     border-collapse: collapse;


  }
  table,tr
  {
     
     font-size: 15px;
     letter-spacing: 0.3px;
    
    
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
  b
  {
    font-weight: 500;
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
  <a class="active" href="java_basic_Wrapper.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Wrapper class</a>
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
  
<h1 id="problemhead">Wrapper class in java</h1><br><br>
<p id="content_p">The wrapper class is used to store the data in the object. The primitive Datatype(int,float,...) data does not store in object. When you are want to store the data in object you can use Wrapper Class.</p><br>
<p id="content_p">Collection Framework and Data Structure works only with objects .</p><br>
<p id="content_p">Generics do not allow primitive Datatype. It allows only Wrapper Class. Example: <b>ArrayList&ltInteger> num =new ArrayList&ltInteger>();</b></p>

<br><br><br><hr><br><br><br>
<h1 id="problemhead">Primitive Data Type and Wrapper classes</h1><br><br>
 <table>
  
  <tr>
    <th style="width: 40%">Primitive Data Type</th>
    <th style="width: 60%">Wrapper Class</th>
  </tr>
  <tr>
    <td>byte</td>
   
    <td>Byte</td>
  </tr>
  <tr>
    <td>short</td>
    <td>Short</td>
  </tr>
  <tr>
    <td>int</td>
    <td>Integer</td>
  </tr>
  <tr>
    <td>long</td>
    <td>Long</td>
  </tr>
   <tr>
    <td>float</td>
    <td>Float</td>
  </tr>
   <tr>
    <td>double</td>
    <td>Double</td>
  </tr>
   </tr>
   <tr>
    <td>boolean</td>
    <td>Boolean</td>
  </tr>
   </tr>
   <tr>
    <td>char</td>
    <td>Character</td>
  </tr>
</table>





<br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
public class Main
{
      public static void main(String[] args) 
      {     
            Integer num = new Integer(10); 

            System.out.println(num);

            System.out.println(num.intValue());        
      }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
10
10
</pre>
    </div>
<br><br><br><br><hr><br><br><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
public class Main
{
      public static void main(String[] args) 
      {     
            Double num = new Double(15);

            System.out.println(num);  

            System.out.println(num.doubleValue());      
      }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
15.0
15.0
</pre>
    </div><br><br><br><br><hr><br><br><br><br>





<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
    
<pre>
public class Main
{
      public static void main(String[] args) 
      {     
            Character ch = new Character('H'); 

            System.out.println(ch);     
              
            System.out.println(ch.charValue());        
      }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
H
H
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
