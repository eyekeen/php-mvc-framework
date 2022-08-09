<?php


class m0001_initial
{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "create  table users(
            id serial primary key,
            email varchar(255) not null,
            firstname varchar(255) not null,
            lastname varchar(255) not null,
            status smallint not null,
            created_at TIMESTAMP default current_timestamp
        )";

        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "drop table users";
        
        $db->pdo->exec($SQL);
    }
}
