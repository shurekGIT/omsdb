<?php

use yii\db\Schema;
use yii\db\Migration;

class m150904_182148_create_Employees_table extends Migration
{
    public function up()
    {
        $tableOption = 'ENGINE = INNODB ';
        $tableOption .= 'AUTO_INCREMENT = 1 ';
        $tableOption .= 'CHARACTER SET utf8 ';
        $tableOption .= 'COLLATE utf8_general_ci ';
        $tableOption .= 'COMMENT = \'Сотрудники компании\'';
        
        $this->createTable('employees', [
            'id' => Schema::TYPE_PK,
            'family' => Schema::TYPE_STRING.' not null comment \'Фамилия\'',
            'name' => Schema::TYPE_STRING.' not null comment \'Имя\'',
            'patronymic' => Schema::TYPE_STRING.' not null comment \'Отчество\'',
            'login' => Schema::TYPE_STRING.' not null comment \'Логин\'',
            'password' => Schema::TYPE_STRING.' not null comment \'Пароль\''
        ], $tableOption);
        
        
        
    }

    public function down()
    {
        echo "m150904_182148_create_Employees_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
