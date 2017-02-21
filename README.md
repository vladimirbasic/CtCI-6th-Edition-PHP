# PHP Solutions for [Cracking The Coding Interview 6th Ed.](http://www.crackingthecodinginterview.com/) tasks

**Requirements: [Vagrant](https://www.vagrantup.com/), [Ansible](https://www.ansible.com/), [VirtualBox](https://www.virtualbox.org/).**

All solutions are implemented in **PHP 7** (with strict types when possible) and covered with tests with many different inputs. 

### Setting up Vagrant Machine
    $ vagrant up

### Running Unit Tests
    $ vagrant ssh
    
    $ cd /var/www/CtCI-6th-Edition-PHP/Tests
    
    $ ../vendor/bin/phpunit .

***

Following chapters are covered:
### Arrays and Strings
    
  1 Is Unique [[code](src/Chapter01_ArraysAndStrings/Question01_IsUnique.php) / [test](tests/Chapter01_ArraysAndStrings/Question01_IsUniqueTest.php)]
  > Implement an algorithm to determine if a string has all unique characters. What if you cannot use additional data structures?
  
  2 Check Permutation [[code](src/Chapter01_ArraysAndStrings/Question02_CheckPermutation.php) / [test](tests/Chapter01_ArraysAndStrings/Question02_CheckPermutationTest.php)]
  > Given two strings, write a method to decide if one is permutation of the other.
  
  3 URLify [[code](src/Chapter01_ArraysAndStrings/Question03_URLify.php) / [test](tests/Chapter01_ArraysAndStrings/Question03_URLifyTest.php)]
  > Write a method to replace all spaces in a string with '%20'. You may assume that the string has sufficient space at the end to hold the additional characters, and that you are give the 'true' length length of the string.  
  EXAMPLE  
          |<-   13  ->|  
  Input: "Mr John Smith    "  
  Output: "Mr%20John%20Smith"
    
  4 Palindrome Permutation [[code](src/Chapter01_ArraysAndStrings/Question04_PalindromePermutation.php) / [test](tests/Chapter01_ArraysAndStrings/Question04_PalindromePermutationTest.php)]
  > Given a string, write a function to check if it is a permutation of a palindrome. A palindrome is a word or phrase that is the same forwards as backwards. A permutation is a rearrangement of letters. The palindrome does not need to be limited to just dictionary words.  
  EXAMPLE  
  Input: 'tact coa'  
  Output: True (permutations: 'taco cat')
  
  5 One Away [[code](src/Chapter01_ArraysAndStrings/Question05_OneAway.php) / [test](tests/Chapter01_ArraysAndStrings/Question05_OneAwayTest.php)]
  > There are three types of edits that can be performed on strings: insert a character, remove a character, or replace a character. Given two strings, write a function to check if they are one edit (or zero edits) away.  
  EXAMPLE  
  pale, ple -> true  
  pales, pale -> true  
  pale, bale -> true  
  pale, bae -> false
  
  6 String Compression [[code](src/Chapter01_ArraysAndStrings/Question06_StringCompression.php) / [test](tests/Chapter01_ArraysAndStrings/Question06_StringCompressionTest.php)]
  > There are three types of edits that can be performed on strings: insert a character, remove a character, or replace a character. Given two strings, write a function to check if they are one edit (or zero edits) away.  
  EXAMPLE  
  pale, ple -> true  
  pales, pale -> true  
  pale, bale -> true  
  pale, bae -> false
  
  7 Rotate Matrix [[code](src/Chapter01_ArraysAndStrings/Question07_RotateMatrix.php) / [test](tests/Chapter01_ArraysAndStrings/Question07_RotateMatrixTest.php)]
  > Given an image represented by an NxN matrix, where each pixel in the image is 4 bytes, write a method to rotate the image by 90 degrees. Can you do this in place?
  
  8 Zero Matrix [[code](src/Chapter01_ArraysAndStrings/Question08_ZeroMatrix.php) / [test](tests/Chapter01_ArraysAndStrings/Question08_ZeroMatrixTest.php)]
  > Write an algorithm such that if an element in an MxN matrix is 0, its entire row and column are set to 0.
  
  9 String Rotation [[code](src/Chapter01_ArraysAndStrings/Question09_StringRotation.php) / [test](tests/Chapter01_ArraysAndStrings/Question09_StringRotationTest.php)]
  > Assume you have a method isSubstring which checks if one word is a substring of another. Given two string, s1 and s2, write code to check if s2 is a rotation of s1 using only one call to isSubstring (e.g., "waterbottle" is a rotation of "erbottlewat").