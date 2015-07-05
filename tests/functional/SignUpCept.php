<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('Sign up as admin to formPH');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'Richard Orofeo');
$I->fillField('Email:', 'richard@email.com');
$I->fillField('Password:', 'password');
$I->fillField('Password Confirmation:', 'password');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome admin');