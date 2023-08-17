<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>this in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="examples for this keywords in java,explain this keyword in java,how can use this keyword in java,how this keyword in java,how this keyword works in java,how to use the this keyword in java,how to use this keyword in java with example,is this keyword in java,keywords in java code,keywords in java for beginners,keywords in java programming language,the this keyword in java,this keyword in java,this keyword in java command,this keyword in java example,this keyword in java for method,this keyword in java is used to,this keyword in java methods,this keyword in java program,this keyword in java programming language,this keyword in java use,this keyword in java with example,this keyword in java with example pdf,use of this keywords in java,use this keyword in java,what does this keyword do in java,what is this keywords in java,what this keyword in java,when use this keyword in java,where to use this keyword in java,why do we use this keyword in java,why use this keyword in java,why we use this keyword in java with example,this keyword in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
    .red
  {
      color:#D80219;
  }
  .green
  {
      color: #0B15EB;
  }
</style>
   

  </head>
  <body>
   <?php
   include "nav.php";
    ?>
 <?php
   include "keywords_sidebar.php";
    ?>

<div class="content">
  
<h1 id="problemhead">this keyword in java</h1><br><br>
<p id="content_p">When the parameter and variable name are same , to assign the value without using this keyword , it can't be assign.</p>

<br><br><br><hr><br><br><br>


    <div class="box">
      <div class="heading">Example</div>
	  <div class="src">
	  
<pre>
class sample
{
      int a;

      public sample(int a)
      {
          a = a;
      }
}

public class Main
{
      public static void main(String[] args) 
      {
          sample obj = new sample(5);

          System.out.println(obj.a);
      }
}
</pre>
	  </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
0
</pre>
    </div>
<br><br><br><hr><br><br><br><br>

    <div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
class sample
{
      int a;

      public sample(int a)
      {
          this.a = a;
      }
}

public class Main
{
      public static void main(String[] args) 
      {
          sample obj = new sample(5);

          System.out.println(obj.a);
      }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
5
</pre>
    </div>




    
     <br><br><br><hr><br><br><br>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vertical -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7569865976437849"
     data-ad-slot="6174436937"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script><br><br><br>

  
<?php
   include "footer.php";
    ?>



</div>


  </body>
</html>
