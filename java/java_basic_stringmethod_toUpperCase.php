<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>string toUpperCase in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="example of character touppercase in java,how does touppercase work in java,how to check uppercase in java,how to check uppercase string in java,how to do uppercase in java,how to use touppercase in java,how to use touppercase method in java,string.touppercase in java,string.touppercase in java example,to check uppercase in java,to upper in java,to uppercase function in java,to uppercase in java,touppercase function in java,touppercase in java,touppercase in java example,touppercase java code,touppercase java method,touppercase method in java,touppercase() in java,uppercase in java program,uppercase in java with example,use of touppercase in java,using touppercase in java,what does touppercase do in java,what is touppercase in java,write a program in java to string touppercase,toUpperCase(),toUpperCase() in java,toUpperCase() in java in mycrazycoding">  
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <style>
    
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
<a href="java_basic_stringmethod_getChars.php">getChars()</a>
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
<a  href="java_basic_stringmethod_toLowerCase.php">toLowerCase()</a>
<a href="java_basic_stringmethod_toString.php">toString()</a>
<a class="active" href="java_basic_stringmethod_toUpperCase.php">toUpperCase()</a>
<a href="java_basic_stringmethod_trim.php">trim()</a>
<a href="java_basic_stringmethod_valueOf.php">valueOf()</a>



</div>

  

</div>


<div class="content">


    <h1 id="problemhead">toUpperCase() in java</h1><br><br>
    <p id="content_p">toUpperCase() method used to convert the String all the lowercase character to upperCase character.</p>
    
<br><br> <h1 id="problemhead">syntax</h1><br><br>
    <div class="syntax">
<pre>
string.toUpperCase()
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
              String str = "MyCrazyCoding";

              System.out.print(str.toUpperCase());
       }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
MYCRAZYCODING
</pre>
    </div><br><br><br><hr><br><br><br>

<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
public class Main
{
       public static void main(String[] args) 
       {
              String str = "mycrazycoding";

              System.out.print(str.toUpperCase());
       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
MYCRAZYCODING
</pre>
    </div><br><br><br><hr><br><br><br>
<div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
    
<pre>
public class Main
{
       public static void main(String[] args) 
       {
              String str = "mycrazycoding*#";

              System.out.print(str.toUpperCase());
       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
MYCRAZYCODING*#
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
