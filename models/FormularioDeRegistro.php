<?php
namespace app\models;

use Yii;
use yii\base\Model;


class FormularioDeRegistro extends Model
{

    public $nome;
    public $documento;
    public $telefone;
    public $email;

    public function rules()
    {

        return [
            [['nome','documento','telefone','email'], 'required'],
            [['email'],'email'],

        ];
        
    }


}