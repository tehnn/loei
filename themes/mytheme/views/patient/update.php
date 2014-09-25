<?php
$this->breadcrumbs = array(
    'Patients' => array('admin'),
    $model->name,
);
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-edit"></i> ข้อมูลผู้ป่วย
    </div>
    <div class="panel-body">


        <div>
            <a href='' class='btn btn-success'>ปุ่มที่ 1</a>
            <a href='' class='btn btn-primary'>ปุ่มที่ 1</a>
            <a href='' class='btn btn-warning'>ปุ่มที่ 1</a>
            <a href='#' onclick='del()' class='btn btn-danger'>ลบข้อมูล</a>

        </div>
        <br>
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>


    </div>
</div>

<script>
    function del(){
        if(confirm('Are you sure?')){
            window.location='index.php?r=Patient/DeleteCase&cid=<?=$model->cid?>'
        }
    }
</script>