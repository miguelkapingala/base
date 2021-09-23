<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>
  
    <?= $form->field($model, 'usuario')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'data_de_cadastro')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'data_de_admissao')->textInput(['maxlength' => true]) ?>
   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
