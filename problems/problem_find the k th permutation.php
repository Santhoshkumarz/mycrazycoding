<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Find the k th permutation in Java/Python</title>
 
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
    padding-left: 27%;

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

    
<h1 id="problemhead">Find the k th permutation</h1>
<br><br>
<p id="content_p">Problem to find the K th permutation value. First Line contain Integer N and 1<=N<=9.</p>
<br>
<p id="content_p"> If N = 3 the permutation are,</p>
<br>
<ol id="FP">
    <li>123</li>
    <li>132</li>
    <li>213</li>
    <li>231</li>
    <li>312</li>
    <li>321</li>

</ol>

<br><br>




<h2>Example-1:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : N = 3 , K = 3
<span id="IO">Output</span>   : "213"  
</pre>
</div>


<br><br>


<h2>Example-2:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : N = 3 , K = 4
<span id="IO">Output</span>   : "231"     
</pre>
</div>


<br><br>


<h2>Example-3:</h2><br>
<div class="Example">
<pre>
<span id="IO">Input</span>    : N = 4 , K = 18
<span id="IO">Output</span>   : "3421"     
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
class Solution
{
    public String getPermutation(int n, int k)
    {
        String str = "";

        String ans = "";

        for(int i = 1; i <= n; i++){

            str = str + i;                        
        }

        return solve(ans,str,k);
    }

    public String solve(String ans,String str,int k)
    {
        int choice_digit = number_of_choice(str.length());

        int temp = 0;

        for (int i = 0; i &lt;str.length();i++) 
        {
            if((i+1)*choice_digit >= k){

                ans = ans + str.charAt(i);

                temp = i;

                break;
            }
        }

        str = str.substring(0,temp) + str.substring(temp+1,str.length());

        if(str.length() != 0)
        {
            k = k % choice_digit;

            if(k==0)
            {
                k = choice_digit;
            }

            return solve(ans,str,k);
        }

        else
        {
            return ans;
        }
    }

    public int number_of_choice(int num)
    {
        int fact = 1;

        for (int i = 1; i <= num;i++){

            fact = fact*i;
        }

        return fact/num;
    }
}

public class Main
{
    public static void main(String[] args) 
    {
        Solution obj = new Solution();

        System.out.println(obj.getPermutation(4,18));
    }
}
</div>
<div class="PYTHON">
<pre>
from itertools import permutations

n = 4

k = 18

a = ""

for i in range(1,n+1):

    a += str(i)

d = list(permutations(a,len(a)))

print("".join(d[k-1]))
</pre>
</div>
    </div>


</div>
<br>
<br><br>
<h2>Output</h2><br><br>
<div class="output">
<pre>
3421
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
