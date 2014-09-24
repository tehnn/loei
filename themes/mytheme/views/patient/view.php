<?php
$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'List Patient','url'=>array('index')),
array('label'=>'Create Patient','url'=>array('create')),
array('label'=>'Update Patient','url'=>array('update','id'=>$model->cid)),
array('label'=>'Delete Patient','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->cid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Patient','url'=>array('admin')),
);
?>

<h1>View Patient #<?php echo $model->cid; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'cid',
		'prename',
		'name',
		'lname',
		'sex',
		'age',
		'disease',
		'datereg',
),
)); ?>
