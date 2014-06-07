<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test that user cannot login if they are set to inactive');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>