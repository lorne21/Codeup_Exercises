<?php


$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

// make loop to iterate through each book and keys and ouput
// title and key value pairs for data about each book
foreach($books as $key => $info){
	if ($info['published'] > 1950){
		echo "$key" . PHP_EOL; 
		foreach ($info as $key => $value) {
		  	echo "$key : $value" . PHP_EOL;
		 }
		 echo "" . PHP_EOL; 
	}  
}

// Update your loop to only show books that were written after 1950.









?>