<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test Viewing the Homepage');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>