<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Lambda Filter in python</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="difference between lambda and filter in python,how to use filter and lambda in python,lambda and filter in python,lambda filter array python,lambda filter dictionary python,lambda filter in python 3,lambda filter python dataframe,lambda filter python example,lambda filter python list,lambda filter python3,lambda filter regex python,lambda function filter in python,lambda map and filter function in python,lambda map and filter in python,lambda map filter and reduce in python,lambda with filter in python,using filter and lambda in python,lambda and filter in python,lambda and filter in python in mycrazycoding">
   
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
      .green
      {
          color:green;
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
  <a  href="py_basic_input_getting.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Input get</a>

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
  <a  href="py_Combinatoric_Iterators.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Combinatoric Iterators</a>
  <a href="py_Iterators_terminating_on_the_shortest_input_sequence.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Itertools </a>
  <a  class="active"  href="py_Lambda.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Lambda</a>
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
  
<h1 id="problemhead">Lambda Filter in python</h1><br><br>
<p id="content_p">It will execute the lambda operation if the expression result is "True". Otherwise it will not execute.</p>
  <br><br><br><hr><br><br><br>




 
<div class="box">
  <div class="heading">Even number finding</div>
    <div class="src">
<pre>
l = [ 1, 2, 3, 4, 5]

n = list(filter(lambda x : x % 2 == 0, l))

print(n)
</pre>
    </div></div><br>
<br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
[2, 4]
</pre>
    </div><br><br><br><hr><br><br><br>








<div class="box">
  <div class="heading">Odd number finding</div>
    <div class="src">
<pre>
l = [ 1, 2, 3, 4, 5]

n = list(filter(lambda x : x % 2 != 0, l))

print(n)
</pre>
    </div></div><br>
<br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
[1, 3, 5]   
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
</script>
<br><br><br>


<?php
   include "footer.php";
    ?>

</div>

  </body>
</html>
