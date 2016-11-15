<html>
<head>
</head>
<body>
	<!--<h1>祝哥與海濤法師撿鑽石</h1>-->
 <!--   <?php echo anchor('index.php/blog/led1_on','LED1_ON','class="a1"');?></br>-->
 <!--   <?php echo anchor('index.php/blog/led1_off','LED1_OFF','class="a2"');?></br>-->
 <!--   <input type="button" value="LED2_ON"-->
	<!--onclick="javascript:location.href='https://lab08-stappwork.c9users.io/CodeIgniter-3.1.0_practice/index.php/blog/led2_on'"/></br>-->
	<!--<input type="button" value="LED2_OFF"-->
	<!--onclick="javascript:location.href='https://lab08-stappwork.c9users.io/CodeIgniter-3.1.0_practice/index.php/blog/led2_off'"/></br>-->
 <!--   <input type="button" value="Google"-->
	<!--onclick="javascript:location.href='https://www.google.com.tw'"/>-->
	

	<form action="" name="sort1" method="post">
	您選擇的是:
	<Select name="sort">
	<?php foreach($columns as $column):?>
 	<?php foreach($column as $col):?>
 	<Option Value="<?php echo $col ?>"><?php echo $col ?></Option>
 	<?php endforeach; ?>
 	<?php endforeach; ?>
	</Select>
	<Select name="command">
 	<Option Value="1">Motor1_Start</Option>
 	<Option Value="2">Motor2_Start</Option>
 	<Option Value="op">All_Motor_Stop</Option>
	</Select>
	<input type="submit" value="OK" /> 
	</form>
	<input type="button" value="看測試結果"
	onclick="javascript:location.href='https://lab08-stappwork.c9users.io/codeigniter-master/index.php/GetInformation/selectedTableInfo/Machine_Dynamic_Info'"/></br>
	
	<script>
	    //setTimeout("self.location.reload();",10000);
	</script>
</body>
</html>
