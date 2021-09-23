<?php

use yii\db\Migration;

/**
 * Class m210923_203020_add_colunas_em_usuarioss
 */
class m210923_203020_add_colunas_em_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('usuarios','matricula',$this->string());
        $this->addColumn('usuarios','data_de_cadastro',$this->dateTime());
        $this->addColumn('usuarios','data_de_admissao',$this->dateTime());
            

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        //echo "m210923_203020_add_colunas_em_usuarioss cannot be reverted.\n";
       $this->dropColumn('usuarios','matricula');
       $this->dropColumn('usuarios','data_de_cadastro');
       $this->dropColumn('usuarios','data_de_admissao');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210923_203020_add_colunas_em_usuarioss cannot be reverted.\n";

        return false;
    }
    */
}
