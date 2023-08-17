<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Robotics sum in Java/Python</title>
 
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
#FP
{
    list-style-type:disc;

}

#inside
{
   font-family: 'Roboto', sans-serif;
    font-size:20px;
    font-weight: 500;
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
  
<h1 id="problemhead">Robotics sum-2</h1>
<br><br>



<p id="content_p">Problem the input "R","L","U","D" denotes to right, left, up and down respectively.  The integer that nearer to the above charecters are the points that move towards the graph.</p>

<br><br>

<h1 id="inside">Input: n="R10L5U5D10" </h1><br>

<ol id="FP">
  <li>If the input consists of R10 we should move 10 points towards right.</li>
  <li>If the input consists of L5 we should move 5 points towards left. </li>
  <li>If the input consists of U5 we should move 5 points towards up. </li>
  <li>If the input consists of D10 we should move 10 points towards down. </li>

</ol>

<br><br>

<h1 id="inside">output</h1><br>

<ol id="FP">
  <li>After performing all the process print the X and Y coordinates.</li>
</ol>

<br><br>


<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "R10L5U5D10"
<span id="IO">Output</span>   : 5 -5 
<span id="IO">Explain</span>  : The final output is x=5 and y=-5.  
</pre>
</div>



<br><br>

<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "R7R3L4L2U12"
<span id="IO">Output</span>   : 4 12
<span id="IO">Explain</span>  : The final output is x=4 and y=12.  
</pre>
</div>


<br><br>




<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "U10L20R10"
<span id="IO">Output</span>   : -10 10 
<span id="IO">Explain</span>  : The final output is x=-10 and y=10.  
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
    public static void main(String[] args) 
    {     
        String s = "R10L5U5D10";

        char before = s.charAt(0);

        int num = 0;

        int x = 0,y = 0;

        for (int i=0;i&lt;s.length();i++) 
        {
            if(s.charAt(i)>='0' && s.charAt(i)<='9')
            {
                num = (num*10) + Character.getNumericValue(s.charAt(i));
            }

            if(!(s.charAt(i) >= '0' && s.charAt(i) <= '9')||i == s.length()-1)
            {
                if(before=='R') x = x + num;

                else if(before=='L') x = x-num;

                else if(before=='D') y = y-num;

                else
                {
                    y = y + num;
                }

                num = 0;

                before=s.charAt(i);
            }
        }
               System.out.print(x+" "+y);
    }
}
</pre>
</div>
<div class="PYTHON">
<pre>
import re

n = "R10L5U5D10"

x1 = []

x2 = []

y1 = []

y2 = []

r = re.findall("R+[0-9]+",n)

l = re.findall("L+[0-9]+",n)

u = re.findall("U+[0-9]+",n)

d = re.findall("D+[0-9]+",n)

for i1 in range(len(r)):

    k1 = r[i1]

    a1 = int(k1[1:])

    x1.append(a1)

for i2 in range(len(l)):

    k2 = l[i2]

    a2 = int(k2[1:])

    x2.append(a2)

for i3 in range(len(u)):

    k3 = u[i3]

    a3 = int(k3[1:])

    y1.append(a3)

for i4 in range(len(d)):

    k4 = d[i4]

    a4 = int(k4[1:])

    y2.append(a4)

x = sum(x1)-sum(x2)

y = sum(y1)-sum(y2)

print(x,y)
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
5 -5
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
