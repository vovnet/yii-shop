<?php

use yii\db\Migration;

/**
 * Handles the creation of table `products`.
 */
class m170530_094754_create_products_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'content' => $this->string()->null()->defaultValue(null),
            'price' => $this->float()->notNull()->defaultValue(0),
            'keywords' => $this->string()->null()->defaultValue(null),
            'description' => $this->string()->null()->defaultValue(null),
            'img' => $this->string()->null()->defaultValue('no-image.png'),
            'hit' => $this->integer(1)->notNull(),
            'new' => $this->integer(1)->notNull(),
            'sale' => $this->integer(1)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('products');
    }
}
