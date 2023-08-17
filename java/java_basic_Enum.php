<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>enum in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="about enum in java,best use of enum in java,best way to create enum in java,best way to define enum in java,create enum in java,define enum in java,define enum in java 8,do enum in java,enum in a java class,enum in array java,enum in java 8,enum in java 8 example,enum in java code,enum in java example,enum in java example program,enum in java methods,enum in java values,enum in java with methods,what is enum in java,what is enum in java 8,why do we use enum in java,why enum in java,enum in java,enum in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
   <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
 b
 {
   font-weight: 500;
 }      
.main
{
      width: 100%;
      display: flex;

}
.main .enum
{
      width: 40%;
      border: 1px solid #D5DBDB;
      overflow-x: auto;
      border-left: 2px solid #1630C3;
}
.main .class
{
     width: 60%;
     border: 1px solid #D5DBDB;
     overflow-x: auto;
     border-left: 2px solid #1630C3;
}
.main .enum pre
{
   font-family: 'Roboto Mono', monospace;
    padding-top: 4%;
   padding-left: 2%;
   font-size: 15px;
}
.main .class pre
{
   font-family: 'Roboto Mono', monospace;
   padding-left: 2%;
   padding-top: 4%;
   padding-bottom: 4%;
   font-size: 15px;
}
@media screen and (max-width: 554px)
{
       .main
      {
           display: block;
      }
      .main .enum
      {
         width: 100%;
      }
      .main .class
      {
          margin-top: 10%;
          width: 100%;
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
  <a class="active" href="java_basic_Enum.php"  id="A"><i class="fas fa-arrow-alt-circle-right"></i> Enum</a>
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

<h1 id="problemhead">Enum in java</h1><br><br>
<p id="content_p">enum used to define the constants variable.You can also define the enum inside the class.</p>
<br>
<p id="content_p"><b>enum cartoons and the class cartoons are Equal.</b></p>

<br><br><br>



<div class="main">
  <div class="enum">
<pre id="enum_pre">
<span class="keyword">enum</span> Cartoons
{
      TOM_AND_JERRY,
      AVATAR,
      BEN_TEN;
} 
</pre>    
  </div>
  <div class="class">
<pre id="enum_pre">
<span class="keyword">class</span> Cartoons
{
       <span class="keyword">static</span> <span class="Nonspec">final</span> Cartoons TOM_AND_JERRY = <span class="Nonspec">new</span> Cartoons();
       <span class="keyword">static</span> <span class="Nonspec">final</span> Cartoons AVATAR = <span class="Nonspec">new</span> Cartoons();
       <span class="keyword">static</span> <span class="Nonspec">final</span> Cartoons BEN_TEN = <span class="Nonspec">new</span> Cartoons(); 
}     
</pre>
  </div>
</div>


<br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
enum Cartoons                               
{
      TOM_AND_JERRY,AVATAR,BEN_TEN;
}

public class Main
{
      public static void main(String[] args) 
      {
            System.out.print(Cartoons.TOM_AND_JERRY);
      }
}
</pre>
	  </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
TOM_AND_JERRY
</pre>
    </div>
<br><br><br><hr><br><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
enum Cartoons                               
{
      TOM_AND_JERRY,AVATAR,BEN_TEN;
}

public class Main
{
    public static void main(String[] args) 
    {
          Cartoons c = Cartoons.TOM_AND_JERRY;

          switch(c)
          {
              case TOM_AND_JERRY:

                                  System.out.println("I Love TOM_AND_JERRY");
                                  break;

              case AVATAR:

                                  System.out.println("I Love AVATAR");
                                  break;

              case BEN_TEN:
                                  System.out.println("I Love BEN_TEN");
                                  break;
          }
    }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
I Love TOM_AND_JERRY
</pre>
    </div>
<br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
    
<pre>
enum Cartoons 
{
      TOM_AND_JERRY(10),AVATAR(20),BEN_TEN(30);

      int total_Episodes;

      Cartoons(int t)
      {
            total_Episodes=t;
      }
}

public class Main 
{ 
      public static void main(String[] args) 
      { 
            for(Cartoons myVar : Cartoons.values()) 
            {
                  System.out.println(myVar+" : "+myVar.total_Episodes);
            }
      } 
}

</pre>
    </div></div>
<br>
<br>
<h2>Output</h2><br><br>
    <div class="output1">
    
<pre>
TOM_AND_JERRY : 10
AVATAR : 20
BEN_TEN : 30
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
