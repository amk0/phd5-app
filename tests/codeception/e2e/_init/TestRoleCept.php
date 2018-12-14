<?php

// @group mandatory



$I = new E2eTester($scenario);
$I->wantTo('create a preview RBAC role');

$I->login('master', 'master1');

$I->amGoingTo('try to view and create pages');
$I->amOnPage('/user/role/create');


$I->fillField('#role-name', uniqid('__Test'));
$I->fillField('#role-description', 'Test Role');

$I->click('Save');

$I->waitForElementVisible('.grid-view');


$I->see('Test Role', 'td');