<?php
$this->breadcrumbs=array(
	'รายชื่อผู้ป่วย'=>array('index'),
	'เพิ่ม',
);

?>



<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>