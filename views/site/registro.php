<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Formulário';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact"> 

<?php $form = ActiveForm::begin(); ?>

<div class="row">
    <div class="col-md-6">
<<<<<<< HEAD
        <?= $form->field($model, 'nome')->label('Nome do Cliente') ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'documento')->label('RG/RNE') ?>
=======
        <?= $form->field($model, 'nome') ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'documento') ?>
>>>>>>> ea0a5eb53584b057831b8512d274e079cd95057e
    </div>
</div>
<div class="row">
    <div class="col-md-6">
<<<<<<< HEAD
        <?= $form->field($model, 'telefone')->label('Celular')?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'email')->label('E-mail') ?>
=======
        <?= $form->field($model, 'telefone') ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'email') ?>
>>>>>>> ea0a5eb53584b057831b8512d274e079cd95057e
    </div>
</div>
<div class="form-group">
<?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>

</div>