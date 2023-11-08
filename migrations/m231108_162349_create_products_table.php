<?php

use yii\db\Migration;

/**
 * Handles the creation of table `products`.
 */
class m231108_162349_create_products_table extends Migration
{
    const TABLE_NAME = 'products';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $fields = [
            'id' => $this->primaryKey(),
            'title' => $this->string()
                ->notNull(),
            'preview' => $this->string(),
            'sku' => $this->integer()
                ->unsigned(),
            'left_count' => $this->integer()
                ->unsigned()
                ->defaultValue(0),
            'type_id' => $this->integer()
                ->defaultValue(0),
        ];

        $this->createTable(self::TABLE_NAME, $fields);

        $this->createIndex('type_id_index', self::TABLE_NAME, 'type_id');
        $this->addForeignKey('type_id_fk', self::TABLE_NAME, 'type_id', 'product_types', 'id', 'CASCADE', 'NO ACTION');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
