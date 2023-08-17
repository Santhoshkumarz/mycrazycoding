var x=document.getElementsByClassName("code");
var s;



for(var i=0;i<x.length;i++)
{
   
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/".*"/g,  function (y)
    {
        return y.fontcolor("green");
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
        return x.fontcolor("#0600B7");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/,end=|Floor/g,  function (x)
    {
        return x.fontcolor("black");
    });
}












