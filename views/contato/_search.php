<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'telefone') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'titulo') ?>

    <?php // echo $form->field($model, 'mensagem') ?>

    <?php // echo $form->field($model, 'data_contato') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
