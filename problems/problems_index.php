<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Problem</title>
 
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">

  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    
    <script src="file:///E:/jquery.js"></script>
    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script data-ad-client="ca-pub-7569865976437849" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
  body{
    counter-reset: Count-Value;
  }

	#Solution_logo
  {
      color: #E15061;
  }
  #Solution_logo i
  {
      font-size: 20px;
  }
  #problem_title
  {
    color:blue;

  }
  .Very_easy
  {
      padding-left: px;
      width: 100%;
      height: 100%;
      background: green;
      color: white;
      border-radius: 12px;

  }
  .Easy
  {
      padding-left: 15px;
      width: 100%;
      height: 100%;
      background: #179A25;
      color: white;
      border-radius: 12px;
  }
   .Medium
  {
      padding-left: 5px;
      width: 100%;
      height: 100%;
      background: #F7B104;
      color: white;
      border-radius: 12px;
  }
   .Hard
  {
      padding-left: 15px;
      width: 100%;
      height: 100%;
      background: #F13F06;
      color: white;
      border-radius: 12px;
  }
  #myInput 
  {
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  }
	  .table
  {

    width: 100%;
    padding-left: 10px;

  }
  table,tr
  {
      font-family: 'Roboto', sans-serif;
     font-size: 16px;
    
  }
  
  table,th,td
  {
     padding: 10px;
     text-align: left;
  }
  #solution 
  {
    padding-left: 20px;
  }
  th
  {
    background-color:#F2F3F4 ;
    color: black;
  }
  tr td:first-child:before
  {
     counter-increment: Count-Value;   
     content:  counter(Count-Value)".";
  }
  a
  {
    text-decoration: none;
  }
  a:hover
  {
    color:#186A3B;
  }
  table tr:nth-child(odd){background-color: #f2f2f2;}
  table tr:hover {background-color: #ddd;}
  input[type=text]
  {
      border-radius: 20px;
     
      box-shadow: 1px 1px 5px 5px #F0F3F4;
  }
  input:focus
  {
    
    outline: none;
    box-shadow: 0 0 2px 2px #3A5EF4;

  }
  .page2
  {
     display: none;
  }

  .painate
  {
      margin-left: 50%;
  }
  .painate button
  {
     background-color: #ddd; /* Green #4CAF50*/
     border: 2px solid #F2F3F4;
     color: black;
     padding: 5px 10px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     margin: 10px 0px;
     cursor: pointer;
  }

.painate .active
{
  background-color: #229954;
  color: white;
  border: 2px solid #229954;
}

</style>
<script>
$(document).ready(function()
{

  $("#btn2").click(function()
  {
    $(this).addClass('active').siblings().removeClass('active')
    $(".page2").show();
    $(".page1").hide();
    $("body").css("counter-reset","Count-Value 100");
  });
  $("#btn1").click(function()
  {
    $(this).addClass('active').siblings().removeClass('active')
    $(".page1").show();
    $(".page2").hide();
    $("body").css("counter-reset","Count-Value");
  });
});

</script>   

  </head>
  <body>
     <?php
   include "nav.php";
    ?>
    <?php
   include "sidebar.php";
    ?>
  
<div class="content">




<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search problems.." title="Type in a name">

<br><br>

<div class="page1">






<table id="myTable1" class="table">
  <tr class="header">
  	 <th style="width: 10%;">S.NO</th>
     <th style="width: 70%;">Problems</th>
     <th style="width: 10%;">Difficulty
    </th>
  </tr>


  <tr>
  	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_1's and 0's continuous pattern counting.php" >1's and 0's continuous pattern counting</a></td>
      
      <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
  	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Add binary.php">Add binary</a></td>
      
      <td><div class="Easy"> Easy</div></td>
  </tr>



    <tr >
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Add bits.php">Add bits</a></td>
      
      <td><div class="Easy"> Easy</div></td>
  </tr>





  <tr >
  	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Add digits is prime or not.php">Add digits is prime or not</a></td>
      
      <td><div class="Easy"> Easy</div></td>
  </tr>




  <tr >
  	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Add Digits.php">Add Digits</a></td>
      
      <td><div class="Easy"> Easy</div></td>
  </tr>


  <tr >
  	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_All possible unique permutations.php">All possible unique permutations</a></td>
      
      <td><div class="Easy"> Easy</div></td>
  </tr>






    <tr >
  	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Anagram.php">Anagram</a></td>
      
      <td><div class="Easy"> Easy</div></td>
  </tr>



    <tr >
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Add 1 to the number.php">Add 1 to the number</a></td>
      
      <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
   	<td></td>
       <td><a target="_blank" id="problem_title" href="problem_Armstrong number.php">Armstrong number</a></td>
       
       <td><div class="Easy"> Easy</div></td>
  </tr>
   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Arrange all even number in ascending and arrange all odd number in descending and concatenate them.php">Arrange all even number in ascending and arrange all odd number in descending and concatenate them</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Arrange all odd number in descending and arrange all even number in asscending and concatenate them.php">Arrange all odd number in descending and arrange all even number in asscending and concatenate them</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Arrange by length and Alphabetic order.php">Arrange by length and Alphabetic order</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Arrange the alphabets in an ascending oreder.php">Arrange the alphabets in an ascending order</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Array of word length.php">Array of word length</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Automorphic number.php">Automorphic number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Binary Multiplication.php">Binary Multiplication</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Binary to number converter.php">Binary to number converter</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Buzz Number.php">Buzz Number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



      <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Case Insensitive Comparison.php">Case Insensitive Comparison</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


        <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Change the same digits places only to find the min and max.php">Change the same digits places only to find the min and max</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


          <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Check all are even in the list.php">Check all are even in the list</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>









    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Check all are factors in the list.php">Check all are factors in the list</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count and Say.php">Count and Say</a></td>
      
       <td><div class="Medium"> Medium</div></td>
  </tr>


     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count frequency (A to J).php">Count frequency (A to J)</a></td>
      
       <td><div class="Medium"> Medium</div></td>
  </tr>




   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count lowercase character in an sentences.php">Count lowercase character in an String</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count of first maximum no.of zero in which index.php">Count of first maximum no.of zero in which index</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



     <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count palindrome words(Case Insensitive).php">Count palindrome words(Case Insensitive)</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

 <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count Primes.php">Count Primes</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count Syllables.php">Count Syllables</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


 <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count the continuous character in an string.php">Count the continuous character in an string</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>





   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count the k substring without changing the order.php">Count the k substring without changing the order</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count the number of consonants in an sentences.php">Count the number of consonants in an sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count the number of digits in an sentences.php">Count the number of digits in an sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count the number of vowels in a sentences.php">Count the number of vowels in a sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count the special character in an sentences.php">Count the special character in an sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

     <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_count the substring of 1's.php">Count the substring of 1's</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


     <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count unsorted columns.php">Count unsorted columns</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count uppercase character in an sentences.php">Count uppercase character in an sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Count words in an sentences.php">Count words in an sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Delete odd index character.php">Delete odd index character</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



    <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Double Tucker.php">Double Tucker</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Disarium number.php">Disarium number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Duck Number.php">Duck Number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Even or odd.php">Even or odd</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Evil and odious number.php">Evil and odious number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Factorial.php">Factorial</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Factors of a number.php">Factors of a number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


    <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Fibonacci series.php">Fibonacci series</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

 <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Filter by digit length.php">Filter by digit length</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find all pair of unique indices using concatenation of words to form a palindrome.php">Find all pair of unique indices using concatenation of words to form a palindrome</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find all the 0's and 1's index.php">Find all the 0's and 1's index</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find all the k substring index range.php">Find all the k substring index range</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>







     <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find all unique combinations.php">Find all unique combinations</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


       <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find any permutations is form the palindrome or not.php">Find any permutations is form the palindrome or not</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find how many smaller element in the right side.php">Find how many smaller element in the right side</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find it is True or False.php">Find it is True or False</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find longest Name.php">Find longest Name</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find minimum.php">Find Minimum</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find Mean Value.php">Find Mean Value</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


 <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find next prime number.php">Find next prime number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>





   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find previous prime number.php">Find previous prime number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the (0 to 9) number in the given string of the possibilities.php">Find the (0 to 9) number in the given string of the possibilities</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the biggest difference pair in the list.php">Find the biggest difference pair in the list</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




      <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the count of continuous 0's and 1's number.php">Find the count of continuous 0's and 1's number</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>


  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the each word length in an string and combine them.php">Find the each word length in an string and combine them</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the given number of binary value is palindrome or not.php">Find the given number of binary value is palindrome or not</a></td>
      
       <td><div class="Hard"> Hard</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the k substring index range.php">Find the k substring index range</a></td>
      
       <td><div class="Hard"> Hard</div></td>
  </tr>

  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_find the k th permutation.php">Find the K th permutation</a></td>
      
       <td><div class="Hard"> Hard</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the kth maximum and minimum.php">Find the kth maximum and minimum</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



      <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the maximum values of each subarray of length k.php">problem_Find the maximum values of each subarray of length k</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the next Armstrong number.php">Find the next Armstrong number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>






  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the number is balanced or not.php">Find the number is balanced or not</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

 <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the permutations.php">Find the permutations</a></td>
      
       <td><div class="Hard"> Hard</div></td>
  </tr>



    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the previous Armstrong number.php">Find the previous Armstrong number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the Product.php">Find the Product</a></td>
      
       <td><div class="Hard"> Hard</div></td>
  </tr>


  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Find the words in a string.php">Find the words in a string</a></td>
      
       <td><div class="Hard"> Hard</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Finding valid phone number.php">Finding valid phone number</a></td>
      
       <td><div class="Easy">Easy</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_First non repeating character.php">First non repeating character</a></td>
      
       <td><div class="Easy">Easy</div></td>
  </tr>




  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_First word.php">First word</a></td>
      
       <td><div class="Easy">Easy</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Flipping bits.php">Flipping bits</a></td>
      
       <td><div class="Easy">Easy</div></td>
  </tr>


   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Floyd Triangle.php">Floyd Triangle</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Generate a countdown of numbers in a list.php">Generate a countdown of numbers in a list</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Group Anagrams.php">Group Anagrams</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>





     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Happy Number.php">Happy Number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Harshad Number or Niven Number.php">Harshad Number or Niven Number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



       <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_How many decimal places.php">How many decimal places</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>







  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Indexing K sum.php">Indexing K sum</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Integer Reverse.php">Integer Reverse</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


    <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Kaprekar Number.php">Kaprekar Number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>






    <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Largest multiple of 3.php">Largest divisible of 3</a></td>
      
       <td><div class="Medium"> Medium</div></td>
  </tr>




   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Largest swap.php">Largest swap</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Last word.php">Last word</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
   	<td></td>
      <td><a target="_blank" id="problem_title" href="problem_Leap year or not.php">Leap year or not</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Left Rotate.php">Left Rotate</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Longest Chunked Palindrome Decomposition.php">Longest Chunked Palindrome Decomposition</a></td>
      
       <td><div class="Medium"> Medium</div></td>
  </tr>




   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Longest Common Prefix.php">Longest Common Prefix</a></td>
      
       <td><div class="Medium"> Medium</div></td>
  </tr>






   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Longest palindrome.php">Longest palindrome</a></td>
      
       <td><div class="Medium"> Medium</div></td>
  </tr>

   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Longest substring.php">Longest substring</a></td>
      
       <td><div class="Medium"> Medium</div></td>
  </tr>











  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Magic Number.php">Magic Number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Match or not-1.php">Match or not-1</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Match or not-2.php">Match or not-2</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Matrix addition.php">Matrix addition</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Matrix subtraction.php">Matrix subtraction</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_maximum sum in subArray.php">Maximum sum in subArray</a></td>
      
       <td><div class="Medium"> Medium</div></td>
  </tr>


   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Medial number.php">Medial number</a></td>
      
       <td><div class="Easy">Easy</div></td>
  </tr>




     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Mersenne Prime number.php">Mersenne Prime number</a></td>
      
       <td><div class="Easy">Easy</div></td>
  </tr>


       <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Minimum removals to make sum even.php">Minimum removals to make sum even</a></td>
      
       <td><div class="Easy">Easy</div></td>
  </tr>






           <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Multiply by length.php">Multiply by length</a></td>
      
       <td><div class="Easy">Easy</div></td>
  </tr>





         <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_N th prime number.php">N th prime number</a></td>
      
       <td><div class="Easy">Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Neon number.php">Neon number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Next element in arithmetic sequence.php">Next element in arithmetic sequence</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Next nearest palindrome.php">Next nearest palindrome</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Number to binary converter.php">Number to binary converter</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Once Twice Thrice Counting.php">Once Twice Thrice Counting</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_One swap.php">One swap</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>





   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Palindrome.php">Palindrome</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>








  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Perfect number.php">Perfect number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Perfect unique pair finding in sorted array.php">Perfect unique pair finding in sorted array</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Positive or negative number.php">Positive or negative number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Power of 2 or not.php">Power of 2 or not.php</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Prime number.php">Prime number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


    </tr>
   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print first letter of every word.php">Print first letter of every word</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



      </tr>
   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print prime index characters in a string.php">Print prime index characters in a string</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print the count of pairs in an array which difference is equal to +4 or -4.php">Print the count of pairs in an array which difference is equal to +4 or -4</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print the Diagonals of a Matrix.php">Print the Diagonals of a Matrix</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print the first unique character in a string.php">Print the first unique character in a string</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print the missing number from 1 to 10 in an array.php">Print the missing number from 1 to 10 in an array</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print the missing number from 1 to 10 in an array.php">Print the missing number from 1 to 10 in an array</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print the product of positive number.php">Print the product of positive number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print the unique element in an array.php">Print the unique element in an array</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Print times of character.php">Print times of character</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Product of all odd integers.php">Product of all odd integers</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Product the elements with their index values.php">Product the elements with their index values</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>






   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Pronic number.php">Pronic number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>








     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Red or Green.php">Red or Green</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Remove character.php">Remove character</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Remove consonants in an sentences.php">Remove consonants in an sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Remove continuous number.php">Remove continuous number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Remove duplicate element.php">Remove duplicate element</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Remove numbers in an sentences.php">Remove numbers in an sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Remove special character in an sentences.php">Remove special character in an sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Remove vowels in a sentences.php">Remove vowels in a sentences</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>







  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Reverse and Capitalize.php">Reverse and Capitalize</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Reverse bits.php">Reverse bits</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Reverse even length word in a string.php">Reverse even length word in a string</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Reverse odd places words in a string.php">Reverse odd places words in a string</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


      <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Reverse the equation.php">Reverse the equation</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

      <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Reverse words in a string 2.php">problem_Reverse words in a string 2</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Reverse words in a string.php">Reverse words in a string</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


        <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Reverse words in a string 2.php">Reverse words in a string 2</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>






   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Robotics sum(Easy).php">Robotics sum-1</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Robotics sum (Hard).php">Robotics sum-2</a></td>
      
       <td><div class="Medium"> Medium</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Search pattern index.php">Search pattern index</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sentences palindrome.php">Sentences palindrome</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Slice and sum.php">Slice and sum</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

  


  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Solve the equation(+ and -).php">Solve the equation</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>



    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Solve the string Equation.php">Solve the string Equation</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>





    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sort by second letter.php">Sort by second letter</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>





    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sort the words by using the given character.php">Sort the words</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sorted insert position.php">Sorted insert position</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>


     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Valid password.php">Strong password</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Split by k value remove duplicates without changing the order.php">Split by k value remove duplicates without changing the order</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>





    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sort by second letter.php">Sort by second letter</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sign change.php">Sign change</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Write the code for list of number in an sorted order.php">Sort the list</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Split the continous number in the string and sum all the digits.php">Split and sum in string</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>






   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Split the continous number in the string and sum">Split the continous number in the string and sum</a></td>
       <td><div class="Easy"> Easy</div></td>
  </tr>


   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Spy number.php">Spy number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Square number series.php">Square number series</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   


   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_String Reverse.php">String Reverse</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_String underscore problem.php">String underscore problem</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Strong number.php">Strong number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sum of max and min.php">Sum of max and min</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sum of n natural numbers.php">Sum of n natural numbers</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sum of the digits.php">Sum of the digits</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sum of the odd numbers.php">Sum of the odd numbers</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sum the even number in the given range.php">Sum the even number in the given range</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>




  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Sunny number.php">Sunny number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Swap of two numbers.php">Swap of two numbers</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Swap of two two numbers in a list.php">Swap of two two numbers in a list</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Swap of two two numbers in a list.php">Swap of two two numbers in a list</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Swapcase.php">Swapcase</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>






    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Tech number.php">Tech number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



      <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_The given substring is present in the given string or not.php">The given Subsequence is present in the given string or not</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


     <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_To find the mail id in the given string.php">To find the mail id in the given string</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



       <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Total number of unique characters.php">Total number of unique characters</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


       <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Transpose of a matrix.php">Transpose of a matrix</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



         <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Travelling zeros.php">Travelling zeros</a></td>
  
       <td><div class="Easy"> Easy</div></td>
  </tr>



  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Trimorphic number.php">Trimorphic number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>


  <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Tu pattern in Regex.php">Tu pattern in Regex</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>



   <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_twin prime.php">Twin prime</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>







    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Twisted prime.php">Twisted Prime Number</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>







       <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Valid perfect square.php">Valid perfect square</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>

    <tr>
    <td></td>
      <td><a target="_blank" id="problem_title" href="problem_Valid zip code.php">Valid zip code</a></td>
      
       <td><div class="Easy"> Easy</div></td>
  </tr>
</table>
</div>







<script>
function myFunction() 
{

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) 
  {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) 
    {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) 
        {
             tr[i].style.display = "";
        } 
        else 
        {
            tr[i].style.display = "none";
        }
    }       
  }


   var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) 
  {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) 
    {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) 
        {
             tr[i].style.display = "";
        } 
        else 
        {
            tr[i].style.display = "none";
        }
    }       
  }

}
</script>



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
</script>



<br><br><br>
  <?php
   include "footer.php";
    ?>


</div>



  </body>
</html>
