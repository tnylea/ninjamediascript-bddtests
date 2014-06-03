<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Testing user liking media on (Home Page, Single Page, User Profile Page)');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>