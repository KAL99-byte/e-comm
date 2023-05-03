<?php

use PHPUnit\Framework\Error\Notice;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%brands}}`.
 */
class m230421_080906_create_brands_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%brands}}', [
            'bid' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'logo'=>$this->string(),
            'description'=>$this->text()->notNull(),
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
        $this->dropTable('{{%brands}}');
    }
}
