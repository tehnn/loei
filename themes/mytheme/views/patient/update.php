<?php
$this->breadcrumbs=array(
	'Patients'=>array('admin'),
	$model->name=>array('view','id'=>$model->cid),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Patient','url'=>array('index')),
	array('label'=>'Create Patient','url'=>array('create')),
	array('label'=>'View Patient','url'=>array('view','id'=>$model->cid)),
	array('label'=>'Manage Patient','url'=>array('admin')),
	);
	?>

	<h1>Update Patient <?php echo $model->cid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>