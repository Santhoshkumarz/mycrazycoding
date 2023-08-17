<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>regionMatches in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="how to use regionmatches in java,region matches in java,regionmatches function in java,regionmatches in java,regionmatches in java example,regionmatches java,regionmatches method in java,regionmatches method in java example,regionmatches string java,regionmatches syntax in java,regionmatches() in java,string regionmatches in java,string regionmatches program in java,what is the use of regionmatches() in java,regionMatches(),regionMatches() in java,regionMatches() in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
   <style>
     .green
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
<a href="java_basic_stringmethod_getChars.php">getChars()</a>
<a href="java_basic_stringmethod_hashCode.php">hashCode()</a>
<a href="java_basic_stringmethod_indexOf.php">indexOf()</a>
<a href="java_basic_stringmethod_intern.php">intern()</a>
<a href="java_basic_stringmethod_isempty.php">isEmpty()</a>
<a href="java_basic_stringmethod_lastIndexOf.php">lastIndexOf()</a>
<a href="java_basic_stringmethod_length.php">length()</a>
<a href="java_basic_stringmethod_matches.php">matches()</a>
<a href="java_basic_stringmethod_offsetByCodePoints.php">offsetByCodePoints()</a>
<a class="active" href="java_basic_stringmethod_regionMatches.php">regionMatches()</a>
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

    <h1 id="problemhead">regionMatches() in java</h1><br><br>

<p id="content_p">regionMatches() method used to check the particular character sequence at the two String equal or not.</p>

<br><br> <h1 id="problemhead">syntax</h1><br><br>
    <div class="syntax">
<pre>
string.regionMatches()
</pre>
    </div>
<br><br><br><hr><br><br><br>

<p id="content_p">In that code , s1="mycrazycoding" and s2="thecrazyprogram" s1.regionMatches(2,s2,3,5) these values are 2 refer starting index of s1 , 3 refer starting index of s2  ,  5 refer length of String.</p><br>
<p id="content_p">s1 starting index is 2 so "c" and length is 5 So <span class="green">"crazy"</span>.String s2 starting index is 3 so "c" and length is 5 So <span class="green">"crazy"</span>.It's return true.</p><br>

        <br><br><br><br>
        <div class="box">
  <div class="heading">Example-1</div>
	  <div class="src">
	  
<pre>
public class Main
{
       public static void main(String[] args) 
       {
              String s1 = "mycrazycoding";

              String s2 = "thecrazyprogram";

              System.out.print(s1.regionMatches(2,s2,3,5));
       }
}
</pre>
	  </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
true
</pre>
    </div><br><br><br><hr><br><br><br>

<p id="content_p">In that code , s1="mycrazycoding" and s2="thecrazyprogram" s1.regionMatches(2,s2,4,5) these value are refer the 2 refer starting index of s1 , 4 refer starting index of s2  ,  5 refer length of String.</p><br>
<p id="content_p">String s1 starting index is 2 so "c" and length is 5 So <span class="green">"crazy"</span> .String s2 starting index is 4 so "r" and length is 5 So <span class="green">"razyp"</span>. So And Finally both region values are Not Equal.It's return false.</p>


    <br><br><br><br>
<div class="box">
  <div class="heading">Example-2</div>
    <div class="src">
    
<pre>
public class Main
{
       public static void main(String[] args) 
       {
              String s1 = "mycrazycoding";

              String s2 = "thecrazyprogram";

              System.out.print(s1.regionMatches(2,s2,4,5));
       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
false
</pre>
    </div><br><br><br><hr><br><br><br>


 <p id="content_p">In that code , s1="mycrazycoding" and s2="thecrazyprogram" s1.regionMatches(2,s2,3,6) these value are refer the 2 refer the starting index of s1 , 3 refer the starting index of s2  ,  6 refer length of String.</p><br>
 <p id="content_p">s1 starting index is 2 so "c" and length is 6 So <span class="green">"crazyc"</span>.String s2 starting index is 3 so "c" and length is 6 So <span class="green">"crazyp"</span>. And Finally both region values are Not Equal.It's return false.</p>

 <br><br><br>
 <div class="box">
  <div class="heading">Example-3</div>
    <div class="src">
    
<pre>
public class Main
{
       public static void main(String[] args) 
       {
              String s1 = "mycrazycoding";

              String s2 = "thecrazyprogram";

              System.out.print(s1.regionMatches(2,s2,3,6));
       }
}
</pre>
    </div></div>
<br><br>

<h2>Output</h2><br><br>
    <div id="output">
    
<pre>
false
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
