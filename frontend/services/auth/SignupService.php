<?php
/**
 * Created by PhpStorm.
 * User: blackcode
 * Date: 15.12.17
 * Time: 22:13
 */

namespace frontend\services\auth;
use common\entities\User;
use frontend\forms\SignupForm;


class SignupService
{
    public function signup(SignupForm $form): User
    {
        $user = User::signup(
            $form->username,
            $form->email,
            $form->password
        );
        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }
        return $user;
    }
}