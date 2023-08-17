<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>String method in java</title>
 
    <link rel="stylesheet" href="css/java_style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="all string methods in java program,inbuilt string methods in java,string and string methods in java,string class and methods in java,string class and string methods in java,string methods examples in java,string methods for java,string methods in java,string methods in java 8,string methods in java example,string methods in java example programs,string methods in java list,string methods in java program,string methods in java with example program,string methods in java with examples,string methods used in java,string methods with example in java,string methods with examples in java,string strings methods in java,string to string method in java,using string methods in java,what is string methods in java,string methods in java,string methods in java in mycrazycoding">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


    <style>
      .content
{
    overflow-x: auto;
}
        body{
    counter-reset: Count-Value;
  }

  table
  {
    width: 100%;
  }
  table,tr
  {
      font-family: 'Roboto', sans-serif;
     font-size: 15px;
      word-spacing: 3px;
    letter-spacing: 0.3px;
    
  }
  table,th,td
  {
     padding: 20px;
     text-align: left;
  }

  th
  {
    background-color:#F2F3F4 ;
    color: black;
  }

  table a
  {
    color: blue;
    text-decoration: none;
  }
  table a:hover
  {
    text-decoration: underline;
  }

    tr td:first-child:before
  {
     counter-increment: Count-Value;   
     content:  counter(Count-Value)".";
  }


  table tr:nth-child(odd){background-color: #f2f2f2;}
  @media screen and (max-width: 1000px)
  {

    table
  {

    padding-left: 0px;
    font-size: 15px;
  }


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


    

<div class="content">

<h1 id="problemhead">String in java</h1>
      
	 
	  <br> <br>

    <p id="content_p">String is collection of characters like a letter,symbol and numbers.</p>


	  <br><br> <br>
<h1 id="problemhead">String methods:</h1><br><br>
 <table>
  
   <tr>
    <th >S.No</th>
    <th >Methods</th>
    <th >Explain</th>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_charAt.php">charAt()</a></td>
    <td>To return the character for specific index in String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_codePointAt.php">codePointAt()</a></td>
    <td>To return the ascii value for specific index character in the String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_codePointBefore.php">codePointBefore()</a></td>
    <td>To return the before the character ascii value.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_codePointCount.php">codePointCount()</a></td>
    <td>To return the value for number of ascii code in String..</td>
  </tr>
    <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_compareTo.php">compareTo()</a></td>
    <td>To compare the two String.It's return the integer value for difference of String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_compareToIgnoreCase.php">compareToIgnoreCase()</a></td>
    <td>To compare the two String and ignore the case.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_concat.php">concat()</a></td>
    <td>To join the two String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_contains.php">contains()</a></td>
    <td>To check the specific character or character sequence contain the String or not</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_contentEquals.php">contentEquals()</a></td>
    <td>To check the both String equal or not.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_copyValueOf.php">copyValueOf()</a></td>
    <td>To copy the item from starting index to user defined length in an array.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_endsWith.php">endsWith()</a></td>
    <td>To check the String end with same character sequence or not.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_equals.php">equals()</a></td>
    <td>To check the two String equal or not.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_equalsIgnoreCase.php">equalsIgnoreCase()</a></td>
    <td>To check the two String equal or not And ignore the case.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_format.php">format()</a></td>
    <td>To return the String in format.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_getBytes.php">getBytes()</a></td>
    <td>To store the ascii values of all character in String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_getChars.php">getChars()</a></td>
    <td>To store the specific starting index to ending index character in Array.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_hashCode.php">hashCode()</a></td>
    <td>To convert the String to Numerical value.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_indexOf.php">indexOf()</a></td>
    <td>return the value of specific character or character sequence starting index of the String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_intern.php">intern()</a></td>
    <td>To check the String with difference reference.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_isempty.php">isEmpty()</a></td>
    <td>To check the String empty or not.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_lastIndexOf.php">lastIndexOf()</a></td>
    <td>To return the last index of specified character or character sequence in the String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_length.php">length()</a></td>
    <td>To return the length of the String..</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_matches.php">matches()</a></td>
    <td>To heck the both Strings are match or not.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_offsetByCodePoints.php">offsetByCodePoints()</a></td>
    <td> To returns the index within this String that is offset from the given index by codePointOffset code.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_regionMatches.php">regionMatches()</a></td>
    <td>To check the particular character sequence at the two String equal or not.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_replace.php">replace()</a></td>
    <td>To replace the specific character or character sequence in String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_replaceFirst.php">replaceFirst()</a></td>
    <td>To replace the specific character.But It's replace only for the First occurrences characters or character sequence in a String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_replaceAll.php">replaceAll()</a></td>
    <td>To replace the specific character or character sequence and regex(Regular Expression).</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_split.php">split()</a></td>
    <td>To split the String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_startsWith.php">startsWith()</a></td>
    <td>To  check the String start with same character sequence or not.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_subSequence.php">subSequence()</a></td>
    <td>To return the string in specific subsequence.</td>
  </tr>
   </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_substring.php">substring()</a> </td>
    <td>To return the specific substring character in String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_toCharArray.php">toCharArray()</a></td>
    <td>To convert String all character to char array.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_toLowerCase.php">toLowerCase()</a></td>
    <td>To convert the String all the uppercase character to lowercase character.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_toString.php">toString()</a></td>
    <td>To convert the other datatype or object to String.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_toUpperCase.php">toUpperCase()</a></td>
    <td>To convert the String all the lowercase character to upperCase character.</td>
  </tr>
   <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_trim.php">trim()</a></td>
    <td>To remove the all the white spaces in before and after the String.</td>
  </tr>
    <tr>
    <td></td>
    <td><a href="java_basic_stringmethod_valueOf.php">valueOf()</a></td>
    <td>To convert the any data types value to String.</td>
  </tr>

   
</table>



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
