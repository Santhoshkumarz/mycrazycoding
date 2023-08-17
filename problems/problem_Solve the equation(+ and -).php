<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Solve the equation in Java/Python</title>
 
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


  




<h1 id="problemhead">Solve the equation</h1>
<br><br>
<p id="content_p">Problem to find the x value in given equation. The equation perform the arithmatic operation "+" and "-" only.</p>
<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "x+5=10"
<span id="IO">Output</span>   : 5
<span id="IO">Explain</span>  : x + 5 = 10
           x = 10-5
           x = 5  
</pre>
</div>


<br><br>

<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "10+5=-x+2"
<span id="IO">Output</span>   : -13
<span id="IO">Explain</span>  : 10+5=-x+2
           10+5-2=-x
           13=-x
           x=-13  
</pre>
</div>


<br><br>

<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "1+2=-2+4+x"
<span id="IO">Output</span>   : 1
<span id="IO">Explain</span>  : 1+2=-2+4+x
           3-2=x
           x=1  
</pre>
</div>

<br><br><br><hr><br><br><br>









<h1 id="problemhead">Solution</h1><br><br><br>
<div class="box">
 <div class="Button">
  <button  id="button1" class="active">Java</button>
</div>

 <div class="src">

<div class="JAVA">
<pre>
public class Main 
{
      public static void main(String[] args) 
      {
            String s = "10+5=-x+2";

            int value = 0;

            boolean f = false, x_lhs = false;

            for (int i=0;i&lt;s.length();i++)
            {
                if(isNum(s.charAt(i)))
                {
                    int a = 0;

                    if(i != 0 && s.charAt(i-1)=='-')
                    {
                        while(i&lt;s.length() && isNum(s.charAt(i)))
                        {
                            a = (a*10) + Character.getNumericValue(s.charAt(i));

                            i++;
                        }

                        if(f) value = value + a;

                        else
                        {
                            value = value-a;
                        }
                    }

                    else
                    {
                       while(i&lts.length()&&isNum(s.charAt(i)))
                       {
                           a = (a*10) + Character.getNumericValue(s.charAt(i));

                           i++;
                       }

                       if(f) value = value-a;

                       else
                       {
                          value = value + a;
                       }

                   }

                   i--;
               }

               if(s.charAt(i)=='=') f = true;

               if(!f&&s.charAt(i)=='x')
               {
                   x_lhs = true;

                   if(i!=0&&s.charAt(i-1)=='-') x_lhs = false;

               }

               if(f&&s.charAt(i)=='x'&&s.charAt(i-1)=='-') x_lhs=true;

            }

            if(x_lhs) System.out.println(-value);

            else
            {
                System.out.println(value);
            }
      }

      public static boolean isNum(char c)
      {
           if(c >= '0' && c<='9') return true;

           return false;
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
5
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
