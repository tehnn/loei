<!DOCTYPE html>
<htm>    
    <head>
        <meta charset="UTF-8">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mycss.css" rel="stylesheet" /> 

        <title>
            <?php
            echo Yii::app()->name;
            ?>
        </title>        
    </head>

    <body>

        <nav class="nav navbar-custom" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <i class='glyphicon glyphicon-home'></i>
                        <?php
                        echo Yii::app()->name;
                        ?>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ระบบงาน <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                
                                <li><a href="<?=$this->createUrl('Patient/Admin');?>">ระบบงาน NCD</a></li>
                                <li class="divider"></li>
                                <li><a href="#">ช่วยเหลือ</a></li>
                                <li class="divider"></li>
                                
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <?php if(Yii::app()->user->getState('role')=='admin'): ?>
                        <li><a href="<?=Yii::app()->createUrl('User/Admin');?>">เมนูสำหรับ Admin เท่านั้น</a></li>
                       <?php endif; ?> 

                        <?php if(Yii::app()->user->isGuest): ?>
                        <li>
                            <a href="<?php echo $this->createUrl('Site/Login'); ?>">
                                <i class='glyphicon glyphicon-user'></i>
                                เข้าระบบ
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php if(!Yii::app()->user->isGuest): ?>
                          <li>
                            <a href="<?php echo $this->createUrl('Site/Logout'); ?>">
                                <i class='glyphicon glyphicon-eject'></i>
                                <?php echo Yii::app()->user->getState('fullname');  ?>
                                ออกระบบ
                            </a>
                        </li>
                        <?php endif; ?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

         <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('booster.widgets.TbBreadcrumbs', array(
                'links' => $this->breadcrumbs,
            ));
            ?><!-- breadcrumbs -->
        <?php endif; ?>   
        
            <div style="padding-left: 20px;padding-right: 20px"><?php echo $content; ?></div>
            <div class="well" style="text-align: center">
                โรงพยาบาลของฉัน
                <br>
                โทร 1669
            </div>
    </body>

</htm>