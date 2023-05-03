<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%home_photos}}`.
 */
class m230421_083049_create_home_photos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%home_photos}}', [
            'hid' => $this->primaryKey(),
            'title'=>$this->string()->notNull(),
            'description'=>$this->text()->notNull(),
            'url'=>$this->string()->notNull(),
            'photo'=>$this->string()->notNull(),
            'category'=>$this->string()->notNull(),
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
        $this->dropTable('{{%home_photos}}');
    }
}
