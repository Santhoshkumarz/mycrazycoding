var x=document.getElementsByClassName("src");
var s;


//double qoutes
for(var i=0;i<x.length;i++)
{
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/".*"/g,  function (y)
    {
        return y.fontcolor("Bronze");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/[0-9]|s1|s2/g,  function (x)
    {
        return x.fontcolor("Bronze");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/abstract |boolean|byte|char |class|case|catch|default|do{|for|if|else|double|switch|enum|while|try|finally|float |int |interface |long |package |private |protected |public |short |static |void |String/g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/break|continue|extends|final|implements |import |new |null|return|super|this|throws|throw/g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/s1|s2|obj1 |obj2 |t1|t2/g,  function (x)
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












