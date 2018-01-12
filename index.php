<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 1</title>
    </head>
    <body>
        <?php
        include('Student.php');
        
        // Creates a student array
        $students = array();
        
        // Creates the first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // Creates the second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        // Creates a third student
        $third = new Student();
        $third->surname = "Balitaan";
        $third->first_name = "Vinz";
        $third->add_email('home','vb123@mail.com');
        $third->add_email('work1','v_balitaan@bcit.ca');
        $third->add_email('work2','vinny@email.net');
        $third->add_grade(70);
        $third->add_grade(84);
        $third->add_grade(65);
        $students['a123'] = $third;
        
        // Sorts the student array by key
        ksort($students);
        
        // Loops through student array and prints them
        foreach ($students as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>
