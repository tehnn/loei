<h1> วิว แรกของฉัน </h1>
ตัวแปรที่ถูกส่งมา<br>
<?php
echo $data;
?>
<br>
<?php
echo $name;
echo $name;
echo $a;
?>
<hr>
<a href="index.php?r=App/Test1&b=123456">ลิงค์ 1</a>
<br>
<a href="<?php echo $this->createUrl('App/Test1',array('b'=>'6789'));  ?>">ลิงค์ 2</a>
<br>
<?php
echo CHtml::link('ลิงค์ 3',array('App/Test1','b'=>'00000'));
?>