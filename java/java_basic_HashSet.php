<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>HashSet in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="about hashset in java,array to hashset in java,create a hashset in java,functions of hashset in java,hashset array java,hashset example in java,hashset in java,hashset in java 8,hashset in java code,hashset in java example,hashset in java methods,hashset in java program,hashset in java with example,hashset java to list,how to access elements of hashset in java,how to hashset in java,how to print hashset in java,new hashset in java,new hashset in java 8,use of hashset in java,hashset in java,hashset in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
   <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
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
  <a class="active" href="java_basic_HashSet.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> HashSet</a>
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

    <h1 id="problemhead">HashSet in java</h1><br><br><br>
  <p id="content_p">HashSet used to store the data and Its remove Duplicate data.The data stored in Hashtable.</p>  

   <br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Add</div>
    <div class="src">
    
<pre>
import java.util.HashSet;

public class Main
{
       public static void main(String[] args) 
       {
             HashSet&ltInteger> num = new HashSet&ltInteger>();

             num.add(1);
             num.add(2);
             num.add(3);
             num.add(1);
             
             System.out.print(num);

       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
[1, 2, 3]
</pre>
    </div>
<br><br><br><br><hr>
    <br>
    <br><br><br>

    <div class="box">
  <div class="heading">Contains</div>
    <div class="src">
    
<pre>
import java.util.HashSet;

public class Main
{
       public static void main(String[] args) 
       {
             HashSet&ltInteger> num = new HashSet&ltInteger>();

             num.add(1);
             num.add(2);
             num.add(3);
             
             System.out.print(num.contains(1));
       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
true
</pre>
    </div><br><br><br><br><hr><br><br><br><br>

    <div class="box">
  <div class="heading">Remove</div>
    <div class="src">
    
<pre>
import java.util.HashSet;

public class Main
{
       public static void main(String[] args) 
       {
             HashSet&ltInteger> num = new HashSet&ltInteger>();

             num.add(1);
             num.add(2);
             num.add(3);

             num.remove(1);
             
             System.out.print(num);

       }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
[2, 3]
</pre>
    </div>
<br>
    <br><br><br><hr><br><br><br>



 <br>

    <div class="box">
  <div class="heading">Size</div>
    <div class="src">
    
<pre>
import java.util.HashSet;

public class Main
{
       public static void main(String[] args) 
       {
             HashSet&ltInteger> num = new HashSet&ltInteger>();

             num.add(1);
             num.add(2);
             num.add(3);
             
             System.out.print(num.size());

       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
3
</pre>
    </div>
<br><br><br><hr>
    <br><br><br>





 <br>

    <div class="box">
  <div class="heading">Clear</div>
    <div class="src">
    
<pre>
import java.util.HashSet;

public class Main
{
       public static void main(String[] args) 
       {
             HashSet&ltInteger> num = new HashSet&ltInteger>();

             num.add(1);
             num.add(2);
             num.add(3);

             num.clear();
             
             System.out.print(num);

       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>

    <div id="output">
    
<pre>
[]
</pre>
    </div>
<br><br><br><br><hr>
    <br><br><br><br>



 <br>
   


    <div class="box">
  <div class="heading">print each  element:</div>

    <div class="src">
    
<pre>
import java.util.HashSet;

public class Main
{
       public static void main(String[] args) 
       {
             HashSet&ltInteger> num = new HashSet&ltInteger>();

             num.add(1);
             num.add(2);
             num.add(3);

             for(int i : num)
             {
                   System.out.println(i);
             }

       }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
1
2
3
</pre>
    </div>
<br><br><br><hr>
    <br><br><br>
<h1 id="problemhead">String:</h1>
<br><br>

        <div class="box">
  <div class="heading">Add</div>
    <div class="src">
    
<pre>
import java.util.HashSet;

public class Main
{
       public static void main(String[] args) 
       {
             HashSet&ltString> names = new HashSet&ltString>();

             names.add("jack");
             names.add("stark");
             names.add("steve");

             System.out.println(names);
       }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
[stark, steve, jack]
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
