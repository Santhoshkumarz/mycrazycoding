var x=document.getElementsByClassName("JAVA");
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
    x[i].innerHTML=s.replace(/[0-9]/g,  function (x)
    {
        return x.fontcolor("Bronze");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/abstract |boolean|byte|char |class |double |enum |finally|float |int |interface |long |package |private |protected |public |short |static |void /g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/break|case|catch|continue|default|do{|else|extends | for|final|if|implements |import |new |null|return|super|switch|this|throws|throw|try|while/g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/s1|s2|obj1 |obj2 |t1|t2/g,  function (x)
    {
        return x.fontcolor("black");
    });
   

}










x=document.getElementsByClassName("PYTHON");
var s;



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
    x[i].innerHTML=s.replace(/void /g,  function (x)
    {
        return x.fontcolor("#8F00C8");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/False|None |True|and | as |assert |async |await |break|class |continue |def |del |elif|else|except|finally|for |from |global |if|import | in |lambda |nonlocal|pass |raise |return |try|while|with |yield|print/g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/,end=|Floor/g,  function (x)
    {
        return x.fontcolor("black");
    });
}














