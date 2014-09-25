<?php
$this->breadcrumbs = array(
    'รายชื่อ' => array('index'),
    'จัดการ'
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
<br>
<a href='index.php?r=Patient/Create' class='btn btn-primary'>เพิ่มผู้ป่วย</a>

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'patient-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'cid',
        'prename',
        'name',
        
         array(
                    'name' => 'name',
                    'value' => 'CHtml::link($data->name, Yii::app()->createUrl("Patient/Update",array("id"=>$data->cid)))',
                    'type' => 'raw',
                    'htmlOptions' => array('style' => 'width:160px'),
                ),
        
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
