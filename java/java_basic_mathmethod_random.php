<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Math.random() in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="code for math.random in java,example of math.random in java,explain math.random() in java,function of math.random() in java,how do you use math.random in java,how does math.random work java,how to do math.random in java,how to limit math random in java,how to math.random java,how to use math.random in java,how to use math.random in java with a range,how to use math.random with a range in java,how to use math.random() in java,how to use the math random class in java,how to use the math.random in java,import math.random in java,math.random in java,math.random in java,math.random in java 8,math.random in java code,math.random in java example,use math.random in java,use of math.random in java,what math random do in java,Math.random() in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 <style>
    
    .ads
    {
      display: none;
    }
  </style>
  

  </head>
  <body>
   <?php
   include "nav.php";
    ?>

<?php
   include "Math_method_sidebar.php";
    ?>



   <div class="string_method_sidebar">

<div class="string_head">Math Methods</div>

<div class="string_topics">

<a href="java_basic_mathmethod_abs.php">Math.abs()</a>
<a href="java_basic_mathmethod_max.php">Math.max()</a>
<a href="java_basic_mathmethod_min.php">Math.min()</a>
<a href="java_basic_mathmethod_round.php">Math.round()</a>
<a href="java_basic_mathmethod_pow.php">Math.pow()</a>
<a href="java_basic_mathmethod_sqrt.php">Math.sqrt()</a>
<a href="java_basic_mathmethod_cbrt.php">Math.cbrt()</a>
<a href="java_basic_mathmethod_signum.php">Math.signum()</a>
<a href="java_basic_mathmethod_ceil.php">Math.ceil()</a>
<a href="java_basic_mathmethod_copySign.php">Math.copySign()</a>
<a class="active" href="java_basic_mathmethod_random.php">Math.random()</a>




</div>

  

</div>

<div class="content">


    <h1 id="problemhead">Math.random() in java</h1><br><br>
<p id="content_p">Math.random() used to generate the random number.</p>
<br><br>
 <h1 id="problemhead">syntax</h1><br><br>
    <div class="syntax">
<pre>
Math.random()
</pre>
    </div>

<br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
public class Main
{
       public static void main(String[] args) 
       {
              double a = Math.random();

              double b = Math.random();

              System.out.println(a);

              System.out.println(b);
       }
}
</pre>
	  </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
0.5514289100897026
0.3636559913099954
</pre>
    </div><br><br><br><hr><br>
<br><br>



<div class="box">
  <div class="heading">Example-2 (Random Number Between 0 to 30) </div>
    <div class="src">
    
<pre>
public class Main
{
       public static void main(String[] args) 
       {
              double a = Math.random();

              double b = Math.random();

              System.out.println(a*30);

              System.out.println(b*30);
       }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
18.282085862865923
28.548876029965925
</pre>
    </div><br><br><br><hr><br><br><br>


<div class="box">
  <div class="heading">Example-3 (Random Number Between 20 to 30)</div>
    <div class="src">
    
<pre>
public class Main
{
       public static void main(String[] args) 
       {
              double a = Math.random();

              double b = Math.random();

              System.out.println(20+a*30);

              System.out.println(20+b*30);
       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
30.933836761701045
26.272169228027735
</pre>
    </div>



  
<br><br><br><hr><br><br><br>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vertical -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7569865976437849"
     data-ad-slot="6174436937"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script><br><br><br>

   <?php
   include "footer.php";
    ?>









</div>


  </body>
</html>
