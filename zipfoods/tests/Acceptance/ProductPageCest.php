<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ProductPageCest
{
    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/product?sku=driscolls-strawberries');

        # Assert the correct title is set on the page
        $I->seeInTitle('Driscoll’s Strawberries');
        
        # Assert the existence of certain text on the page
        $I->see('Driscoll’s Strawberries');
        
        # Assert the existence of a certain element on the page
        $I->seeElement('.product-thumb');
        
        # Assert the existence of text within a specific element on the page
        $I->see('$4.99', '.product-price');
    }
}