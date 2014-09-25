<?php
$dir = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($dir.'/js/excellentexport.js');
?>

<h1>ข้อมูลจาก SQL</h1>
<div>
    <a download="data.xls" href="#" onclick="return ExcellentExport.excel(this, 'datatable', 'Sheet1');" href='#' class='btn btn-danger'>Excel</a>
    <a download="data.csv" href="#" onclick="return ExcellentExport.csv(this, 'datatable','|');" href='#' class='btn btn-info'>CSV</a>
    <a href='#' class='btn btn-default'>PDF</a>   
    
</div>
<br>
<table id='datatable' class='table table-hover table-striped table-bordered'>
    <thead>
        <tr>
            <td>#</td>
            <td>รหัสโรค</td>
            <td>จำนวน (คน)</td>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; ?>
        <?php foreach ($model as $data):  ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$data['disease']?></td>
            <td><?=$data['total']?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    
</table>
<br>
