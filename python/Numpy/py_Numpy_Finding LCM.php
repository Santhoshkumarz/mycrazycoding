<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Finding LCM in Numpy</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="finding lcm in python,lcm in numpy,lcm of two numbers in python,least common denominator numpy,least common multiple numpy,least common multiple python numpy,module 'numpy' has no attribute 'lcm',numpy glcm,numpy lcm,numpy lcm of list,numpy lcm reduce,numpy least common denominator,numpy least common multiple,python lcm numpy,python numpy lcm,finding lcm in numpy in mycrazycoding,lcm in numpy in mycrazycoding">
   
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
  <h1 id="H1">NUMPY TUTORIAL</h1>
  <a  href="py_Numpy.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Introduction</a>
  <a  href="py_Numpy_Array Create.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Array Create</a>
  <a  href="py_Numpy_index.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array index</a>
  <a  href="py_Numpy_Data type finding.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Data type finding</a>
  <a  href="py_Numpy_Array copy.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array copy</a>
  <a  href="py_Numpy_Array view.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array view</a>
  <a  href="py_Numpy_Array shape.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array shape</a>
  <a  href="py_Numpy_Array reshape.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array reshape</a>
  <a  href="py_Numpy_Array join.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array join</a>
  <a  href="py_Numpy_Array split.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array split</a>
  <a  href="py_Numpy_Array search.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array search</a>
  <a   href="py_Numpy_Array Filter.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array Filter</a>
  <a  href="py_Numpy_Slicing.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array Slicing</a>
  <a  href="py_Numpy_For loop.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array Iteration</a>

  <br><hr>

  <h1 id="H1">OPERATOR</h1>
  <a  href="py_Numpy_Arithmatic Operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Arithmatic Operator</a>
  <a  href="py_Numpy_Relational Operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Relational Operator</a>
  <a  href="py_Numpy_Assignment Operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Assignment Operator</a>
  <a  href="py_Numpy_Membership Operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Membership Operator</a>
  <br>
  <hr>

     <h1 id="H1">METHODS</h1>
  <a  href="py_Numpy_Size.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Size</a>
  <a  class="active" href="py_Numpy_Finding LCM.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Finding LCM</a>
  <a  href="py_Numpy_Finding GCD.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Finding GCD</a>
  <a  href="py_Numpy_Dimensional.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Dimensional</a>
  <a  href="py_Numpy_Abs,sum,minumum.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i>  Abs, sum, min, max, sorted</a>

    
   <br><hr></div>
<br><br>

</div>



<div class="content">
  
<h1 id="problemhead">Finding LCM in Numpy</h1><br><br>
<p id="content_p">LCM function is used to find the least common divisor for the given numbers.</p>
<br><br><br><hr><br><br><br>


<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
import numpy as np

n = 8
m = 12

a = np.lcm(n,m)

print(a)
</pre>
    </div></div><br>
<br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
24
</pre>
    </div><br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
import numpy as np

n = 4
m = 8

a = np.lcm(n,m)

print(a)
</pre>
    </div></div><br>
<br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
8 
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
