<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Duck Number in Java/Python</title>
 
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
  
<h1 id="problemhead">Duck Number</h1>
<br><br>
<p id="content_p">If given number has zero in between or end, that is called Duck number.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=2021
<span id="IO">Output</span>   : Duck Number  
<span id="IO">Explain</span>  : The number 2021 have zero in between the number.</span>
           So the number is called "Duck Number".
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=2340
<span id="IO">Output</span>   : Duck Number
<span id="IO">Explain</span>  : The number 2340 is ends with zero.</span>  
           So the number is called "Duck Number". 
</pre>
</div>



<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=0025
<span id="IO">Output</span>   : Not a Duck Number
<span id="IO">Explain</span>  : The number 0025 exact value is 25 and Its not have Zero.</span>  
           So Its not a Duck Number.

</pre>
</div>





<br><br>


<h2>Example-4:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=2345
<span id="IO">Output</span>   : Not a Duck Number
<span id="IO">Explain</span>  : The number 2345 is not have zero.So It's not a Duck Number.</span>  
</pre>
</div>




<br><br>


<h2>Example-5:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=023045
<span id="IO">Output</span>   : Duck Number
<span id="IO">Explain</span>  : The number 023045 exact value is 23045 and Its have zero.</span>  
           So it's Duck Number. 
</pre>
</div>

<br><br><br><hr><br><br><br>









<h1 id="problemhead">Solution</h1><br><br><br>
<div class="box">
 <div class="Button">
  <button   id="button1" class="active">Java</button>
  <button  id="button2" >Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>
public class Main
{
    public static void main(String [] args)
    {   
        int n=2020;
        while(n!=0)
        {
            if(n%10==0)
            {
                System.out.print("Duck Number");
                break;
            }
            n=n/10;
            if(n==0)
            {
                System.out.print("Not a Duck Number");
            }
        }
    }
}
</div>
<div class="PYTHON">
<pre>
n=2021
n=str(n)
n=n.lstrip("0")
if("0" in n):
    print("Duck number")
else:
    print("Not a Duck number")

</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h1 id="problemhead">Output:</h1><br><br>
<div class="output">
<pre>
Duck Number
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
