<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contato".
 *
 * @property int $id
 * @property string $nome
 * @property string|null $telefone
 * @property string $email
 * @property string $titulo
 * @property string $mensagem
 * @property string $data_contato
 */
class Contato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'titulo', 'mensagem', 'data_contato'], 'required'],
            [['mensagem'], 'string'],
            [['data_contato'], 'safe'],
            [['nome', 'telefone', 'email', 'titulo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'titulo' => 'Titulo',
            'mensagem' => 'Mensagem',
            'data_contato' => 'Data de Contato',
        ];
    }
}

