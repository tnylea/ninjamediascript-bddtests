<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Login as admin and test admin functionality');
$I->amOnPage('/signin');

$I->fillField('#email', 'admin@admin.com');
$I->fillField('#password','password');

$I->click('.btn-signin');

$I->reloadPage();

$I->click('.user-menu-desktop');

$I->click('.admin_link_desktop');

$I->see('Admin Functionality');

$I->seeElement('.fa-picture-o');

$I->click('[data-section="comments"]');
$I->seeElement('.fa-comments');

$I->click('[data-section="users"]');
$I->seeElement('.fa-user-icon');

$I->click('[data-section="categories"]');
$I->seeElement('.fa-list');

$I->click('[data-section="pages"]');
$I->seeElement('.fa-file');

$I->click('[data-section="settings"]');
$I->seeElement('.fa-cog');

$I->click('[data-section="custom_code"]');
$I->seeElement('.fa-code');


NinjaHelperPage::afterAllTests($I);
?>