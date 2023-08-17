<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>MultiThread in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="best way to use multi thread in java,create multi thread in java,example for multi thread in java,example of multi thread in java,example program for multi thread in java,how to create a multi thread in java,how to create multi thread in java,how to test multi thread in java,how to use multi thread in java,multi thread a method in java,multi thread best practices java,multi thread concept in java,multi thread in java 8,multi thread in java example,multi thread in java program,multi thread in java with example,multi thread java 8 example,multi thread methods in java,multi thread problem in java,multi thread problem java,multi thread program in java example,what is multi thread in java with example,multi thread in java,multi thread in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

   <style>
     .green
     {
          color:#02BC13;
          font-weight: 500;
     }
     .red
     {
          color: #D70723;
          font-weight: 500;
     }
     table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 130px;
}
th, td {
  
  padding: 10px;
  text-align: left;
}
td
{
  font-weight: 400;
}
 @media screen and (max-width: 1200px)
  {
    table, th, td {
      margin-left: 65px;
    }
  }
  @media screen and (max-width: 840px)
  {
    table, th, td {
      margin-left: 100px;
    }
  }
  @media screen and (max-width: 750px)
  {
    table, th, td {
      margin-left: 65px;
    }
  }
  @media screen and (max-width: 665px)
  {
    table, th, td {
      margin-left: 10px;
    }
  }
  @media screen and (max-width: 512px)
  {
    table, th, td {
      margin-left: 0px;
    }
  }
   @media screen and (max-width: 438px)
  {
    table, th, td {
      font-size: 14px;
    }
  }
   @media screen and (max-width: 380px)
  {
    table, th, td {
      font-size: 13px;
    }
  }
  @media screen and (max-width: 345px)
  {
    table{
      font-size: 11px;
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
  <a href="java_basic_inheritance.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Inheritance</a>
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
  <a  href="java_basic_Thread.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Thread</a>
  <a class="active" href="java_basic_Multiple_Thread.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Multithread</a>
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

<h1 id="problemhead">MultiThread in java</h1><br><br>
<p id="content_p">MultiThread is a to execute the two or more thread in same time.</p><br><br>
<br><hr><br><br>
<h1 id="problemhead">The use of Multithread</h1><br><br>
<p id="content_p">MultiThread is important topic. Because If you want to be a game developer you must know about this.</p><br>
<p id="content_p">For Example , you just Imagine play the pubg game , you just move forward , at the same time the  opponent also moving .At the once time two or more players moving , how to do this. If you use multiThread you can do this very simple.</p>






<br><br><br><hr><br><br><br>


<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
class A extends Thread
{
      public void run()
      {
            for (int i=0;i<5;i++) 
            {
                System.out.println("Class A");
                try
                {
                      Thread.sleep(500);
                }
                catch(Exception e){}
            }
      }
}
class B extends Thread
{
      public void run()
      {
            for (int i=0;i<5;i++) 
            {
                  System.out.println("Class B");
                  try
                  {
                        Thread.sleep(500);
                  }
                  catch(Exception e){}
            }
      }
}
public class Main
{
      public static void main(String[] args) 
      {
            A obj1 = new A();
            B obj2 = new B();
            obj1.start();
            try
            {
                  Thread.sleep(500);
            }
            catch(Exception e){}
            obj2.start();
      }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
Class A
Class B
Class A
Class B
Class A
Class B
Class A
Class B
Class A
Class B
</pre>
    </div>
<br><br><br><br><hr><br><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
class A implements Runnable
{
      public void run()
      {
            for (int i=0;i<5;i++) 
            {
                  System.out.println("Class A");
                  try
                  {
                        Thread.sleep(500);
                  }
                  catch(Exception e){} 
            }
      }
}
class B implements Runnable
{
      public void run()
      {
            for (int i=0;i<5;i++) 
            {
                  System.out.println("Class B");
                  try
                  {
                      Thread.sleep(500);
                  }
                  catch(Exception e){} 
            }
      }
}
public class Main
{
      public static void main(String[] args) 
      {
            Runnable obj1 = new A();
            Runnable obj2 = new B();
            Thread t1 = new Thread(obj1);
            Thread t2 = new Thread(obj2);
            t1.start();
            try 
            {
                Thread.sleep(10);
            }
            catch(Exception e){} 
            t2.start();
      }
}

</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
Class A
Class B
Class A
Class B
Class A
Class B
Class A
Class B
Class A
Class B
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
