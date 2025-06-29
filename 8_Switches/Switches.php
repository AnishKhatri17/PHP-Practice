<?php

    // switch = replacement to using many elesif statements, more efficient, less code to write.

    // Example 1:
    echo "<br><strong>Displaying the grade remarks of the student: </strong><br>";
    $grade = "A";

    switch($grade){
        case "A":
            echo "You have scored {$grade}. You did an excellent job.";
            break;
        
        case "B":
            echo "You have scored {$grade}. You did a great job";
            break;

        case "C":
            echo "You have scored {$grade}. You are doing quite well.";
            break;

        case "D":
            echo "You have scored {$grade}. You need to work harder.";
            break;

        case "F":
            echo "You have scored {$grade}. You failed need to study more.";
            break;

        default:
            echo "{$grade} is an inavlid input.";
    }
    echo "<br><br>"; 
    echo "<br><br> <strong>Displaying the day of the week: </strong><br>";

    // Example 2 (To display the day of the week):
    $date = date("l"); //date("l") here the l will give the day of the week

    // $date = "Saturday"; // Reassigning the date variable according to the case.

    switch($date){
        case "Sunday":
            echo "It is Sunday. First day of the week";
            break ;
        
        case "Monday":
            echo "It is Monday. Work day";
            break;

        case "Tuesday":
            echo "It is Tuesday. Ganeshaya Namo.";
            break;

        case "Wednesday":
            echo "It is Wednesday. More works to be done.";
            break;

        case "Thursday":
            echo "It is Thursday. Weekend is almost there.";
            break;

        case "Friday":
            echo "It is Friday. Gooddd Frriiiiyyyyaaaayyyyyyyy";
            break;

        case "Saturday":
            echo "It is Saturday. Relax Day !!!";
            break;

        default:
            echo "{$date} is invalid day of the week";
    }
?>