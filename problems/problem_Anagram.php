<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Anagram in Java/Python</title>
 
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
.compiler
{
  background: #24C196;
  color: white;
  float: right;
  margin-top: 1.3%;
  border:5px solid #24C196;

 
}
.compiler:hover
{
    background: #2498C1 ;
     border:5px solid #2498C1 ;
}
@media(max-width: 365px)
{
      .compiler
      {
         display: none;
      }

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
  
<h1 id="problemhead">Anagram</h1>
<br><br>
<p id="content_p">Anagram is a string all characters contains in an another string and both string length are equal.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : S1 = "BAT"  ,  S2 = "TAB"
<span id="IO">Output</span>   : Anagram  
<span id="IO">Explain</span>  : All character contains in an another string,So its "Anagram".</span>
</pre>
</div>


<br><br>



<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : S1 = "SILENT"  ,  S2 = "LISTEN"
<span id="IO">Output</span>   : Anagram  
<span id="IO">Explain</span>  : All character contains in an another string,So its "Anagram".</span>
</pre>
</div>


<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : S1 = "ABC" and s2 = "ABD"
<span id="IO">Output</span>   : Not a Anagram 
<span id="IO">Explain</span>  : "C" not contain in s2."D" not contain in s1.So its "Not a Anagram".</span>   
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
import java.util.*;

public class Main
{
    public static void main(String[] args) 
    {
         String s1 = "BAT";

         String s2 = "ABT";

         if(s1.length() != s2.length())
         {
              System.out.print("Not a Anagram");
         }

         else
         {
              char ch_s1[] = s1.toCharArray();

              char ch_s2[] = s2.toCharArray();

              Arrays.sort(ch_s1);

              Arrays.sort(ch_s2);

              for (int i = 0; i&ltch_s2.length; i++) 
              {
                    if(i == ch_s2.length-1 && ch_s1[i] == ch_s2[i])
                    {
                        System.out.print("Anagram");
                    }

                    if(ch_s1[i] != ch_s2[i])
                    {
                       System.out.print("Not a Anagram");

                       break;
                    }
              }
          }
    }
}
</div>
<div class="PYTHON">
<pre>
n = "BAT"

m = "TAB"

if(sorted(n) == sorted(m)):

    print("Anagram")

else:

    print("Not a Anagram")
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
Anagram
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
