<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

//$this->title = 'Formulário';
//$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Formulários</h1>

<div class="site-contact"> 

<?php $form = ActiveForm::begin(); ?>

<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'nome')->label('Nome do Cliente') ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'documento')->label('RG/RNE') ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'telefone')->label('Celular')?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'email')->label('E-mail') ?>
    </div>
</div>
<div class="form-group">
<?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>

</div>