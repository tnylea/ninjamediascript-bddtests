<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test & View Search');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>