<?php
$this->breadcrumbs=array(
	'รายชื่อ'=>array('admin'),
	$model->username=>array('view','id'=>$model->username),
	'Update',
);

?>

	<h1>แก้ไข <?php echo $model->username; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>