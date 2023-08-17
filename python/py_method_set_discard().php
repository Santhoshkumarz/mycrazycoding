<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>set discard in python</title>

    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="discard in set in python, discard in set python, set .discard() .remove() & .pop(), set .discard() .remove() & .pop() hackerrank solution in python, set .discard() .remove() & .pop() in python, set discard python, set remove duplicates python, set remove element python, set remove in python, set remove item python, set remove method python, set remove value python, what is difference between discard and remove in python, set discard in python in mycrazycoding, set discard in mycrazycoding,">
    <script src="file:///E:/jquery.js"></script>
	<script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style type="text/css">.ads{display:none}
     


    </style>
  </head>
  <body>
  <?php
   include "nav.php";
    ?>
   <?php
   include "set_method_sidebar.php";
    ?>


         <div class="right_sidebar">

<div class="right_head">Set Methods</div>

<div class="right_topics">

<a href="py_method_set_add().php">add()</a>
<a href="py_method_set_clear().php">clear()</a>
<a href="py_method_set_copy().php">copy()</a>
<a href="py_method_set_difference().php">difference()</a>
<a href="py_method_set_difference_update().php">difference_update() </a>
<a class="active" href="py_method_set_discard().php">discard() </a>
<a href="py_method_set_intersection().php">intersection()</a>
<a href="py_method_set_intersection_update().php">intersection update()</a>
<a href="py_method_set_isdisjoint().php">isdisjoint()</a>
<a href="py_method_set_issubset().php">issubset()</a>
<a href="py_method_set_issuperset().php">issuperset()</a>
<a href="py_method_set_pop().php">pop()</a>
<a href="py_method_set_remove().php">remove()</a>
<a href="py_method_set_symmetric_difference().php">symmetric difference()</a>
<a href="py_method_set_symmetric_difference_update().php">symmetric difference update()</a>
<a href="py_method_set_union().php">union()</a>
<a href="py_method_set_update().php">update()</a>




</div>

  

</div>

<div class="content"> 
  
<h1 id="problemhead">set.discard() in python </h1><br><br>
<p id="content_p">"discard()" function is used to remove the specified element in the set. It will not show error if the specified element is not available in the set.</p>
<br><br><h2>Syntax:</h2><br><br><br>

<div class="syntax">
<pre>
set.discard(value)
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
n = {10, 30, 50}

n.discard(30)

print(n)
</pre>
    </div></div><br>
<br><h2>Output</h2><br>
 <br>
    <div id="output">
<pre>
{10, 50}
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
n = {10, 30, 50}

n.discard(20)

print(n)
</pre>
    </div></div><br>
<br><h2>Output</h2><br>
 <br>
    <div id="output">
<pre>
{10, 50, 30}
</pre>
    </div><br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
<pre>
n = {"A", "B", "AB", "A"}

n.discard("A")

print(n)
</pre>
    </div></div><br>
<br><h2>Output</h2><br>
 <br>
    <div id="output">
<pre>
{'B', 'AB'}
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
