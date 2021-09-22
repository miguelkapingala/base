<?php

use yii\db\Migration;

/**
 * Class m210922_151427_tabela_de_usuario
 */
class m210922_151427_tabela_de_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuarios',[
            'id'=>$this->primaryKey()->notNull(),
            'usuario'=>$this->string(),
            'password'=>$this->string(),

        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuarios');
        //echo "m210922_151427_tabela_de_usuario cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210922_151427_tabela_de_usuario cannot be reverted.\n";

        return false;
    }
    */
}
