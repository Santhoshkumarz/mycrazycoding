<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <title>JSON data types</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="icon/css/all.min.css">
    <link rel="stylesheet" href="icon/css/fontawesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src = "script/jquery-3.6.0.min.js"></script>

  </head>
  <body>
  <?php
   include "nav.php";
    ?>


    
<div id="side" class="sidebar">
<div class="topics">

  <h1 id="H1">JSON TUTORIALS</h1>
	<a  href="Introduction" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Introduction</a>
  <a href="json_vs_xml"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> JSON vs XML</a>
	<a class="active" href="data_types"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Data types</a>

  <br><hr>
  
  <h1 id="H1">JSON WITH JAVASCRIPT</h1>
  <a href="JSON.parse"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> JSON.parse</a></a>
  <a href="Stringify"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i> Stringify</a> 
  <a href="Get JSON file data"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Get JSON file data</a> 
  <br><hr>
  
  <h1 id="H1">JSON WITH JQUERY</h1>
  <a href="json jquery getJSON"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> getJSON method</a>
  <a href="json jquery AJAX method"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> AJAX method</a>
 
  <br><hr>
  
	<h1 id="H1">JSON WITH PHP</h1>
  <a href="json php encode"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Encode</a>
  <a href="json php decode"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Decode</a>
  <a href="json php Get data from JSON file"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Get JSON file data</a>
  <a href="json php JSON file write"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i> JSON file write </a>
  <br><hr>
   	
</div>
<br><br>
</div>




<div class="content">
  
<h1 id="problemhead">JSON Datatypes</h1><br><br>

<p id="content_p">In JSON, We can use the <b>Number, String, Boolean, Array, Object, and null</b> datatypes.</p><br><br>
<br><hr><br><br>










<h1 id="problemhead">Data types</h1><br><br>


<table>
    <tr>
        <th style="width:50%;">Data types</th>
        <th style="width:50%;">Example</th>
    </tr>

    <tr>
        <td>Number (int,float)</td>
        <td class="json_code">{ "Age" : 25 , "Points" : 15.63}</td>
    </tr>

    <tr>

        <td>String</td>
        <td class="json_code">{ "Name" : "Hariharan" }</td>
    </tr>

    <tr>

        <td>Boolean</td>
        <td class="json_code">{ "ismarried" : false }</td>
    </tr>

    <tr>

        <td>Array</td>
        <td class="json_code">[<br>&emsp;{"Name" : "Jack", "Age" : 25},<br>&emsp;{"Name" : "Steve", "Age" : 32}<br>]</td>
    </tr>

    <tr>

        <td>Object</td>
        <td class="json_code">{<br>&emsp;"Student" : {"Name": "Jack", "Age" : 21 }<br>}</td>
    </tr>

    <tr>

        <td>null</td>
        <td class="json_code">{ "Hobbies" : null }</td>
    </tr>

    

</table>




 <br><br><br><hr><br><br><br>




 <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
{
        "Name"      : "jack",

        "Age"       : 22,

        "Ismarried" : false,

        "Marks"     : [21,45,35,12],

        "Average"   : 28.25,

        "Hobbies"   : null,

        "Address"   :{
                         "Street" : "Waverley street",
                         "City"   : "Chennai",
                         "Pincode": 600001
                     }
}

</pre>
    </div></div> <br><br><hr><br><br><br>

   



 
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
