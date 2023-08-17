<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="Keywords" content="new line in python 3,new line in python,tab space in python 3,tab character in python,how to print values with tab space in python,what is tab space in python,single quotes in python,double quotes in python string,backslash in python,print raw string python 3,print a raw string in python,how to print raw string in python">
    <title>Escape sequence in python</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
    <link rel="stylesheet" href="css/basic_problem_nav.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    font-weight: 500;
    
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
  <a class="active" href="py_basic_escape_sequence.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Escape sequence</a>
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
 
<h1 id="problemhead">Escape sequence in python</h1><br>
<br>
<p id="content_p">Escape sequence used  with in the print function.To perform the specified action inside the print function.</p>

<br><br><br>
<table>
  
  <tr>
    <th>Symbol</th>
    <th>Uses</th>
  </tr>
  <tr>
    <td>\n</td>
    <td>Print new line</td>
   
  </tr>
  <tr>
    <td>\t</td>
    <td>Print 4 space</td>
   
  </tr>
  <tr>
    <td>\'</td>
    <td>Print single quotes</td>
   
  </tr>
   <tr>
    <td>\"</td>
    <td>Print double quotes</td>
   
  </tr>
   <tr>
    <td>\\</td>
     <td>Print Back slash</td>
  
  </tr>
 
</table><br><br><br><hr><br><br><br>
     

<div class="box">
  <div class="heading">\n</div>
    <div class="src">
<pre>
print("my\ncrazy\ncoding")
</pre>

	  </div></div><br><br>    
    <h2>Output</h2><br>
	  <br>
	  <div class="output1">
<pre>
my
crazy
coding
</pre>
	  </div><br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">\t</div>
    <div class="src">
    
<pre>
print("my\tcrazy\tcoding")
</pre>
    </div></div>
<br><br>
  
     <h2>Output</h2><br>
	  <br>
	  <div id="output">
<pre >
my    crazy    coding
</pre>
	  </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">\'</div>
    <div class="src">
<pre >
print('my\'crazy\'coding')
</pre>
	  </div></div><br><br>
    <h2>Output</h2><br><br>
	  <div id="output">
    
<pre>
my'crazy'coding
</pre>
</div><br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">\"</div>
    <div class="src">
<pre >
print("mycrazy\"coding")
</pre>
	  </div></div>  <br><br>
    <h2>Output</h2><br><br>
	  <div id="output">
    
<pre >
mycrazy"coding
</pre>
</div><br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">\\</div>
    <div class="src">
<pre>
print("mycrazy\\coding")
</pre>
	  </div></div>  <br><br>
    <h2>Output</h2><br><br>
	  <div id="output">
    
<pre>
mycrazy\coding
</pre>
</div><br><br><br><hr><br><br><br>


<div class="box">
  <div class="heading">r'    '</div>
    <div class="src">
<pre>
print(r'c:\Desktop\new.mycrazycoding')
</pre>
	  </div></div><br>  <br>
    <h2>Output</h2><br><br>
	  <div id="output">
    
<pre >
c:\Desktop\new.mycrazycoding
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
