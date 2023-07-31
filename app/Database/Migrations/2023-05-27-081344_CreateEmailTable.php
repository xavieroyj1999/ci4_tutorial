<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmailTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'to' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'from' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'title' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'body' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('email_id', true);
        $this->forge->createTable('emails');
    }

    public function down()
    {
        $this->forge->dropTable('emails');
    }
}
