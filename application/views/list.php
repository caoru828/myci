<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/11 0011
 * Time: 下午 2:19
 */


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo site_url(); ?>">
</head>
<body>

<ul>
    <?php foreach ($list as $user){?>

        <li>
            <?php echo $user->id.",".$user->name?>
            <a href="www.baidu.com">gg</a>
            <a href="user/del_user/<?php echo $user->id; ?>">删除</a>
            <a href="user/update_user/<?php echo $user->id; ?>">修改</a>
        </li>

    <?php }?>
</ul>

</body>
</html>
