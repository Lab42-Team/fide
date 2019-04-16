<?php

use yii\db\Migration;

/**
 * Class m190324_074802_fuzzy_cause
 */
class m190324_074802_fuzzy_cause extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%fuzzy_cause}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'name_expert' => $this->string()->notNull(),
            'type_of_membership_factor' => $this->string()->notNull(),
            'value' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'main_category_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_fuzzy_cause_name', '{{%fuzzy_cause}}', 'name');
        $this->addForeignKey('fk_main_category_id', '{{%fuzzy_cause}}', 'main_category_id',
            '{{%main_category}}', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%fuzzy_cause}}');
    }
}