<?php
class Hangman {

    private $hiddenWord = "";

    public function __construct() {
        $arrX = array("Kay", "Joe","Susan", "Frank");
        $hiddenWord = "";
        $randIndex = array_rand($arrX);
        $this->hiddenWord = $arrX[$randIndex];
    }

    public function getHiddenWord() {
        return $this->hiddenWord;
    }

    public function isMatch(string $inputCharacter) {
        return substr_count($this->hiddenWord, $inputCharacter) == 1;
    }
}