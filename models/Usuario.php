<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string|null $usuario
 * @property string|null $password
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario', 'password','matricula','data_de_cadastro','data_de_admissao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
           // 'id' => 'ID',
            'usuario' => 'Usuario',
            'password' => 'Password',
            'matricula'=>'Matrícula',
            'data_de_cadastro'=>'Data de Cadastro',
            'data_de_admissao'=>'Data de Admissao',
        ];
    }
}
