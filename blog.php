<?php
session_start();
if(isset($_POST['content']))
{
    //    echo "<br>id: ".$_SESSION['user_id'].'<br>';
//    echo "<br>name: ".$_SESSION['name'].'<br>';
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];

    try
    {
        require_once ('database.php');
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset", $dbuser, $dbpass);
        //$sql = "INSERT INTO kblog.user(NAME,PASSWORD) VALUES ('?','?');";
        $sql = "INSERT INTO blog(user_id,content) VALUES ('$user_id','$content');";
        $query = $conn->query($sql);
        if($query->rowCount()<1)	//如果数据库中找不到对应数据
        {
            echo "failed";
        }
        else
        {
            //echo "success";
            Header("Location: index.php");
        }
        //echo "query";
    }
    catch(PDOException $e)
    {
        echo '数据库连接失败'.$e->getMessage();
    }
}
else
{
    /*
     * 测试session传参
     */
//    if(isset($_SESSION['user_id']))
//    {
//        echo "<br>id: ".$_SESSION['user_id'].'<br>';
//        echo "<br>name: ".$_SESSION['name'].'<br>';
//    }
//    else
//    {
//        echo $_SESSION['name'];
//        echo "<br>empty!!".'<br';
//    }
}
?>

<form action="<?php print $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <div >
        <label>推文</label><input type="text" name="content" value="" required="required" placeholder="请输入您的推文内容" >
        <input type="submit"  value="Send">
    </div>
</form>