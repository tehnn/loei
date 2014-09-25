<form method="POST">



    <?php echo CHtml::errorSummary($model); ?>

    <div class="form-inline well">

        <span style="display:inline-block">
            <?php echo CHtml::activeLabel($model, 'cid', array('style' => 'display:block')); ?>
            <?php echo CHtml::activeTextField($model, 'cid'); ?>
        </span>

        <span style="display:inline-block">
            <?php echo CHtml::activeLabel($model, 'prename', array('style' => 'display:block')); ?>
            <?php
            $list = CHtml::listData(Prename::model()->findAll(), 'code', 'prename');
            echo CHtml::activeDropDownList($model, 'prename', $list, array('empty' => '--  คำนำหน้า  --'));
            ?>
        </span> 

        <span style="display:inline-block">
            <?php echo CHtml::activeLabel($model, 'name', array('style' => 'display:block')); ?>
            <?php echo CHtml::activeTextField($model, 'name'); ?>
        </span>
        <span style="display:inline-block">
            <?php echo CHtml::activeLabel($model, 'lname', array('style' => 'display:block')); ?>
            <?php echo CHtml::activeTextField($model, 'lname'); ?>
        </span>

          <br>
        
        <span style="display:inline-block">
            <?php echo CHtml::activeLabel($model, 'sex', array('style' => 'display:block')); ?>
            <?php
            $list = array(1 => '1-ชาย', 2 => '2-หญิง');
            echo CHtml::activeDropDownList($model, 'sex', $list, array('empty' => '--  เพศ  --'));
            ?>
        </span>
        
         <span style="display:inline-block">
            <?php echo CHtml::activeLabel($model, 'age', array('style' => 'display:block')); ?>
            <?php echo CHtml::activeTextField($model, 'age'); ?>
        </span>
        
      
        <span style="display:inline-block">
            <?php echo CHtml::activeLabel($model, 'disease', array('style' => 'display:block')); ?>
            <?php
            $list = CHtml::listData(Disease::model()->findAll(), 'code', 'disease');
            echo CHtml::activeDropDownList($model, 'disease', $list, array('empty' => '--  โรค  --'));
            ?>
        </span> 



        <span style="display:inline-block">
            <?php echo CHtml::activeLabel($model, 'datereg', array('style' => 'display:block')); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'datereg',
                'value' => $model->datereg,
                'options' => array(
                    'dateFormat' => 'yy-mm-dd',
                    'changeMonth' => true,
                    'changeYear' => true,                    
                    'defaultDate' => $model->datereg,
                    'showButtonPanel' => true,
                    'autoSize' => true,
                ),
                'htmlOptions' => array(
                    'style' => 'height:20px;width:150px',
                ),
            ));
            ?>

        </span> 

    </div>

    <div class="form-actions">
        <button type='submit' class='btn btn-success'>
            <i class='glyphicon glyphicon-book'></i>
            บันทึก
        </button>
    </div>


</form>