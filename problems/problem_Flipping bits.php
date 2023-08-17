<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Flipping bits in Java/Python</title>
 
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="file:///E:/jquery.js"></script>
    <script src="javascript/myscript.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
   
<style>
.JAVA
{
    display: none;
}
#inside
{
    font-family: 'Roboto Mono', monospace;
    font-size: 14px;
    background-color:#FBFCFC;
    position: static;
    overflow-x: auto;
    border-radius: 10px;
    padding-left: 2%;
    padding-top: 2%;
    padding-bottom: 2%;
}
.red
{
    color:#EA5434;
}
.dark
{
  font-family: 'Roboto Mono', monospace;
   font-size: 20px;
}

</style>
<script>
$(document).ready(function()
{

  $("#button2").click(function()
  {
    $(this).addClass('active').siblings().removeClass('active')
    $(".PYTHON").show();
    $(".JAVA").hide();


  });
  $("#button1").click(function()
  {
    $(this).addClass('active').siblings().removeClass('active')
    $(".JAVA").show();
    $(".PYTHON").hide();
  });
});


 





</script>

  </head>
  <body>
    <?php
   include "nav.php";
    ?>
  
  
<?php
   include "sidebar.php";
    ?>
  
  
  
</div>

<div class="content">


  




<h1 id="problemhead">Flipping bits</h1>
<br><br>
<p id="content_p">Problem find the flipping bits.</p>
<br><br>
<h2>Example-1</h2><br><br>
<pre id="inside">
if n1 = 8 and n2 = 3 ->

8 binary value  = <span class="red">1</span>  0  <span class="red">0  0</span>
3 binary value  = <span class="red">0</span>  0  <span class="red">1  1</span>

Number of flipping bits are 3.
</pre>
<br><br><br>



<h2>Example-2</h2><br><br>
<pre id="inside">
if n1 = 16 and n2 = 4 ->

16 binary value  = <span class="red">1</span>  0  <span class="red">0</span>  0  0
4 binary value   = <span class="red">0</span>  0  <span class="red">1</span>  0  0

Number of flipping bits are 2.
</pre>
<br><br><br>







<br><br><br><hr><br><br><br>









<h1 id="problemhead">Solution</h1><br><br><br>
<div class="box">
 <div class="Button">
  <button  id="button2" class="active">Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>

</div>
<div class="PYTHON">
<pre>
n1 = 8

n2 = 3

k = 0

n1 = bin(n1)

n2 = bin(n2)

n1 = n1[2:]

n2 = n2[2:]

if(len(n1) == len(n2)):

    n1 = n1

    n2 = n2

elif(len(n1)&ltlen(n2)):

    a = len(n2)-len(n1)

    b = "0"*a + n1

    n1 = b

else:

    c = len(n1)-len(n2)

    d = "0" * c + n2

    n2 = d

for i in range(len(n1)):

    if(n1[i] != n2[i]):

        k += 1

print(k)
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
3
</pre>
</div>
<br><br><br><hr><br><br><br>





<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- google -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7569865976437849"
     data-ad-slot="8524240436"
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
