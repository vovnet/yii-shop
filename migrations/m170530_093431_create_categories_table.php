<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categories`.
 */
class m170530_093431_create_categories_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer()->notNull()->defaultValue(0),
            'name' => $this->string()->notNull(),
            'keywords' => $this->string()->defaultValue(null),
            'description' => $this->text()->defaultValue(null)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('categories');
    }
}
