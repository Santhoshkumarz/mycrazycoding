<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Longest Chunked Palindrome Decomposition in Java/Python</title>
 
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
  
<h1 id="problemhead">Longest Chunked Palindrome Decomposition</h1>
<br><br>
<p id="content_p">Problem the palindrome formed by substring.Your task is to find the Longest Palindrome.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : text = "abcxyzabc"
<span id="IO">Output</span>   : 3  
<span id="IO">Explain</span>  : [abc] [xyz] [abc] (These words are formed by Palindrome)</span>
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : text = "abeatmnpqpqmneatab"
<span id="IO">Output</span>   : 8 
<span id="IO">Explain</span>  : [ab] [eat] [mn] [pq] [pq] [mn] [eat] [ab]</span>   
</pre>
</div>


<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : text = "xyzaaxyz"
<span id="IO">Output</span>   : 4 
<span id="IO">Explain</span>  : [xyz] [a] [a] [xyz]</span>   
</pre>
</div>


<br><br>


<h2>Example-4:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : text = "Apple"
<span id="IO">Output</span>   : 1 
<span id="IO">Explain</span>  : [Apple]</span>   
</pre>
</div>

<br><br><br><hr><br><br><br>









<h1 id="problemhead">Solution</h1><br><br><br>
<div class="box">
 <div class="Button">
  <button   id="button1" class="active">Java</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>
public class Main
{
    public static void main(String [] args)
    {
        String text = "abcxyzabc";

        int count = 0;

        int len = 0;

        int l1 = 0, r1 = 1, l2 = text.length()-1, r2 = l2 + 1;

        while(r1&l;tr2)
        {
            if(text.substring(l1,r1).equals(text.substring(l2,r2)))
            {

                len = len + (r1-l1) + (r2-l2);

                count = count + 2;

                l1 = r1;

                r1 = l1 + 1;

                r2 = l2;

                l2 = r2-1;
            }

            else
            {
                r1++;

                l2--;
            }
        }

        if(len!=text.length()) count++;
        
        System.out.print(count);
    }
}
</div>
<div class="PYTHON">
<pre>


</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
3
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
