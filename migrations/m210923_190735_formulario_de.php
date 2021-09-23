<?php

use yii\db\Migration;

/**
 * Class m210923_190735_formulario_de
 */
class m210923_190735_formulario_de extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contato', [
            'id'=>$this->primaryKey()->notNull(),
            'nome'=>$this->string()->notNull(),
            'telefone'=>$this->string(),
            'email'=>$this->string()->notNull(),
            'titulo'=>$this->string()->notNull(),
            'mensagem'=>$this->text()->notNull(),
            'data_contato'=>$this->date()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contato');
        //echo "m210923_190735_formulario_de cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210923_190735_formulario_de cannot be reverted.\n";

        return false;
    }
    */
}
