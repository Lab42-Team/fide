<?php

use yii\db\Migration;

/**
 * Class m190324_132824_base_scale
 */
class m190324_132824_base_scale extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%base_scale}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'range' => $this->string()->notNull(),
            'unit' => $this->string()->notNull(),
            'value' => $this->float()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'fuzzy_cause_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_base_scale_name', '{{%base_scale}}', 'name');
        $this->addForeignKey('fk_fuzzy_cause_id', '{{%base_scale}}', 'fuzzy_cause_id',
            '{{%fuzzy_cause}}', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%base_scale}}');
    }
}