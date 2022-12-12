<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class P3Cest
{
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=rock-radio]', 'rock');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-div]');

        $computerDraw= $I->grabTextFrom('[test=computer-outcome]');
        $I->comment('and the computer chose: '.$computerDraw);

        
        if($computerDraw == 'rock') {
            $I->seeElement('.won');
        } else {
            $I->seeElement('.lost');
        }
    }
}