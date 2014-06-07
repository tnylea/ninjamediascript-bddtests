<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Testing Deleting Media Functionality');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>