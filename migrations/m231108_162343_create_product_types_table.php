<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_types`.
 */
class m231108_162343_create_product_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $fields = [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
        ];

        $this->createTable('product_types', $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_types');
    }
}
