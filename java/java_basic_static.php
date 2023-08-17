<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>static in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="example for static keyword in java,example of static keyword in java,explain about static keyword in java,how static keyword works in java,how to use static keyword in java,how to use static variables in java,java static keyword meaning,private static keyword in java,static final this keyword in java,static keyword and final keyword in java,static keyword example in java,static keyword in java,static keyword in java class,static keyword in java example,static keyword in java means,static keyword in java method,static keyword in java program,static keyword in java source code,static keyword in java use,static keyword in java with example,static keyword in java with variable,static keyword use in java,static keyword used in java,static variable keyword in java,the use of static keyword in java,usage of static keyword in java,use of static keyword in java,use of static keyword in java main method,use of static keyword in java with example,what are static variables java,what is java static keyword,what is static in java with example,what is static keyword in java,what is static keyword in java with example,static in java,static keyword in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
  
  .bold
  {
    font-weight: 700;
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
 
<h1 id="problemhead">Static keyword in java</h1><br><br>

<p id="content_p">Static keyword used to access the varible ,method and class without creating the object.</p>


	  <br><br><br><hr><br><br><br>
<h1 id="problemhead">Static variable</h1><br><br>
<p id="content_p">static variable used to you can access the directly and you can access the with help of class name.</p>
<br><br>
<p id="content_p">In Example-1 , We are not using static variable so we can't access the variable directly in main function.</p>

<br><br>
<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
public class Main
{
        int age;

        public static void main(String[] args) 
        {
              age = 18;
        }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
<span class="red">Main.java:6: error: non-static variable age cannot be referenced from a static context
            age=18;
            ^</span>
</pre>
    </div>
<br><br><br><hr><br><br><br>
<p id="content_p">In that Example-2 , we use static variable so we can access the variable directly in main function.</p><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
public class Main
{
        static int age;

        public static void main(String[] args) 
        {
                age = 18;

                System.out.print(age);
        }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
18
</pre>
    </div>
<br><br><br><hr><br><br><br>
<p id="content_p">In that Example-3 , we can access the static variable using the class name only.</p><br><br>
<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
    
<pre>
class class_name
{
       public static int age = 5;
}

public class Main
{
       public static void main(String[] args) 
       {
              System.out.print(class_name.age);
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
    
<h1 id="problemhead">static method</h1><br><br>
<p id="content_p">In that example , we can access the static method "show()" directly. we are not using object.</p>
<br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
public class Main
{
        public static void main(String[] args) 
        {
                show();
        }
        public static void show()
        {
                System.out.print("mycrazycoding");
        }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
mycrazycoding
</pre>
    </div>
<br><br><br><hr><br><br><br>
<p id="content_p">In that example ,  we can access the static method using the class name only.</p><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
class my_class
{
        public static void show()
        {
              System.out.print("mycrazycoding");
        }
}
public class Main
{
        public static void main(String[] args) 
        {
              my_class.show();
        }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
mycrazycoding
</pre>
    </div>
<br><br><br><hr><br><br><br>



<h1 id="problemhead">static class</h1><br><br>
<p id="content_p">static class used to access the without creating object. In that example the inner class access without creating object.</p>
<br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
class Outer
{
      static class Inner
      {
            public void show()
            {
                  System.out.print("show_inner");
            }
      }
}
public class Main
{
      public static void main(String[] args) 
      {
            Outer.Inner obj = new Outer.Inner();

            obj.show();
      }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
show_inner
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
