<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

?>

<div class="site-index">
  <h1>ADD STUDENT</h1>
  <div class="body-content">
    <?php $form = ActiveForm::begin() ?>
    <div class="row">
      <div class="form-group">
        <div class="col-lg-6">
          <?= $form->field($admission,'name'); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <div class="col-lg-6">
          <?= $form->field($admission,'email'); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <div class="col-lg-6">
          <?= $form->field($admission,'phone'); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <div class="col-lg-6">
          <?= $form->field($admission,'place'); ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <div class="col-lg-2">
          <?= Html::submitButton('ADD STUDENT',['class'=>'btn-btn-primary']); ?>
        </div>
      </div>
    </div>

    <?php ActiveForm::end() ?>
  </div>
</div>
