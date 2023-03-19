<?php
session_start();
if(isset($_REQUEST['submit'])){
    header('location: orders.php');

}else{
    header('location: payment.php'); 
}
?>