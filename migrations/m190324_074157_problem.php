<?php

use yii\db\Migration;

/**
 * Class m190324_074157_problem
 */
class m190324_074157_problem extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%problem}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'certainty_factor' => $this->float()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'fishbone_diagram_id' =>$this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_problem_name', '{{%problem}}', 'name');
        $this->addForeignKey('fk_fishbone_diagram_id', '{{%problem}}', 'fishbone_diagram_id',
            '{{%fishbone_diagram}}', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%problem}}');
    }

}
