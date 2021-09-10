<?php

use yii\grid\GridView;
use yii\helpers\Html;


//$this->title = 'Países';
//$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Países</h1>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'nome',
        'paisName',
    ],
]) 
?>