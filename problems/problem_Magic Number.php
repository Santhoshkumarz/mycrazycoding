<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Magic Number in Java/Python</title>
 
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
  
<h1 id="problemhead">Magic Number</h1>
<br><br>
<p id="content_p">Problem to find the Magic Number or Not.</p>
<br>
<p id="content_p">Magic Number is to sum the each and every digit and continue the same process until length become one.If value is "1" that is Magic Number.</p>

<br>
<br>



<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 1234
<span id="IO">Output</span>   : Magic number  
<span id="IO">Explain</span>  : 1 + 2 + 3 + 4 = 10</span>
           1 + 0 = 1[So its Magic Number]
</pre>
</div>


<br><br>



<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 12345
<span id="IO">Output</span>   : Not a Magic Number
<span id="IO">Explain</span>  : 1 + 2 + 3 + 4 + 5 = 15</span>
           1 + 5 = 6[So its not Magic Number]
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
        int num = 1234;

        int sum = 0;

        if(num % 9 == 0 && num != 0){

            sum = 9;
        }

        else{
            sum = num % 9;
        }

        if(sum == 1){

            System.out.print("Magic Number");
        }
        else{
            System.out.print("Not a Magic Number");
        }
    }
}
</div>
<div class="PYTHON">
<pre>
num = 1234

if(num % 9 == 0 and num != 0):

    k = 9

else:

    k = num % 9

if(k==1):

    print("Magic number")

else:

    print("Not a Magic number")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Magic Number
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
