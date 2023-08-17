<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Disarium number in Java/Python</title>
 
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
  
<h1 id="problemhead">Disarium number</h1>
<br><br>
<p id="content_p">if given number equal to the power of each and every digit with consecutive number and sum the powered value.That is called Disarium number.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=175
<span id="IO">Output</span>   : Disarium number    
<span id="IO">Explain</span>  : 1<sup>1</sup> + 7<sup>2</sup> + 5<sup>3</sup> = 175.</span>
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=89
<span id="IO">Output</span>   : Disarium number 
<span id="IO">Explain</span>  : 8<sup>1</sup> + 9<sup>2</sup> = 89.   
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
        int n = 89;

        int sum = 0;

        String s = "" + n;

        for(int i = 0; i&lts.length(); i++) 
        {
            char value = s.charAt(i);

            sum = sum + (int)Math.pow(Character.getNumericValue(value),i+1);
        }

        if(sum == n)
        {
            System.out.print("Disarium number");
        }

        else
        {
            System.out.print("Not a Disarium number");
        }
    }
}
</div>
<div class="PYTHON">
<pre>
n = 89

sum = 0

i = 1

for x in str(n):

    sum += (int(x)**i)

    i += 1

if(sum==n):

    print("Disarium number")

else:

    print("Not a disarium number")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Disarium number
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
