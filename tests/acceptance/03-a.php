<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Successful Signup');
$I->amOnPage('/signup');
$jd = 'johndoe' . time();
$I->fillField('#username', $jd);
$I->fillField('#email','johndoe' . time() . '@gmail.com');
$I->fillField('#password','password');
$I->fillField('#password_confirmation','password');
$I->click('.form-signin button');
$I->see('successful');

NinjaHelperPage::afterAllTests($I);

?>