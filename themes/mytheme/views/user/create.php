<?php
$this->breadcrumbs=array(
	'รายชื่อ'=>array('admin'),
	'เพิ่มผู้ใช้งาน',
);
?>


<h1>เพิ่มผู้ใช้งาน</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>