<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Edit User Profile');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>