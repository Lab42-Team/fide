<?php

use yii\db\Migration;

/**
 * Class m190324_074735_clear_cause
 */
class m190324_074735_clear_cause extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%clear_cause}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'certainty_factor' => $this->float()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'main_category_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_clear_cause_name', '{{%clear_cause}}', 'name');
        $this->addForeignKey('fk_main_category_id', '{{%clear_cause}}', 'main_category_id',
            '{{%main_category}}', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%clear_cause}}');
    }

}