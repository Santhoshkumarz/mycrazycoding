<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Array reshape in Numpy</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="reshape in numpy,array reshape in numpy,array reshape in python,array reshape python numpy,correct syntax of the reshape() function in numpy array python is,how does reshape work numpy,how to reshape an array in numpy,how to reshape array in numpy,how to reshape numpy array in python,how to use np.reshape,how to use reshape function in numpy,how to use reshape in numpy,np.array().reshape,np.reshape in python,np.reshape() python,numpy array reshape in place,numpy array reshape python,numpy reshape array in place,reshape an array in numpy,reshape an array in python,reshape array in python numpy,reshape array in python using numpy,reshape array into numpy,reshape array size numpy,reshape array to numpy,reshape array with numpy,reshape in numpy example,reshape in numpy python,reshape in python numpy,reshape numpy array in python,reshape of array in python numpy,reshape() function in numpy array python,reshape() method in numpy array,syntax for reshape() in numpy array,syntax of reshape() method in numpy array is,x.reshape python,array reshape in numpy in python">
   
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
  <a  class="active" href="py_Numpy_Array reshape.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Array reshape</a>
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
  <a  href="py_Numpy_Finding LCM.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Finding LCM</a>
  <a  href="py_Numpy_Finding GCD.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Finding GCD</a>
  <a  href="py_Numpy_Dimensional.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Dimensional</a>
  <a  href="py_Numpy_Abs,sum,minumum.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i>  Abs, sum, min, max, sorted</a>

    
   <br><hr></div>
<br><br>

</div>

<div class="content">
  
<h1 id="problemhead">Array reshape in Numpy</h1><br><br>
<p id="content_p">Array reshape is used to rearrange the array shape by using variable_name.reshape concept.</p>
<br>
  <br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
import numpy as np

a = np.array([1, 2, 3, 4, 5, 6])

print(a.reshape(2, 3))
</pre>
    </div></div><br><br>

<h2>Output</h2>
 <br><br>
    <div class="output1">
<pre>
[[1 2 3]
 [4 5 6]]
</pre>
    </div><br><br><br><hr><br><br> <br>


 
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
import numpy as np

a = np.array([1, 2, 3, 4, 5, 6])

print(a.reshape(3,2))
</pre>
    </div></div><br>
<br>
<h2>Output</h2>
 <br><br>
    <div class="output1">
<pre>
[[1 2]
 [3 4]
 [5 6]]
</pre>
    </div><br><br><br><hr><br><br><br>



<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
<pre>
import numpy as np

a = np.array([1, 2, 3, 4, 5, 6, 7, 8])

print(a.reshape(2,4))
</pre>
    </div></div><br>
<br>
<h2>Output</h2>
    <br><br>
    <div class="output1">
<pre>
[[1 2 3 4]
 [5 6 7 8]]
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
