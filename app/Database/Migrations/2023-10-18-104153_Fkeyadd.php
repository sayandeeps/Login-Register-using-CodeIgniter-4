<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fkeyadd extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey('user_info', 'user_details', 'id');

    }

    public function down()
    {
        $this->forge->dropForeignKey('user_info', 'user_details');

    }
}
