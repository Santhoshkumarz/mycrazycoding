<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>string getChars in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="example of getchars in java,example program for getchars in java,get chars in string java,getchar in java programming,getchar in java string,getchar java sample,getchars en java,getchars example in java,getchars function in java,getchars in java,getchars in java example,getchars method in java,getchars method in java example,getchars method java,getchars() in java,how to use getchar in java,how to use getchars in java,string getchars method in java,stringbuffer getchars method in java,the getchars method in java,use of getchars in java,use of getchars method in java,what does getchar do in java,what is getchars in java,what is the use of getchar( ),getChars(),getChars() in java,getChars() in java in mycrazycoding"> 
    
    <script src="file:///E:/jquery.js"></script>
   
<style>
  .red
  {
      color: #EB2E14;
  }

    
    .ads
    {
      display: none;
    }

</style>
  

  </head>
  <body>
  <?php
   include "nav.php";
    ?>
  <?php
   include "String_method_sidebar.php";
    ?>

     <div class="string_method_sidebar">

<div class="string_head">String Methods</div>

<div class="string_topics">

<a href="java_basic_stringmethod_charAt.php">charAt()</a>
<a href="java_basic_stringmethod_codePointAt.php">codePointAt()</a>
<a href="java_basic_stringmethod_codePointBefore.php">codePointBefore()</a>
<a href="java_basic_stringmethod_codePointCount.php">codePointCount()</a>
<a href="java_basic_stringmethod_compareTo.php">compareTo()</a>
<a href="java_basic_stringmethod_compareToIgnoreCase.php">compareToIgnoreCase()</a>
<a href="java_basic_stringmethod_concat.php">concat()</a>
<a href="java_basic_stringmethod_contains.php">contains()</a>
<a href="java_basic_stringmethod_contentEquals.php">contentEquals()</a>
<a href="java_basic_stringmethod_copyValueOf.php">copyValueOf()</a>
<a href="java_basic_stringmethod_endsWith.php">endsWith()</a>
<a href="java_basic_stringmethod_equals.php">equals()</a>
<a href="java_basic_stringmethod_equalsIgnoreCase.php">equalsIgnoreCase()</a>
<a href="java_basic_stringmethod_format.php">format()</a>
<a href="java_basic_stringmethod_getBytes.php">getBytes()</a>
<a class="active" href="java_basic_stringmethod_getChars.php">getChars()</a>
<a href="java_basic_stringmethod_hashCode.php">hashCode()</a>
<a href="java_basic_stringmethod_indexOf.php">indexOf()</a>
<a href="java_basic_stringmethod_intern.php">intern()</a>
<a href="java_basic_stringmethod_isempty.php">isEmpty()</a>
<a href="java_basic_stringmethod_lastIndexOf.php">lastIndexOf()</a>
<a href="java_basic_stringmethod_length.php">length()</a>
<a href="java_basic_stringmethod_matches.php">matches()</a>
<a href="java_basic_stringmethod_offsetByCodePoints.php">offsetByCodePoints()</a>
<a href="java_basic_stringmethod_regionMatches.php">regionMatches()</a>
<a href="java_basic_stringmethod_replace.php">replace()</a>
<a href="java_basic_stringmethod_replaceFirst.php">replaceFirst()</a>
<a href="java_basic_stringmethod_replaceAll.php">replaceAll()</a>
<a href="java_basic_stringmethod_split.php">split()</a>
<a href="java_basic_stringmethod_startsWith.php">startsWith()</a>
<a href="java_basic_stringmethod_subSequence.php">subSequence()</a>
<a href="java_basic_stringmethod_substring.php">substring()</a>
<a href="java_basic_stringmethod_toCharArray.php">toCharArray()</a>
<a href="java_basic_stringmethod_toLowerCase.php">toLowerCase()</a>
<a href="java_basic_stringmethod_toString.php">toString()</a>
<a href="java_basic_stringmethod_toUpperCase.php">toUpperCase()</a>
<a href="java_basic_stringmethod_trim.php">trim()</a>
<a href="java_basic_stringmethod_valueOf.php">valueOf()</a>



</div>

  

</div>

<div class="content">

    <h1 id="problemhead">getChars() in java</h1><br><br>
<p id="content_p">getChars() method used to store the specific starting index to ending index character in Array.</p>

<br><br> <h1 id="problemhead">syntax</h1><br><br>
    <div class="syntax">
<pre>
string.getChars()
</pre>
    </div>
<br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
public class Main
{
       public static void main(String[] args) 
       {
              String s = "mycrazycoding";

              char ch[] = new char[10];

              s.getChars(0,2,ch,0);

              System.out.println(ch);
       } 
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
my
</pre>
    </div><br><br><br><hr><br>
<br><br>
   <br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
public class Main
{
        public static void main(String[] args) 
        {
             String s = "mycrazycoding";

             char ch[] = new char[10];

             s.getChars(2,7,ch,0);

             System.out.println(ch);
        } 
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
crazy
</pre>
    </div><br><br><br><hr><br>
    <br><br>
   <br>
<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
    
<pre>
public class Main
{
       public static void main(String[] args) 
       {
             String s = "mycrazycoding";

             char ch[] = new char[10];

             s.getChars(2,7,ch,5);

             System.out.println(ch);
       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
     crazy
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-4</div>
    <div class="src">
    
<pre>
public class Main
{
       public static void main(String[] args) 
       {
             String s = "mycrazycoding";

             char ch[] = new char[10];

             s.getChars(2,7,ch,6);

             System.out.println(ch);
       }
}
</pre>
    </div></div>
<br><br><br>

<h2>Output</h2><br><br><br>
    <div id="output">
    
<pre>
java.lang.StringIndexOutOfBoundsException
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
