<?php

use yii\db\Migration;

/**
 * Class m180131_082744_add_user_confirm_token
 */
class m180131_082744_add_user_confirm_token extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'email_confirm_token', $this->string()->unique()->after('email'));
        $this->
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'email_confirm_token');
    }
}
