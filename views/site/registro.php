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
        <?= $form->field($model, 'nome') ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'documento') ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'telefone') ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'email') ?>
    </div>
</div>
<div class="form-group">
<?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>

</div>