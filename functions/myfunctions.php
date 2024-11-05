<?php 

// function getAll($table)
// {
//     global $con;
//     $query = "SELECT * FROM $table";
//     $query_run  = mysqli_query($con, $query);
//     return $query_run;
// }


// function redirect($url, $message){

//     $_SESSION['message'] = $message;
//     header('Location: '.$url);
//     exit();

// }
// chat gpt code

include_once('../config/dbcon.php');

if (!function_exists('getAll')) {
    function getAll($table)
    {
        global $con;
        $query = "SELECT * FROM $table";
        $query_run  = mysqli_query($con, $query);
        return $query_run;
    }
}

if (!function_exists('getByID')) {
    function getByID($table, $id)
    {
        global $con;
        $query = "SELECT * FROM $table WHERE id='$id' ";
        $query_run  = mysqli_query($con, $query);
        return $query_run;
    }
}

if (!function_exists('redirect')) {
    function redirect($url, $message){
        $_SESSION['message'] = $message;
        header('Location: '.$url);
        exit();
    }
}

?>
