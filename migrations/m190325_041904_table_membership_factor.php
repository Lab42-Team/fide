<?php

use yii\db\Migration;

/**
 * Class m190325_041904_table_membership_factor
 */
class m190325_041904_table_membership_factor extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%table_membership_factor}}', [
            'id' => $this->primaryKey(),
            'value' => $this->string()->notNull(),
            'coefficient' => $this->float()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'fuzzy_cause_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_fuzzy_cause_id', '{{%table_membership_factor}}', 'fuzzy_cause_id',
            '{{%fuzzy_cause}}', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%table_membership_factor}}');
    }
}