<?php 


function conn_mysql()
{
    $servername = "localhost"; 
    $username = "root"; 
    $password = "123456"; 

    $work_db = "forum";
        
    // global $server_name,$username,$password,$work_db;
    $conn = mysqli_connect($servername, $username, $password); 


    if (!$conn) 
    { 
        die("Connection failed: " . mysqli_error()); 
    } 
    else
    {
        // echo("connectted to mysql\n");
    }

    // $sql = "CREATE DATABASE TUTORIALS";
            
    // if (mysqli_query($conn, $sql))
    // {
    //    echo "Database created successfully";
    // } else
    // {
    //    echo "Error creating database: " . mysqli_error($conn)."<br>";
    // }
    
    // if(!mysqli_query($conn,"SHOW DATABASES LIKE {$work_db}"))
    // {
    //     echo "create database {$work_db}: \n";
    //     mysqli_query($conn, "CREATE DATABASE {$work_db}");
    //     mysqli_select_db($conn,$work_db);
    // }
    // else
    // {
    //     mysqli_select_db($conn,$work_db);
    // }
    mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS {$work_db}");
    mysqli_select_db($conn,$work_db);

    return $conn;
}






?>