<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
    <title>JSON file write in PHP</title>
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
	<a href="data_types"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Data types</a>

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
  <a class="active" href="json php JSON file write"  id="A"> <i class="fas fa-arrow-alt-circle-right"></i> JSON file write </a>
  <br><hr>
   	
</div>
<br><br>
</div>




<div class="content">
  
<h1 id="problemhead">JSON file write in PHP</h1><br><br>

<p id="content_p"><b>json_encode()</b> and <b>json_decode()</b> methods used to write the JSON file in PHP.</p>
<br><br>
<br><hr><br><br>







 <div class="box">
  <div class="heading">index.php</div>
    <div class="src">
    
<pre>
&lt;?php

         $insert_data = array('Name' => 'Jack', 'Age' => 25);

         $json_data = array();

         $json_data[] =  $insert_data;

         //Create json file and insert data in array format

         $file = fopen("data.json","w");

         file_put_contents('data.json',json_encode($json_data));

?>
</pre>
    </div></div> 
    <br><br>

    <h2>Output:</h2><br><br>

    <div class="box">
  <div class="heading">data.json</div>
    <div class="src">
    
<pre>
[{"Name":"Jack","Age":25}]
</pre>
    </div></div>  <br><br><br><hr><br><br><br>



    <h1 id="problemhead">Add data in already exist JSON file</h1><br><br>



    <div class="box">
  <div class="heading">data.json</div>
    <div class="src">
    
<pre>
[{"Name":"jack","Age":22}]
</pre>
    </div></div> 

<br><br><br>


    <div class="box">
  <div class="heading">index.php</div>
    <div class="src">
    
<pre>
&lt;?php

         $file_data = file_get_contents('data.json');

         $array = json_decode($file_data,true);

         $addition_data = array(
   
                                    'Name' =>  'Steve',
                                    'Age' => 32

                                );

         $array[] = $addition_data;

         file_put_contents('data.json',json_encode($array));

?>
</pre>
    </div></div> 
    <br><br>

    <h2>Output:</h2><br><br>

    <div class="box">
  <div class="heading">data.json</div>
    <div class="src">
    
<pre>
[{"Name":"jack","Age":22},{"Name":"Steve","Age":32}]
</pre>
    </div></div>  <br><br><br><hr><br><br><br>
 
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
