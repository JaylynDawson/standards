<?php
// index.php

$students = array(
        array("FirstName"=>"George","LastName"=>"Smith","Age"=>"30","School"=>"ASU"),
        array("FirstName"=>"Jamie","LastName"=>"John","Age"=>"30","School"=>"UA"),
        array("FirstName"=>"Susy","LastName"=>"Noel","Age"=>"27","School"=>"BYU"),
        array("FirstName"=>"Mike","LastName"=>"Jackson","Age"=>"45","School"=>"NAU"));

?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of Students</title>
    </head>
    <body>
        <h1>List of Students</h1>
        <ul>
            <?php foreach ($students as $idx => $student) { ?>

            <li>
                <a href="/show.php?id=<?php echo $idx ?>">
                    <?php echo $student['FirstName'] ?>
                </a>
            </li>
            <?} ?>
        </ul>
    </body>
</html>
