<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Twisted prime number in Java/Python</title>
 
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
    
<h1 id="problemhead">Twisted prime number</h1>
<br><br>
<p id="content_p">If given number and reversed number are prime number means that is Twisted prime number.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 17
<span id="IO">Output</span>   : Twisted prime number 
<span id="IO">Explain</span>  : 17 is prime number and 71 also prime number.So It's Twisted prime number.
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 23
<span id="IO">Output</span>   : Not a Twisted prime number 
<span id="IO">Output</span>   : 23 is prime number but 32 is not a prime number.So It's Not a Twisted prime
           number. 
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
        int num = 13;

        if(isPrime(num))
        {
            int reverse = 0;

            while(num!=0)
            {
                reverse = (reverse*10) + (num%10);

                num = num/10;
            }

            if(isPrime(reverse))
            {
                System.out.print("Twisted prime number");
            }

            else
            {
                System.out.print("Not a Twisted prime number");
            }
        }

        else
        {
            System.out.print("Not a Twisted prime number");
        }
    }

    public static boolean isPrime(int n)
    {
        for(int i=2;i&ltn;i++) 
        {
            if(n % i == 0)
            {
                return false;
            }
        }

        return true;
    }
}
</div>
<div class="PYTHON">
<pre>
n = 13

m = str(n)[::-1]

m = int(m)

k = 0

for i in range(2,n):

    if(n % i == 0):

        break

else:

    k += 1

for j in range(2,m):

    if(m % j == 0):

        break

else:

    k += 1

if(k==2):

    print("Twisted prime number")

else:

    print("Not a Twisted prime number")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Twisted prime number
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
