<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>final in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="final keyword definition in java,final keyword example in java,final keyword example program in java,final keyword for class in java,final keyword in java,final keyword in java beginners,final keyword in java class,final keyword in java example,final keyword in java for variables,final keyword in java inner class,final keyword in java is used with,final keyword in java method,final keyword in java objects,final keyword in java package,final keyword in java program,final keyword in java with example,final keyword use in java,final keyword used in java,find final keyword in java,how many keywords in java language,how to use continue keyword in java,how to use final keyword in java,keywords in java code,keywords in java example,keywords in java for beginners,keywords in java language,keywords in java programming,keywords in java programming language,keywords in java with example,what is java keywords,final keyword in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
   <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
  
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

<h1 id="problemhead">final keyword in java</h1><br><br>

<p id="content_p">final keyword used to declare constant value,method and class.</p>


	  <br><br><br><hr><br><br><br>
<h1 id="problemhead">final variable</h1><br><br>
<p id="content_p">In final variable, after assign the  value you can't modify this. If you are change the value, It will be an ERROR.</p>
<br><br>

<div class="box">
  <div class="heading">Example</div>

	  <div class="src">
	  
<pre>
public class Main
{
      public static void main(String[] args) 
      {
            final int a = 5;

            a = 6;
      }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">  
<pre>
<span class="red">Main.java:6: error: cannot assign a value to final variable a
           a=6;
           ^</span>
</pre>
    </div>
<br><br><br><hr><br><br><br>
    
<h1 id="problemhead">final method</h1><br><br>
<p id="content_p">In Final method can not be overriding. If you are to override the final method, It will be an ERROR.</p>
<br><br>

<div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
class A
{
      final public void display()
      {
            System.out.print("In Class A");
      }
}

class B extends A
{
      public void display()
      {
            System.out.print("In Class B");
      }
}

public class Main
{
      public static void main(String[] args) 
      {
            B obj = new B();

            obj.display();
      }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
<span class="red">Main.java:11: error: display() in B cannot override display() in A
     public void display()
                 ^
  overridden method is final</span>
</pre>
    </div>
<br><br><br><hr><br><br><br>



<h1 id="problemhead">final class</h1><br><br>
<p id="content_p">In final class can not be inherit from other class.</p>

<br><br>

<div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
final class A
{
      public void ABC()
      {
          System.out.print("In Class A");
      }
}

class B extends A
{
      public void XYZ()
      {
          System.out.print("In Class A");
      }
}

public class Main
{
      public static void main(String[] args) 
      {
           B obj = new B();

           obj.XYZ();
      }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
<span class="red">Main.java:8: error: cannot inherit from final A
class B extends A
                ^</span>
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
