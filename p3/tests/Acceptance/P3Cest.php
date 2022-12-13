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

        $computerDraw= $I->grabTextFrom('[test=computer-output]');
        $I->comment('and the computer chose: '.$computerDraw);
        $userDraw= $I->grabTextFrom('[test=user-output]');

        $moves = ['rock', 'paper', 'scissors'];
        $userDraw = rand(0, 2);
        $computerDraw = rand(0, 2);

        if ($userDraw == $computerDraw) {
            $I->seeElement('[test=tie-output]');
        } elseif (($userDraw + 1) % 3 == $computerDraw) {
            $I->seeElement('[test=won-output]');
        } else {
            $I->seeElement('[test=lost-output]');
        }
    }

    public function validateForm(AcceptanceTester $I)
    { 
        $I->amOnPage('/');
        $I->click('[test=submit-button]');
        // $I->see('[test=validation-output]');
    }
    

    public function showsHistoryAndRoundDetails(AcceptanceTester $I)
    {
        $I->amOnPage('/history');

        $roundCount = count($I->grabMultiple('[test=round-link]'));
        $I->assertGreaterOrEquals(10, $roundCount);

        $timestamp= $I->grabTextFrom('[test=round-link]');
        $I->click($timestamp);
        $I->see($timestamp);

    }
}