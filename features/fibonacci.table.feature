# ./bin/behat --lang=en ./features/fibonacci.table.feature
Feature: Test Fibonacci Sequence Table of Sequences.

  In order to use Fibonacci Sequence on Maths projects
  I need to be able to get right results for a table of sequences

  Scenario Outline: Get Fibonacci Number for Sequence Table
    Given A Fibonacci Sequence Algorithm
    When I pass the index <index>
    Then I should be able to get the value <result>


  Examples:
    | index | result |
    |  1    |  0     |
    |  2    |  1     |
    |  3    |  1     |
    |  4    |  2     |
    |  5    |  3     |
    |  6    |  5     |

