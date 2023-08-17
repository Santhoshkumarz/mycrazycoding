<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Longest Common Prefix in Java/Python</title>
 
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


  




<h1 id="problemhead">Longest Common Prefix</h1>
<br><br>
<p id="content_p">Problem to find the longest common prefix substring.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : s = [ "flower", "flow", "flight"]
<span id="IO">Output</span>   : "fl"  
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : s = [ "semicolon", "semifinal"]
<span id="IO">Output</span>   : "semi"  
</pre>
</div>

<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : s = [ "discard", "discomfort"]
<span id="IO">Output</span>   : "disc"  
</pre>
</div>

<br><br><br><hr><br><br><br>









<h1 id="problemhead">Solution</h1><br><br><br>
<div class="box">
 <div class="Button">
  <button  id="button1" class="active">Java</button>
  <button  id="button2">Python</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>
public class Main 
{
    public static void main(String[] args)
    {
        String[] strs = { "flower", "flow", "flight"};

        String prefix = "";

        if(strs.length == 0)
        {
            prefix = "";
        }

        else
        {
            prefix = strs[0];

            for(int i = 1; i&lt;strs.length; i++)
            {
                    while(strs[i].indexOf(prefix) != 0)
                    {
                           prefix = prefix.substring(0,prefix.length() -1);

                           if(prefix.isEmpty())
                           {
                                 break;
                           }
                    }
            }
        }

        System.out.println(prefix);
    }
}
</div>
<div class="PYTHON">
<pre>
s = [ "flower", "flow", "flight"]

l = []

k = []

u = []

for x in range(len(s)):

    k.append(len(s[x]))

a = min(k)

b = k.index(a)

for i in range(len(s)):

    d = ""

    for j in range(len(s[b])):

        if(s[b][j])==(s[i][j]):

            d += s[b][j]

        else:

            break

    l.append(d)

if(len(l) == len(s)):

    for y in range(len(l)):

        u.append(len(l[y]))

    c = min(u)

    e = u.index(c)

    print(l[e])
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
fl
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
