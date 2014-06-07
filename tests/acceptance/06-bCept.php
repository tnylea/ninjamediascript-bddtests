<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test adding media to category & test that media has been added to new category');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>