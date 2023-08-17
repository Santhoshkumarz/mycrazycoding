<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Trimorphic number in Java/Python</title>
 
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

#expand
{
  font-size: 16px;
}
.green
{
  color:#DC300B;
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

<h1 id="problemhead">Trimorphic number</h1>
<br><br>
<p id="content_p">Cube the given number. If the given number is present in the cube number in last means, that is called Trimorphic number.</p>
<br><br>




<h2>Example-1:</h2><br><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 5
<span id="IO">Output</span>   : Trimorphic number    
<span id="IO">Explain</span>  : <span class="green">5</span><sup>3</sup> = 12<span class="green">5</span></sub>
</pre>
</div>


<br><br><br>


<h2>Example-2:</h2><br><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : 24
<span id="IO">Output</span>   : Trimorphic number  
<span id="IO">Explain</span>  : <span class="green">24</span><sup>3</span></sup> = 138<span class="green">24</span></sub>    
</pre>
</div>


<br><br><br>


<h2>Example-3:</h2><br><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : 3
<span id="IO">Output</span>   : Not a Trimorphic number  
<span id="IO">Explain</span>  : <span class="green">3</span><sup>3</sup> = 27</sub>    
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

        int n = 4;

        int cube = n*n*n;

        while(n!=0)
        {
            if(n%10!=cube%10)
            {
                System.out.print("Not a Trimorphic number");
                break;
            }

            n = n/10;

            cube = cube/10;
        }

        if(n==0)
        {
            System.out.print("Trimorphic number");
        }
    }
}
</div>
<div class="PYTHON">
<pre>
n = 4

d = str(n**3)

a = len(str(n))

if(d[-a:]==str(n)):

    print("Trimorphic number")

else:

    print("Not a Trimorphic number")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Trimorphic number
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
