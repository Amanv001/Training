<?php

namespace frontend\controllers;

use app\models\AdmissionRest;
use yii\rest\ActiveController;

class AdmissionController extends ActiveController{
    
    public $modelClass = AdmissionRest::class;
}