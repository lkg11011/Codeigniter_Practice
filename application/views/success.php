<html>
<head>
</head>
    <body>
        <?php 
        if(isset($_SESSION['level']))
        {
            echo "Success!"."------------".$_SESSION['level'];
        }
        else
        {
            //echo "SESSION不存在";
            redirect('index.php/blog/login','refresh');
        }
        ?>
        <input type="button" name="登出" value="Logout" onclick="javascript:location.href='https://lab08-stappwork.c9users.io/CodeIgniter-3.1.0_practice/index.php/blog/logout'"/></br>
    </body>
</html>

<?php redirect('https://lab08-stappwork.c9users.io/codeigniter-master/'); ?>