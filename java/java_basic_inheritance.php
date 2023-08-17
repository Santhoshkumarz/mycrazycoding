<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Inheritance in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="about inheritance in java,basics of inheritance in java,best example for inheritance in java,define inheritance in java with example,different types of inheritance in java,example of inheritance in java,example program for inheritance in java,explain inheritance in java with example,good example of inheritance in java,how inheritance in java,how to do inheritance in java,how to do multiple inheritance in java,how to use inheritance in java,inheritance in java code example,inheritance in java example,inheritance in java example programs,inheritance in java exercises with solutions,inheritance in java methods,inheritance in java problems,inheritance in java program,inheritance in java program example,why do we need inheritance in java,why do we use inheritance in java,why inheritance in java,Inheritance in java,Inheritance in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
<style>
#inside
{
        padding-left:25%;
        list-style-type:decimal;
         word-spacing: 3px;
    letter-spacing: 0.3px;
}
#inside li
{
       padding: 10px;
}
#inside_pre
{
     font-family: 'Roboto Mono', monospace;
     font-size:17px;
     padding-left: 30%;

}
#inside_pre_pro
{
     font-family: 'Roboto Mono', monospace;
     font-size:17px;
     padding-left: 20%;

 
}
.inheri_span
{
    border: 1px solid black;
    padding-left: 2%;
    padding-top: 2%;
    padding-bottom: 2%;
    padding-right: 2%;
}
.symbol
{
    font-size: 25px;

}
@media screen and (max-width: 390px)
{
     #inside_pre_pro
     {
        padding-left: 1%;
     }
}

</style>
  

  </head>
  <body>
   <?php
   include "nav.php";
    ?>

      <div id="side" class="sidebar">

<div class="topics">
  <h1 id="H1">BASIC TURORIAL</h1>
  <a  href="java_index.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Introduction</a>
  <a href="java_basic_print.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Print</a>
  <a href="java_basic_input_get.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Input get</a>
  <a href="java_basic_data_types.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Datatypes</a>
  <a href="java_basic_types_of_operator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Types of operator</a>
  <a href="java_basic_Keywords.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Keywords</a>
  <a href="java_basic_if.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> if,if else,..</a>
  <a href="java_basic_switch.php" id="A"><i class="fas fa-arrow-alt-circle-right"></i> Switch</a>
  <a href="java_basic_loop.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Loop</a>
  <a href="java_basic_array.php" id="A" ><i class="fas fa-arrow-alt-circle-right"></i> Array</a>
  <a href="java_basic_Math_methods.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Math methods</a>
  <a href="java_basic_string_stringmethod.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> String/String methods</a>
  <a href="java_basic_Exception_Handling.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Exception Handling</a>
<br>
 
  <h1 id="H1">FUNCTIONS</h1>
  <a href="java_basic_function_main.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Function</a>
  <a href="java_basic_function.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Types of Function</a>
  <a href="java_basic_Varargs.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Variable Arguments (Varargs)</a>
  <a href="java_basic_recursion.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Recursion</a>
 <br>
 
  <h1 id="H1">OBJECT ORIENTED</h1>
  <a href="java_basic_class.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Class</a>
  <a href="java_basic_constructor.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Constructor</a>
  <a class="active" href="java_basic_inheritance.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Inheritance</a>
  <a href="java_basic_Overloading.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Method Overloading</a>
  <a href="java_basic_Overriding.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Method Overriding</a>
  <a href="java_basic_interface.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Interface</a>
  <a href="java_basic_Abstruct.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Abstract Class</a>
  <a href="java_basic_anonymous_class.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Anonymous class</a>
  <a href="java_basic_Wrapper.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Wrapper class</a>
  <a href="java_basic_innerclass.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Innerclass</a>
  <a href="java_basic_Iterator.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Iterator</a>
  <a href="java_basic_encapsulation.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Encapsulation</a>
  <a href="java_basic_Enum.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Enum</a>
  <a href="java_basic_Package.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Package</a>
  <a href="java_basic_Thread.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Thread</a>
  <a href="java_basic_Multiple_Thread.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Multithread</a>
  <a href="java_basic_Lambda_Expression.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Lambda Expression</a>
 <br>

  <h1 id="H1">LIST</h1>
  <a href="java_basic_ArrayList.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> ArrayList</a>
  <a href="java_basic_LinkedList.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> LinkedList</a>
  <a href="java_basic_HashMap.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> HashMap</a>
  <a href="java_basic_HashSet.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> HashSet</a>
<br>

  <h1 id="H1">FILE HANDLING</h1>
  <a href="java_basic_file_create.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Create-file</a>
  <a href="java_basic_write_file.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Write-file</a>
  <a href="java_basic_read_file.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Read-file</a>
  <a href="java_basic_delete_file.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Delete-file</a>
  <br>
 
 
  <h1 id="H1">OTHERS</h1>
  <a href="Howto/howto_index.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Java How to</a>
<hr>
</div>
<br><br>
</div>


<div class="content">

<h1 id="problemhead">Inheritance in java</h1><br><br>
<p id="content_p">Inheritance is the class acquire the another class.parents class acquire the child class.</p>

     
<br><br><hr><br><br>
    <h1 id="problemhead">Types of Inheritance</h1><br><br>
    <ol id="inside">
      <li>Single Inheritance</li>
      <li>Multilevel Inheritance</li>
      <li>Multiple Inheritance</li>
      <li>Hierarchical Inheritance</li>
      <li>Hybrid Inheritance</li>
    </ol><br><br><br><hr><br><br><br>
    <h1 id="problemhead">1. Single Inheritance</h1><br><br>
<p id="content_p">Single Inheritance is the parents class acquire only one child class.</p>

<br><br>

<pre id="inside_pre">
<span class="inheri_span">class A</span> 

    <span class="symbol">&#8593;</span>

<span class="inheri_span">class B</span>
</pre>
<br><br>
<br><br>


<div class="box">
  <div class="heading">Example</div>
	  <div class="src">
	  
<pre>
class A
{
       A()
       {
             System.out.println("From Class A");
       }
  
}
class B extends A
{
       B()
       {
             System.out.println("From Class B");
       }
}
public class Main
{
       public static void main(String[] args) 
       {
            B obj = new B();
       }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
From Class A
From Class B
</pre>
    </div><br><br><br><hr><br><br><br>

<h1 id="problemhead">2. Multilevel Inheritance</h1><br><br>
<p id="content_p">Some class having parents class and child class.That is Multilevel Inheritance.</p>
<br><br><br>
<pre id="inside_pre">
<span class="inheri_span">class A</span> 

    <span class="symbol">&#8593;</span>

<span class="inheri_span">class B</span>

    <span class="symbol">&#8593;</span>

<span class="inheri_span">class C</span>
</pre>
<br><br>
<br><br>

<div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
class A
{
      A()
      {
            System.out.println("From Class A");
      }

}
class B extends A
{
      B()
      {
            System.out.println("From Class B");
      }

}
class C extends B
{
      C()
      {
           System.out.println("From Class C");
      }
}
public class Main
{
      public static void main(String[] args) 
      {
           C obj = new C();
      } 
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
From Class A
From Class B
From Class C
</pre>
    </div><br><br><br><hr><br><br><br>


<h1 id="problemhead">3. Multiple Inheritance</h1><br><br>


<p id="content_p">Multiple Inheritance is one parents class having two or more child class.Unfortunate , java can't accept Multiple Inheritance.</p>
<br><br><br>
<pre id="inside_pre_pro">
  <span class="inheri_span">class A</span>         <span class="inheri_span">class B</span>

         <span class="symbol">&#8598;</span>         <span class="symbol">&#8599;</span>

          <span class="inheri_span">class C</span>



</pre>
    <br><br><br><hr><br><br><br>



<h1 id="problemhead">4. Hierarchical Inheritance</h1><br><br>

<p id="content_p">Some class having two or more child class that is call Hierarchical Inheritance.</p>
<br><br><br>
<pre id="inside_pre_pro">
           <span class="inheri_span">class A</span> 

          <span class="symbol">&#8599;</span>        <span class="symbol">&#8598;</span>

<span class="inheri_span">class B</span>            <span class="inheri_span">class C</span>



</pre>
<br><br>
    

<div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
class A
{
      A()
      {
           System.out.println("From Class A");
      }
}

class B extends A
{
      B()
      {
           System.out.println("From Class B");
      }

}

class C extends A
{
      C()
      {
           System.out.println("From Class C");
      }
}
public class Main
{
      public static void main(String[] args) 
      {
          C obj = new C();
      }
}
</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
From Class A
From Class C
</pre>
    </div><br><br><br><hr><br><br><br>



<h1 id="problemhead">5. Hybrid Inheritance</h1><br><br>
<p id="content_p">Hybrid Inheritance is combination of another types of inheritance.</p>
 
  <br><br><br>
<div class="box">
  <div class="heading">Example</div>
    <div class="src">
    
<pre>
class A
{
      A()
      {
            System.out.println("From Class A");
      }
}

class B extends A
{
      B()
      {
           System.out.println("From Class B");
      }

}
class C extends B
{
      C()
      {
          System.out.println("From Class C");
      }
}
class D extends B
{
      D()
      {
          System.out.println("From Class D");
      }
} 

public class Main
{
      public static void main(String[] args) 
      {
          D obj = new D();
      }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
From Class A
From Class B
From Class D
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
