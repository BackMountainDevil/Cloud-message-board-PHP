<?php
session_start();

require_once ('database.php');
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $password = md5($_POST['password']);

    try
    {
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset", $dbuser, $dbpass);
        //$sql = "INSERT INTO kblog.user(NAME,PASSWORD) VALUES ('?','?');";
        $sql = "SELECT * FROM kblog.user WHERE name='$name' AND password='$password';";
        $query = $conn->query($sql);
        if($query->rowCount()<1)	//如果数据库中找不到对应数据
        {
            echo "failed";
            echo $name;
            echo  $password;
        }
		else
        {
            //echo "success";
            #在session存储用户信息
            foreach ($query as $row)
            {
                if($row['id'])
                {
                    $_SESSION['user_id'] = $row['id'];
                }

            }
            $_SESSION['name'] = $name;
//            echo  $_SESSION['user_id'].'<br>';
//            echo $_SESSION['name'];
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
    //echo "empty!!";
}
?>


<form action="<?php print $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <div class="inputBox">
        <input type="text" name="name" value="" required="required" placeholder=
        "           请输入您的" ><label>账号</label></div>
    <div class="inputBox">
        <input type="password" name="password" value=""	required="required" placeholder=
        "           请输入您的密码"><label>密码</label></div>

    <input type="submit" name="sign" value="登录">
</form>
