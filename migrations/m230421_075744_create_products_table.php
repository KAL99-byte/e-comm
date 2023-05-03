<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m230421_075744_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'pid' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'photo'=>$this->string()->notNull(),
            'price'=>$this->decimal()->notNull(),
            'rate'=>$this->integer()->notNull(),
            'color'=>$this->string(),
            'size'=>$this->string(),
            'url'=>$this->string()->notNull(),
            'description'=>$this->text()->notNull(),
            'specialization'=>$this->text()->notNull(),
            'scid'=>$this->integer(),
            'bid'=>$this->integer(),
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
        $this->dropTable('{{%products}}');
    }
}
