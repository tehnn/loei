<?php
$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title"><i class='glyphicon glyphicon-log-in'></i> เข้าสู่ระบบ</h3>
    </div>
    <div class="panel-body">
        <?php
        /** @var TbActiveForm $form */
        $form = $this->beginWidget(
                'ext.booster.widgets.TbActiveForm', array(
            'id' => 'verticalForm',
            'htmlOptions' => array('class' => 'well'), // for inset effect
                )
        );

        echo $form->textFieldGroup($model, 'username');
        echo $form->passwordFieldGroup($model, 'password');
        echo $form->checkboxGroup($model, 'rememberMe');
        $this->widget(
                'ext.booster.widgets.TbButton', array('buttonType' => 'submit', 'label' => 'Login')
        );

        $this->endWidget();
        unset($form);
        ?>
    </div>
</div>
