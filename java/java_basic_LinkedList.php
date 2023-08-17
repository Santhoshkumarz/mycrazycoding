<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>LinkedList in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="all methods of linkedlist in java,array of linkedlist in java,create your own linkedlist in java,example of arraylist and linkedlist in java,example of linkedlist in java,how to create linkedlist in java,how to create your own linkedlist in java,how to declare a linked list in java,how to make a linked list java,how to return a linked list in java,how to use linkedlist class in java,how to use linkedlist in java,java linked list exercises,linked list in java,linked list in java and examples,linked list in java code example,linked list in java for beginners,linked list java basics,linked list using array java,linked list using java,linkedlist in java,linkedlist in java 8,linkedlist in java class,linkedlist in java code,linkedlist in java example,linkedlist in java example programs,linkedlist in java functions,linkedlist in java methods,linkedlist in java program,linkedlist in java source code,linkedlist in java with example,when to use arraylist and linkedlist,when to use arraylist and linkedlist in java,when to use linkedlist in java,linked list in java,linked list in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
    table
  {
    width: 100%;
    padding-left: 5px;
    font-family: 'Roboto', sans-serif;
     border-collapse: collapse;


  }
  table,tr
  {
     
     font-size: 16px;
    
    
  }
  
  table,th,td
  {
   
     padding: 13px;
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
table tr:nth-child(odd){background-color: #f2f2f2;}

table a
{
   text-decoration: none;
   color: blue;
}
table a:hover
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
  <a class="active" href="java_basic_LinkedList.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> LinkedList</a>
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

 
    <h1 id="problemhead">LinkedList in java</h1>
<br><br><br>
<p id="content_p">LinkedList is a collection of similar data type elements. The size of LinkedList is Dynamic. LinkedList class uses <b>doubly linked list</b> concept.</p><br>
<p id="content_p">The ArrayList and LinkedList methods are same. But the main reason for creating LinkedList is , if you add or remove a data between the ArrayList , it's take more time but LinkedList take less time.</p>

   <br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Add</div>
    <div class="src">
    
<pre>
import java.util.LinkedList;

public class Main
{
      public static void main(String[] args) 
      {
            LinkedList&ltInteger> num = new LinkedList&ltInteger>();

            num.add(1);
            num.add(2);
            num.add(3);

            System.out.println(num);
      }
}
</pre>
    </div></div>
<br> <br>

<h2>Output</h2><br> <br>
    <div id="output">
    
<pre>
[1, 2, 3]
</pre>
    </div>
   <br> <br> <br><hr><br> <br> <br>
   <div class="box">
  <div class="heading">Remove</div>
    
    <div class="src">
    
<pre>
import java.util.LinkedList;

public class Main
{
      public static void main(String[] args) 
      {
            LinkedList&ltInteger> num = new LinkedList&ltInteger>();

            num.add(1);
            num.add(2);
            num.add(3);

            num.remove(0);

            System.out.println(num);
      }
}
</pre>
    </div></div>
<br> <br>

<h2>Output</h2><br> <br>
    <div id="output">
    
<pre>
[2, 3]
</pre>
    </div>

   <br> <br> <br><hr><br> <br> <br>




    <div class="box">
  <div class="heading">Size</div>
  
    <div class="src">
    
<pre>
import java.util.LinkedList;

public class Main
{
      public static void main(String[] args) 
      {
            LinkedList&ltInteger> num = new LinkedList&ltInteger>();

            num.add(1);
            num.add(2);
            num.add(3);

            System.out.println(num.size());
      }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
3
</pre>
    </div>
   <br> <br> <br><hr><br> <br> <br>






    <div class="box">
  <div class="heading">Clear</div>

    <div class="src">
    
<pre>
import java.util.LinkedList;

public class Main
{
      public static void main(String[] args) 
      {
            LinkedList&ltInteger> num = new LinkedList&ltInteger>();

            num.add(1);
            num.add(2);
            num.add(3);

            num.clear();

            System.out.println(num);
      }
}
</pre>
    </div></div>
<br> <br>

<h2>Output</h2><br> <br>
    <div id="output">
    
<pre>
[]
</pre>
    </div>
   <br> <br> <br><hr><br> <br> <br>
<div class="box">
  <div class="heading">Get</div>
    <div class="src">
    
<pre>
import java.util.LinkedList;

public class Main
{
      public static void main(String[] args) 
      {
            LinkedList&ltInteger> num = new LinkedList&ltInteger>();

            num.add(1);
            num.add(2);
            num.add(3);

            System.out.println(num.get(1));
      }
}
</pre>
    </div></div>
<br> <br>

<h2>Output</h2><br> <br>
    <div id="output">
    
<pre>
2
</pre>
    </div>
   <br> <br> <br><hr><br> <br> <br>
    <div class="box">
  <div class="heading">Set</div>
   
    <div class="src">
    
<pre>
import java.util.LinkedList;

public class Main
{
      public static void main(String[] args) 
      {
            LinkedList&ltInteger> num = new LinkedList&ltInteger>();

            num.add(1);
            num.add(2);
            num.add(3);

            num.set(1,99);

            System.out.println(num);
      }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
[1, 99, 3]
</pre>
    </div>
   <br> <br> <br><hr><br> <br> <br>
<h1 id="problemhead">print each  element:</h1><br>
<br><br>
<div class="box">
  <div class="heading">Method-1</div>
    <div class="src">
    
<pre>
import java.util.LinkedList;

public class Main
{
      public static void main(String[] args) 
      {
            LinkedList&ltInteger> num = new LinkedList&ltInteger>();

            num.add(1);
            num.add(2);
            num.add(3);

            for (int i=0;i&ltnum.size();i++)
            {
                System.out.println(num.get(i));
            }
      }
}
</pre>
    </div></div>
<br> <br>

<h2>Output</h2><br> <br>
    <div class="output1">
    
<pre>
1
2
3
</pre>
    </div>
<br><br><br><hr>


<br><br><br>
<div class="box">
  <div class="heading">Method-2</div>
    <div class="src">
    
<pre>
import java.util.LinkedList;

public class Main
{
      public static void main(String[] args) 
      {

            LinkedList&ltInteger> num = new LinkedList&ltInteger>();

            num.add(1);
            num.add(2);
            num.add(3);

            for (int i:num)
            {
                System.out.println(i);
            }
      }
}
</pre>
    </div></div>
<br>
 <br><br>
<h2>Output</h2><br> <br>
    <div class="output1">
    
<pre>
1
2
3
</pre>
    </div>
<br> <br> <br><hr> <br>
    <br> <br>
<h1 id="problemhead">String:</h1>
<br><br><br>
<div class="box">
  <div class="heading">Add</div>
    <div class="src">
    
<pre>
import java.util.LinkedList;

public class Main
{
      public static void main(String[] args) 
      {
            LinkedList&ltString> name = new LinkedList&ltString>();

            name.add("jack");
            name.add("stark");
            name.add("steve");

            System.out.println(name);
      }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
[jack, stark, steve]
</pre>
    </div>
<br><br><br><hr>
    <br><br><br>
<h1 id="problemhead">Extra Method</h1><br> <br>  
<table>
  
  <tr>
    <th>Method</th>
    <th>Explain</th>
  </tr>
  <tr>
    <td><a href="java_basic_linked_list_addFirst.php">addFirst()</a></td>
    <td>This method is used to add the element in the first index of the list.</td>
  </tr>
  <tr>
    <td><a href="java_basic_linked_list_addLast.php">addLast()</a></td>
    <td>This method is used to add the element in the last index of the list.</td>
  </tr>
  <tr>
    <td><a href="java_basic_linked_list_removeFirst.php">removeFirst()</a></td>
    <td>This method is used to remove the first index element in the list.</td>
  </tr>
  <tr>
    <td><a href="java_basic_linked_list_removeLast.php">removeLast()</a></td>
    <td>This method is used to remove the last index element in the list.</td>
  </tr>
   <tr>
    <td><a href="java_basic_linked_list_getFirst.php">getFirst()</a></td>
    <td>This method is used to get the first index element in the list.</td>
  </tr>
  <tr>
    <td><a href="java_basic_linked_list_getLast.php">getLast()</a></td>
    <td>This method is used to get the last index element in the list</td>
  </tr>
   
</table>




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
