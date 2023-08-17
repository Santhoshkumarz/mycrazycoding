<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dictionary fromkeys in python</title>

    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="dict.fromkeys in python, dict.fromkeys(x), dictionary from keys and values python, dictionary from keys python, dictionary fromkeys function in python, dictionary fromkeys in python, dictionary fromkeys method in python, dictionary fromkeys python, dictionary fromkeys python 3, fromkeys in dictionary, fromkeys in dictionary in python, fromkeys method in dictionary python, python dictionary fromkeys(), dictionary fromkeys in python in mycrazycoding, dictionary fromkeys in mycrazycoding">
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
   include "Dictionary_method_sidebar.php";
    ?>

         <div class="right_sidebar">

<div class="right_head">Dictionary Methods</div>

<div class="right_topics">

<a href="py_method_dictionary_clear().php">clear()</a>
<a href="py_method_dictionary_copy().php">copy()</a>
<a class="active" href="py_method_dictionary_fromkeys().php">fromkeys()</a>
<a href="py_method_dictionary_get().php">get()</a>
<a href="py_method_dictionary_items().php">items() </a>
<a href="py_method_dictionary_key().php">key() </a>
<a href="py_method_dictionary_pop().php">pop()</a>
<a href="py_method_dictionary_popitem().php">popitem()</a>
<a href="py_method_dictionary_update().php">update()</a>
<a href="py_method_dictionary_values().php">values()</a>



</div>

  

</div>

<div class="content"> 
  
<h1 id="problemhead">dictionary.copy() in python </h1><br><br>
<p id="content_p">"fromkeys()" function is used to combine the two inputs. First input will be consider as a key and second input will be consider as a value.</p>
<br><br><br>
<h2>Syntax:</h2><br><br><br>

<div class="syntax">
<pre>
dictionary.fromkeys(keys,value)
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
n = ("key")

m = "value"

a = dict.fromkeys(n,m)

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
{'k': 'value', 'e': 'value', 'y': 'value'}
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
n = ("abcd")

m = 10

a = dict.fromkeys(n,m)

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
{'a': 10, 'b': 10, 'c': 10, 'd': 10}
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
<pre>
n = ("abcdef")

m = 5

a = dict.fromkeys(n,m)

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
{'a': 5, 'b': 5, 'c': 5, 'd': 5, 'e': 5, 'f': 5}
</pre>
    </div>
<br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-4</div>
    <div class="src">
<pre>
n = ["key"]

m = "value"

a = dict.fromkeys(n,m)

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
{'key': 'value'}
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
