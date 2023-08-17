<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Next nearest palindrome in Java/Python</title>
 
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
#inside_a
{
   color: blue;
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
  
<h1 id="problemhead">Next nearest palindrome</h1>
<br><br>
<p id="content_p">Problem to find the next nearest palindrome in given value.</p>
<br>
<br>
<p id="content_p">If the given string is equal to the reverse of the string means that is called Palindrome. <a id="inside_a" href="problem_Palindrome.php">Palindrome full Explain</a>
</p>

<br>


<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 15 
<span id="IO">Output</span>   : 11
</pre>
</div>

<br><br>

<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 35 
<span id="IO">Output</span>   : 33
</pre>
</div>

<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 121
<span id="IO">Output</span>   : 131 111    
</pre>
</div>


<br><br>

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
    public static void main(String[] args) 
    {
        Main obj = new Main();

        int num = 121;

        int left = num-1;

        int right = num + 1;

        boolean f = true;

        while(f)
        {
            if(obj.checkpoli(String.valueOf(left)))
            {
                System.out.print(left+" ");

                f = false;
            }

            if(obj.checkpoli(String.valueOf(right)))
            {
                System.out.print(right);

                f = false;
            }

            left--;

            right++;
        }
    }

    private boolean checkpoli(String s)
    {
        int j = s.length()-1;

        for (int i=0;i&lts.length();i++) 
        {
            if(s.charAt(i) != s.charAt(j))
            {
                return false;
            }

            j--;
        }

        return true;
    }
}
</pre>
</div>
<div class="PYTHON">
<pre>
n = "121"

n = int(n)

m = n

n = n+1

k = 1

m = m-1

x = 1

while(str(n)!=(str(n)[::-1])):

    n+=1

    k+=1

x=1

while(str(m)!=(str(m)[::-1])):

    m -= 1

    x += 1

if(k==x):

    print(n,m)

elif(k&ltx):

    print(n)

else:

    print(m)
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
131 111
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
