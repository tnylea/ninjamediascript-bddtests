<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test that user cannot login if they are set to inactive');
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

$I->fillField('#email','admin@admin.com');
$I->fillField('#password','password');

$I->click('.btn-signin');

$I->click('.user-menu-desktop');
$I->click('.admin_link_desktop');

$I->see('Admin Functionality');

$I->click('[data-section="users"]');
$I->seeElement('.fa-user-icon');

$I->click('[data-section="users"]');

$I->click('.disable-username-johndoe' . $user_time);

$I->click('.user-menu-desktop');
$I->click('#user_logout_desktop');


$I->click('#login-button-desktop');

$I->fillField('#email','johndoe' . $user_time . '@gmail.com');
$I->fillField('#password','password');

$I->click('.btn-signin');

$I->see('no longer active');




NinjaHelperPage::afterAllTests($I);

?>