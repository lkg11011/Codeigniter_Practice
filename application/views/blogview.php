<html>
<head>
        <title><?php echo $title;?></title>
        <meta charset="utf-8" />
</head>
<body>
        <h1><?php echo $heading;?></h1>
        <h3>My Todo List哈</h3>
        <ul>
        	<?php foreach ($todo_list as $item):?>
        	<li><?php echo $item;?></li>
        	<?php endforeach;?>
        </ul>
        <?php echo anchor('blog/comments','Click here');?>
</body>
</html>