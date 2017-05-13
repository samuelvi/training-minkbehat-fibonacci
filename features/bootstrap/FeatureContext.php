<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

include_once __DIR__  . '/../../src/Fibonacci.php';

class FeatureContext implements Context
{
    /** @var  Fibonacci $fibonacci */
    private $fibonacci;

    /** @var  int $indexNumber */
    private $indexNumber;

    /**
     * @Given A Fibonacci Sequence Algorithm
     */
    public function aFibonacciSequenceAlgorithm()
    {
        $this->fibonacci = new Fibonacci();
    }


    /**
     * @When I pass the index :index
     */
    public function iPassTheIndexValue($indexNumber)
    {
        $this->indexNumber = $indexNumber;
    }

    /**
     * @Then /^(?:|I )should be able to get (?:|the )value (\d+)$/i
     * @Then /^The resulting sequence value should be: (\d*)$/
     */
    public function iShouldBeAbleToGetTheValue($value)
    {
        $calculatedValue = $this->fibonacci->getValueByIndex($this->indexNumber);
        if ($calculatedValue != $value) {
            throw new Exception(sprintf('Result for index %s should be %s and got %s', $this->indexNumber, $value, $calculatedValue));
        }
    }

}