<?php

use yii\db\Migration;

/**
 * Class m190324_074322_main_category
 */
class m190324_074322_main_category extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%main_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'fishbone_diagram_id' =>$this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx_main_category_name', '{{%main_category}}', 'name');
        $this->addForeignKey('fk_fishbone_diagram_id', '{{%main_category}}', 'fishbone_diagram_id',
            '{{%fishbone_diagram}}', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%main_category}}');
    }

}