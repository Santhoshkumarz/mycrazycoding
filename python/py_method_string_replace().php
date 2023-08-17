<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>string replace in python</title>

    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="find and replace in string python 3, how to string replace in python, how to use replace string in python, how to use string replace in python, python replace keyword in string, python replace last character in string, python string replace in place, replace a string in python, replace string in a list python, replace string in file using python, string replace using python, string replace value python, string replace with python, string replace in python in mycrazycoding, string replace in mycrazycoding">
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
   include "String_method_sidebar.php";
    ?>



  <div class="right_sidebar">

<div class="right_head">String Methods</div>

<div class="right_topics">

<a  href="py_method_string_capitalize().php">string capitalize()</a>
<a href="py_method_string_casefold().php">string casefold()</a>
<a href="py_method_string_center().php">string center()</a>
<a href="py_method_string_count().php">string count()</a>
<a href="py_method_string_expandtabs().php">string expandtabs() </a>
<a href="py_method_string_find().php">string find() </a>
<a href="py_method_string_format().php">string format()</a>
<a href="py_method_string_format_map().php">string format map()</a>
<a href="py_method_string_index().php">string index()</a>
<a href="py_method_string_isalnum().php">string isalnum()</a>
<a href="py_method_string_isalpha().php">string isalpha()</a>
<a href="py_method_string_isdecimal().php">string isdecimal()</a>
<a href="py_method_string_isdigit().php">string isdigit()</a>
<a href="py_method_string_isidentifier().php">string isidentifier()</a>
<a href="py_method_string_islower().php">string islower()</a>
<a href="py_method_string_isnumeric().php">string isnumeric()</a>
<a href="py_method_string_isprintable().php">string isprintable()</a>
<a href="py_method_string_isspace().php">string isspace()</a>
<a href="py_method_string_istitle().php">string istitle()</a>
<a href="py_method_string_isupper().php">string isupper() </a>
<a href="py_method_string_join().php">string join()</a>
<a href="py_method_string_ljust().php">string ljust()</a>
<a href="py_method_string_lower().php">string lower()</a>
<a href="py_method_string_lstrip().php">string lstrip()</a>
<a href="py_method_string_partition().php">string partition()</a>
<a class="active" href="py_method_string_replace().php">string replace()</a>
<a href="py_method_string_rfind().php">string rfind()</a>
<a href="py_method_string_rindex().php">string rindex()</a>
<a href="py_method_string_rjust().php">string rjust()</a>
<a href="py_method_string_rpartition().php">string rpartition()</a>
<a href="py_method_string_rsplit().php">string rsplit()</a>
<a href="py_method_string_rstrip().php">string rstrip()</a>
<a href="py_method_string_split().php">string split()</a>
<a href="py_method_string_startswith().php">string startswith()</a>
<a href="py_method_string_strip().php">string strip() </a>
<a href="py_method_string_swapcase().php">string swapcase() </a>
<a href="py_method_string_title().php">string title()</a>
<a href="py_method_string_upper().php">string upper()</a>
<a href="py_method_string_zfill().php">string zfill()</a>



</div>

  

</div>


<div class="content"> 

<h1 id="problemhead">string.replace() in python</h1><br><br>
<p id="content_p">String replace is used to replace the single character or set of characters in an given string. </p>
<br><br><br>
<h2>Syntax:</h2><br><br><br>
<div class="syntax">
<pre>
string.replace(old_character,new_character) or string.replace(old_character,new_character,count) 
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
n = "Earning"

a = n.replace("Earning","Learning")

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
Learning
</pre>
    </div><br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
n = "ABCJIK"

a = n.replace("ABC","XYZ")

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
XYZJIK
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
<pre>
s = "programming"

a = s.replace("g","G",1)

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
proGramming
</pre>
    </div>
<br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-4</div>
    <div class="src">
<pre>
s = "programming"

a = s.replace("g","G",2)

print(a)
</pre>
    </div></div><br><br>
<h2>Output</h2>
 <br><br>
    <div id="output">
<pre>
proGramminG
</pre>
    </div>



<br><br>
<br><hr><br>
<br><br>


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
