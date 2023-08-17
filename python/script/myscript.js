var x=document.getElementsByClassName("src");
var s;



for(var i=0;i<x.length;i++)
{
   
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/".*"/g,  function (y)
    {
        return y.fontcolor("Bronze");
    });
     s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/'.*'/g,  function (y)
    {
        return y.fontcolor("Bronze");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/[0-9]|s1|s2/g,  function (x)
    {
        return x.fontcolor("Bronze");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/void /g,  function (x)
    {
        return x.fontcolor("#8F00C8");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/False|None |True|and | as |assert |async |await |break|class |continue |def |del |elif|else|except|finally|for |from |global |if|import |in |is |lambda |nonlocal |not | or |pass |raise |return |try|while|with |yield|print|dropwhile|takewhile/g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/,end=|Floor/g,  function (x)
    {
        return x.fontcolor("black");
    });
}

x=document.getElementsByClassName("syntax");
var s;



for(var i=0;i<x.length;i++)
{
   
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/".*"/g,  function (y)
    {
        return y.fontcolor("MediumSeaGreen");
    });
       s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/'.*'/g,  function (y)
    {
        return y.fontcolor("MediumSeaGreen");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/[0-9]|s1|s2/g,  function (x)
    {
        return x.fontcolor("#8F00C8");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/void /g,  function (x)
    {
        return x.fontcolor("#8F00C8");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/False|None |True|and | as |assert |async |await |break|class |continue |def |del |elif|else|except|finally|for |from |global |if|import |in |is |lambda |nonlocal |not | or |pass |raise |return |try|while|with |yield|print/g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/,end=|Floor/g,  function (x)
    {
        return x.fontcolor("black");
    });
}







x=document.getElementsByClassName("minimum_height");
var s;



for(var i=0;i<x.length;i++)
{
   
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/".*"/g,  function (y)
    {
        return y.fontcolor("MediumSeaGreen");
    });
       s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/'.*'/g,  function (y)
    {
        return y.fontcolor("MediumSeaGreen");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/[0-9]|s1|s2/g,  function (x)
    {
        return x.fontcolor("#CF3F21");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/void /g,  function (x)
    {
        return x.fontcolor("#8F00C8");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/False|None |True|and | as |assert |async |await |break|class |continue |def |del |elif|else|except|finally|for |from |global |if|import |in |is |lambda |nonlocal |not | or |pass |raise |return |try|while|with |yield|print/g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/,end=|Floor/g,  function (x)
    {
        return x.fontcolor("black");
    });
}
















