<?php
session_start();
require 'connection2.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient booking Deleted Successfully";
        header("Location: adminindex.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Deleted";
        header("Location: adminindex.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $appdate = mysqli_real_escape_string($con, $_POST['appdate']);
    $apptime = mysqli_real_escape_string($con, $_POST['apptime']);
    $doctor = mysqli_real_escape_string($con, $_POST['doctor']);

    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', appdate='$appdate', apptime='$apptime', doctor='$doctor' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "patient Updated Successfully";
        header("Location: adminindex.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Updated";
        header("Location: adminindex.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $appdate = mysqli_real_escape_string($con, $_POST['appdate']);
    $apptime = mysqli_real_escape_string($con, $_POST['apptime']);
    $doctor = mysqli_real_escape_string($con, $_POST['doctor']);


    $query = "INSERT INTO students (name,email,phone,appdate,apptime,doctor) VALUES ('$name','$email','$phone','$appdate','$apptime','$doctor')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Patient Booking Created Successfully";
        header("Location: admincreate.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: admincreate.php");
        exit(0);
    }
}

?>