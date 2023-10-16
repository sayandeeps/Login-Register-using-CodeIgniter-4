<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserInfo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'avatar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => null,
            ],


        ]);
        $this->forge->addKey('id', true); 

        $this->forge->createTable('user_info');
    }

    public function down()
    {
        $this->forge->dropTable('user_info');
    }
}
