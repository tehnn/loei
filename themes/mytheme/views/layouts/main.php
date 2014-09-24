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
                        <li class="active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <?php if(Yii::app()->user->getState('role')=='admin'): ?>
                        <li><a href="#">เมนูสำหรับ Admin เท่านั้น</a></li>
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
        
        <div><?php echo $content; ?></div>
        <div>footer</div>
    </body>

</htm>