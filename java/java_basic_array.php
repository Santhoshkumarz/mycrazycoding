<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Array in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="2d array in java example,array in java,array in java basic,array in java basic program,array in java code,array in java example,array in java example with for loop,array in java exercises,array in java for beginners,array in java for loop,array in java functions,array in java methods,array in java practice questions,array in java program,array in java sample program,array in java using for loop,array in java with example,array in java with for loop,do array in java,functions of array in java,array in java,array in java in mycrazycoding">
   
    
    <script src="file:///E:/jquery.js"></script>
   
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

   <style>
     
body{
    counter-reset: Count-Value;
  }

    #myTable
  {
    width: 100%;
    padding-left: 10px;
    font-family: Roboto;

  }
  table,tr
  {
     
     font-size: 15px;
     word-spacing: 3px;
    letter-spacing: 0.3px;
    
  }
  
  table,th,td
  {
     padding: 15px;
     text-align: left;
  }
  #solution 
  {
    padding-left: 20px;
  }
  th
  {
    background-color:#F2F3F4 ;
    color: black;
  }
  tr td:first-child:before
  {
     counter-increment: Count-Value;   
     content:  counter(Count-Value)".";
  }
  #inside
  {
    color: blue;
    text-decoration: none;
  }
  #inside:hover
  {
    text-decoration: underline;
  }
  table tr:nth-child(odd){background-color: #f2f2f2;}

  input[type=text]
  {
      border-radius: 20px;
     
      box-shadow: 1px 1px 5px 5px #F0F3F4;
  }
  input:focus
  {
    
    outline: none;
    box-shadow: 0 0 2px 2px #3A5EF4;

  }
    #insideol
  {
        padding-left:25%;
        list-style-type:square;
  }
  #insideol li
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
  <a href="java_basic_data_types.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Datatypes</a>
  <a href="java_basic_types_of_operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Types of operator</a>
  <a href="java_basic_Keywords.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Keywords</a>
  <a href="java_basic_if.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> if,if else,..</a>
  <a href="java_basic_switch.php" id="A"><i class="fas fa-arrow-alt-circle-right"></i> Switch</a>
  <a href="java_basic_loop.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Loop</a>
  <a class="active" href="java_basic_array.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Array</a>
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

<h1 id="problemhead">Array in java</h1>
<br><br>
<p id="content_p">Array is a collection of similar data type elements. The size of the array is fixed. In array elements are stored in an contiguous memory location. Using indexing we can access the array elements. Array index starts with 0,1,2 and so on.</p><br><br>
<br><hr><br><br><br>
<h1 id="problemhead">Types of array</h1>
<br><br>
    <ol id="insideol">
      <li>One Dimensional array</li>
      <li>Multi Dimensional array</li>
    </ol>







<br><br><br><hr><br><br><br>

<h1 id="problemhead">1. One Dimensional Array</h1><br><br><br>
<p id="content_p">In One dimentional array, the data storing index format is 0,1,2...N.</p>
<br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
public class Main
{
      public static void main(String[] args) 
      {
            int a[] = { 1, 2, 3, 4, 5 };

            System.out.println(a[4]);
      }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
5
</pre>
    </div>
<br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
public class Main
{
      public static void main(String[] args) 
      {
            int [] a = new int [3];

            a[0] = 1;
            a[1] = 2;
            a[2] = 3;

            for(int i=0;i<3;i++) 
            {
                 System.out.println(a[i]);
            }
      }
} 
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
1
2
3
</pre>
    </div>


    <br><br><br><br><hr><br><br><br><br>
<h1 id="problemhead">2. Multi Dimensional Array</h1>
<br><br>
<p id="content_p">In multi dimentional array, the data storing index format is [0][0],[0][1],...[n][n]. The multi dimentional array are mostly used in matrix and graph.</p>
<br><br><br>

<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
public class Main
{
      public static void main(String[] args) 
      {
            int a [][] = {
                              {1, 2, 3},
                              {4, 5, 6},
                              {7, 8, 9}
                          };

            System.out.print(a[0][1]);
       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
2
</pre>
    </div>
 <br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
public class Main
{
        public static void main(String[] args) 
        {
              int a[][]=new int [5][5];

              a[0][0] = 1;
              a[0][1] = 2;
              a[4][4] = 3;

              System.out.println(a[4][4]);
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
<br><br><br><br><hr><br><br><br><br>

    <h2>Array methods</h2><br><br><br>
<table id="myTable">
   <tr>
     <th style="width: 10%">S.No</th>
     <th style="width: 30%">Method</th>
     <th style="width: 60%">Explain</th>

   </tr>

   <tr>
     <td></td>
     <td><a id="inside" href="java_basic_array_Array.length.php">Array.length</a></td>
     <td>This method is used to find the length of the array.</td>
   </tr>


     <tr>
     <td></td>
     <td><a id="inside" href="java_basic_array_Arrays.sort.php">Arrays.sort()</a></td>
     <td>This method is used to sort the array elements.</td>
   </tr>



     <tr>
     <td></td>
     <td><a id="inside" href="java_basic_array_Arrays.equals.php">Arrays.equals()</a></td>
     <td>This method is used to compare two arrays whether it is equal or not.</td>
   </tr>



     <tr>
     <td></td>
     <td><a id="inside" href="java_basic_array_System.arraycopy.php">System.arraycopy()</a></td>
     <td>This method is used to copy all the elements in one array to another array.</td>
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
