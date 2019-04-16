<?php

use yii\db\Migration;

/**
 * Class m190416_143738_analytical_membership_function
 */
class m190416_143738_analytical_membership_function extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%analytical_membership_function}}', [
            'id' => $this->primaryKey(),
            'type' => $this->string()->notNull(),
            'value' => $this->float()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'fuzzy_cause_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_analytical_membership_function_name', '{{%analytical_membership_function}}', 'type');
        $this->addForeignKey('fk_fuzzy_cause_id', '{{%analytical_membership_function}}', 'fuzzy_cause_id',
            '{{%fuzzy_cause}}', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%analytical_membership_function}}');
    }
}