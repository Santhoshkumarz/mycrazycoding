<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>AUTO INCREMENT in SQL</title>
 
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="icon/css/all.min.css">
    <link rel="stylesheet" href="icon/css/fontawesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
 #auto_increment
 {
     padding-left:10%;
 }
 #auto_increment li
{
  padding: 10px;
  line-height: 30px;
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
  <a class="active" href="SQL_AUTO_INCREMENT.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> AUTO INCREMENT</a>
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
<h1 id="problemhead">AUTO INCREMENT in SQL</h1><br><br>



<p id="content_p">The <span class="statement">AUTOINCREMENT</span> is used to generate the unique value while inserting the records. It must be the primary key.</p>








	  <br><br><br><hr><br><br><br>


<h1 id="problemhead">1. MySQL</h1><br><br>
<p id="content_p">The MySQL database <span class="statement">AUTO_INCREMENT</span> keyword is used to generate the unique value while inserting the record.</p>

<br><br><br>
<h2>Syntax</h2>
<br><br>
<div class="syntax">
<pre>
ColumnName INTEGER AUTO_INCREMENT PRIMARY KEY   
</pre> 



</div>
<br><br><br>



<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
CREATE TABLE Students
(
    Id INTEGER AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50)
);


INSERT INTO Students(Name) VALUES("Jack");

INSERT INTO Students(Name) VALUES("Steve");

INSERT INTO Students(Name) VALUES("Thor");

INSERT INTO Students(Name) VALUES("Natasha");



SELECT * FROM Students;
</pre>
	  </div></div>
<br><br><br>

<h2>RESULT</h2><br><br>
<table>
  
  <tr>
    <th>Id <i style="color: #EEE04C;" class="fa-solid fa-key"></i></th>
    <th>Name</th>
  </tr>

  <tr>
    <td>1</td>
    <td>Jack</td>
     
  </tr>


  <tr>
    <td>2</td>
    <td>Steve</td>
    
  </tr>

   <tr>
    <td>3</td>
    <td>Thor</td>
    
  </tr>

    <tr>
    <td>4</td>
    <td>Natasha</td>
    
  </tr>
   
</table>



<br><br><br>


<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
CREATE TABLE Students
(
    Id INTEGER AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50)
);

ALTER TABLE Students AUTO_INCREMENT = 100;


INSERT INTO Students(Name) VALUES("Jack");

INSERT INTO Students(Name) VALUES("Steve");

INSERT INTO Students(Name) VALUES("Thor");

INSERT INTO Students(Name) VALUES("Natasha");


SELECT * FROM Students;
</pre>
    </div></div>
<br><br><br>

<h2>RESULT</h2><br><br>
<table>
  
  <tr>
    <th>Id <i style="color: #EEE04C;" class="fa-solid fa-key"></i></th>
    <th>Name</th>
  </tr>

  <tr>
    <td>100</td>
    <td>Jack</td>
     
  </tr>


  <tr>
    <td>101</td>
    <td>Steve</td>
    
  </tr>

   <tr>
    <td>102</td>
    <td>Thor</td>
    
  </tr>

    <tr>
    <td>103</td>
    <td>Natasha</td>
    
  </tr>
   
</table>




<br><br><br><hr>
<br><br><br>


<h1 id="problemhead">2. PostgreSQL</h1><br><br>
<p id="content_p">The PostgreSQL database <span class="statement">SERIAL</span> keyword is used to generate the unique value while inserting the record.</p>

<br><br><br>
<h2>Syntax</h2>
<br><br>
<div class="syntax">
<pre>
ColumnName SERIAL PRIMARY KEY  
</pre> 



</div>
<br><br><br>



<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
CREATE TABLE Students
(
    Id SERIAL PRIMARY KEY,
    Name TEXT NOT NULL
);


INSERT INTO Students(Name) VALUES('Jack');

INSERT INTO Students(Name) VALUES('Steve');

INSERT INTO Students(Name) VALUES('Thor');

INSERT INTO Students(Name) VALUES('Natasha');


SELECT * FROM Students;
</pre>
    </div></div>
<br><br><br>

<h2>RESULT</h2><br><br>

   

<table>
  
  <tr>
    <th>Id <i style="color: #EEE04C;" class="fa-solid fa-key"></i></th>
    <th>Name</th>
  </tr>

  <tr>
    <td>1</td>
    <td>Jack</td>
     
  </tr>


  <tr>
    <td>2</td>
    <td>Steve</td>
    
  </tr>

   <tr>
    <td>3</td>
    <td>Thor</td>
    
  </tr>

    <tr>
    <td>4</td>
    <td>Natasha</td>
    
  </tr>
   
</table>



<br><br><br><hr>
<br><br><br>






<h1 id="problemhead">3. ORACLE</h1><br><br>
<p id="content_p">The ORACLE database creates the SEQUENCE OBJECT to achieve auto-increment processing.</p>
<br>

<ol id="auto_increment">
  <li><span class="statement">CREATE SEQUENCE</span> - Create the sequence</li>
  <li><span class="statement">MINVALUE</span> - Minimum value of the sequence</li>
  <li><span class="statement">MAX VALUE</span> - Maximum value of the sequence</li>
  <li><span class="statement">START WITH</span> - Starting value</li>
  <li><span class="statement">INCREMENT BY</span> - Incrementing value</li>
  <li><span class="statement">CACHE</span> - how many values of the sequence the database preallocates and keeps in memory for faster access.</li>
</ol>


<br><br><br>
<h2>Syntax</h2>
<br><br>
<div class="syntax">
<pre>
CREATE SEQUENCE <i>sequence_name</i>

MINVALUE <i>minimum_value_in_the_sequence</i>

START WITH <i>starting_value</i>

INCREMENT BY <i>increment_value</i>

CACHE 20;  
</pre> 



</div>
<br><br><br>



<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
CREATE SEQUENCE seq_Students

MINVALUE 1

START WITH 20

INCREMENT BY 2

CACHE 20;

CREATE TABLE Students(

  ID number(10) PRIMARY KEY,  

  Name varchar(50) NOT NULL

);

INSERT INTO Students (ID, Name) VALUES (seq_Students.nextval, 'Jack');

INSERT INTO Students (ID, Name) VALUES (seq_Students.nextval, 'Steve');

INSERT INTO Students (ID, Name) VALUES (seq_Students.nextval, 'Thor');

INSERT INTO Students (ID, Name) VALUES (seq_Students.nextval, 'Natasha');


SELECT * FROM Students;
</pre>
    </div></div>
<br><br><br>

<h2>RESULT</h2><br><br>

   

<table>
  
  <tr>
    <th>Id <i style="color: #EEE04C;" class="fa-solid fa-key"></i></th>
    <th>Name</th>
  </tr>

  <tr>
    <td>20</td>
    <td>Jack</td>
     
  </tr>


  <tr>
    <td>22</td>
    <td>Steve</td>
    
  </tr>

   <tr>
    <td>24</td>
    <td>Thor</td>
    
  </tr>

    <tr>
    <td>26</td>
    <td>Natasha</td>
    
  </tr>
   
</table>



<br><br><br><hr>
<br><br><br>



<h1 id="problemhead">4. MS ACCESS</h1><br><br>
<p id="content_p">The MS ACCESS database <span class="statement">AUTOINCREMENT</span> keyword is used to generate the unique value while inserting the record.</p>

<br><br><br>
<h2>Syntax</h2>
<br><br>
<div class="syntax">
<pre>
ColumnName INTEGER AUTOINCREMENT(starting_value,increment_value) PRIMARY KEY  
</pre> 



</div>
<br><br><br>



<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
CREATE TABLE Students(

    Id INTEGER AUTOINCREMENT(100,5) PRIMARY KEY,

    Name VARCHAR(25) NOT NULL

);


INSERT INTO Students (Name) VALUES ('Jack');

INSERT INTO Students (Name) VALUES ('Steve');

INSERT INTO Students (Name) VALUES ('Thor');

INSERT INTO Students (Name) VALUES ('Natasha');

SELECT * FROM Students;
</pre>
    </div></div>
<br><br><br>

<h2>RESULT</h2><br><br>

   

<table>
  
  <tr>
    <th>Id <i style="color: #EEE04C;" class="fa-solid fa-key"></i></th>
    <th>Name</th>
  </tr>

  <tr>
    <td>100</td>
    <td>Jack</td>
     
  </tr>


  <tr>
    <td>105</td>
    <td>Steve</td>
    
  </tr>

   <tr>
    <td>110</td>
    <td>Thor</td>
    
  </tr>

    <tr>
    <td>115</td>
    <td>Natasha</td>
    
  </tr>
   
</table>



<br><br><br><hr>
<br><br><br>


<h1 id="problemhead">5. SQL SERVER</h1><br><br>
<p id="content_p">The SQL SERVER database <span class="statement">IDENTITY</span> keyword is used to generate the unique value while inserting the record.</p>

<br><br><br>
<h2>Syntax</h2>
<br><br>
<div class="syntax">
<pre>
ColumnName INTEGER IDENTITY(starting_value, increment_value) PRIMARY KEY, 
</pre> 



</div>
<br><br><br>



<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
CREATE TABLE Students(

    Id INTEGER IDENTITY(100, 5) PRIMARY KEY,

    Name VARCHAR(25) NOT NULL

);

INSERT INTO Students (Name) VALUES ('Jack');

INSERT INTO Students (Name) VALUES ('Steve');

INSERT INTO Students (Name) VALUES ('Thor');

INSERT INTO Students (Name) VALUES ('Natasha');

SELECT * FROM Students;
</pre>
    </div></div>
<br><br><br>

<h2>RESULT</h2><br><br>

   

<table>
  
  <tr>
    <th>Id <i style="color: #EEE04C;" class="fa-solid fa-key"></i></th>
    <th>Name</th>
  </tr>

  <tr>
    <td>100</td>
    <td>Jack</td>
     
  </tr>


  <tr>
    <td>105</td>
    <td>Steve</td>
    
  </tr>

   <tr>
    <td>110</td>
    <td>Thor</td>
    
  </tr>

    <tr>
    <td>115</td>
    <td>Natasha</td>
    
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
