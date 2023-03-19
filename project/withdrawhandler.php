<?php
session_start();
if(isset($_REQUEST['submit'])){
    header('location: withdrawcomplete.php');

}else{
    header('location: withdrawmoney.php'); 
}
?>