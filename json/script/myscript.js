var x=document.getElementsByClassName("src");
var s;


//double qoutes
for(var i=0;i<x.length;i++)
{


    x[i].innerHTML = x[i].innerHTML.replace(/&lt;.*&gt;|'.*'|&lt;\?php|\?&gt;/g,  function (x)
    {
         return x.fontcolor("#C0392B");
    });

    x[i].innerHTML = x[i].innerHTML.replace(/src = ".*"|function|JSON.parse|typeof|var|XMLHttpRequest|open|send|fopen|file_get_contents|json_decode|json_encode/g,  function (x)
    {
         return x.fontcolor("blue");
    });

    x[i].innerHTML = x[i].innerHTML.replace(/\/\/.*/g,  function (x)
    {
         return x.fontcolor("#808B96");
    });

    x[i].innerHTML = x[i].innerHTML.replace(/=&gt;/g,  function (x)
    {
         return x.fontcolor("black");
    });

    


}








var clicks = 1;
var show_click = 0;
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

function show_tutorial()
{
    show_click=show_click+1;
    var c = document.getElementById("side");
    if(show_click%2==0)
    {
       $(".extra").hide();
       $(".parents i").removeClass("fa-chevron-up");
       $(".parents i").addClass("fa-chevron-down");
    }
    else
    {
       $(".extra").show();
       $(".parents i").removeClass("fa-chevron-down");
       $(".parents i").addClass("fa-chevron-up");
    }
}


window.addEventListener('load', (event) =>{

document.getElementById('loader').style.display="none";

});