<?php
include('config.php');


if(isset($_POST['submit']))

{
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    
    $query = $conn->prepare("INSERT INTO notice (title,description,date) VALUES(?,?,?) ");
    $query->bind_param("sss",$title,$desc,$date);
    $query->execute();

    echo"
    <script>
    window.alert('Notice Added')
    window.location.href='http://localhost/Project%201%20-%20College%20Notice%20Board/'</script>";
}
?>