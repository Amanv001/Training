<?php

  namespace app\models;

  use Yii;



  class Admission extends \yii\db\ActiveRecord{

    // public $sno;
    // public  $name;
    // public  $email;
    // public  $phone;
    // public $place;

    // public static function tableName(){
    //   return 'student_info';
    // }

  public function rules(){
    return[
      [['name','email','phone','place'],'required'],
      [['phone'],'integer'],
      [['name','email','place'],'string','max' => 255],
    ];
  }

    public function attributeLabels(){
      return[
        'id' => 'ID',
        'name' => 'Name',
        'email' => 'Email',
        'phone' => 'Phone',
        'place' => 'Place',
      ];
    }


  }
 ?>
