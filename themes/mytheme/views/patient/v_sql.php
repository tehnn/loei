<?php
$dir = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($dir . '/js/excellentexport.js');
$cs->registerScriptFile($dir . '/js/highcharts.js');
?>

<h1>ข้อมูลจาก SQL</h1>
<div>
    <a download="data.xls" href="#" onclick="return ExcellentExport.excel(this, 'datatable', 'Sheet1');" href='#' class='btn btn-danger'>Excel</a>
    <a download="data.csv" href="#" onclick="return ExcellentExport.csv(this, 'datatable', '|');" href='#' class='btn btn-info'>CSV</a>
    <a href='<?= $this->createUrl('Patient/Pdf') ?>' target="_blank" class='btn btn-default'>PDF</a>   

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
        <?php $i = 1; ?>
        <?php foreach ($model as $data): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $data['disease'] ?></td>
                <td><?= $data['total'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<br>
<div id='chart'>
    
     <?php
        $dis = array();
        $val = array();

        foreach ($model as $d) {
            array_push($dis, $d['disease']);
            array_push($val, intval($d['total']));
        }



        $this->widget(
                'ext.booster.widgets.TbHighCharts', array(
            'options' => array(
                'colors' => array('#0828B3'),
                'credits' => array('enabled' => false),
                'chart' => array(
                    'type' => 'column',
                   
                ),
                'title' => array(
                    'text' => 'แผนภูมิแสดงจำนวนผู้ป่วยด้วยโรค NCD'
                ),
                'yAxis' => array(
                    'title' => array('text' => 'จำนวน (คน)'),
                    'min' => 0
                ),
                'xAxis' => array(
                    'categories' => $dis,
                ),
                'series' => array(
                    array(
                        'name' => 'จำนวน',
                        'data' => $val,
                    )
                ),
            )
                )
        );
        ?>

</div>


    <div class="well">
        <h1>วงกลม</h1>
        <?php
        
        $piedata=array();
        foreach ($model as $data){
            array_push($piedata,array($data['disease'],  intval($data['total'])));
        }

        $this->widget('booster.widgets.TbHighCharts', array(
            'options' => array(
                'title' => array('text' => 'จำนวนผู้ป่วย'),
                'subtitle'=>array('text'=>'kkkkkkkkkkk'),
                'credits' => array('enabled' => false),
                'series' => array(array(
                        'type' => 'pie',
                        'name' => 'จำนวน',
                        'data' => $piedata
                    )),
            )
        ));
        ?>
    </div>



