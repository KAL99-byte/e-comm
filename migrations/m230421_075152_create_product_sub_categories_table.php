<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_sub_categories}}`.
 */
class m230421_075152_create_product_sub_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_sub_categories}}', [
            'scid' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'photo'=>$this->string(),
            'cid'=>$this->integer(),
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
        $this->dropTable('{{%product_sub_categories}}');
    }
}
