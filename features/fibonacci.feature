Feature: Test Fibonacci Sequence
  In order to use Fibonacci Sequence on Maths projects
  I need to get the right number for a given index

  Scenario: Get Fibonacci Sequence Number for index 1
    Given A Fibonacci sequence algorithm
    When  I pass the index 1
    Then  I should be able to get the value 0

  Scenario: Get Fibonacci Sequence Number for index 2
    Given A Fibonacci sequence algorithm
    When  I pass the index 2
    Then  I should be able to get the value 1

  Scenario: Get Fibonacci Sequence Number for index 3
    Given A Fibonacci sequence algorithm
    When  I pass the index 3
    Then  I should be able to get the value 1

  Scenario: Get Fibonacci Sequence Number for index 4
    Given A Fibonacci sequence algorithm
    When  I pass the index 4
    Then  I should be able to get the value 2
