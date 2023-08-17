var x=document.getElementsByClassName("src");
var s;


//double qoutes
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
        return x.fontcolor("#D63E12");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/abstract |boolean|byte|char |class |double |enum |finally|float |int |interface |long |package |private |protected |public |short |static |void /g,  function (x)
    {
        return x.fontcolor("#8F00C8");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/break|case|catch|continue|default|do{|else|extends | for|final|if|implements |import |new |null|return|super|switch|this|throws|throw|try|while/g,  function (x)
    {
        return x.fontcolor("#0600B7");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/s1|s2|obj1 |obj2 |t1|t2/g,  function (x)
    {
        return x.fontcolor("black");
    });
   

}












