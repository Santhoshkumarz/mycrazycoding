<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Zip_longest in python</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="from itertools import zip_longest,iter zip_longest,itertools import zip_longest,itertools zip_longest python 2,itertools.izip in python 3,itertools.zip_longest example,itertools.zip_longest in python,itertools.zip_longest python 3,izip_longest in python 2.7,izip_longest in python 3,python 3 zip_longest,python 3 zip_longest example,python itertools zip_longest,python zip longest list,python zip longest repeat,python zip to longest,python3 zip_longest,zip_longest function,zip_longest function python,zip_longest in py,zip_longest in python,zip_longest in python 2.7,zip_longest in python 3,zip_longest itertools,zip_longest itertools python 3,zip_longest python 2.7,zip_longest python example,zip longest itertools in python,itertools zip longest in oython,zip longest itertools in python in mycrazycoding">
   
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
  <a class="active"  href="py_Iterators_terminating_on_the_shortest_input_sequence.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Itertools </a>
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
  
<h1 id="problemhead">Zip_longest in python</h1><br><br>

<p id="content_p">zip_longest() function is used to print the values of iterables alternatively in the sequence.  If one of the iterables is printed fully, the remaining values are filled by the values assigned to fillvalue parameter.</p>
  <br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
from itertools import zip_longest

l = [ 1, 2, 3, 4, 5]

m = [ "A", "B", "C", "D", "E"]

for i in zip_longest(l,m):

    x,y = i

    print(x,y)
</pre>
    </div></div><br>
<br><br>
<h2>Output</h2>
 <br><br>
    <div class="output1">
<pre>
1 A
2 B
3 C
4 D
5 E 
</pre>
    </div><br><br><br><hr><br><br>


<br>
    <div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
from itertools import zip_longest

l = [ 1, 2, 3, 4, 5]

m = [ "A", "B", "C", "D", "E", "F", "G", "H"]

for i in zip_longest(l,m):

    x,y = i

    print(x,y)
</pre>
    </div></div><br>
<br><br>
<h2>Output</h2>
 <br><br>
    <div class="output1">
<pre>
1 A
2 B
3 C
4 D
5 E
None F
None G
None H
</pre>
    </div><br><br><br><hr><br><br><br>

 <div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
<pre>
from itertools import zip_longest

l = [ 1, 2, 3, 4, 5]

m = [ "A", "B", "C", "D", "E", "F", "G"]

for i in zip_longest(l,m,fillvalue = "mycrazycoding"):

    x,y = i

    print(x,y)
</pre>
    </div></div><br>
<br><br>
<h2>Output</h2>
 <br><br>
    <div class="output1">
<pre>
1 A
2 B
3 C
4 D
5 E
mycrazycoding F
mycrazycoding G
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
