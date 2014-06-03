<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test Adding, Editing, and Deleting Pages');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>