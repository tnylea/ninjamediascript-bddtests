<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test Adding, Editing, and Deleting Categories');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>