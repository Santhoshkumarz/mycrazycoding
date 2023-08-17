<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Working with missing data in pandas</title>
 
    <link rel="stylesheet" href="css/py_topic_style.css">
     <link rel="stylesheet" href="css/basic_problem_nav.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="how to check missing data in pandas,how to fill missing data in pandas,how to find missing data in pandas,how to handle missing data in pandas,missing data in pandas,missing data in pandas dataframe,missing data in pandas is represented through,missing data in pandas object is represented through,missing data in python pandas,missing value imputation pandas,missing value in pandas dataframe,missing value in python pandas,missing value treatment in pandas,missing value treatment in python pandas,missing values in dataset python,missing values in each column pandas,missing values in pandas dataframe,missing values in python pandas,working with missing data in pandas,working with missing data pandas,working with missing values in pandas,Working with missing data in pandas,Working with missing data in pandas in mycrazycoding">
   
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
 <a id="A" href="py_Pandas_Creating a dataframe from dictionary.php"><i class="fas fa-arrow-alt-circle-right"></i> Creating a dataframe from dictionary</a>
 <a id="A" href="py_Pandas_Column selection.php"><i class="fas fa-arrow-alt-circle-right"></i> Column selection</a>
 <a class="active" id="A" href="py_Pandas_Working with missing data.php"><i class="fas fa-arrow-alt-circle-right"></i> Working with missing data</a>
 <a id="A" href="py_Pandas_Filling missing values.php"><i class="fas fa-arrow-alt-circle-right"></i> Filling missing values</a>
 

    
   <br><hr></div>
<br><br>

</div>



<div class="content">
  
<h1 id="problemhead">Working with missing data in pandas</h1><br><br>
<p id="content_p">First we want to create the dictionary. Next we want to convert the dictionary into dataframe by using pd.dataframe in the pandas concepts for that we want to import the pandas. Then we can do the isnull() function it will check the missing data in the dataframe.</p>
<br>
  <br><br><hr><br><br><br>
   <div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
<pre>
import pandas as pd
import numpy as np

d = { 'Score_1' : [ 10, 20, 30, np.nan],
'Score_2' : [ 40, 50, np.nan, 60],
'Score_3' : [ np.nan, 70, 80, 90]}

n = pd.DataFrame(d)

print(n)
print(n.isnull())
</pre>
    </div></div><br>
<br><br>
<h2>Output</h2>
    <br><br>
    <div class="output1">
<pre>
  Score_1  Score_2  Score_3
0     10.0     40.0      NaN
1     20.0     50.0     70.0
2     30.0      NaN     80.0
3      NaN     60.0     90.0
   Score_1  Score_2  Score_3
0    False    False     True
1    False    False    False
2    False     True    False
3     True    False    False
</pre>
    </div><br><br><br><hr><br><br>


<br>
   <div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
<pre>
import pandas as pd
import numpy as np

d = { 'Score_1' : [ np.nan, 5, 10, 15],
'Score_2' : [ 20, 25, np.nan, 30],
'Score_3' : [ 35, np.nan, 45, 50]}

n = pd.DataFrame(d)

print(n)
print(n.isnull())
</pre>
    </div></div><br>
<br><br>
<h2>Output</h2>
    <br><br>
    <div class="output1">
<pre>
 Score_1  Score_2  Score_3
0      NaN     20.0     35.0
1      5.0     25.0      NaN
2     10.0      NaN     45.0
3     15.0     30.0     50.0
   Score_1  Score_2  Score_3
0     True    False    False
1    False    False     True
2    False     True    False
3    False    False    False
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
