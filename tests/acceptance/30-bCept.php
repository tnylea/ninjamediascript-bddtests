<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test Viewing all Popular (week, month, year), categories, tags, random, and pages');
$I->amOnPage('/');

NinjaHelperPage::afterAllTests($I);
?>