<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Relational Operator in Numpy</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="less than operator in numpy,less than operator in numpy in python,greater than operator in numpy,greater than operator in numpy in python,equal to operator in numpy,equal to operator in numpy in python,not equal to operator in numpy,not equal to operator in numpy in python,less than or equal to operator in numpy,less than or equal to operator in numpy in python,greater than or equal to operator in numpy,greater than or equal operator in numpy in python,relational operator in numpy,relational operator in numpy in python,relational operator in numpy in mycrazycoding,relational operator in numpy in python in mycrazycoding">
   
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
      .green
      {
          color:#E54D28 ;
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
  <a  class="active" href="py_Numpy_Relational Operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Relational Operator</a>
  <a  href="py_Numpy_Assignment Operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Assignment Operator</a>
  <a  href="py_Numpy_Membership Operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Membership Operator</a>
  <br>
  <hr>

     <h1 id="H1">METHODS</h1>
  <a  href="py_Numpy_Size.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Size</a>
  <a  href="py_Numpy_Finding LCM.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Finding LCM</a>
  <a  href="py_Numpy_Finding GCD.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Finding GCD</a>
  <a  href="py_Numpy_Dimensional.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Dimensional</a>
  <a  href="py_Numpy_Abs,sum,minumum.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i>  Abs, sum, min, max, sorted</a>

    
   <br><hr></div>
<br><br>

</div>

<div class="content">
  
<h1 id="problemhead">Relational Operator in Numpy:</h1><br><br>
<p id="content_p">In Numpy >, <, >=, <=, !=, == are the operations that are available in Relational operator.It is used to compare the values.</p>
<br><br><br><hr><br><br><br>

    <h2>Less than operator( <span class="green">&lt</span> )</h2>
    <br><br><br>



<div class="box">
  <div class="heading">Example</div>
    <div class="src">
<pre>
import numpy as np

a = np.array([ 3, 8, 9])

b = np.array([ 4, 8, 7])

c = a&ltb

print(c)
</pre>
    </div></div><br>
<br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
[True False False]
</pre>
    </div><br><br><br><hr><br><br><br>


    <h2>Greater than operator(<span class="green"> &gt </span>)</h2>
    <br><br><br>



<div class="box">
  <div class="heading">Example</div>
    <div class="src">
<pre>
import numpy as np

a = np.array([ 3, 8, 9])

b = np.array([ 4, 8, 7])

c = a>b

print(c)
</pre>
    </div></div><br><br>

<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
[False False  True]
</pre>
    </div><br><br><br><hr><br><br><br>



    <h2>Less than or equal to operator( <span class="green">&lt= </span>)</h2>
    <br><br>
<br>


<div class="box">
  <div class="heading">Example</div>
    <div class="src">
<pre>
import numpy as np

a = np.array([ 3, 8, 9])

b = np.array([ 4, 8, 7])

c = (a <= b)

print(c)
</pre>
    </div></div><br>
<br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
[True  True False] 
</pre>
    </div><br><br><br><hr><br><br><br>



    <h2>Greater than or equal to operator( <span class="green">&gt=</span> )</h2>
    <br><br>
<br>


<div class="box">
  <div class="heading">Example</div>
    <div class="src">
<pre>
import numpy as np

a = np.array([ 3, 8, 9])

b = np.array([ 4, 8, 7])

c = (a >= b)

print(c)   
</pre>
    </div></div><br>
<br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
[False  True  True]
</pre>
    </div><br><br><br><hr><br><br><br>



    <h2>Equal to operator( <span class="green">==</span> )</h2>
    <br><br>
<br>


<div class="box">
  <div class="heading">Example</div>
    <div class="src">
<pre>
import numpy as np

a = np.array([ 3, 8, 9])

b = np.array([ 4, 8, 7])

c = (a == b)

print(c)
</pre>
    </div></div><br>
<br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
[False  True False] 
</pre>
    </div><br><br><br><hr><br><br><br>


    <h2>Not equal to operator( <span class="green">!=</span> )</h2>
    <br><br><br>



<div class="box">
  <div class="heading">Example</div>
    <div class="src">
<pre>
import numpy as np

a = np.array([ 3, 8, 9])

b = np.array([ 4, 8, 7])

c = (a != b)

print(c)
</pre>
    </div></div><br><br>

<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
[True False  True] 
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
