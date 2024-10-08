<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnRoute(\Yii::$app->homeUrl);
        $I->see('RS Sint Lucia');
        $I->seeLink('About');
        $I->click('About');
        $I->see('This is the About page.');
    }
}