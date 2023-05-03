<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%site_informations}}`.
 */
class m230421_082136_create_site_informations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%site_informations}}', [
            'inid' => $this->primaryKey(),
            'about'=>$this->string()->notNull(),
            'name'=>$this->string()->notNull(),
            'logo'=>$this->string(),
            'address'=>$this->string()->notNull(),
            'email'=>$this->string()->notNull(),
            'phone'=>$this->string()->notNull(),
            'twitter_url'=>$this->string()->notNull(),
            'facebook_url'=>$this->string()->notNull(),
            'linkedin_url'=>$this->string()->notNull(),
            'insta_url'=>$this->string()->notNull(),
            'status'=>$this->boolean(),
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
        $this->dropTable('{{%site_informations}}');
    }
}
