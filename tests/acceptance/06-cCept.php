<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>