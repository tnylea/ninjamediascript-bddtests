<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Edit User Profile');
$I->amOnPage('/signup');
$user_time = time();
$I->fillField('#username', 'johndoe' . $user_time);
$I->fillField('#email','johndoe' . $user_time . '@gmail.com');
$I->fillField('#password','password');
$I->fillField('#password_confirmation','password');
$I->click('.form-signin button');
$I->see('successful');

$I->click('.user-menu-desktop');
$I->click('.user-profile-link-desktop');
$I->click('.edit-user-profile');

$I->fillField('#username','bobsburgers');
$I->fillField('#email','bob@bobsburgers.com');


NinjaHelperPage::afterAllTests($I);
?>