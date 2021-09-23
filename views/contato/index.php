<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContatoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contatos';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contato-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'nome',
            //'telefone',
           // 'email:email',
           // 'titulo',
            'data_contato',
            'mensagem:ntext',
            

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'
            ],
        ],
    ]); ?>


</div>
