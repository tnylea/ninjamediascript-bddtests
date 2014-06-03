<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test Viewing User Profile & Likes');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>