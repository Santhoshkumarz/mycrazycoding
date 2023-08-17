<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>private in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="private keyword in java,private keyword in java with example,private method keyword in java,private protected public default in java,private specifier in java,private static final keyword in java,private static keyword in java,private variable in java example,private variables in java,public and private keywords in java,public private keywords in java,use of private keyword in java,what is private keyword in java,what is the use of private keyword in java,why do we use private variables in java,why private in java,why private variables in java,why we use private keyword in java,private keyword in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
 
  #inside
  {
     color: blue;
     text-decoration: none;
  }
  #inside:hover
  {
     text-decoration: underline;
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
  
<h1 id="problemhead">Private keyword in java</h1><br><br>
<p id="content_p">private keyword can be access the variable, method and class inside the class only.</p>


	  <br><br><br><hr><br><br><br>
<h1 id="problemhead">Private variable</h1><br><br>
<p id="content_p">In that example , variable private int n=25 in class "A" and I am access this private variable in another class "Main". In private variables can be access inside the class only. So It's error. </p>
<br><br>
<div class="box">
  <div class="heading">Example</div>
	  <div class="src">
	  
<pre>
class A
{
      private int n = 25;
}
public class Main
{
      public static void main(String[] args) 
      {
            A obj = new A();

            System.out.print(obj.n);
      }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
<span class="red">Main.java:12: error: n has private access in A
               System.out.print(obj.n);
                                   ^</span>
</pre>
    </div>
<br><br><br><hr><br><br><br>
    
<h1 id="problemhead">Private method</h1><br><br>
<p id="content_p">In that example , method private void show() in class "A" and I am access this private method in another class "Main". In private method can be access inside the class only. So It's error.</p>
<br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
class A
{
      private void show()
      {
            System.out.print("mycrazycoding");
      }
}

public class Main
{
      public static void main(String[] args) 
      {
            A obj = new A();

            obj.show();
      }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
<span class="red">Main.java:13: error: show() has private access in A
              obj.show();
                 ^</span>
</pre>
    </div>
<br><br><br><hr><br><br><br>



<h1 id="problemhead">Private class</h1><br><br>
<p id="content_p">In that example , The <a id="inside" href="java_basic_innerclass.php">inner class</a> has been private. So you can not be access that.</a></p>
<br><br>
<div class="box">
  <div class="heading">Example-1</div>
    <div class="src">
    
<pre>
class Outer
{
      private class Inner
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
            Outer obj = new Outer();

            Outer.Inner obj_in = obj.new Inner();

            obj_in.show();
      }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
<span class="red">Main.java:16: error: Outer.Inner has private access in Outer
            Outer.Inner obj_in = obj.new Inner();
                 ^
Main.java:16: error: Outer.Inner has private access in Outer
            Outer.Inner obj_in = obj.new Inner();
                                         ^
2 errors</span>
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
