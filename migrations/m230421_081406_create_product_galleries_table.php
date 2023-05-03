<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_galleries}}`.
 */
class m230421_081406_create_product_galleries_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_galleries}}', [
            'gid' => $this->primaryKey(),
            'pid'=>$this->integer(),
            'photo'=>$this->string()->notNull(),
            'status'=>$this->string()->defaultValue('active'),
            'updated_by'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_at'=>$this->dateTime(),
            'created_at'=>$this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_galleries}}');
    }
}
