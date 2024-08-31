<h1>Hands on Activity</h1>
<?php
$table = array(
    "header"=>array(
        "Student ID",
        "Firstname",
        "Middlename",
        "Lastname",
        "Section",
        "Course",
        "Yearlevel",
    ),
    "body"=>array(
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                ),
                array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                )
    )

)

?>
<table border="1">
    <thead>
        <?php

        for ($x= 0; $x <= count($table["header"]) -1; $x++) {
            echo "<th>".$table["header"][$x]."</th>";
        }

        ?>
    </thead>
    <tbody>
        <?php

            for ($x= 0; $x <=count($table["body"]) -1; $x++) {
                echo"<tr>";
                echo"<td>".$x."</td>";
                echo"<td>".$table["body"][$x]["firstname"]."</td>";
                echo"<td>".$table["body"][$x]["middlename"]."</td>";
                echo"<td>".$table["body"][$x]["lastname"]."</td>";
                echo"<td>".$table["body"][$x]["section"]."</td>";
                echo"<td>".$table["body"][$x]["course"]."</td>";
                echo"<td>".$table["body"][$x]["yearlevel"]."</td>";
                echo"</tr>";
            }

        ?>  
    <tbody>
</table>