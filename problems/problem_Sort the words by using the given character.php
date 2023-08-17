<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Sort the words by using the given character in Java/Python</title>
 
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
  font-size: 16px;
  overflow-x: auto;
}
.col
{
  color:blue; 
}
.col1
{

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


  




<h1 id="problemhead">Sort the words</h1>
<br><br>
<p id="content_p">Problem to sort words by s1 alphabetical order.</p>
<br><br>

<pre id="inside">
input: s1="k" s2="welcome to mycrazycoding family"

if s1='k', the alphabetical order start with 'k' so <span class="col">k,l,m,n,....z,a,b,c,d,e,...j. </span>

<span class="col1">The final output is "mycrazycoding to welcome family"</span>.

</pre>

<br><br><br>


<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : s1 = "k"  s2 = "welcome to mycrazycoding family"
<span id="IO">Output</span>   : mycrazycoding to welcome family   
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : s1 = "j"  s2 = "stop worrying and start living"
<span id="IO">Output</span>   : living stop start worrying and   
</pre>
</div>

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
s1 = "k"

s2 = "welcome to mycrazycoding family"

s3 = s2.split()

a = ord(s1)

b = ord("z")

c = ord("a")

d = ""

k = ""

for i in range(a,b+1):

    d += chr(i)

for j in range(c,a):

    d += chr(j)

for x in d:

    for y in s3:

        if(x==y[0]):

            k += y

            k += " "
            
print(k.strip())
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
mycrazycoding to welcome family 
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
