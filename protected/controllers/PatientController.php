<?php

class PatientController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'deletecase','sql','pdf','sql2'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Patient;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Patient'])) {
            $model->attributes = $_POST['Patient'];
            if ($model->save())
                $this->redirect(array('admin', 'id' => $model->cid));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($cid) {
        $model = $this->loadModel($cid);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Patient'])) {
            $model->attributes = $_POST['Patient'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->cid));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
// we only allow deletion via POST request
            $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionDeleteCase($cid = null) {
        $this->loadModel($cid)->delete();
        $this->redirect(array('Patient/Admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Patient');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Patient('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Patient']))
            $model->attributes = $_GET['Patient'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Patient::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'patient-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionSql() {

        $sql = "SELECT disease,count(cid) as total from patient 
GROUP BY disease";
        
        $rawdata = Yii::app()->db->createCommand($sql)->queryAll();
        
       $this->render('v_sql',array(
           'model'=>$rawdata
        ));
    }
    
        public function actionSql2() {

        $sql = "SELECT disease,count(cid) as total from patient 
GROUP BY disease";
        
        $rawdata = Yii::app()->db->createCommand($sql)->queryAll();
        $model = new CArrayDataProvider($rawdata,array(
            'totalItemCount' => count($rawdata),
            'keyField'=>'disease',
            'sort' => array(
                'attributes' => array_keys($rawdata[0])
            )
        ));
        
       $this->render('v_sql2',array(
           'model'=>$model
        ));
    }
    
    
    
    
    
    public function actionPdf(){
        

      
        // ส่วนแสดง PDF

        $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        spl_autoload_register(array('YiiBase', 'autoload'));
        //เพิ่ม  font
        //$fontname = $pdf->addTTFfont('pdffont/FONTNONGNAM.TTF', 'TrueTypeUnicode', '', 32);
        // set document information

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle("UTHN PHNU");
        $pdf->SetHeaderData('', 0, "ชื่อรายงาน", "เวลาพิมพ์ " . date('Y-m-d H:i:s') . "");
        $pdf->setHeaderFont(Array('freeserif', '', '14'));
        $pdf->setFooterFont(Array('freeserif', '', '10'));
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetFont('freeserif', '', 12);
        //เรียกใช้ font ที่เพิ่ม
        //$pdf->SetFont($fontname, '', 14, '', false);
        $pdf->SetTextColor(80, 80, 80);
        $pdf->AddPage();

               $sql = "SELECT disease,count(cid) as total from patient 
GROUP BY disease";
        
        $rawdata = Yii::app()->db->createCommand($sql)->queryAll();
        
        
        $tbl = '<table cellspacing="0" cellpadding="4" border="1">';
        $tbl.= "<tr><th>ลำดับ</th><th>รหัสโรค</th><th>จำนวน (คน)</th></tr>";
        $i=0;
        foreach($rawdata as $data){
            $disease = $data['disease'];
            $total = $data['total'];
            $i++;
            $tbl.= "<tr><td>$i</td><td>$disease</td><td>$total</td></tr>";
        }
        $tbl.='</table>';

        $pdf->writeHTML($tbl, true, false, true, false, '');

        // reset pointer to the last page
        $pdf->lastPage();

        //Close and output PDF document

        $pdf->Output('filename.pdf', 'I'); // I= Preview , D=Download

        Yii::app()->end();

        
    }

}
