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


// Upload picture from file
$I->click('.upload-btn-desktop');
$I->seeElement('.icon-cloud-upload');
$I->fillField('#title','Bobs Burgers');
$I->attachFile('#pic_url', 'bobs-burgers.jpg');
$I->click('.submit-media');
$I->see('Bobs Burgers');

// Upload picture from URL
$I->click('.upload-btn-desktop');
$I->seeElement('.icon-cloud-upload');
$I->fillField('#title','Cool Burgers Bob');
$I->fillField('#img_url', 'https://raw.githubusercontent.com/tnylea/ninjamediascript-bddtests/master/tests/_data/bobs-burgers2.jpg');
$I->click('.submit-media');
$I->see('Cool Burgers Bob');

// Upload Youtube Video from URL
$I->click('.upload-btn-desktop');
$I->seeElement('.icon-cloud-upload');
$I->click('.vid-radio-btn');
$I->fillField('#title','Burger Video');
$I->fillField('#vid_url', 'https://www.youtube.com/watch?v=8KH97Sp5jRE');
$I->click('.submit-media');
$I->see('Burger Video');

// Upload Vimeo Video from URL
$I->click('.upload-btn-desktop');
$I->seeElement('.icon-cloud-upload');
$I->click('.vid-radio-btn');
$I->fillField('#title','Sailor Moon Bobs Burgers');
$I->fillField('#vid_url', 'http://vimeo.com/93950813');
$I->click('.submit-media');
$I->see('Sailor Moon Bobs Burgers');

NinjaHelperPage::afterAllTests($I);
?>