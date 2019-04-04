<?php

use yii\db\Migration;

/**
 * Class m190324_131646_neutralizing_factor
 */
class m190324_131646_neutralizing_factor extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%neutralizing_factor}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'value' => $this->string()->notNull(),
            'created_at' => $this->date()->notNull(),
            'updated_at' => $this->date()->notNull(),
            'clear_cause_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_neutralizing_factor_name', '{{%neutralizing_factor}}', 'name');
        $this->addForeignKey('fk_clear_cause_id', '{{%neutralizing_factor}}', 'clear_cause_id', '{{%clear_cause}}', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%neutralizing_factor}}');
    }

}
