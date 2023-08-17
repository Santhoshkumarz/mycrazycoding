<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Creating a dataframe from dictionary in pandas</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
     <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="create dataframe from dictionary in pandas,dataframe from dict in python,dataframe from dict python pandas,dataframe from dictionary in python,dataframe of dictionaries,dataframe to dictionary in pandas,dataframe using dictionary,dataframe with dictionary,dict to dataframe python pandas,dictionary to dataframe python pandas,get dataframe from dictionary pandas,how to create a dataframe from dictionary in pandas,pandas dataframe from dict of arrays,pandas dataframe from dict of series,pandas dataframe from dict rows,pandas dataframe from dictionary,pandas dataframe from dictionary of dictionaries,pandas dataframe from dictionary of lists,pandas dataframe from dictionary of series,pandas dataframe from dictionary set index,Creating a dataframe from dictionary in pandas>

   
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
  <a id="A" href="py_Pandas_Creating a series from dictionary.php"><i class="fas fa-arrow-alt-circle-right"></i> Creating a series from dictionary</a>
  <a id="A" href="py_Pandas_Accessing elements from series with position.php"><i class="fas fa-arrow-alt-circle-right"></i> Accessing elements from series with position</a>
  <a id="A" href="py_Pandas_Accessing Element Using Label index.php"><i class="fas fa-arrow-alt-circle-right"></i> Accessing Element Using Label index</a>
  <a id="A" href="py_Pandas_Binary operations on series.php"><i class="fas fa-arrow-alt-circle-right"></i> Binary operations on series</a>
  <a id="A" href="py_Pandas_Div.php"><i class="fas fa-arrow-alt-circle-right"></i> Div</a>
  <a id="A" href="py_Pandas_Divmod.php"><i class="fas fa-arrow-alt-circle-right"></i> Divmod</a>

  <br><hr>

  <h1 id="H1">PANDAS DATA FRAME</h1>
  <a id="A" href="py_Pandas_Creating a data frame using List.php"><i class="fas fa-arrow-alt-circle-right"></i> Creating a data frame using List</a>
 <a class="active" id="A" href="py_Pandas_Creating a dataframe from dictionary.php"><i class="fas fa-arrow-alt-circle-right"></i> Creating a dataframe from dictionary</a>
 <a id="A" href="py_Pandas_Column selection.php"><i class="fas fa-arrow-alt-circle-right"></i> Column selection</a>
 <a id="A" href="py_Pandas_Working with missing data.php"><i class="fas fa-arrow-alt-circle-right"></i> Working with missing data</a>
 <a id="A" href="py_Pandas_Filling missing values.php"><i class="fas fa-arrow-alt-circle-right"></i> Filling missing values</a>
 

    
   <br><hr></div>
<br><br>

</div>



<div class="content">

  
<h1 id="problemhead">Creating a dataframe from dictionary in pandas</h1><br><br>
<p id="content_p">First we want to create a dictionary. Next we want to convert the dictionary into dataframe by using pd.dataframe in the pandas concepts for that we want to import the pandas.</p>
<br>
  <br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
import pandas as pd

l = {'Name' : [ "Jack", "Elonmusk", "steve jobs", "Mukesh Ambani"],
'Age':[ 5, 10, 15, 20]}

n = pd.DataFrame(l)

print(n)
</pre>
    </div></div><br>
<br><br>
<h2>Output</h2>
    <br><br>
    <div class="output1">
<pre>
            Name  Age
0           Jack    5
1       Elonmusk   10
2     steve jobs   15
3  Mukesh Ambani   20
</pre>
    </div><br><br><br><hr><br><br>


<br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
import pandas as pd

l = {'Name' : [ "Bill Gates", "Mark", "Warren", "Jeff Bezos"],
'Age':[ 10, 20, 30, 40]}

n = pd.DataFrame(l)

print(n)
</pre>
    </div></div><br>
<br><br>
<h2>Output:</h2>
    <br><br>
    <div class="output1">
<pre>
         Name  Age
0  Bill Gates   10
1        Mark   20
2      Warren   30
3  Jeff Bezos   40
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
