<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Input in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="get an input in java,get char as input in java,get input and print in java,get input as string in java,get input char in java,get input for array in java,get input in array in java,get input in java class,get input in java example,get input java method,get input java string,get input line java,get input of string in java,get user input in java example,get user input in java string,getting input in runtime java,how do you get input in java,how to get an input in java,how to get array input in java,how to get float input in java,how to get input char in java,how to get input from user in java,how to get input in array in java,how to get input in java,how to get input in java array,how to get input in java from user,how to get input in java program,Input get in java,Input get in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
  




    <style>
      
.content
{
    overflow-x: auto;
}
  table
  {
    width: 100%;
    padding-left: 10px;
 font-family: 'Roboto', sans-serif;
    font-size:20px;
     word-spacing: 3px;
    letter-spacing: 1px;
     border-collapse: collapse;


  }
  table,tr
  {
     
     font-size: 14px;
    
    
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
    font-weight: 700;
    
  }


#inside
{
     font-family: 'Roboto', sans-serif;
    padding-left:20%;
    font-size:19px;
    list-style-type:disc;
}
  table tr:nth-child(odd){background-color: #f2f2f2;}

  @media(max-width: 390px)
  {

         table,tr
         {
                 font-size: 15px;
         }
  }
 
  b
  {
        font-weight: 700;
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
  <a class="active" href="java_basic_input_get.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Input get</a>
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




<h1 id="problemhead">Input get in java</h1><br><br>
<p id="content_p">There is two different way to get the input in java.<b> Scanner and BufferedReader.</b></p>
<br><br><br><hr><br><br><br>

<h1 id="problemhead">1. Scanner</h1> 
<br><br>
<p id="content_p">Scanner is used to get the input in a runtime.It's buffer memory size is 1KB.</p>
<br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
import java.util.Scanner;

public class Main
{
    public static void main(String[] args) 
    {
          Scanner object = new Scanner(System.in);

          int a = object.nextInt();   

          System.out.print(a);
    }
}
</pre>
    </div></div>  <br><br>
    <h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
Input  :9
Output :9
</pre>
    </div>
<br><br><br><br>
<h2>Another data types Getting</h2>
<br><br>

 <table>
  
  <tr>
    <th id="first">Data type</th>
    <th id="second">Scanner</th>
  </tr>
  <tr>
    <td>int</td>
   
    <td>object.nextInt()</td>
  </tr>
  <tr>
    <td>float</td>
    <td>object.nextFloat()</td>
  </tr>
  <tr>
    <td>String</td>
    <td>object.nextLine()</td>
  </tr>
  <tr>
    <td>char</td>
    <td>object.next().charAt(0);</td>
  </tr>
   <tr>
    <td>double</td>
    <td>object.nextDouble()</td>
  </tr>
   <tr>
    <td>long</td>
    <td>object.nextLong()</td>
  </tr>
</table>


     <br> <br><br>
     <hr>


  <br> <br><br>
    

      
    <br><h1 id="problemhead">2. BufferedReader</h1><br><br>
    <p id="content_p">BufferedReader is used to get the input in a runtime. It's buffer memory size is 8KB. It is faster than scanner.</p>
<br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
import java.io.*;

public class Main
{
    public static void main(String[] args) throws IOException
    {
        BufferedReader read = new BufferedReader(new InputStreamReader(System.in));

        //get integer

        int a=Integer.parseInt(read.readLine());

        System.out.println(a);


        //get string 

        String s=read.readLine();

        System.out.println(s);
    
    }
}
</pre>
    </div></div>  <br><br>
    <h2>Output</h2><br><br>
    <div class="output1">
<pre>
Input   :9
Output  :9
Input   :Books
Output  :Books
</pre>
    </div>
<br><br><br><br>
<h2>Another data types Getting</h2>
<br><br><br>
    <table>
  
  <tr>
    <th id="first">Data type</th>
    <th id="second">BufferedReader</th>
  </tr>
  <tr>
    <td>int</td>
   
    <td>Integer.parseInt(read.readLine());</td>
  </tr>
  <tr>
    <td>float</td>
    <td>Float.parseFloat(read.readLine());</td>
  </tr>
  <tr>
    <td>String</td>
    <td>read.readLine();</td>
  </tr>
 
   <tr>
    <td>double</td>
    <td>Double.parseDouble(read.readLine());</td>
  </tr>
   <tr>
    <td>long</td>
    <td>Long.parseLong(read.readLine());</td>
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
