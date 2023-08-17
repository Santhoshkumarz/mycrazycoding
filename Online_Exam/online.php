<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="quiz-box" id="quiz-box" style="display: block;">
                        <div class="d-flex align-items-center justify-content-between mb-3 mb-lg-4">
                            <span class="label-color-2 fw-600 fs-16"><i class="fas fa-question label-color-3 me-1"></i>
                                <span id="total_question_views">4</span> of
                                30</span>
                            <p class="label-color-2 fw-600 fs-16 m-0 text-end quiz-timer"><i class="fas fa-alarm-clock label-color-3 me-1"></i> Time left: <span class="d-inline-block" id="timer">28:22</span></p>
                        </div>
                        <div>

                            
                            <form method="post" action="quiz-result.html" id="form_submit">
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" id="question1" style="display: none;">1.
                                    Which of the following is used to declare a constant </h3>
                                <div class="row mb-2" id="options1" style="display: none;">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option11" name="answer[109]" value="1">
                                            <label for="option11"><span class="quiz-option-number">A</span>
                                                <span>const</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option21" name="answer[109]" value="2">
                                            <label for="option21"><span class="quiz-option-number">B</span>
                                                <span>constant</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option31" name="answer[109]" value="3">
                                            <label for="option31"><span class="quiz-option-number">C</span>
                                                <span>define</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option41" name="answer[109]" value="4">
                                            <label for="option41"><span class="quiz-option-number">D</span>
                                                <span>#pragma</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question2">2.
                                    What gets printed? </h3>
                                <div class="row mb-2" style="display: none;" id="options2">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option12" name="answer[108]" value="1">
                                            <label for="option12"><span class="quiz-option-number">A</span>
                                                <span>true</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option22" name="answer[108]" value="2">
                                            <label for="option22"><span class="quiz-option-number">B</span>
                                                <span>false</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question3">3.
                                    Which of the following is the way to create comments in PHP? </h3>
                                <div class="row mb-2" style="display: none;" id="options3">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option13" name="answer[107]" value="1">
                                            <label for="option13"><span class="quiz-option-number">A</span>
                                                <span>// commented code to end of line</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option23" name="answer[107]" value="2">
                                            <label for="option23"><span class="quiz-option-number">B</span>
                                                <span>/* commented code here */</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option33" name="answer[107]" value="3">
                                            <label for="option33"><span class="quiz-option-number">C</span>
                                                <span># commented code to end of line</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option43" name="answer[107]" value="4">
                                            <label for="option43"><span class="quiz-option-number">D</span>
                                                <span>all of the above</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: flex;" id="question4">4.
                                    What does PHP stand for? </h3>
                                <div class="row mb-2" style="display: flex;" id="options4">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option14" name="answer[106]" value="1">
                                            <label for="option14"><span class="quiz-option-number">A</span>
                                                <span>Preprocessed Hypertext Page</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option24" name="answer[106]" value="2">
                                            <label for="option24"><span class="quiz-option-number">B</span>
                                                <span>Hypertext Markup Language</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option34" name="answer[106]" value="3">
                                            <label for="option34"><span class="quiz-option-number">C</span>
                                                <span>PHP: Hypertext Preprocessor</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option44" name="answer[106]" value="4">
                                            <label for="option44"><span class="quiz-option-number">D</span>
                                                <span>Hypertext Transfer Protocol</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question5">5.
                                    What will be the value of $var? </h3>
                                <div class="row mb-2" style="display: none;" id="options5">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option15" name="answer[110]" value="1">
                                            <label for="option15"><span class="quiz-option-number">A</span>
                                                <span>0</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option25" name="answer[110]" value="2">
                                            <label for="option25"><span class="quiz-option-number">B</span>
                                                <span>0.5</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option35" name="answer[110]" value="3">
                                            <label for="option35"><span class="quiz-option-number">C</span>
                                                <span>1</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question6">6.
                                    How do we access the value of 'd' later? </h3>
                                <div class="row mb-2" style="display: none;" id="options6">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option16" name="answer[111]" value="1">
                                            <label for="option16"><span class="quiz-option-number">A</span>
                                                <span>$a[0]</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option26" name="answer[111]" value="2">
                                            <label for="option26"><span class="quiz-option-number">B</span>
                                                <span>$a[1]</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option36" name="answer[111]" value="3">
                                            <label for="option36"><span class="quiz-option-number">C</span>
                                                <span>$a[2]</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option46" name="answer[111]" value="4">
                                            <label for="option46"><span class="quiz-option-number">D</span>
                                                <span>$a[3]</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question7">7.
                                    Which of the following is NOT a valid PHP comparison operator? </h3>
                                <div class="row mb-2" style="display: none;" id="options7">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option17" name="answer[112]" value="1">
                                            <label for="option17"><span class="quiz-option-number">A</span>
                                                <span>!=</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option27" name="answer[112]" value="2">
                                            <label for="option27"><span class="quiz-option-number">B</span>
                                                <span>&gt;=</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option37" name="answer[112]" value="3">
                                            <label for="option37"><span class="quiz-option-number">C</span>
                                                <span>&lt;=&gt;</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option47" name="answer[112]" value="4">
                                            <label for="option47"><span class="quiz-option-number">D</span>
                                                <span>&lt;&gt;</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question8">8.
                                    What gets printed? </h3>
                                <div class="row mb-2" style="display: none;" id="options8">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option18" name="answer[113]" value="1">
                                            <label for="option18"><span class="quiz-option-number">A</span>
                                                <span>Caught Exception</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option28" name="answer[113]" value="2">
                                            <label for="option28"><span class="quiz-option-number">B</span>
                                                <span>Caught MyException</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question9">9.
                                    Which statement about the code below is correct? </h3>
                                <div class="row mb-2" style="display: none;" id="options9">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option19" name="answer[114]" value="1">
                                            <label for="option19"><span class="quiz-option-number">A</span>
                                                <span>the code is perfectly fine</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option29" name="answer[114]" value="2">
                                            <label for="option29"><span class="quiz-option-number">B</span>
                                                <span>classes can not be empty</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option39" name="answer[114]" value="3">
                                            <label for="option39"><span class="quiz-option-number">C</span>
                                                <span>class C can not extend both A and B</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option49" name="answer[114]" value="4">
                                            <label for="option49"><span class="quiz-option-number">D</span>
                                                <span>qualifiers 'public' or 'private' are missing in class definitions</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question10">10.
                                    Which of the following is NOT a magic predefined constant? </h3>
                                <div class="row mb-2" style="display: none;" id="options10">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option110" name="answer[115]" value="1">
                                            <label for="option110"><span class="quiz-option-number">A</span>
                                                <span>__LINE__</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option210" name="answer[115]" value="2">
                                            <label for="option210"><span class="quiz-option-number">B</span>
                                                <span>__FILE__</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option310" name="answer[115]" value="3">
                                            <label for="option310"><span class="quiz-option-number">C</span>
                                                <span>__DATE__</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option410" name="answer[115]" value="4">
                                            <label for="option410"><span class="quiz-option-number">D</span>
                                                <span>__CLASS__</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question11">11.
                                    What gets printed? </h3>
                                <div class="row mb-2" style="display: none;" id="options11">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option111" name="answer[116]" value="1">
                                            <label for="option111"><span class="quiz-option-number">A</span>
                                                <span>11</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option211" name="answer[116]" value="2">
                                            <label for="option211"><span class="quiz-option-number">B</span>
                                                <span>22</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option311" name="answer[116]" value="3">
                                            <label for="option311"><span class="quiz-option-number">C</span>
                                                <span>33</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option411" name="answer[116]" value="4">
                                            <label for="option411"><span class="quiz-option-number">D</span>
                                                <span>37</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question12">12.
                                    What is the strpos() function used for? </h3>
                                <div class="row mb-2" style="display: none;" id="options12">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option112" name="answer[117]" value="1">
                                            <label for="option112"><span class="quiz-option-number">A</span>
                                                <span>Find the last character of a string</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option212" name="answer[117]" value="2">
                                            <label for="option212"><span class="quiz-option-number">B</span>
                                                <span>Both b and c</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option312" name="answer[117]" value="3">
                                            <label for="option312"><span class="quiz-option-number">C</span>
                                                <span>Search for character within a string</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option412" name="answer[117]" value="4">
                                            <label for="option412"><span class="quiz-option-number">D</span>
                                                <span>Locate position of a stringâ€™s first character</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question13">13.
                                    Which of the following differences are valid between PHP 4 and PHP 5? </h3>
                                <div class="row mb-2" style="display: none;" id="options13">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option113" name="answer[118]" value="1">
                                            <label for="option113"><span class="quiz-option-number">A</span>
                                                <span>Built-in native support for SQLite</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option213" name="answer[118]" value="2">
                                            <label for="option213"><span class="quiz-option-number">B</span>
                                                <span>Both a and c</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option313" name="answer[118]" value="3">
                                            <label for="option313"><span class="quiz-option-number">C</span>
                                                <span>improved MySQL support</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option413" name="answer[118]" value="4">
                                            <label for="option413"><span class="quiz-option-number">D</span>
                                                <span>Support for inheritance</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question14">14.
                                    Can we use include (â€test.phpâ€) two times in a PHP page â€œtest1.PHPâ€? </h3>
                                <div class="row mb-2" style="display: none;" id="options14">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option114" name="answer[119]" value="1">
                                            <label for="option114"><span class="quiz-option-number">A</span>
                                                <span>Yes</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option214" name="answer[119]" value="2">
                                            <label for="option214"><span class="quiz-option-number">B</span>
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question15">15.
                                    What is the difference between GET and POST method? </h3>
                                <div class="row mb-2" style="display: none;" id="options15">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option115" name="answer[120]" value="1">
                                            <label for="option115"><span class="quiz-option-number">A</span>
                                                <span>GET displays the form values entered in the URL of the address bar where as POST does not.</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option215" name="answer[120]" value="2">
                                            <label for="option215"><span class="quiz-option-number">B</span>
                                                <span>POST displays the form values entered in the URL of the address bar where as GET does not.</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option315" name="answer[120]" value="3">
                                            <label for="option315"><span class="quiz-option-number">C</span>
                                                <span>There is no difference</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question16">16.
                                     ____________ function in PHP Returns a list of response headers sent (or ready to send) </h3>
                                <div class="row mb-2" style="display: none;" id="options16">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option116" name="answer[121]" value="1">
                                            <label for="option116"><span class="quiz-option-number">A</span>
                                                <span>header()</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option216" name="answer[121]" value="2">
                                            <label for="option216"><span class="quiz-option-number">B</span>
                                                <span>headers_list()</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option316" name="answer[121]" value="3">
                                            <label for="option316"><span class="quiz-option-number">C</span>
                                                <span>header_sent()</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option416" name="answer[121]" value="4">
                                            <label for="option416"><span class="quiz-option-number">D</span>
                                                <span>header_send()</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question17">17.
                                    What is array_keys() used for? </h3>
                                <div class="row mb-2" style="display: none;" id="options17">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option117" name="answer[122]" value="1">
                                            <label for="option117"><span class="quiz-option-number">A</span>
                                                <span>Compares array keys, and returns the matches</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option217" name="answer[122]" value="2">
                                            <label for="option217"><span class="quiz-option-number">B</span>
                                                <span>Checks if the specified key exists in the array</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option317" name="answer[122]" value="3">
                                            <label for="option317"><span class="quiz-option-number">C</span>
                                                <span>Returns all the keys of an array</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option417" name="answer[122]" value="4">
                                            <label for="option417"><span class="quiz-option-number">D</span>
                                                <span>Both b and c above</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question18">18.
                                    How do I create PHP arrays in a HTML &lt;form&gt;? </h3>
                                <div class="row mb-2" style="display: none;" id="options18">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option118" name="answer[123]" value="1">
                                            <label for="option118"><span class="quiz-option-number">A</span>
                                                <span>&lt; input name= MyArray[]/&gt;</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option218" name="answer[123]" value="2">
                                            <label for="option218"><span class="quiz-option-number">B</span>
                                                <span>&lt; input ="MyArray[]" /&gt;</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option318" name="answer[123]" value="3">
                                            <label for="option318"><span class="quiz-option-number">C</span>
                                                <span>&lt; input name="MyArray[]" /&gt;</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option418" name="answer[123]" value="4">
                                            <label for="option418"><span class="quiz-option-number">D</span>
                                                <span>&lt; input MyArray[] /&gt;</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question19">19.
                                    What is the difference between echo and print? </h3>
                                <div class="row mb-2" style="display: none;" id="options19">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option119" name="answer[124]" value="1">
                                            <label for="option119"><span class="quiz-option-number">A</span>
                                                <span>They both behave the same.</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option219" name="answer[124]" value="2">
                                            <label for="option219"><span class="quiz-option-number">B</span>
                                                <span>Print can take multiple parameters where as echo cannot</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option319" name="answer[124]" value="3">
                                            <label for="option319"><span class="quiz-option-number">C</span>
                                                <span>Echo can take multiple parameters where as print cannot</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option419" name="answer[124]" value="4">
                                            <label for="option419"><span class="quiz-option-number">D</span>
                                                <span>Print is a function where as echo is not.</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question20">20.
                                    What is the default size of a file set in upload_max_filesize ? </h3>
                                <div class="row mb-2" style="display: none;" id="options20">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option120" name="answer[125]" value="1">
                                            <label for="option120"><span class="quiz-option-number">A</span>
                                                <span>1 MB</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option220" name="answer[125]" value="2">
                                            <label for="option220"><span class="quiz-option-number">B</span>
                                                <span>2 MB</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option320" name="answer[125]" value="3">
                                            <label for="option320"><span class="quiz-option-number">C</span>
                                                <span>2.5 MB</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option420" name="answer[125]" value="4">
                                            <label for="option420"><span class="quiz-option-number">D</span>
                                                <span>3 MB</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question21">21.
                                    What is Joomla in PHP? </h3>
                                <div class="row mb-2" style="display: none;" id="options21">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option121" name="answer[126]" value="1">
                                            <label for="option121"><span class="quiz-option-number">A</span>
                                                <span>Set of library enriched with fucntions</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option221" name="answer[126]" value="2">
                                            <label for="option221"><span class="quiz-option-number">B</span>
                                                <span>An open source CMS</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option321" name="answer[126]" value="3">
                                            <label for="option321"><span class="quiz-option-number">C</span>
                                                <span>Framework for designing dynamic pages</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option421" name="answer[126]" value="4">
                                            <label for="option421"><span class="quiz-option-number">D</span>
                                                <span>framework and distribution system for reusable PHP components</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question22">22.
                                    What is the default execution time set in set_time_limit()? </h3>
                                <div class="row mb-2" style="display: none;" id="options22">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option122" name="answer[127]" value="1">
                                            <label for="option122"><span class="quiz-option-number">A</span>
                                                <span>20 secs</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option222" name="answer[127]" value="2">
                                            <label for="option222"><span class="quiz-option-number">B</span>
                                                <span>30 secs</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option322" name="answer[127]" value="3">
                                            <label for="option322"><span class="quiz-option-number">C</span>
                                                <span>40 secs</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option422" name="answer[127]" value="4">
                                            <label for="option422"><span class="quiz-option-number">D</span>
                                                <span>35 secs</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question23">23.
                                    Is strstr and strchr aliases? </h3>
                                <div class="row mb-2" style="display: none;" id="options23">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option123" name="answer[128]" value="1">
                                            <label for="option123"><span class="quiz-option-number">A</span>
                                                <span>Yes</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option223" name="answer[128]" value="2">
                                            <label for="option223"><span class="quiz-option-number">B</span>
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question24">24.
                                    Can I generate DLL files from PHP scripts like i can in Perl ? </h3>
                                <div class="row mb-2" style="display: none;" id="options24">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option124" name="answer[129]" value="1">
                                            <label for="option124"><span class="quiz-option-number">A</span>
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option224" name="answer[129]" value="2">
                                            <label for="option224"><span class="quiz-option-number">B</span>
                                                <span>yes</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question25">25.
                                    In which variable is the users IP address stored? </h3>
                                <div class="row mb-2" style="display: none;" id="options25">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option125" name="answer[130]" value="1">
                                            <label for="option125"><span class="quiz-option-number">A</span>
                                                <span>$DOMAIN</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option225" name="answer[130]" value="2">
                                            <label for="option225"><span class="quiz-option-number">B</span>
                                                <span>$GLOBALS</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option325" name="answer[130]" value="3">
                                            <label for="option325"><span class="quiz-option-number">C</span>
                                                <span>$_ENV</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option425" name="answer[130]" value="4">
                                            <label for="option425"><span class="quiz-option-number">D</span>
                                                <span>$REMOTE_ADDR</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question26">26.
                                    Can I run several versions of PHP at the same time? </h3>
                                <div class="row mb-2" style="display: none;" id="options26">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option126" name="answer[131]" value="1">
                                            <label for="option126"><span class="quiz-option-number">A</span>
                                                <span>Yes</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option226" name="answer[131]" value="2">
                                            <label for="option226"><span class="quiz-option-number">B</span>
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question27">27.
                                    Which function is used to Strip whitespace (or other characters) from the beginning and end of a string? </h3>
                                <div class="row mb-2" style="display: none;" id="options27">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option127" name="answer[132]" value="1">
                                            <label for="option127"><span class="quiz-option-number">A</span>
                                                <span>trim_str</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option227" name="answer[132]" value="2">
                                            <label for="option227"><span class="quiz-option-number">B</span>
                                                <span>strip_str</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option327" name="answer[132]" value="3">
                                            <label for="option327"><span class="quiz-option-number">C</span>
                                                <span>strip</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option427" name="answer[132]" value="4">
                                            <label for="option427"><span class="quiz-option-number">D</span>
                                                <span>trim</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question28">28.
                                    What is PHP heredoc used for? </h3>
                                <div class="row mb-2" style="display: none;" id="options28">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option128" name="answer[133]" value="1">
                                            <label for="option128"><span class="quiz-option-number">A</span>
                                                <span>allows creating single line of string without using quotations</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option228" name="answer[133]" value="2">
                                            <label for="option228"><span class="quiz-option-number">B</span>
                                                <span>allows creating multiple lines of string without using quotations</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option328" name="answer[133]" value="3">
                                            <label for="option328"><span class="quiz-option-number">C</span>
                                                <span>allows creating multiple lines of string with quotations</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option428" name="answer[133]" value="4">
                                            <label for="option428"><span class="quiz-option-number">D</span>
                                                <span>allows creating single lines of string with using quotations</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question29">29.
                                    Can echo in php accept more than 1 parameter? </h3>
                                <div class="row mb-2" style="display: none;" id="options29">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option129" name="answer[134]" value="1">
                                            <label for="option129"><span class="quiz-option-number">A</span>
                                                <span>Yes</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option229" name="answer[134]" value="2">
                                            <label for="option229"><span class="quiz-option-number">B</span>
                                                <span>No</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    
                                                                    </div>

                                
                            
                                <input type="hidden" name="quiz_name" value="php">

                                <h3 class="fw-500 fs-18 label-color-2 mb-3 mb-lg-4" style="display: none;" id="question30">30.
                                    What is the purpose of $_SESSION[]? </h3>
                                <div class="row mb-2" style="display: none;" id="options30">

                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option130" name="answer[135]" value="1">
                                            <label for="option130"><span class="quiz-option-number">A</span>
                                                <span>Used to register a global variable</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option230" name="answer[135]" value="2">
                                            <label for="option230"><span class="quiz-option-number">B</span>
                                                <span>Used to initialize a session.</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option330" name="answer[135]" value="3">
                                            <label for="option330"><span class="quiz-option-number">C</span>
                                                <span>Used to store variables of the current session</span>
                                            </label>
                                        </div>
                                    </div>
                                    
                                                                        <div class="col-lg-6 mb-3 mb-lg-4">
                                        <div class="quiz-input position-relative">
                                            <input type="radio" id="option430" name="answer[135]" value="4">
                                            <label for="option430"><span class="quiz-option-number">D</span>
                                                <span>none of the above</span>
                                            </label>
                                        </div>
                                    </div>
                                                                    </div>

                                
                                <input type="hidden" id="current_show_ques" value="4">
                                <input type="hidden" id="total_question" value="30">

                                <div class="d-flex align-items-center">
                                    <button type="button" class="btn blue-btn w-max-content outline-none shadow-none px-4 fs-17 fw-500" data-bs-toggle="modal" data-bs-target="#submitQuizModal">Submit Test</button>
                                    <div class="ms-auto">
                                        <button type="button" style="" class="btn gray-outline-btn outline-none w-max-content shadow-none px-4 fs-17 fw-500 me-2 previous-button" onclick="nextquestion(2)"><i class="fas fa-angle-left me-1"></i> Prev
                                        </button>
                                        <button type="button" class="btn gray-outline-btn outline-none w-max-content shadow-none px-4 fs-17 fw-500 next-button" onclick="nextquestion(1)">Next <i class="fas fa-angle-right ms-1"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>    
</body>
</html>