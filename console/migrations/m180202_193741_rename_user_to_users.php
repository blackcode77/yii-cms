<?php

use yii\db\Migration;

/**
 * Class m180202_193741_rename_user_to_users
 */
class m180202_193741_rename_user_to_users extends Migration
{
    public function up()
    {
        $this->renameTable('{{%user}}', '{{%users}}');
    }

    public function down()
    {
        $this->renameTable('{{%users}}', '{{%user}}');
    }
}
