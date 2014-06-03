<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Error returned on duplicate Signup');
$I->amOnPage('/signup');
$I->fillField('#username', 'admin');
$I->fillField('#email','admin@admin.com');
$I->fillField('#password','password');
$I->fillField('#password_confirmation','password');
$I->click('.form-signin button');
$I->see('error');

NinjaHelperPage::afterAllTests($I);
?>