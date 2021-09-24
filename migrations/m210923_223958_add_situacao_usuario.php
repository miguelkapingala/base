<?php

use yii\db\Migration;

/**
 * Class m210923_223958_add_situacao_usuario
 */
class m210923_223958_add_situacao_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('usuarios', 'status',$this->boolean());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       // echo "m210923_223958_add_situacao_usuario cannot be reverted.\n";
        $this->dropColumn('usuarios', 'status');
        return true;
    }   

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210923_223958_add_situacao_usuario cannot be reverted.\n";

        return false;
    }
    */
}
