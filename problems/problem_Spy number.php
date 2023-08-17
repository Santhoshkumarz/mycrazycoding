<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Spy number in Java/Python</title>
 
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
  
<h1 id="problemhead">Spy number</h1>
<br><br>
<p id="content_p">Spy number is a sum of all digit equal to the  Product of all digit.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 1124
<span id="IO">Output</span>   : Spy number    
<span id="IO">Explain</span>  : Sum of all digits(1+1+2+4=8) and Product of all digits(1*1*2*4=8).</span>
           The sum of all digits is equal to the product of all digits.
           So its "Spy number".
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 42
<span id="IO">Output</span>   : Not a spy number 
<span id="IO">Explain</span>  : Sum of all digits(4+2=6) and Product of all digits(4*2=8).</span>  
           The sum of all digits is not equal to the product of all digits.
           So its "Not a Spy number". 
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
        int n = 132;

        int sum = 0, product = 1;

        while(n!=0)
        {
            sum = sum + n % 10;

            product = product * n % 10;

            n = n/10;
        }

        if(sum==product)
        {
            System.out.print("Spy number");
        }

        else
        {
           System.out.print("Not a Spy number");
        }
    }
}
</div>
<div class="PYTHON">
<pre>
n = 1124

sum = 0

prod = 1

while(n!=0):

    sum += n % 10

    prod *= n % 10

    n = n // 10

if(sum==prod):

    print("Spy number")

else:

    print("Not a spy number") 
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Spy number
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
