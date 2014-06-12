<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Testing Successful Signup, Login & Logout Functionality');
$I->amOnPage('/signup');
$user_time = time();
$I->fillField('#username', 'johndoe' . $user_time);
$I->fillField('#email','johndoe' . $user_time . '@gmail.com');
$I->fillField('#password','password');
$I->fillField('#password_confirmation','password');
$I->click('.form-signin button');

$I->click('.user-menu-desktop');
$I->click('#user_logout_desktop');

$I->click('#login-button-desktop');

$I->fillField('#email','johndoe' . $user_time . '@gmail.com');
$I->fillField('#password','password');

$I->click('.btn-signin');

$I->click('.user-menu-desktop');
$I->click('#user_logout_desktop');




NinjaHelperPage::afterAllTests($I);

?>