<?php

use yii\db\Migration;

/**
 * Class m190325_041941_analytical_membership_factor
 */
class m190325_041941_analytical_membership_factor extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%analytical_membership_factor}}', [
            'id' => $this->primaryKey(),
            'type' => $this->string()->notNull(),
            'value' => $this->float()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'fuzzy_cause_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_analytical_membership_factor_name', '{{%analytical_membership_factor}}', 'type');
        $this->addForeignKey('fk_fuzzy_cause_id', '{{%analytical_membership_factor}}', 'fuzzy_cause_id',
            '{{%fuzzy_cause}}', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%analytical_membership_factor}}');
    }
}