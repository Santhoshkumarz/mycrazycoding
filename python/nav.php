
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="file:///E:/jquery.js"></script>

<div id="navbar" class="sticky">
 
<div class="logo">   <span class="create">MC<sup>2</sup></span> MyCrazyCoding  </div>

<div class="list">
<ol>
    <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
  <li><div class="parents">Tutorials  <i class="fas fa-chevron-down"></i>

<div id="sample" class="extra">
<ol>

<li><a href="../java/java_index.php">Java</a></li>
<li><a href="py_index.php">Python</a></li>


</ol>


  </div></li>
</ol>





</div>





<div  class="right_sidebar_control">
  
<button onclick="fun()"><span class="fa fa-bars"></span></button>


</div>


 </div>





<script>
/*function myFunction() {
   var element = document.getElementById("sample");
   element.classList.toggle("extra");
}*/
var clicks = 1;
function fun()
{
  clicks=clicks+1;
    var c = document.getElementById("side");
    if(clicks%2==0)
    {
      c.classList.remove("sidebar");
      c.classList.add("sidebar_mobile_view");
    }
    else
    {
      c.classList.remove("sidebar_mobile_view");
      c.classList.add("sidebar");
    }
}







</script>








