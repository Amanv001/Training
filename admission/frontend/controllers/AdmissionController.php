<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
use app\models\Admission;

class AdmissionController extends \yii\web\Controller
{
  public function actionIndex(){
    $query = Admission::find()->addOrderBy('id');
    $searchModel = new Admission();
    // Create Query
      $dataProvider = new ActiveDataProvider([
        'pagination' => ['pageSize'=>5],
        'query' => $query,
      ]);

      return $this->render('index',[
        'dataProvider' => $dataProvider,
        'searchModel' => $searchModel,
      ]);
  }

  public function actionCreate(){
    $admission = new Admission();
    if ($admission->load(Yii::$app->request->post())) {
       if ($admission->validate()) {
              $admission->save();
           //show message
           // yii::$app->getSession()->setFlash('success','task added successfully');
           return $this->redirect('index.php?r=admission');
       }
     }
   return $this->render('create', ['admission' => $admission]);

  }

  public function actionUpdate($id){
    $admission = Admission::findOne($id);
    if($admission->load(Yii::$app->request->post()) && $admission->save()) {
      return $this->redirect(['index', 'id' => $admission->id]);
    }
    return $this->render('update',['admission'=>$admission]);
  }

  public function actionDelete($id){
    $admission = Admission::findOne($id)->delete();
    if($admission) {
      return $this->redirect(['index']);
    }
  }
}
