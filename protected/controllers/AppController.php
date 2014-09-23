<?php

class AppController extends Controller {

    public function actionTest1($b=null) {
        $date = date('Y-m-d H:i:s');
        $myname ='อุเทน';
        $arr = array(
            'data'=>$date,
            'name'=>$myname,
            'lname'=>'จาดยางโทน',
            'a'=>$b
        );
        $this->render('test1',$arr);
    }

    public function actionTest2() {
        echo 'อุเทน จาดยางโทน';
    }
    
    public function actionSetname($name=null){
        echo $name;
        
    }

}