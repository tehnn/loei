<?php
$this->breadcrumbs = array(
    'Patients' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Patient', 'url' => array('index')),
    array('label' => 'Create Patient', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('patient-grid', {
data: $(this).serialize()
});
return false;
});
");
?>


<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'patient-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'cid',
        'prename',
        'name',
        'lname',
        'sex',
        'age',
        'disease',        
         array(
                    'name' => 'disease',
                    'type' => 'raw',
                    'value' => 'CHtml::encode($data->todisease->disease)',
            ),
        'datereg',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
