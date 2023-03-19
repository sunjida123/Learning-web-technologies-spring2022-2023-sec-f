<?php
session_start();
if(isset($_REQUEST['submit'])){
    header('location: canceled.php');

}else{
    header('location: orders.php'); 
}
?>