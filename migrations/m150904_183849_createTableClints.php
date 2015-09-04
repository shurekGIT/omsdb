<?php

use yii\db\Schema;
use yii\db\Migration;

class m150904_183849_createTableClints extends Migration
{
    public function up()
    {
       $tableOption = 'ENGINE = INNODB ';
        $tableOption .= 'AUTO_INCREMENT = 1 ';
        $tableOption .= 'CHARACTER SET utf8 ';
        $tableOption .= 'COLLATE utf8_general_ci ';
        $tableOption .= 'COMMENT = \'Клиенты компании\'';
        
        $this->createTable('clients', [
            'id' => Schema::TYPE_PK,
            'family' => Schema::TYPE_STRING.' not null comment \'Фамилия\'',
            'name' => Schema::TYPE_STRING.' not null comment \'Имя\'',
            'patronymic' => Schema::TYPE_STRING.' not null comment \'Отчество\'',
            'phone' => Schema::TYPE_BIGINT.' not null comment \'Номер телефона\'',
            'login' => Schema::TYPE_STRING.' not null comment \'Логин\'',
            'password' => Schema::TYPE_STRING.' not null comment \'Пароль\''
        ], $tableOption);
    }

    public function down()
    {
        echo "m150904_183849_createTableClints cannot be reverted.\n";

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
