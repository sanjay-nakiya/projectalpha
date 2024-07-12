<?php
include 'error.php';
error_reporting(0);
class category
{
    private $conn = '';
    private $db;
    function __construct()
    {
        include 'database/db.php';
        //$conn= new mysqli('localhost','root','','saustudy');
        $this->db = $conn;

    }
    function insert($course)
    {
        $sql = "INSERT INTO `category`(`course`) VALUES ('$course')";
        $res = mysqli_query($this->db, $sql);
        return $res;
    }
    function update($id, $course)
    {
        $sql = "UPDATE `category` SET `course`='$course' WHERE `course_id`='$id'";
        $res = mysqli_query($this->db, $sql);
        return $res;
    }
    function delete($id)
    {
        $sql = "DELETE FROM `category` WHERE `course_id`='$id'";
        $res = mysqli_query($this->db, $sql);
        return $res;
    }
    function view()
    {
        $sql = "SELECT * FROM `category`";
        $res = mysqli_query($this->db, $sql);
        return $res;
    }
}
$obj = new category();
if (isset($_POST['submit'])) {
    $course = $_POST['course'];

    $res = $obj->insert($course);
    if ($res) {
        header("location:category.php");
    } else {
        echo "alert('data not inserted successfully')";
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $course = $_POST['course'];

    $res = $obj->update($id, $course);
    if ($res) {
        header("location:category.php");
    } else {
        echo "alert('data not updated successfully')";
    }
} elseif (isset($_POST['delete'])) {
    $id = $_POST['id'];
    // $id=$_POST['course_id'];
    $res = $obj->delete($id);
    if ($res) {
        header("location:category.php");
    } else {
        echo "not deleted";
    }
}

//$obj1=new category();
?>