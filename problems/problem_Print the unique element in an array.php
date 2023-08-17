<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Print the unique element in an array in Java/Python</title>
 
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
  
<h1 id="problemhead">Print the unique element in an array</h1>
<br><br>
<p id="content_p">Problem to print the unique element in an array. Unique elements means without repeating character.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : s = [ "A", "B", "C", "D", "E", "A", "C"]
<span id="IO">Output</span>   : B D E  
<span id="IO">Explain</span>  : Unique elements are (B,D,E).</span>
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : s = [ "H", "E", "L", "L", "O"]
<span id="IO">Output</span>   : H E O  
<span id="IO">Explain</span>  : Unique elements are (H,E,O).</span>   
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
        char ch [] = {'A', 'B', 'C', 'D', 'E', 'A', 'C'};

        for(int i = 0; i&lt;ch.length; i++) 
        {

            if(ch[i] == '\0') continue;

            for(int j = i+1; j&lt;ch.length; j++) 
            {

                if(ch[j] == '\0') continue;

                if(ch[i]==ch[j])
                {
                    ch[i] = '\0';

                    ch[j] = '\0';
                }
            }
        }

        for(int i = 0;i&lt;ch.length;i++) 
        {
            if(ch[i] != '\0')
            {
                System.out.print(ch[i]+"  ");
            }
        }
    }
}
</div>
<div class="PYTHON">
<pre>
n = [ "A", "B", "C", "D", "E", "A", "C"]

for i in range(len(n)):

    if(n.count(n[i])==1):
    
        print(n[i],end=" ")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
B D E 
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
