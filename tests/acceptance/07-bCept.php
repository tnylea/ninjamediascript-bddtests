<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test Viewing the newly created page');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>