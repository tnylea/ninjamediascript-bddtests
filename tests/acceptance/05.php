<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test Adding, Editing, Deleting, and Voting on Comments');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>