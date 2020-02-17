Feature: Test Fibonacci Sequence
  In order to use Fibonacci Sequence on Maths projects
  I need to get the right number for a given index

  Scenario: Get Fibonacci Sequence Number for index 1
    Given A Fibonacci sequence algorithm
    When  I pass the index 1
    Then  I should be able to get the value 0