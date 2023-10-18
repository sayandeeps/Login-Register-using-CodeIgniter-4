<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserDetails extends Migration
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
        'user_id' => [
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => true,
        ],
        'address' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
        ],
        'designation' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
        ],
        'phone' => [
            'type' => 'INT',
            'constraint' => 10,
        ],
      ]);
      $this->forge->addKey('id', true); 
    //   $this->forge->addForeignKey('id', 'user_details', 'id');
      $this->forge->createTable('user_details');
    }

    public function down()
    {
        $this->forge->dropTable('user_details');

    }
}
