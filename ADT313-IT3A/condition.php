<h1>Condition</h1>
<?php
$age= 17;
    if($age>=18){
        echo "Legal age";
    }
    elseif($age>=0 && $age<=10){
        echo "Something";
    }
    else{
        echo "Minor";
    }

    $agelabel =($age>=18) ? '18+':'17-';
    echo $agelabel;

$role='';
    if($role=="admin"){
        //logic
    }
    $role="instructor";
    switch($role){
        case'admin';
        #code
        echo " you have full access";
        break;

        case'student';
        #code
        echo " you can only access.....";
        break;

        case'instructor';
        #code
        echo " onti lang";
        break;
    }
?>