<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Mersenne Prime number in Java/Python</title>
 
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

sub
{
  font-size: 18px;
}
#expand
{
  font-size: 17px;
}
#inside
{
 font-family: 'Roboto Mono', monospace;
  font-size: 18px;
}

.red
{
    color: #D80219;
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
  
<h1 id="problemhead">Mersenne Prime number</h1>
<br><br>
<p id="content_p">Problem to print the N Mersenne Prime numbers.</p><br>

<p id="content_p"><sub>The number which return prime number while applying the formula <span class="red">2</span></sub><span class="red"><span id="expand">s</span></span><sub><span class="red"> -1</span> is called mersenne prime number</sub></p>
<br><br>
<pre id="inside">
if n=4
     <sub>=> 2</sub><span id="expand">1</span><sub>-1</sub>  <sub>= 1 (It's not a prime number)</sub>
     <sub>=> 2</sub><span id="expand">2</span><sub>-1</sub>  <sub>= 3 (It's prime number. So It's Mersenne Prime number.)</sub>
     <sub>=> 2</sub><span id="expand">3</span><sub>-1</sub>  <sub>= 7 (It's prime number But 2</sub><span id="expand">s</span><sub>-1&lt=n)</sub>
</pre>

<br>



<br><br>



<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=10 
<span id="IO">Output</span>   : 3 7
<span id="IO">Explain</span>  : 3 7 these numbers are Mersenne Prime number.     
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=5
<span id="IO">Output</span>   : 3
<span id="IO">Explain</span>  : 3 is a Mersenne Prime number.  
</pre>
</div>

<br><br><br><hr><br><br><br>









<h1 id="problemhead">Solution</h1><br><br><br>
<div class="box">
 <div class="Button">
  <button  id="button2" class="active" >Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>
</pre>
</div>
<div class="PYTHON">
<pre>
n=10
k=0
for i in range(2,n+1):
    a=(2**i)-1
    for j in range(2,a):
        if(a%j==0):
            break
    else:
        if(a<=n):
            print(a,end=" ")
        else:
            k=1
    if(k==1):
        break

</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h1 id="problemhead">Output:</h1><br><br>
<div class="output">
<pre>
3 7
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
