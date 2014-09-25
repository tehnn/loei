<?php
$this->breadcrumbs=array(
	'รายชื่อผู้ป่วย'=>array('admin'),
	'เพิ่ม',
);

?>



<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>