<?php
$this->breadcrumbs = array(
    'ผู้ใช้' => array('index'),
    'จัดการ',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('user-grid', {
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
<a class="btn btn-danger" href="<?=$this->createUrl('User/Create');?>">
    <i class="glyphicon glyphicon-plus-sign"></i> 
    เพิ่มผู้ใช้งาน
</a>

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'user-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'username',
        array(
            'name'=>'password',
            'visible'=>Yii::app()->user->getState('role')=='admin'
        ),
        'fullname',
        'officeid',
        'role',
        'lastlogin',
        'countlogin',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
