<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\FormularioDeRegistro;


class FormularioDeRegistro extends Controller
{

        public function actionRegistro()
        {
            $model = new FormularioDeRegistro();
        
            if ($model->load(Yii::$app->request->post()) && $model->validate())
                {

                return $this->render('formulario', ['model' => $model]);
                } else {

                return $this->render('registro', ['model' => $model]);
                }
            }

}