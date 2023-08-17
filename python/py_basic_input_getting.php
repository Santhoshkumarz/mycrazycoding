<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Input get in python</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="print function in python example,print function in python 3.7,print function in python with end,print function in python 2 and 3,print function in python 3,print function python arguments,get input in python 3,getting an input in python,input in python code,getting input in list python,get input in while loop python,getting input from user in python 3,how get input in python,how to get input in python 3,input getting in python,input getting in python in mycrazycoding,input getting in mycrazycoding">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <style>
  	 table
  {
    width: 100%;
    padding-left: 10px;
   font-family: 'Roboto', sans-serif;
      border-collapse: collapse;


  }
  table,tr
  {
     
     font-size: 15px;
       letter-spacing: 0.4px;
    
    
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
  </style>  
  </head>
  <body>
  <?php
   include "nav.php";
    ?>
 <div class="sidebar" id="side">
  <div class="topics">
  <h1 id="H1">BASIC TUTORIAL</h1>
  <a    href="py_index.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Introduction</a>
  <a   href="py_basic_print.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Print</a>
  <a href="py_basic_escape_sequence.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Escape sequence</a>
  <a  href="py_basic_data_types.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Data types</a>
  <a class="active"  href="py_basic_input_getting.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Input get</a>

  <a href="py_basic_type_casting.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Type casting</a>
 
  <a href="py_basic_operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Types of operator</a>
  <a href="py_basic_if_statement.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> if,if else,elif,..</a>
  <a href="py_basic_loop.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Loop</a>
  <a href="py_basic_while_else.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> while else</a>
  <a href="py_basic_for_else.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> for else</a>


  <br><hr>

  <h1 id="H1">METHODS</h1>
  <a href="py_methods_math_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Math methods</a>
  <a href="py_methods_string_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> String methods</a>
  <a href="py_methods_list_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> List methods</a>
  <a href="py_methods_tuple_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Tuple methods</a>
  <a href="py_methods_set_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Set methods</a>
  <a href="py_methods_dictionary_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Dictionary  methods</a>
  <a href="py_methods_Built in Functions.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Built in Functions</a>

  <br>
  <hr>

    <h1 id="H1">FUNCTIONS</h1>
    <a  href="py_function.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Function</a>
    <a  href="py_function_types_of_function.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Types of function</a>
    <a  href="py_function_Recursion.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Recursion</a>
    <a  href="py_function_Arbitrary_arguments.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Arbitrary arguments function</a>
    <a  href="py_function_Keyword_arguments.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Keyword arguments function</a>
    <a  href="py_function_Default_parameter.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Default parameter function</a>

   


  <br>
  <hr>



  <h1 id="H1">ADVANCED TOPICS</h1>
  <a href="py_List_comprehension.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> List comprehension</a>
  <a href="py_Infinite_Iterator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Infinite Iterator</a>
  <a href="py_Combinatoric_Iterators.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Combinatoric Iterators</a>
  <a href="py_Iterators_terminating_on_the_shortest_input_sequence.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Itertools </a>
  <a href="py_Lambda.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Lambda</a>
  <a href="py_Regular_Expression.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Regular Expression</a>


  <a href="py_file_Handling.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> File Handling</a>
  <hr>
  <h1 id="H1">MODULES</h1>
  <a href="Numpy/py_Numpy.php"  target="_blank" id="A"><i class="fas fa-arrow-alt-circle-right"></i> Numpy</a>
  <a href="Pandas/py_Pandas.php"  target="_blank" id="A"><i class="fas fa-arrow-alt-circle-right"></i> Pandas</a>
   <br><hr></div>
<br><br>

</div>


<div class="content">


	  <h1 id="problemhead">Input getting</h1><br><br>
	  <p id="content_p">Input getting used to get the data from user in runtime.</p>
<br><br><br><hr><br><br><br>



<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
s = input()
</pre>
	  </div></div> <br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
	  
<pre>
s = input("Enter the String:")
</pre>
	  </div></div>
	 

<br> <br><br> <hr> <br><br><br>

<h2>Another data type</h2><br><br>
<table>
  
  <tr>
    <th id="first">Data type</th>
    <th id="second">Format</th>
  </tr>
  <tr>
    <td>int</td>
   
    <td>int(input())</td>
  </tr>
  <tr>
    <td>float</td>
    <td>float(input())</td>
  </tr>
    <tr>
    <td>String</td>
    <td>input()</td>
  </tr>
  <tr>
    <td>list</td>
    <td>list(input().split())</td>
  </tr>
  <tr>
    <td>tuple</td>
    <td>tuple(input().split())</td>
  </tr>
   <tr>
    <td>set</td>
    <td>set(input().split())</td>
  </tr>
   <tr>
    <td>Dictionary</td>
    <td>dict(input().split())</td>
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
</script>
<br><br><br>

 <?php
   include "footer.php";
    ?>









</div>




 

  </body>
</html>
