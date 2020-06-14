<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<div class=" col-md-2 col-md-offset-1  ">
    <?php
    session_start();
    $name = $_SESSION['name'];

    if($name)
    {
        //echo $student_no.'-stu_no<br>';
        $user_id = $_SESSION['user_id'];
        echo $user_id;
        //$_SESSION['user_id'] = $user_id;
        echo "<a href='self.php' class='nav-item''>$name</a>";
        echo "<br><a href='signout.php' class='nav-item'>退出</a>";
        require_once('blog.php');
    }
    else
    {
        echo "<a href='signin.php' class='nav-item'>登录</a>";
        echo "<br><a href='login.php' class='nav-item'>注册</a>";
    }
    ?>

</div>
<h1>Twitter</h1>
<div class="blog">
    <?php
    require_once ('database.php');
    $tbname = 'activity_info'; 	//表格名
    try
    {
        #建立连接
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset", $dbuser, $dbpass);
        #查询
        $sql = "SELECT * FROM blog ";
        if ( $query = $conn->query($sql))
        {
            foreach ($query as $row)
            {
                //echo $row['id'] . " ---> ";
                echo $row['user_id'] . " ---> ";
                echo $row['content'] . "<br>";
            }
            //require_once ('./view/activitylist.html');
        }
        else
        {
            echo "Query failed\n请联系网站站长";
        }


        $conn = null; // 关闭连接
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    ?>
</div>
