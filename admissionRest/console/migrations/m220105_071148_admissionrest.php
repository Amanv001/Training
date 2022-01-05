<?php

use yii\db\Migration;

/**
 * Class m220105_071148_admissionrest
 */
class m220105_071148_admissionrest extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('admissionrest',[
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'place' => $this->string(255),
            'phone' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('admissionrest');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220105_071148_admissionrest cannot be reverted.\n";

        return false;
    }
    */
}
