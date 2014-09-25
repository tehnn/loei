<?php
$this->breadcrumbs = array(
    'Patients' => array('admin'),
    $model->name => array('view', 'id' => $model->cid),
    
);

$this->menu = array(
    array('label' => 'List Patient', 'url' => array('index')),
    array('label' => 'Create Patient', 'url' => array('create')),
    array('label' => 'Manage Patient', 'url' => array('admin')),
);
?>
<div>
    <a href='' class='btn btn-warning'>ปุ่มที่ 1</a>
    <a href='' class='btn btn-warning'>ปุ่มที่ 1</a>
    <a href='' class='btn btn-warning'>ปุ่มที่ 1</a>
    <a href='' class='btn btn-warning'>ปุ่มที่ 1</a>

</div>
<br>
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>