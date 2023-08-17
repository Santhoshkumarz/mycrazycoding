<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sorted in python</title>

    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="example of sorted function in python, how to use sorted function in python, how to use sorted in python, sorted built in function in python, sorted function for list in python, sorted function in list in python, sorted function in python, sorted function in python 2.7, sorted function in python 3, sorted function in python example, sorted function python 3, using sorted function in python, what is sorted function in python, sorted function in python in mycrazycoding, sorted function in mycrazycoding">

    <script src="file:///E:/jquery.js"></script>
	<script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     <style>.ads
    {
      display: none;
    }
     


    </style>
  </head>
  <body>
  <?php
   include "nav.php";
    ?>
   <?php
   include "build_in_fun_sidebar.php";
    ?>


     <div class="right_sidebar">

<div class="right_head">Built-in Functions</div>

<div class="right_topics">

<a href="py_method_Built in Functions_abs.php">abs()</a>
<a href="py_method_Built in Functions_all.php">all()</a>
<a href="py_method_Built in Functions_any.php">any()</a>
<a href="py_method_Built in Functions_ascii.php">ascii()</a>
<a href="py_method_Built in Functions_bin.php">bin()</a>
<a href="py_method_Built in Functions_bool.php">bool()</a>
<a href="py_method_Built in Functions_bytearray.php">bytearray()</a>
<a href="py_method_Built in Functions_bytes.php">bytes()</a>
<a href="py_method_Built in Functions_Callable.php">Callable()</a>
<a href="py_method_Built in Functions_chr.php">chr()</a>
<a href="py_method_Built in Functions_complex.php">complex()</a>
<a href="py_method_Built in Functions_divmod.php">divmod()</a>
<a href="py_method_Built in Functions_enumerate.php">enumerate()</a>
<a href="py_method_Built in Functions_eval.php">eval()</a>
<a href="py_method_Built in Functions_float.php">float()</a>
<a href="py_method_Built in Functions_format.php">format()</a>
<a href="py_method_Built in Functions_frozenset.php">frozenset()</a>
<a href="py_method_Built in Functions_hash.php">hash()</a>
<a href="py_method_Built in Functions_hex.php">hex()</a>
<a href="py_method_Built in Functions_id.php">id()</a>
<a href="py_method_Built in Functions_input.php">input()</a>
<a href="py_method_Built in Functions_int.php">int()</a>
<a href="py_method_Built in Functions_isinstance.php">isinstance()</a>
<a href="py_method_Built in Functions_iter.php">iter()</a>
<a href="py_method_Built in Functions_len.php">len()</a>
<a href="py_method_Built in Functions_list.php">list()</a>
<a href="py_method_Built in Functions_max.php">max()</a>
<a href="py_method_Built in Functions_min.php">min()</a>
<a href="py_method_Built in Functions_next.php">next()</a>
<a href="py_method_Built in Functions_object.php">object()</a>
<a href="py_method_Built in Functions_oct.php">oct()</a>
<a href="py_method_Built in Functions_ord.php">ord()</a>
<a href="py_method_Built in Functions_pow.php">pow()</a>
<a href="py_method_Built in Functions_print.php">print()</a>
<a href="py_method_Built in Functions_range.php">range()</a>
<a href="py_method_Built in Functions_reversed.php">reversed()</a>
<a href="py_method_Built in Functions_round.php">round()</a>
<a href="py_method_Built in Functions_set.php">set()</a>
<a href="py_method_Built in Functions_slice.php">slice()</a>
<a class="active" href="py_method_Built in Functions_sorted.php">sorted()</a>
<a href="py_method_Built in Functions_str.php">str()</a>
<a href="py_method_Built in Functions_sum.php">sum()</a>
<a href="py_method_Built in Functions_tuple.php">tuple()</a>
<a href="py_method_Built in Functions_type.php">type()</a>
<a href="py_method_Built in Functions_zip.php">zip()</a>



</div>

  

</div>

<div class="content"> 
  
<h1 id="problemhead">sorted() in Python</h1><br><br>
<p id="content_p">sorted function is used to convert the given number into Asscending order format.</p><br><br><br>
<h2>Syntax:</h2><br><br><br>
<div class="syntax">
<pre>
sorted(iterable,key,reverse)
</pre>
    </div><br><br><br><hr><br><br>
<br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
n = [30, 50, 10, 40, 20]

a = sorted(n)

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
[10, 20, 30, 40, 50]
</pre>
    </div><br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
n = ["C", "A", "E", "B", "D"]

a = sorted(n)

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
['A', 'B', 'C', 'D', 'E']
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
<pre>
n = ["Welcome", "To", "Mycrazycoding"]

a = sorted(n)

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
['Mycrazycoding', 'To', 'Welcome']
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
