<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Login as admin and test admin functionality');
$I->amOnPage('/signin');

$I->fillField('#email', 'admin@admin.com');
$I->fillField('#password','password');

$I->click('.btn-signin');

$I->see('success');

$I->reloadPage();

$I->click('.user-menu-desktop');

$I->click('.admin_link_desktop');

$I->see('Admin Functionality');

$I->seeElement('//.fa-picture-o');

$I->click('[data-section="comments"]');


NinjaHelperPage::afterAllTests($I);
?>