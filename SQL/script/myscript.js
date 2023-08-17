var x=document.getElementsByClassName("src");
var s;


//double qoutes
for(var i=0;i<x.length;i++)
{

    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/MINUTE|DAYOFMOUTH|HOUR|YEAR|CURRENT_DATE|CURRENT_TIMESTAMP|VARCHAR|DATE|MONTH| TIMESTAMP|REPLACE|VIEW|UNIQUE|CONSTRAINT|DEFAULT|IDENTITY|AUTOINCREMENT|SERIAL|INTEGER|AUTO_INCREMENT|PRIMARY KEY|CREATE SEQUENCE|CREATE|TABLE|ALTER|UPDATE|DELETE|DROP|INSERT|INTO|VALUES|DATABASE|SELECT|FROM|WHERE|SET|ADD|COLUMN|TRUNCATE|MINVALUE|MIN|MAX|COUNT|SUM|AVG|AND|NOT|ORDER| OR|DESC|ASC|BY|AS|DISTINCT|LIKE|AFTER|BETWEEN|ON|LEFT|JOIN|INNER|NULL|PRIMARY KEY|FOREIGN KEY|REFERENCES|FULL|UNION ALL|RIGHT|IN |UNION|UNION ALL|GROUP BY|LIMIT|HAVING|MINVALUE|START WITH|INCREMENT BY|CACHE/g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/while/g,  function (x)
    {
        return x.fontcolor("#0600B7");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/s1|s2|obj1 |obj2 |t1|t2/g,  function (x)
    {
        return x.fontcolor("black");
    });
   

}




x=document.getElementsByClassName("syntax");

//double qoutes
for(var i=0;i<x.length;i++)
{


    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/CURRENT_TIMESTAMP|VARCHAR|DATE|MONTH| TIMESTAMP|REPLACE|VIEW|UNIQUE|CONSTRAINT|DEFAULT|IDENTITY|AUTOINCREMENT|SERIAL|INTEGER|AUTO_INCREMENT|PRIMARY KEY|CREATE SEQUENCE|CREATE|TABLE|ALTER|UPDATE|DELETE|DROP|INSERT|INTO|VALUES|DATABASE|SELECT|FROM|WHERE|SET|ADD|COLUMN|TRUNCATE|MINVALUE|MIN|MAX|COUNT|SUM|AVG|AND|NOT|ORDER|DESC|ASC| OR |BY|AS|DISTINCT|LIKE|IN |ON|LEFT|JOIN|INNER|UNION|UNION ALL|GROUP BY|FULL|LIMIT|HAVING|CREATE SEQUENCE|MINVALUE|START WITH|INCREMENT BY|CACHE/g,  function (x)
    {
        return x.fontcolor("blue");
    });
    s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/&#9733;/g,  function (x)
    {
        return x.fontcolor("#DF4321");
    });
    s=s=x[i].innerHTML;
    x[i].innerHTML=s.replace(/s1|s2|obj1 |obj2 |t1|t2/g,  function (x)
    {
        return x.fontcolor("black");
    });


}