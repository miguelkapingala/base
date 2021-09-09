<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Dados Cadastrados';
$this->params['breadcrumbs'][] = $this->title;
?>
<p>Voce enviou as seguintes informações:</p>
<div class="row">
    <div class="col-md-3">
        <label>Nome : </label>
        <?= Html::encode($model->nome) ?>
    </div>
    <div class="col-md-3">
        <label>Documento : </label>
        <?= Html::encode($model->documento) ?>
    </div>
    <div class="col-md-3">
        <label>Teledone : </label>
         <?= Html::encode($model->telefone) ?>
    </div>
    <div class="col-md-3">
        <label>E-mail : </label>
        <?= Html::encode($model->email) ?>
    </div>
</ul>