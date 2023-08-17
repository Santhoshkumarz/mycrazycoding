<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Java Questions with Solution</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
 body{
    counter-reset: Count-Value;
  }

  #Solution_logo
  {
      color: #E15061;
  }
  #Solution_logo i
  {
      font-size: 20px;
  }
  #problem_title
  {
    color:blue;

  }
  .Very_easy
  {
      padding-left: px;
      width: 100%;
      height: 100%;
      background: green;
      color: white;
      border-radius: 12px;

  }
  .Easy
  {
      padding-left: 15px;
      width: 100%;
      height: 100%;
      background: #179A25;
      color: white;
      border-radius: 12px;
  }
   .Medium
  {
      padding-left: 5px;
      width: 100%;
      height: 100%;
      background: #F7B104;
      color: white;
      border-radius: 12px;
  }
   .Hard
  {
      padding-left: 15px;
      width: 100%;
      height: 100%;
      background: #F13F06;
      color: white;
      border-radius: 12px;
  }
  #myInput 
  {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  }
    #myTable
  {
    width: 100%;
    padding-left: 10px;
    font-family: Roboto;

  }
  table,tr
  {
     
     font-size: 17px;
    
  }
  
  table,th,td
  {
     padding: 10px;
     text-align: left;
  }
  #solution 
  {
    padding-left: 20px;
  }
  th
  {
    background-color:#F2F3F4 ;
    color: black;
  }
  tr td:first-child:before
  {
     counter-increment: Count-Value;   
     content:  counter(Count-Value)".";
  }
  a
  {
    text-decoration: none;
  }
  a:hover
  {
    color:#186A3B;
  }
  table tr:nth-child(odd){background-color: #f2f2f2;}
  table tr:hover {background-color: #ddd;}
  input[type=text]
  {
      border-radius: 20px;
     
      box-shadow: 1px 1px 5px 5px #F0F3F4;
  }
  input:focus
  {
    
    outline: none;
    box-shadow: 0 0 2px 2px #3A5EF4;

  }
</style>
   

  </head>
  <body>
     <?php
   include "nav.php";
    ?>
    <?php
   include "sidebar.php";
    ?>
  
<div class="content">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- horizontal -->
<ins class="adsbygoogle"
     style="display:inline-block;width:100%;height:90px"
     data-ad-client="ca-pub-7569865976437849"
     data-ad-slot="4855091186"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br><br><br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Question.." title="Type in a name">
<br><br><br>

<table id="myTable">
  <tr>
  	 <th style="width: 10%;">S.NO</th>
    <th style="width: 90%;">Questions</th>
  
  
  </tr>
  <tr class="row_head">
  	<td></td>
      <td><a id="problem_title" href="How to clear the screen in cmd using java.php">How to clear the screen in cmd using java?</a></td>
      
     
  </tr>


  <tr class="row_head">
    <td></td>
      <td><a id="problem_title" href="How to convert int to String in java.php">How to convert int to String in java?</a></td>
      
     
  </tr>



  <tr class="row_head">
    <td></td>
      <td><a id="problem_title" href="How to convert String to int in java.php">How to convert String to int in java?</a></td>
      
     
  </tr>


  <tr class="row_head">
    <td></td>
      <td><a id="problem_title" href="How to convert char to int in java.php">How to convert char to int in java?</a></td>
      
     
  </tr>



    <tr class="row_head">
    <td></td>
      <td><a id="problem_title" href="How to find Array length in java.php">How to find Array length in java?</a></td>
      
     
  </tr>



    <tr class="row_head">
    <td></td>
      <td><a id="problem_title" href="How to find 2D Array length in java.php">How to find 2D Array length in java?</a></td>
      
     
  </tr>


     <tr class="row_head">
    <td></td>
      <td><a id="problem_title" href="How to declare null character in java.php">How to declare null character in java?</a></td>
      
     
  </tr>
   



</table>









<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


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
<br><br><br><br><br><br>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?php
   include "footer.php";
    ?>
  </body>
</html>
