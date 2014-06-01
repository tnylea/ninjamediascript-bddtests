<?php
$I = new WebGuy($scenario);
NinjaHelperPage::beforeAllTests($I);

$I->wantTo('Test User Uploads Work Successful');
$I->amOnPage('/signup');
$I->fillField('#username', 'bobsburgers' . time());
$I->fillField('#email','bob' . time() . '@bobsburgers.com');
$I->fillField('#password','password');
$I->fillField('#password_confirmation','password');
$I->click('.form-signin button');
$I->see('successful');

$I->click('.upload-btn-desktop');
$I->seeElement('.icon-cloud-upload');

$I->fillField('#title','Bobs Burgers');
$I->attachFile('#pic_url', 'bobs-burgers.jpg');
$I->click('.submit-media');




NinjaHelperPage::afterAllTests($I);
?>