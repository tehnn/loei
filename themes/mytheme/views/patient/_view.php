<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cid),array('view','id'=>$data->cid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prename')); ?>:</b>
	<?php echo CHtml::encode($data->prename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disease')); ?>:</b>
	<?php echo CHtml::encode($data->disease); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('datereg')); ?>:</b>
	<?php echo CHtml::encode($data->datereg); ?>
	<br />

	*/ ?>

</div>