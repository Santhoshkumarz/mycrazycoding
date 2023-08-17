var x=document.getElementsByClassName("src");
var s;


//double qoutes
for(var i=0;i<x.length;i++)
{


    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/".*"/g,  function (y)
    {
        return y.fontcolor("blue");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/[0-9]|s1|s2|&lt;script&gt;|&lt;\/script&gt;/g,  function (x)
    {
        return x.fontcolor("#EF502E");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/&lt;html&gt;|&lt;head&gt;|&lt;title&gt;|&lt;body&gt;|&lt;\/body&gt;|&lt;\/html&gt;|let/g,  function (x)
    {
        return x.fontcolor("blue");
    });

    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/&lt;!DOCTYPE html&gt;/g,  function (x)
    {
        return x.fontcolor("#707B7C");
    });
   

}












