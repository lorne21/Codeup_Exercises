<?php
// complete all "todo"s to build a blackjack game
// create an array for suits
$suits = ['C', 'H', 'S', 'D'];
// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
  // todo
	$deck = [];
	foreach ($cards as $card) {
		foreach ($suits as $suit){
			array_push($deck, ($card . " " . $suit));
		}
	}
	return $deck;
}
// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($deck) {
  // todo
	foreach ($decks as $card) {
		if ($card == 'AC' || 'AH' || 'AS' || 'AD'){
			return true; 
		} else {
			return false; 
		}
	}
}

echo cardisAce($deck);
// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) {
  // todo
}
// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
