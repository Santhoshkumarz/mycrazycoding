<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Iterator in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="about iterator in java,array iterator in java,array iterator in java 8,create iterator in java,define iterator in java,how to close iterator in java,how to create an iterator in java,how to return an iterator in java,how to use iterator in java,how to use list iterator in java,how to use the iterator in java,iterator in for java,iterator in java,iterator in java 8,iterator in java 8 example,iterator in java code,iterator in java example,iterator in java example program,iterator in java function,iterator in java list example,list iterator in java,list iterator in java 8,list iterator in java example,use of iterator in java,use of iterator in java program,Iterator in java,Iterator in java in mycrazycoding">
    
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
  <a class="active" href="java_basic_Iterator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Iterator</a>
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

<h1 id="problemhead">Iterator in java</h1><br><br>
<p id="content_p">Iterator is like a loop. It iterates the variable using the object.</p>







<br><br><br><hr><br><br><br>


<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
import java.util.ArrayList;
import java.util.Iterator;

public class Main
{
      public static void main(String[] args) 
      {     
            ArrayList&ltInteger> num = new ArrayList&ltInteger>();

            num.add(10);
            num.add(20);
            num.add(30);

            Iterator it = num.iterator();  

            System.out.println(it.next());   
      }
}
</pre>
	  </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
10
</pre>
    </div>
<br><br><br><br><hr><br><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
import java.util.ArrayList;
import java.util.Iterator;

public class Main
{
      public static void main(String[] args) 
      {     
            ArrayList&ltInteger> num = new ArrayList&ltInteger>();

            num.add(10);
            num.add(20);
            num.add(30);

            Iterator it = num.iterator();  

            System.out.println(it.next());   
            System.out.println(it.next()); 
            System.out.println(it.next()); 
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
    </div><br><br><br><br><hr><br><br><br><br>





<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
    
<pre>
import java.util.ArrayList;
import java.util.Iterator;
public class Main
{
      public static void main(String[] args) 
      {     
            ArrayList&ltInteger> num = new ArrayList&ltInteger>();

            num.add(10);
            num.add(20);
            num.add(30);

            Iterator it = num.iterator(); 
            
            while(it.hasNext()) 
            {
                  System.out.println(it.next());
            }
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
