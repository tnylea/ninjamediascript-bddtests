<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test Login and Logout Functionality');
$I->amOnPage('/signin');

NinjaHelperPage::afterAllTests($I);
?>