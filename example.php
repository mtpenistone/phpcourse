<!-- PHP code sits between the PHP tag in HTML code -  <?php ?> -->

<!-- PHP lines of code should end with a semi colon ; -->

<!-- PHP is case sensitive -->

<!-- Output to the user (PRINT) is done with an echo command. EG echo "Hello World";  --> 
    <!-- You can echo a line break to push output onto separate lines in the same block with echo <br>; use sparingly -->

<!-- Variables -->

    <!-- used to store data, will not display without additional code - create by using $ EG $first_name; --> -->
    <!-- String - what is contained in a variable, letters or text is. EG $first_name = "Mat"; where Mat is a STRING in the Variable $first_name -->
    <!-- Numbers can also be held in variables and can be whole numbers (INTEGERS) or decimals (FLOAT), EG $favourite_number = 41; Note no quotation marks-->
    <!-- To display data held in a variable can use echo. EG - echo $first_name; -->
    <!-- A variable could be used to store another variable. EG $last_name = $first_name; -->
    <!-- var_dump can be used to display information about a variable on the page (only use in testing) -->


<!-- Math operators -->
    
    <!-- + (add) - (minus) * (multiply) / (divide) % (modulas, the remainder from division) ** (exponent, to the power)-->

    <!-- incrementing - use ++ before variable to increment before or after to increment after making sure it touches EG ++$num_1 or $num_1++ -->
    <!-- decrementing - use -- before variable to increment before or after to increment after making sure it touches EG --$num_1 or $num_1-- -->

<!-- concatenation -->

    <!-- in php can't use + to concatenate variables, you would use a period ., to concatenate with a space would use something like $var1 . " " . $var2 -->

<!-- comparison operators -->

    <!-- 
        == Equal to
        != Not equal to
        >  Greater than
        <  Less than
        >= Greater than or equal to
        <= Less than or equal to
 
        -->

    <!-- often wrapped in parenthesis EG - ($num_1 == $num_2)  -->

<!-- Escape characters -->

    <!-- allows use of " to print rather than cause an error when used in say a sentance such as echo "And he said "you smell"" which would error. -->
    <!-- example echo "And he said \"you smell\"" would print as And he said "you smell"-->


<!-- If Else Statements -->

    <!-- format for an if statement  note the if '(something is true) {then do this' format for each statement and remember to close off the do something line with ;
    
    if (something is true) {
            do something;
        }

    -->
    
    <!-- format for an if else statement  note the 'if (something is true) {then do this} else {do this instead}' format for each statement and remember to close off the do something line as well as the do something else line with;
    
    if (something is true) {
            do something;
        } else {
            do something else;
        }
    -->   

<!-- IF Elseif Statements -->

    <!-- format for an if elseif statement is 'if (something is true) {then do this} elseif (something else is true) {then do this instead} else {just do this} the code will run until it either finds a true statement in which case it will perform the action in {} or if no true statements are found in the if, elseif sections it will perform the else action 

    if (something is true) {
            do something and stop;
        } elseif (this other thing is true) {
            do something else and stop;
        } else {
            do this because neither of the other statements were true
        } -->

    
<!-- Arrays -->
        <!-- Arrays are 'boxes' that include multiple items, where as a variable is a 'box' that contains a single item
        they are formatted similar to a variable however use the format '$arrayname = array($something, $somethingelse, $anotherthing)' or for a string '$arrayname = array("something", "somethingelse", "anotherthing")'; note the comma seperating each item in an array. 
         -->

    <!-- Arrays Numeric -->

        <!-- a numeric array takes the data in an array and assigns it a number beginning at 0, eg array("something", "somethingelse", "anotherthing") would be 
        array("0", "1", "2") 0 = something, 1 = somethingelse, 2 = anotherthing-->

    <!-- Arrays Associative -->

        <!-- an associative array takes two items linked with a => as part of the array where the key is not a number but the first item
        eg "john"=>"smith" to echo the surname of john you would echo $surname['john'];
         -->

    <!-- Arrays Count -->

        <!-- To locate the number of items in an array count($arrayname) -->


<!-- Loops -->

    <!-- While loops (loops until a condition is false). Must be used with a counter.
    
     while (condition is true) {
          Do something;
        }

        //this is while loop example code working through an array

         $count = 0;
         $names = array("John", "Steve", "Mary");
         
         while ($count < count($names)) {
           echo "Name $names[$count]<br>"; //echos the current count number of the array
           $count++;
 
         }

    -->

    <!-- For loop similar to a while loop but with a different format


          for ($counter = 0; $counter <= 10; $counter++) {

              echo "The count is $counter<br>";

          }
    
     -->

    <!-- foreach loop - can be used to cycle through items in an array
    
    

        $names = array("John", "Steve", "Mary");
        foreach ($names as $n) {
          echo "$n<br>";

        } -->


<!-- Functions -->

        <!-- Functions are created by creating a function and then telling it what to do
        Below the function created is called helloThere and is designed to take $num_1 and $num_2 return them added together setting them as variable $answer and then echoing out $answer multiplied by 2

          function helloThere ($num_1, $num_2) {
              return $num_1 + $num_2;
          }
      
          $answer = helloThere(40, 5);
          echo $answer * 2 ;
        
         -->

        <!-- Date function -->

            <!--  //this is date function example code

        $todays_day = date('Y');
        echo "Copyright (c) $todays_day - All Rights Reserved";
        
            -->

        <!-- string manipulation function - allows a string to be alterered by a variable or another value-->

        <!-- //this is string manipulaton function example code

      $stuff = "Mat is a PHP coding monster";
      echo str_replace("monster", "dork", $stuff); //would replace monster with dork
      
      
       -->
        
    
<!-- example code -->

<?php 

    echo "Hello World!"; //this is a display on page (Print) example

    echo <br>; //this can create a line break in the PHP code

    $first_name = "Mat"; //this is a variable with a string example
    $favourite_number = 14; //this is a variable with a number example
    $last_name = $first_name; //this is an example of a variable storing another variable
    echo $first_name; //this is a display variable example

     //this is math example code
     $num_1 = 41;
     $num_2 = 5;        

     echo $num_1 * $num_2; //example of variables with multiply in php
     echo $num_1 ** $num_2; //example of exponents ( num 1 to the power num 2)
     echo $num_1 % $num_2; //example of modulas

     echo ++$num_1; //this is an example of incrementing before, output would be 42
     echo --$num_1; //this is an example of decrementing before, output would be 40
     echo $num_1++; //this is an example of incrementing after, output would be 41, $num_1 would be then set to 42 for future use. 

     //this is concatenation example code
     $first_name = "Mat";
     $last_name = "Penistone";

     echo $first_name . " " . $last_name; //example of concatenation of two variables with a space
     echo $first_name . "<br>" . $last_name; //example of concatenation of two variables with a line break

    //this is comparison operator example code

    $num_1 = 41;
    $num_2 = 4;
    $first_name = "Mat";
    $last_name = "Penistone";
    var_dump($first_name == "Mark"); //this is an example of a comparison operator for equal to and will return false (boolean)

    //this is escape character example code

    echo "And he said \"You smell\"" 

    //this is IF ELSE Statement example code

    $first_name = "Mat";

    if ($first_name == "Mat") {
        echo "Hello Mat, how are you?";
    }  else {
        echo "Hello Stranger";
    }

            //example with variables in echo output (concatenation)

            $favourite_number = 14;

            if ($favourite_number > 10) {
                echo $favourite_number .  " is greater than 10";
            } else {
                echo $favourite_number . " is not greater than 10";
            }

        //this is IF ELSEIF Statement example code. This would give print/echo of 11 is greater than 10 because the first true statement is the if. If num_1 is 10 or less the 5 equals 5 would print/echo

        $num_1 = 11;
        $num_2 = 5;

            if ($num_1 > 10) {
                echo $num_1 .  " is greater than 10";
            } elseif ($num_2 == 5) {
              echo $num_2 . " equals 5";
            } else {
                echo $num_1 . " is not greater than 10";
            }        

    //this is Array - numeric example code

        $her_name = "Mary";
        $first_names = array("Mat", "Tom", "Tim", $her_name);

        echo $first_names[3];

           //this is Array - numeric example code with a multi-dimentional array (array within an array) note the format otherwise errors [$first_names item choosing $last_names array][$last_names item]
           $last_names = array("Smith", "Clarke", "Johnson");
           $first_names = array("Mat", "Tom", $last_names);
   
           echo $first_names[2][0];

           //this is Array - Associative example code

        $fav_pizza = array(
            "John"=>"Pepperoni", 
            "Steve"=>"Cheese", 
            "Mary"=>"Tomato",
        );

        echo $fav_pizza['John'];

        //this is Array count example code

        $names = array("john","tom", "tim", "james", "mat");

        echo $names[count($names) - 1]; //targeting the last item in the array


        //this is while loop example code

        $counter = 0;
        while ($counter < 10) {
        echo "The count is: $counter<br>"; 
        $counter++;
           }

        //this is while loop example code working through an array

         $count = 0;
         $names = array("John", "Steve", "Mary");
         
         while ($count < count($names)) {
           echo "Name $names[$count]<br>"; //echos the current count number of the array
           $count++;
 
         }

        //this is For loop example code

        for ($counter = 0; $counter <= 10; $counter++) {
        echo "The count is $counter<br>";
        }

        //this is Foreach loop example code 

        $names = array("John", "Steve", "Mary");
        foreach ($names as $n) {
          echo "$n<br>";
        }

        //this is function example code

        function helloThere ($num_1, $num_2) {  //this is the function name plus the arguments it requires
            return $num_1 + $num_2; //this is what the function does
        }
    
        $answer = helloThere(40, 5); //this is a variable being set based on the function plus the two arguments
        echo $answer * 2 ;

        //this is random function example code

        //echo mt_rand(0,100); //would choose a random number between 0 and 100
        $names = array("john", "steve", "mary");
        echo $names[mt_rand(0,2)];

        //this is string manipulaton function example code

        $stuff = "Mat is a PHP coding monster";
         echo str_replace("monster", "dork", $stuff); //would replace monster with dork

         //this is string manipulaton function example code

      $stuff = "MAT Penistone";

      echo strtoupper($stuff); //capitalises everything
      echo ucwords($stuff); //capitalises first letters in each word
      echo ucfirst($stuff); //capitalises first letter on first word
      echo strtolower($stuff); //lowercases all
      echo lcfirst($stuff); //lower cases first letter on first word
      echo strlen($stuff); //number of characters including spaces in a string
      echo str_shuffle($stuff); //shuffles characters in a string

     




?>

<?php 

//this is include function example code 


echo "Copyright (c) " . $company_name . " " . date("Y") . " -All Rights Reserved"; //this would use a php code block usually located in the top of the current page to link to a separate .php file that included the variable $company_name. see php block below

  ?>

<?php 

include("variables.php"); //if located at the top of a page any include funtions below on the same page will also be able to use items or variables from the .php file 


?>

