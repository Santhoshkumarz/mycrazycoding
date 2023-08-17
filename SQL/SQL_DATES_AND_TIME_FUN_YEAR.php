<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>YEAR() function in SQL</title>
 
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="icon/css/all.min.css">
    <link rel="stylesheet" href="icon/css/fontawesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
 #uni_table
  {
    width: 100%;
    padding-left: 10px;
    font-family: 'Roboto', sans-serif;
     border-collapse: collapse;


  }

  #uni_table,tr
  {
     
     font-size: 15px;
    
    
  }
  #uni_table
  {
    border-right: 1px solid #dddddd;
    border-left: 1px solid #dddddd;
    border-bottom: 1px solid #dddddd;
  }
  #uni_table
  {
   
     padding: 15px;
     text-align: left;
     
   
  }
  #uni_table th,td
  {
     padding: 15px;
     text-align: left;
     word-spacing: 3px;
    letter-spacing: 1px;
  }


  #uni_table th
  {
    background-color:#F2F3F4 ;
    color: black;
    font-weight: 700;
    
  }
  #uni_table a
  {
    cursor:pointer;
  }

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
  <a href="SQL_GROUP_BY.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> GROUP BY</a>
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

<h1 id="problemhead">YEAR() in SQL</h1><br><br>


<p id="content_p">The <span class="statement">YEAR()</span> function return the year part for a given date.</p>




<br><br><br><hr><br><br><br>



<h2>DEMO DATABASE</h2><br><br>

<p id="content_p">The Table name is <b>USERS</b> and the DATE format is <span class="statement">YYYY-MM-DD</span>.</p>
<br><br>


<table  id="demo_database_table">
  
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Birth</th>
    
   
  </tr>

  <tr>
    <td>1</td>
    <td>Jack</td>
    <td>2001-05-21</td>
  </tr>


   <tr>
    <td>2</td>
    <td>Steve</td>
    <td>2000-04-21</td>
  </tr>

     <tr>
    <td>3</td>
    <td>Thor</td>
    <td>1999-05-01</td>
  </tr>

   <tr>
    <td>4</td>
    <td>Natasha</td>
    <td>2002-05-21</td>
  </tr>





   <tr>
    <td>5</td>
    <td>Tony</td>
    <td>2002-11-24</td>
  </tr>

     <tr>
    <td>6</td>
    <td>Peter</td>
    <td>2002-09-21</td>
  </tr>


   
</table>




<br><br><br>






<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
SELECT * FROM USERS WHERE YEAR(Birth) = 2002;
</pre>
	  </div></div>
<br><br><br>

<h2>RESULT</h2><br><br>
<table>
  
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Birth</th>
  </tr>



 

     <tr>
    <td>4</td>
    <td>Natasha</td>
    <td>2002-05-21</td>
  </tr>

  <tr>
    <td>5</td>
    <td>Tony</td>
    <td>2002-11-24</td>
  </tr>


   <tr>
    <td>6</td>
    <td>Peter</td>
    <td>2002-09-21</td>
  </tr>
   
</table>




<br><br><br><hr>
<br><br><br>



  
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

  </body>
</html>
