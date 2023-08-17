<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Creating a series from dictionary in pandas</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
     <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="create a dictionary in pandas,create a dictionary in python pandas,create a pandas series from a dictionary of values,create a pandas series from a dictionary of values and an ndarray,create dataframe from dictionary in pandas,create dictionary from groupby pandas,create dictionary from pandas,create dictionary from pandas columns,how to create dictionary in pandas,how to create series from dictionary in pandas,pandas create dictionary in for loop,to create dictionary in python,creating a series from dictionary in pandas,creating a series from dictionary in pandas in mycrazycoding">
   
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
  <h1 id="H1">PANDAS TUTORIAL</h1>
   <a id="A" href="py_Pandas.php"><i class="fas fa-arrow-alt-circle-right"></i> Introduction</a>
  <a id="A" href="py_Pandas_Creating a series from array.php"><i class="fas fa-arrow-alt-circle-right"></i> Creating a series from array</a>
  <a id="A" href="py_Pandas_Creating a series from list.php"><i class="fas fa-arrow-alt-circle-right"></i> Creating a series from list</a>
  <a class="active" id="A" href="py_Pandas_Creating a series from dictionary.php"><i class="fas fa-arrow-alt-circle-right"></i> Creating a series from dictionary</a>
  <a id="A" href="py_Pandas_Accessing elements from series with position.php"><i class="fas fa-arrow-alt-circle-right"></i> Accessing elements from series with position</a>
  <a id="A" href="py_Pandas_Accessing Element Using Label index.php"><i class="fas fa-arrow-alt-circle-right"></i> Accessing Element Using Label index</a>
  <a id="A" href="py_Pandas_Binary operations on series.php"><i class="fas fa-arrow-alt-circle-right"></i> Binary operations on series</a>
  <a id="A" href="py_Pandas_Div.php"><i class="fas fa-arrow-alt-circle-right"></i> Div</a>
  <a id="A" href="py_Pandas_Divmod.php"><i class="fas fa-arrow-alt-circle-right"></i> Divmod</a>

  <br><hr>

  <h1 id="H1">PANDAS DATA FRAME</h1>
    <a id="A" href="py_Pandas_Creating a data frame using List.php"><i class="fas fa-arrow-alt-circle-right"></i> Creating a data frame using List</a>
 <a id="A" href="py_Pandas_Creating a dataframe from dictionary.php"><i class="fas fa-arrow-alt-circle-right"></i> Creating a dataframe from dictionary</a>
 <a id="A" href="py_Pandas_Column selection.php"><i class="fas fa-arrow-alt-circle-right"></i> Column selection</a>
 <a id="A" href="py_Pandas_Working with missing data.php"><i class="fas fa-arrow-alt-circle-right"></i> Working with missing data</a>
 <a id="A" href="py_Pandas_Filling missing values.php"><i class="fas fa-arrow-alt-circle-right"></i> Filling missing values</a>
 

    
   <br><hr></div>
<br><br>

</div>



<div class="content">
<h1 id="problemhead">Creating a series from dictionary in pandas</h1><br><br>
<p id="content_p">First we want to create the dictionary.Next we want to convert the dictionary into pandas series by using pd.series in the pandas concepts for that we want to import the pandas.</p>
<br>
  <br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
import pandas as pd

d = { "X" : 1, "Y" : 2, "Z" : 3}

n = pd.Series(d)

print(n)
</pre>
    </div></div><br><br>
<br>
<h2>Output</h2>
    <br><br>
    <div class="output1">
<pre>
X    1
Y    2
Z    3
dtype: int64
</pre>
    </div><br><br><br><hr><br><br>


<br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
import pandas as pd

d = { "Name" : "Mycrazycoding" , "Year" : 2020}

n = pd.Series(d)

print(n)
</pre>
    </div></div><br>
<br><br>
<h2>Output</h2>
    <br><br>
    <div class="output1">
<pre>
Name    Mycrazycoding
Year             2020
dtype: object
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
