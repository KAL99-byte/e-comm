<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_categories}}`.
 */
class m230421_074741_create_product_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_categories}}', [
            'cid' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'photo'=>$this->string()->notNull(),
            'status'=>$this->string()->defaultValue('active'),
            'updated_by'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_at'=>$this->dateTime(),
            'created_at'=>$this->dateTime()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_categories}}');
    }
}
