<?php

use yii\db\Migration;

class m160323_131224_news_table extends Migration
{
    public function up()
    {
		  $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'body' => $this->text(),
			'theme' => $this->integer(),
			'publish_date' =>  $this->timestamp()
        ]);

    }

    public function down()
    {
       $this->dropTable('news');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
