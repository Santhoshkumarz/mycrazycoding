<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Count and Say in Java/Python</title>
 
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="file:///E:/jquery.js"></script>
    <script src="javascript/myscript.js"></script>
   
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
  
<h1 id="problemhead">Count and Say</h1>
<br><br>
<p id="content_p">Problem to find the n th value of Count and Say pattern.</p>
<br>

<br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = "5"
<span id="IO">Output</span>   : "111221"
<span id="IO">Explain</span>  : step 1 : Initially s = 1
           step 2 : s = one 1's ==>  So s = 11
           step 3 : s = two 1's ==> So s = 21
           step 4 : s = one 2's and one 1's ==> So s = 1211
           step 5 : s = one 1's and one 2's and two 1's ==> So s = 111221  
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : n = 4
<span id="IO">Output</span>   : "1211"
<span id="IO">Explain</span>  : step 1 : Initially s = 1
           step 2 : s = one 1's ==>  So s = 11
           step 3 : s = two 1's ==> So s = 21
           step 4 : s = one 2's and one 1's ==> So s = 1211
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
        int n = 5;

        String s = "1";

        while(n != 1)
        {
            s = solve(s);

            n--;
        }

        System.out.print(s);
    }

    public static String solve(String str)
    {
        int count = 1;

        String s_new = "";

        for(int i = 0; i &lt str.length(); i++)
        {
            if(i != str.length()-1 && str.charAt(i) == str.charAt(i+1)){

                count++;
            }

            else{

                s_new = s_new + count + str.charAt(i);  

                count = 1;

            }
        }

        return s_new;
    } 
}
</div>
<div class="PYTHON">
<pre>
n = 5

k = "1 "

if(n == 1):

    print("1")

for i in range(n-1):

    count = 1

    d = ""

    for j in range(1,len(k)):

        if(k[j-1] == k[j]):

            count += 1

        else:

            d += str(count)

            d += str(k[j-1])

            count = 1

    d += " "

    k = d

print(d.strip())
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
111221
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
