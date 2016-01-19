<?php
/**
 * Created by PhpStorm.
 * User: StephenManz
 * Date: 1/19/2016
 * Time: 3:34 PM
 */

if (isset($_POST['Submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    if(!$name){
        echo "<p> Please go back and submit your name </p>p>";
    }
}
echo $name;

?>