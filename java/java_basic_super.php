<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>super in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="about super keyword in java,define super keyword in java,details about super keyword in java,example of super keyword in java,explain super keyword in java,explain the use of super keyword in java,function of super keyword in java,how does super keyword work in java,how super keyword works in java,how to use keyword super in java,how to use super keyword in java with example,how to use the super keyword in java,how use super keyword in java,is super a keyword in java,java program for super keyword,java program using super keyword,program using super keyword in java,super keyword in java,super keyword in java program,super keyword in java with example,super keyword in java with examples,what is super keyword class in java,what super keyword in java,when do we use super keyword in java,when is super keyword used in java,where we can use super keyword in java,super keyword in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


   <style>
  .blue
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
    
<h1 id="problemhead">Super keyword in java</h1><br><br>

<p id="content_p">Super keyword used to access the super class(parent class).</p>

<br><br><br><hr><br><br><br>


	
    <p id="content_p">When you are overriding the method , It's call only child class method.</p>
<br><br>
<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
class A
{
        public void show()
        {
                System.out.println("In Class A");
        }
}

class B extends A
{
        public void show()
        {
                System.out.println("In Class B");
        }
}

public class Main
{
        public static void main(String[] args) 
        {
                B obj = new B();

                obj.show();
        }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
In Class B
</pre>
    </div>
<br><br><br><hr><br><br><br>

    <p id="content_p">If you want to access the parent class method in overriding.you should use the super keyword.</p>
<br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
class A
{
        public void show()
        {
                System.out.println("In Class A");
        }
}
class B extends A
{
        public void show()
        {
                super.show();

                System.out.println("In Class B");
        }
}
public class Main
{
        public static void main(String[] args) 
        {
                B obj = new B();

                obj.show();
        }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
In Class A
In Class B
</pre>
    </div>
<br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
    
<pre>
class A
{
        public void show()
        {
                System.out.println("In Class A");
        }
}

class B extends A
{
        public void show()
        {         
                System.out.println("In Class B");

                super.show();
        }
}

public class Main
{
        public static void main(String[] args) 
        {
                B obj = new B();
                
                obj.show();
        }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
In Class B
In Class A
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
