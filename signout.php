<?php
/*
 * 退出当前账号
 */
session_start();
if(isset( $_SESSION['name']))
{
    session_destroy();
    Header("Location:index.php");
}
else
{
    Header("Location:index.php");
}
?>