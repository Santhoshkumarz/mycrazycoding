<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Harshad Number or Niven Number in Java/Python</title>
 
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
  
<h1 id="problemhead">Harshad Number or Niven Number</h1>
<br><br>
<p id="content_p">Problem to find the Harshad Number or not in given number.</p><br>
<p id="content_p">If given number is completely divisible by sum of the each and every digit value , So It's Harshad Number or Niven Number.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 2020
<span id="IO">Output</span>   : Harshad Number
<span id="IO">Explain</span>  : 2+0+2+0 = 4. The number 2020 is completely divisible by 4.</span>
           So it is "Harshad Number".
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 17
<span id="IO">Output</span>   : Not a Harshad Number 
<span id="IO">Explain</span>  : 1+7 = 8. The number 17 is not divisible by 8.</span>   
           So it is "Not a Harshad Number".
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
        int num = 2020;

        int sum = 0, t = num;

        while(t!=0)
        {
            sum = sum + (t%10);

            t = t/10;
        }

        if(num % sum == 0)
        {
            System.out.print("Harshad Number");
        }

        else
        {
            System.out.print("Not a Harshad Number");
        }
    }
}
</div>
<div class="PYTHON">
<pre>
n = 2020

k = 0

for x in str(n):

    k += int(x)

if(n % k == 0):

    print("Harshad number")

else:

    print("Not a Harshad number")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Harshad number
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
