<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property string $cid
 * @property string $prename
 * @property string $name
 * @property string $lname
 * @property string $sex
 * @property integer $age
 * @property string $disease
 * @property string $datereg
 */
class Patient extends CActiveRecord {
    
     

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'patient';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('cid, prename, name, lname, sex, age, disease, datereg', 'required'),
            array('age', 'numerical', 'integerOnly' => true),
            array('cid', 'length', 'max' => 13),
            array('prename, name, lname, sex, disease', 'length', 'max' => 255),
            array('datereg', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('cid, prename, name, lname, sex, age, disease, datereg', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.

        return array(
           
            'todisease' => array(self::BELONGS_TO, 'Disease', 'disease'),
           
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'cid' => 'เลข 13 หลัก',
            'prename' => 'คำนำหน้าชื่อ',
            'name' => 'ชื่อ',
            'lname' => 'นามสกุล',
            'sex' => 'เพศ',
            'age' => 'อายุ(ปี)',
            'disease' => 'โรคเรื้อรัง',
            'datereg' => 'วันลงทะเบียน',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('cid', $this->cid, true);
        $criteria->compare('prename', $this->prename, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('lname', $this->lname, true);
        $criteria->compare('sex', $this->sex, true);
        $criteria->compare('age', $this->age);
        $criteria->compare('disease', $this->disease, true);
        $criteria->compare('datereg', $this->datereg, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Patient the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
