<?php

use yii\db\Migration;

/**
 * Class m181004_095800_main
 */
class m181004_095800_main extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull()
        ]);

        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'page_id' => $this->integer()->notNull(),
            'text' => $this->text()->notNull()
        ]);

        $this->addForeignKey(
            'fk-comment-pages',
            'comment',
            'page_id',
            'pages',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-comment-page_id',
            'comment',
            'page_id'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181004_095800_main cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181004_095800_main cannot be reverted.\n";

        return false;
    }
    */
}
