<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Happy Number in Java/Python</title>
 
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

sub
{
  font-size: 17px;
}
#expand
{
  font-size: 16px;
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
  
<h1 id="problemhead">Happy Number</h1>
<br><br>
<p id="content_p">Problem to find the happy number or not.</p>

<br>
<p id="content_p">Happy number is square the each and every digit and sum the squared value and continue the same process until length become one.If length value is "1" that is happy number.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 91
<span id="IO">Output</span>   : Happy Number
<span id="IO">Explain</span>  : 9<sup>2</sup>+1<sup>2</sup>=82
           8<sup>2</sup>+2<sup>2</sup>=68
           6<sup>2</sup>+8<sup>2</sup>=100
           1<sup>2</sup>+0<sup>2</sup>+0<sup>2</sup>=1. It's happy number.
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=37
<span id="IO">Output</span>   : Happy number
<span id="IO">Explain</span>  : 3<sup>2</sup>+7<sup>2</sup>=58
           5<sup>2</sup>+8<sup>2</sup>=89
           8<sup>2</sup>+9<sup>2</sup>=145
           1<sup>2</sup>+4<sup>2</sup>+5<sup>2</sup>=42 
           4<sup>2</sup>+2<sup>2</sup>=20 
           2<sup>2</sup>+0<sup>2</sup>=4. It's Not a Happy number.
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
        int n = 91;

        int sum = 0;

        do
        {
            sum = 0;

            while(n != 0)
            {
                sum = sum + (int)Math.pow(n%10,2);

                n = n/10;
            }

            n = sum;

        }while(sum >= 10);

           
        if(sum == 1)
        {
            System.out.print("Happy Number");
        }

        else
        {
            System.out.print("Not a Happy Number");
        }
    }
}
</div>
<div class="PYTHON">
<pre>
n = 91

n = str(n)

while(len(n) != 1):

    k = 0

    for x in n:

        k += int(x)**2

    n = str(k)

if(n == "1"):

    print("Happy number")

else:

    print("Not a Happy number")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Happy Number
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
