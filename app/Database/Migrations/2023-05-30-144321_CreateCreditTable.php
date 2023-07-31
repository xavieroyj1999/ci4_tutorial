<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCreditTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'credit_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'credit-info' => [
                'type'       => 'VARCHAR',
                'constraint' => '65535',
                'null' => false,
            ]]);
        $this->forge->addKey('credit_id', true);
        $this->forge->createTable('creditinfos');
    }

    public function down()
    {
        $this->forge->dropTable('creditinfos');
    }
}
