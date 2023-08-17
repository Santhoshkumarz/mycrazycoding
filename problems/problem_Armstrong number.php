<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Armstrong number in Java/Python</title>
 
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

<h1 id="problemhead">Armstrong number</h1>
<br><br>
<p id="content_p">if given number equal to the power of each and every digit with length of the given number and sum the powered value.That is called Armstrong number.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=153
<span id="IO">Output</span>   : Armstrong number    
<span id="IO">Explain</span>  : 1<sup>3</sup>+5<sup>3</sup>+3<sup>3</sup>=153. The output value is equal to the input value.

</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=1634
<span id="IO">Output</span>   : Armstrong number 
<span id="IO">Explain</span>  : 1<sup>4</sup>+6<sup>4</sup>+3<sup>4</sup>+4<sup>4</sup>=1634. The output value is equal to the input value.
 
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n=52
<span id="IO">Output</span>   : Not a Armstrong number 
<span id="IO">Explain</span>  : 5<sup>2</sup>+2<sup>2</sup>=29. The output value is not equal to the input value.
 
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
        int n = 153;

        int temp = n, sum = 0;

        String s = "" + n;

        int len = s.length();

        while(temp != 0){

            sum = sum + (int)Math.pow(temp % 10,len);

            temp = temp/10;
        }

        if(n == sum){
        
            System.out.print("Armstrong number");
        }

        else{
              
            System.out.print("Not a Armstrong number");
        }
    }
}
</div>
<div class="PYTHON">
<pre>
n = 153

n = str(n)

k = 0

for i in range(len(n)):

    k += (int(n[i]))**3

if(int(n) == k):

    print("Armstrong number")

else:

    print("Not a Armstrong number")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Armstrong number
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
