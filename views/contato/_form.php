<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contato-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
             <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'data_contato')->textInput(['rows' => 6]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
         <div class="col-md-8">
             <?= $form->field($model, 'mensagem')->textarea() ?>
         </div>
    </div>
    <hr>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
