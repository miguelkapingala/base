<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contato */

$this->title ="Mensagem de $model->nome";
//$this->params['breadcrumbs'][] = ['label' => 'Contatos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contato-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nome',
            'telefone',
            'email:email',
            'data_contato',
            'titulo',
            'mensagem:ntext',
           
        ],
    ]) ?>

</div>
