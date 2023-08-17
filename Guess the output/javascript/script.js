
const btn_1 = document.querySelector("#btn_1");
const btn_2 = document.querySelector("#btn_2");
const btn_3 = document.querySelector("#btn_3");
const btn_4 = document.querySelector("#btn_4");
const btn_5 = document.querySelector("#btn_5");
const btn_6 = document.querySelector("#btn_6");
const btn_7 = document.querySelector("#btn_7");
const btn_8 = document.querySelector("#btn_8");
const btn_9 = document.querySelector("#btn_9");
const btn_10 = document.querySelector("#btn_10");
const btn_11 = document.querySelector("#btn_11");
const btn_12 = document.querySelector("#btn_12");
const btn_13 = document.querySelector("#btn_13");
const btn_14 = document.querySelector("#btn_14");
const btn_15 = document.querySelector("#btn_15");

const btn_nxt = document.querySelector("#nextbtn");


const q_num = document.querySelector(".q_num");



var option1 = document.querySelector(".option1");

var option2 = document.querySelector(".option2");

var option3 = document.querySelector(".option3");

var option4 = document.querySelector(".option4");








var current_active_class = btn_1;

var current_question = 0;


btn_nxt.onclick = ()=>
{
     if(current_question==14)
     {
        alert("No more Questions");
     }
     else
     {

        $(current_active_class).removeClass("active");

        if(current_active_class==btn_1) current_active_class= btn_2;
        else if(current_active_class==btn_2) current_active_class= btn_3;
        else if(current_active_class==btn_3) current_active_class= btn_4;
        else if(current_active_class==btn_4) current_active_class= btn_5;
        else if(current_active_class==btn_5) current_active_class= btn_6;
        else if(current_active_class==btn_6) current_active_class= btn_7;
        else if(current_active_class==btn_7) current_active_class= btn_8;
        else if(current_active_class==btn_8) current_active_class= btn_9;
        else if(current_active_class==btn_9) current_active_class= btn_10;
        else if(current_active_class==btn_10) current_active_class= btn_11;
        else if(current_active_class==btn_11) current_active_class= btn_12;
        else if(current_active_class==btn_12) current_active_class= btn_13;
        else if(current_active_class==btn_13) current_active_class= btn_14;
        else if(current_active_class==btn_14) current_active_class= btn_15;
        else if(current_active_class==btn_15) current_active_class= btn_1;

        $(current_active_class).addClass("active");

        current_question=current_question+1;

        showquestion(current_question);

     }  
}

var questions = [
    {
    numb: 1,
    question: "a = 0<br><br>b = 0<br><br>print(a%b)",
    answer: "option4",
    options: [
      "0",
      "1",
      "None",
      "Error"
    ]
  },
    {
    numb: 2,
    question: "a = 1<br><br>b = -1<br><br>print(a%b)",
    answer: "option1",
    options: [
      "0",
      "-1",
      "1",
      "Error"
    ]
  },
    {
    numb: 3,
    question: "n = [ [] , [] , [] ]<br><br>n.clear()<br><br>print(n)",
    answer: "option3",
    options: [
      "[],[],[]",
      "[[],[],[]]",
      "[]",
      "Error"
    ]
  },
    {
    numb: 4,
    question: "n = [ 10, 20, 30]<br><br>m = [ 40, 50]<br><br>n.extend(n+m)<br><br>print(n)",
    answer: "option1",
    options: [
      "[10,20,30,10,20,30,40,50]",
      "[10,20,30,40,50,10,20,30]",
      "[10,20,30,40,50]",
      "Error"
    ]
  },
    {
    numb: 5,
    question: "n = [10,20,30]<br><br>m = [40,50]<br><br>n.extend(n+m)<br><br>print(n)",
    answer: "option1",
    options: [
      "[10,20,30,10,20,30,40,50]",
      "[10,20,30,40,50,10,20,30]",
      "[10,20,30,40,50]",
      "Error"
    ]
  },


  {
    numb: 6,
    question: "n = [ 10, 20, 30]<br><br>m = [40,50]<br><br>n.extend(n-m)<br><br>print(n)",
    answer: "option4",
    options: [
      "[10,20,30]",
      "[40,50]",
      "[10,20,30,40,50]",
      "Error"
    ]
  },

  {
    numb: 7,
    question: "n = [ 10, 20, 30, 40, 40.00, 40.000, 40.0000]<br><br>a = n.index(40.0)<br><br>print(a)",
    answer: "option1",
    options: [
      "3",
      "6",
      "4",
      "Error"
    ]
  },


  {
    numb: 8,
    question: "n = [ 50, 50.1, 50.10, 50.100, 5.1000]<br><br>a = n.index(50.100)<br><br>print(a)",
    answer: "option2",
    options: [
      "0",
      "1",
      "3",
      "Error"
    ]
  },


  {
    numb: 9,
    question: "n = [ 10, 20, 30, 40, 40.0, 40.00, 40.000]<br><br>a = n.count(40.0)<br><br>print(a)",
    answer: "option3",
    options: [
      "1",
      "3",
      "4",
      "Error"
    ]
  },

  {
    numb: 10,
    question: "n = [10,20,30]<br><br>n.insert(10,100)<br><br>print(n)",
    answer: "option3",
    options: [
      "[10,20,30,0,0,0,0,0,0,0,100]",
      "[10,20,30,,,,,100]",
      "[10,20,30,100]",
      "Error"
    ]
  },

  {
    numb: 11,
    question: "n = [ 10, 20, 30, 40, 50]<br><br>n.append(n)<br><br>print(n)",
    answer: "option3",
    options: [
      "[10,20,30,40,50]",
      "[10,20,30,40,50,10,20,30,40,50]",
      "[10,20,30,40,50,[...]]",
      "Error"
    ]
  },

  {
    numb: 12,
    question: "if():<br><br>    print('Yes')<br><br>else:<br><br>    print('No')",
    answer: "option2",
    options: [
      "Yes",
      "No",
      "None",
      "Error"
    ]
  },

  {
    numb: 13,
    question: "print(True+False)",
    answer: "option3",
    options: [
      "True",
      "False",
      "1",
      "Error"
    ]
  },

  {
    numb: 14,
    question: "a = 3<br><br>b = 2.0<br><br>print(a//b)",
    answer: "option2",
    options: [
      "1",
      "1.0",
      "Error",
      "False"
    ]
  },

  {
    numb: 15,
    question: "n = ('crazy'.upper()).lower()<br><br>print(n)",
    answer: "option2",
    options: [
      "CRAZY",
      "crazy",
      "CRAZYcrazy",
      "Error"
    ]
  },

];



function showquestion(index)
{

  

    const que_text = document.querySelector(".code");

    $(option1).css('background','#D6EAF8');
    $(option2).css('background','#D6EAF8');
    $(option3).css('background','#D6EAF8');
    $(option4).css('background','#D6EAF8');




    q_num.innerHTML =  questions[index].numb;

    que_text.innerHTML = questions[index].question;

    option1.innerHTML = questions[index].options[0];

    option2.innerHTML = questions[index].options[1];

    option3.innerHTML = questions[index].options[2];

    option4.innerHTML = questions[index].options[3];


    //set attributes on click

     $(option1).css('pointer-events', 'auto');
     $(option2).css('pointer-events', 'auto');
     $(option3).css('pointer-events', 'auto');
     $(option4).css('pointer-events', 'auto');


     heighlight();
    


}


option1.onclick = ()=>
{
     if(questions[current_question].answer=="option1")
     {
         
         $(option1).css('background','#66F066');
     }
     else
     {
        $(option1).css('background','#EF6442');
  
        if(questions[current_question].answer=="option2"){$(option2).css('background','#66F066');}
        else if(questions[current_question].answer=="option3"){$(option3).css('background','#66F066');}
        else{$(option4).css('background','#66F066');}

     }
     $(option1).css('pointer-events', 'none');
     $(option2).css('pointer-events', 'none');
     $(option3).css('pointer-events', 'none');
     $(option4).css('pointer-events', 'none');
}

option2.onclick = ()=>
{
     if(questions[current_question].answer=="option2")
     {
         $(option2).css('background','#66F066');
     }
     else
     {
        $(option2).css('background','#EF6442');
        if(questions[current_question].answer=="option1"){$(option1).css('background','#66F066');}
        else if(questions[current_question].answer=="option3"){$(option3).css('background','#66F066');}
        else{$(option4).css('background','#66F066');}
     }
     $(option1).css('pointer-events', 'none');
     $(option2).css('pointer-events', 'none');
     $(option3).css('pointer-events', 'none');
     $(option4).css('pointer-events', 'none');
}


option3.onclick = ()=>
{
     if(questions[current_question].answer=="option3")
     {
         $(option3).css('background','#66F066');
     }
     else
     {
        $(option3).css('background','#EF6442');
        if(questions[current_question].answer=="option1"){$(option1).css('background','#66F066');}
        else if(questions[current_question].answer=="option2"){$(option2).css('background','#66F066');}
        else{$(option4).css('background','#66F066');}
     }
     $(option1).css('pointer-events', 'none');
     $(option2).css('pointer-events', 'none');
     $(option3).css('pointer-events', 'none');
     $(option4).css('pointer-events', 'none');
}

option4.onclick = ()=>
{
     if(questions[current_question].answer=="option4")
     {
         $(option4).css('background','#66F066');
     }
     else
     {
        $(option4).css('background','#EF6442');
        if(questions[current_question].answer=="option1"){$(option1).css('background','#66F066');}
        else if(questions[current_question].answer=="option2"){$(option2).css('background','#66F066');}
        else{$(option4).css('background','#66F066');}
     }
     $(option1).css('pointer-events', 'none');
     $(option2).css('pointer-events', 'none');
     $(option3).css('pointer-events', 'none');
     $(option4).css('pointer-events', 'none');
}

function heighlight()
{
    var x=document.getElementsByClassName("code");
    var s;



    for(var i=0;i<x.length;i++)
    {
   
           s=x[i].innerHTML;
           x[i].innerHTML=s.replace(/".*"/g,  function (y)
           {
                 return y.fontcolor("#66F066");
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
}




btn_1.onclick = ()=>
{
    

     $(current_active_class).removeClass("active");

     $(btn_1).addClass("active");

     current_active_class = btn_1;

     current_question = 0;

     showquestion(0);
    
}

btn_2.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_2).addClass("active");

     current_active_class = btn_2;

     current_question = 1;

     showquestion(1);
     
}



btn_3.onclick = ()=>
{
    

     $(current_active_class).removeClass("active");

      $(btn_3).addClass("active");

     current_active_class = btn_3;

     current_question = 2;

     showquestion(2);
     
}



btn_4.onclick = ()=>
{
    

     $(current_active_class).removeClass("active");

      $(btn_4).addClass("active");

     current_active_class = btn_4;

     current_question = 3;

     showquestion(3);
     
}





btn_5.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_5).addClass("active");

     current_active_class = btn_5;

     current_question = 4;

     showquestion(4);
     
}


btn_6.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_6).addClass("active");

     current_active_class = btn_6;

     current_question = 5;

     showquestion(5);
     
}


btn_7.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_7).addClass("active");

     current_active_class = btn_7;

     current_question = 6;

     showquestion(6);
     
}


btn_8.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_8).addClass("active");

     current_active_class = btn_8;

     current_question = 7;

     showquestion(7);
     
}


btn_9.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_9).addClass("active");

     current_active_class = btn_9;

     current_question = 8;

     showquestion(8);
     
}



btn_10.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_10).addClass("active");

     current_active_class = btn_10;

     current_question = 9;

     showquestion(9);
     
}


btn_11.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_11).addClass("active");

     current_active_class = btn_11;

     current_question = 10;

     showquestion(10);
     
}


btn_12.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_12).addClass("active");

     current_active_class = btn_12;

     current_question = 11;

     showquestion(11);
     
}


btn_13.onclick = ()=>
{
     

     $(current_active_class).removeClass("active");

     $(btn_13).addClass("active");

     current_active_class = btn_13;

     current_question = 12;

     showquestion(12);
     
}


btn_14.onclick = ()=>
{
    

     $(current_active_class).removeClass("active");

      $(btn_14).addClass("active");

     current_active_class = btn_14;

     current_question = 13;

     showquestion(13);
     
}


btn_15.onclick = ()=>
{
    

     $(current_active_class).removeClass("active");

      $(btn_15).addClass("active");

     current_active_class = btn_15;

     current_question = 14;

     showquestion(14);
     
}


