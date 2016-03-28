<?php

use yii\db\Migration;

class m160328_053961_create_table_messages extends Migration
{
    public function up()
    {
        $this->createTable('{{%messages}}', [
            'id' => 'pk',
            'from_user_id'=>'int(10)',
            'to_user_id'=>'int(10)',
            'text'=>'text',
            'is_read'=>'tinyint(1)',
            'datetime_read'=>'datetime',
            'datetime_create' => 'datetime'
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%messages}}');
    }
}
