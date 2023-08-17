<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Foreign key in SQL</title>
 
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="icon/css/all.min.css">
    <link rel="stylesheet" href="icon/css/fontawesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
 .flex_table
{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.flex_table .table1
{
    width: 45%;

}

.flex_table .table2
{
    width: 45%;
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
  <a class="active" href="SQL_FOREIGN_KEY.php"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i>FOREIGN KEY</a>
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
<h1 id="problemhead">Foreign key in SQL</h1><br><br>



<p id="content_p">The foreign key is used to refer to the primary key or candidate key in another table. When we insert a value in the FOREIGN KEY column, The value should contain in the referred PRIMARY KEY column.</p>




<br><br><br>


<h2>Syntax:</h2><br><br>


<div class="box">
  <div class="heading">MySQL</div>
    <div class="src">
<pre>
CREATE TABLE Salary(

    AccountNumber VARCHAR(20) NOT NULL,
    
    January VARCHAR(20) NOT NULL,
    
    PRIMARY KEY(AccountNumber),
    
    FOREIGN KEY(AccountNumber) REFERENCES employee(AccNumber)

);
</pre>
    </div></div>



	  <br><br><br><hr><br><br><br>





<div class="flex_table">
  

<div class="table1">

  <p id="content_p">The table name is <b>employee</b> 👇.</p><br><br>
  
<table id="demo_database_table">
  
  <tr>
    <th>Name</th>
    <th>AccNumber <i style="color: #EEE04C;" class="fa-solid fa-key"></i></th>
  </tr>


    <tr>
    <td>Tony</td>
    <td>1234</td>
  </tr>




    <tr>
     <td>Natasha</td>
    <td>1235</td>
  </tr>


    <tr>
     <td>Steve</td>
    <td>1236</td>
  </tr>


</table>


</div>

<div class="table2">
  <p id="content_p">The table name is <b>Salary</b> 👇.</p><br><br>
<table id="demo_database_table">
  
  <tr>
    <th>AccountNumber <i style="color: #EEE04C;" class="fa-solid fa-key"></i></th>
    <th>January</th>
  </tr>


    <tr>
     <td>1234</td>
    <td>10000</td>
  </tr>

    <tr>
    <td>1235</td>
    <td>10000</td>
  </tr>




    <tr>
     <td>1236</td>
    <td>10000</td>
  </tr>



</table>

</div>
</div>






    <br><br><br><br>




<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>

CREATE TABLE employee(

    Name VARCHAR(20) NOT NULL,
    
    AccNumber VARCHAR(20) NOT NULL,
    
    PRIMARY KEY(AccNumber) 

);

INSERT INTO employee VALUES ("Tony","1234");

INSERT INTO employee VALUES ("Natasha","1235");

INSERT INTO employee VALUES ("Steve","1236");



CREATE TABLE Salary(

    AccountNumber VARCHAR(20) NOT NULL,
    
    January VARCHAR(20) NOT NULL,
    
    PRIMARY KEY(AccountNumber),
    
    FOREIGN KEY(AccountNumber) REFERENCES employee(AccNumber)

);

INSERT INTO Salary VALUES ("1234","10000");

INSERT INTO Salary VALUES ("1235","10000");

INSERT INTO Salary VALUES ("1236","10000");


SELECT * FROM Salary;
</pre>
	  </div></div>
<br><br><br>

<h2>RESULT</h2><br><br>
<table>
  
  <tr>
    <th>AccountNumber <i style="color: #EEE04C;" class="fa-solid fa-key"></i></th>
    <th>January</th>
  </tr>

  <tr>
    <td>1234</td>
    <td>10000</td>
     
  </tr>


  <tr>
    <td>1235</td>
    <td>10000</td>
    
  </tr>

    <tr>
    <td>1236</td>
    <td>10000</td>
    
  </tr>
   
</table>




<br><br><br><hr>
<br><br><br>

<p id="content_p">Example-2 returns the <b>ERROR</b> because When the Salary table inserts the value for <b>AccountNumber = "9999"</b> and <b>January = "10000"</b>, the accountNumber "9999" does not contain in the employee table AccNumber.</p>

<br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
CREATE TABLE employee(

    Name VARCHAR(20) NOT NULL,
    
    AccNumber VARCHAR(20) NOT NULL,
    
    PRIMARY KEY(AccNumber) 

);

INSERT INTO employee VALUES ("Tony","1234");

INSERT INTO employee VALUES ("Natasha","1235");

INSERT INTO employee VALUES ("Steve","1236");



CREATE TABLE Salary(

    AccountNumber VARCHAR(20) NOT NULL,
    
    January VARCHAR(20) NOT NULL,
    
    PRIMARY KEY(AccountNumber),
    
    FOREIGN KEY(AccountNumber) REFERENCES employee(AccNumber)

);

INSERT INTO Salary VALUES ("1234","10000");

INSERT INTO Salary VALUES ("1235","10000");

INSERT INTO Salary VALUES ("1236","10000");

INSERT INTO Salary VALUES ("9999","10000");


SELECT * FROM Salary;
</pre>
    </div></div>
<br><br><br>

<h2>RESULT</h2><br><br>

   

<div id="output">
<pre>
ERROR 1452 (23000) at line 37: Cannot add or update a child row: a foreign key constraint fails (`db_3xuyy5kds`.`Salary`, CONSTRAINT `Salary_ibfk_1` FOREIGN KEY (`AccountNumber`) REFERENCES `employee` (`AccNumber`))
</pre>
</div>



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
