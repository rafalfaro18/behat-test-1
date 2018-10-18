<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class FeatureContext implements SnippetAcceptingContext
{
  /**
   * @Given there is a :arg1, which costs £:arg2
   */
  public function thereIsAWhichCostsPs($arg1, $arg2)
  {
    throw new PendingException();
  }

  /**
   * @When I add the :arg1 to the basket
   */
  public function iAddTheToTheBasket($arg1)
  {
    throw new PendingException();
  }

  /**
   * @Then I should have :arg1 product(s) in the basket
   */
  public function iShouldHaveProductInTheBasket($arg1)
  {
    throw new PendingException();
  }

  /**
   * @Then the overall basket price should be £:arg1
   */
  public function theOverallBasketPriceShouldBePs($arg1)
  {
    throw new PendingException();
  }
}