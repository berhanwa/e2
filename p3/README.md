*Any instructions/notes in italics should be removed from the template before submitting* 

# Project 3
+ By: *Bethlehem Berhanu*
+ URL: <http://e2p3.bethlehemhes.me>

## Graduate requirement
*x one of the following:*
+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
n/a

## Notes for instructor
*Thank you for the tips, and for a great semester!*

## Codeception testing output
```
Codeception PHP Testing Framework v5.0.5 https://helpukrainewin.org

Tests.Acceptance Tests (3) -------------------------------------------------------------------------------------------------------------------------------
P3Cest: Play game
Signature: Tests\Acceptance\P3Cest:playGame
Test: tests/Acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/"
 I fill field "[test=rock-radio]","rock"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 I grab text from "[test=computer-output]"
 and the computer chose: paper
 I grab text from "[test=user-output]"
 I see element "[test=lost-output]"
 PASSED 

P3Cest: Validate form
Signature: Tests\Acceptance\P3Cest:validateForm
Test: tests/Acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I click "[test=submit-button]"
 PASSED 

P3Cest: Shows history and round details
Signature: Tests\Acceptance\P3Cest:showsHistoryAndRoundDetails
Test: tests/Acceptance/P3Cest.php:showsHistoryAndRoundDetails
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater or equals 10,172
 I grab text from "[test=round-link]"
 I click "2022-12-13 00:13:49"
 I see "2022-12-13 00:13:49"
 PASSED 

----------------------------------------------------------------------------------------------------------------------------------------------------------
Time: 00:00.249, Memory: 10.00 MB

OK (3 tests, 5 assertions)
```