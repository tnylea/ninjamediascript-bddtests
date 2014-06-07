<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test Editing Media Functionality');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>