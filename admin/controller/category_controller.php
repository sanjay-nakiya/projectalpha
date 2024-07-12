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
    function insert($category)
    {
        $sql = "INSERT INTO `category`(`category`) VALUES ('$category')";
        $res = mysqli_query($this->db, $sql);
        return $res;
    }
    function update($id, $category)
    {
        $sql = "UPDATE `category` SET `category`='$category' WHERE `category_id`='$id'";
        $res = mysqli_query($this->db, $sql);
        return $res;
    }
    function delete($id)
    {
        $sql = "DELETE FROM `category` WHERE `category_id`='$id'";
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
    $category = $_POST['category'];

    $res = $obj->insert($category);
    if ($res) {
        header("location:category.php");
    } else {
        echo "alert('data not inserted successfully')";
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $category = $_POST['category'];

    $res = $obj->update($id, $category);
    if ($res) {
        header("location:category.php");
    } else {
        echo "alert('data not updated successfully')";
    }
} elseif (isset($_POST['delete'])) {
    $id = $_POST['id'];
    // $id=$_POST['category_id'];
    $res = $obj->delete($id);
    if ($res) {
        header("location:category.php");
    } else {
        echo "not deleted";
    }
}

//$obj1=new category();
?>