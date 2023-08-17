<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>GROUP BY in SQL</title>
 
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="icon/css/all.min.css">
    <link rel="stylesheet" href="icon/css/fontawesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
 


</style>
   

  </head>
  <body>
  <?php
   include "nav.php";
    ?>

   

<div id="side" class="sidebar">
<div class="topics">

  <h1 id="H1">SQL TUTORIALS</h1>

  <a href="SQL_index.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> INTRODUCTION</a>
  <a href="SQL_CREATE_DATABASE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> CREATE DATABASE</a>
  <a href="SQL_CREATE_TABLE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> CREATE TABLE</a>
  <a href="SQL_INSERT_VALUES.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> INSERT VALUES</a>
  <a href="SQL_AUTO_INCREMENT.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> AUTO INCREMENT</a>
  <a href="SQL_DEFAULT.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> DEFAULT</a>
  <a href="SQL_SELECT.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> SELECT</a>
  <a href="SQL_WHERE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> WHERE</a>
  <a href="SQL_UPDATE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> UPDATE</a>
  <a href="SQL_ALTER.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> ALTER</a>
  <a href="SQL_AS_DATABASE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> AS</a>
  <a href="SQL_DELETE_DATABASE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> DELETE</a>
  <a href="SQL_TRUNCATE_DATABASE.php" id="A"><i class="fas fa-arrow-alt-circle-right"></i> TRUNCATE</a>
  <a href="SQL_DROP_DATABASE.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> DROP</a>
  <a href="SQL_DISTINCT_DATABASE.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> DISTINCT</a>
  <a href="SQL_LIKE_DATABASE.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> LIKE</a>
  <a href="SQL_MAX_DATABASE.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> MAX</a>
  <a href="SQL_MIN_DATABASE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> MIN</a>
  <a href="SQL_COUNT_DATABASE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> COUNT</a>
  <a href="SQL_SUM_DATABASE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> SUM</a>
  <a href="SQL_LENGTH_DATABASE.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> LENGTH</a>
  <a href="SQL_AVERAGE_DATABASE.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>AVERAGE</a>
  <a href="SQL_ORDER_BY_DATABASE.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>ORDER BY</a>
  <a class="active" href="SQL_GROUP_BY.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> GROUP BY</a>
  <a href="SQL_HAVING.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> HAVING</a>
  <a href="SQL_ALIASES.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> ALIASES</a>
  <a href="SQL_In.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>IN/NOT IN</a>
  <a href="SQL_BETWEEN.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>BETWEEN</a>
  <a href="SQL_UNION.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>UNION/UNION ALL</a>
  <a href="SQL_PRIMARY_KEY.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>PRIMARY KEY</a>
  <a href="SQL_FOREIGN_KEY.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>FOREIGN KEY</a>
  <a href="SQL_UNIQUE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> UNIQUE</a>
  <a href="SQL_VIEWS.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> VIEWS</a>
  <a href="SQL_DATES_AND_TIME.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> DATES AND TIME</a>

  <br>
  <hr>
  
  <h1 id="H1">OPERATOR</h1>

  <a href="SQL_Arithmatic_Operators_DATABASE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> ARITHMATIC OPERATOR</a></a>
  <a href="SQL_Relational_Operators_DATABASE.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>RELATIONAL OPERATOR</a> 
  <a href="SQL_Logical_Operator_DATABASE.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> LOGICAL OPERATOR</a> 
  <br>
  <hr>

  <h1 id="H1">JOIN</h1>
  <a href="SQL_JOIN.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> JOIN</a>
  <a href="SQL_INNER_JOIN.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> INNER JOIN</a>
  <a href="SQL_LEFT_JOIN.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> LEFT JOIN</a>
  <a href="SQL_RIGHT_JOIN.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>RIGHT JOIN</a>
  <a href="SQL_FULL_JOIN.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> FULL JOIN</a>
  <br>
  <hr>
    
</div>
<br><br>
</div>



<div class="content">
 
<h1 id="problemhead">SQL GROUP BY</h1><br><br>


<p id="content_p">The <span class="statement">GROUP BY</span> statement is used to arrange the identical value into groups and the Aggregate function performs in each group value. Aggregate functions are <span class="statement">COUNT()</span>,<span class="statement">MIN()</span>, <span class="statement">MAX()</span>, <span class="statement">AVG()</span>, <span class="statement">SUM()</span>.</p>

<br>

<p id="content_p">Mostly, The GROUP BY statement is used in like "find the no of users in each country" and "find the average salary of each country users".</p>

<br><br><br>
<h2>Syntax</h2>
<br><br>
<div class="syntax">
<pre>
SELECT <i>select_list</i> FROM <i>table_name</i> GROUP BY <i>column_name1,column_name2 ,...</i>;  
</pre> 



</div>







	  <br><br><br><hr><br><br><br>



<h2>DEMO DATABASE</h2><br><br>

<p id="content_p">The table name is <b>USERS</b>.</p>
<br><br>


<table  id="demo_database_table">
  
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Country</th>
   
  </tr>

  <tr>
    <td>1</td>
    <td>Jack</td>
    <td>USA</td>
  
   
  </tr>


 <tr>
    <td>2</td>
    <td>Hari</td>
    <td>INDIA</td>

   
  </tr>

  <tr>
    <td>3</td>
    <td>Raja</td>
    <td>INDIA</td>

   
  </tr>


  <tr>
    <td>4</td>
    <td>Steve</td>
    <td>USA</td>

   
  </tr>


  <tr>
    <td>5</td>
    <td>Madhu</td>
    <td>INDIA</td>
   
  </tr>
   
</table>




<br><br><br>






<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
SELECT COUNT(Name) NO_USERS,Country FROM USERS GROUP BY Country;
</pre>
	  </div></div>
<br><br>

<h2>RESULT</h2><br><br>
<table>
  
  <tr>
    <th style="width: 50%">NO_USERS</th>
    <th style="width: 50%">Country</th>
   
  </tr>


   <tr>
    <td>2</td>
    <td>USA</td>
   
  </tr>

     <tr>
      <td>3</td>
    <td>INDIA</td>
   
  </tr>

   
 
  
   
</table>
<br><br>





 <br><br><br><hr><br><br><br>




<h2>DEMO DATABASE</h2><br><br>

<p id="content_p">The table name is <b>USERS</b>.</p>
<br><br>


<table  id="demo_database_table">
  
  <tr>
    
    <th>Name</th>
    <th>Salary</th>
    <th>Country</th>
   
  </tr>

  <tr>
    
    <td>Jack</td>
    <td>10000</td>
    <td>USA</td>
  
   
  </tr>


 <tr>
   
    <td>Hari</td>
     <td>20000</td>
    <td>INDIA</td>

   
  </tr>

  <tr>
    
    <td>Raja</td>
    <td>15000</td>
    <td>INDIA</td>

   
  </tr>


  <tr>
   
    <td>Steve</td>
     <td>15000</td>
    <td>USA</td>

   
  </tr>


  <tr>
    
    <td>Madhu</td>
    <td>10000</td>
    <td>INDIA</td>
   
  </tr>
   
</table>




<br><br><br>






<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
SELECT AVG(Salary) Avarage_Salary,Country FROM USERS GROUP BY Country;
</pre>
    </div></div>
<br><br>

<h2>RESULT</h2><br><br>
<table>
  
  <tr>
    <th style="width: 50%">Avarage_Salary</th>
    <th style="width: 50%">Country</th>
   
  </tr>


   <tr>
    <td>12500.0000</td>
    <td>USA</td>
   
  </tr>

     <tr>
      <td>15000.0000</td>
    <td>INDIA</td>
   
  </tr>

   
 
  
   
</table>
<br><br>





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
