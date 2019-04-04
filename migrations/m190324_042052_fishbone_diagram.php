<?php

use yii\db\Migration;

/**
 * Class m190324_042052_fishbone_diagram
 */
class m190324_042052_fishbone_diagram extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%fishbone_diagram}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'created_at' => $this->date()->notNull(),
            'updated_at' => $this->date()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_fishbone_diagram_name', '{{%fishbone_diagram}}', 'name');
    }


    public function down()
    {
        $this->dropTable('{{%fishbone_diagram}}');
    }

}
