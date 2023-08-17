<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Sum of max and min in Java/Python</title>
 
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
.PYTHON
{
    display: none;
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


  




<h1 id="problemhead">Sum of max and min</h1>
<br><br>
<p id="content_p">Problem to sum maximum and minumum value in given list.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = [ -5, 3, 7, 2, -6, 5]
<span id="IO">Output</span>   : 1 
<span id="IO">Explain</span>  : maximum = 7 and minimum = -6.
           7+(-6)=1.  
</pre>
</div>
<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = [ 6, 5, 9, 10, 0]
<span id="IO">Output</span>   : 10 
<span id="IO">Explain</span>  : maximum = 10 and minimum = 0.
           10+0=10.  
</pre>
</div>


<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = [ -6, -9, -5, -3, -7]
<span id="IO">Output</span>   : -12 
<span id="IO">Explain</span>  : maximum = -3 and minimum = -9.
           -3+(-9)=-12.  
</pre>
</div>

<br><br><br><hr><br><br><br>









<h1 id="problemhead">Solution</h1><br><br><br>
<div class="box">
 <div class="Button">
  <button  id="button1" class="active">Java</button>
  <button  id="button2">Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>
public class Main
{
   public static void main(String [] args)
   {
         int a [] = { -5, 3, 7, 2, -6, 5};

         int maximum = a[0];

         int minimum = a[0];

         for (int i=1;i&lt;a.length;i++) 
         {
             if(maximum&lt;a[i])
             {
                 maximum = a[i];
             }
             if (minimum>a[i]) 
             {
                minimum = a[i];
             }
         }

         System.out.println(maximum+minimum);
   }
}

</div>
<div class="PYTHON">
<pre>
n = [ -5, 3, 7, 2, -6, 5]

a = min(n) + max(n)

print(a)
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
1 
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
