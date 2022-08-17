<?php

function dump($array){
	echo "<pre>";
		var_dump($array);
	echo "</pre>";
}



/**
 * 
 * sort and rsort array works for indexed arrays ONLY
 * 
 * **/
// $arr = [100, 19, 918, 1090, 1011];
// dump($arr);


// // sort($arr);
// // dump($arr);
// //Sort Numerical array in ascending order

// $month = ["January", "March", "April", "June"];

// // dump($month);

// // sort($month);

// // dump($month);

// //Reverse Sort in descending order
// rsort($arr);
// dump($arr);


/**
 * sort by value of an associated arrays, then you use asort and arsort
 * */

// $person = ['firstname' => 'Oyedele', 'lastname' => 'Brownies', 'age' => 40, 'color' => 'Black'];
// dump($person);
// asort($person);

// // dump($person);

// // arsort($person);

// dump($person);

/**
 * sort by key of an associated arrays, then you use ksort and krsort
 * */


$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// shuffle($fruits);

$x = array_search('orange', $fruits);

$number = [10,10,20,20,30,40,50,50];

$y = array_count_values($number); //Counts all the values of an array

$unique = array_unique($number); //Removes duplicate values from an array and keeps the original keys

//array_column: mostly used in a multi_dimensional array
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
 
$first_names = array_column($records, 'first_name');


// dump($first_names);


// array_unshift — Prepend one or more elements to the beginning of an array

$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
// print_r($queue);

//array_pop -  remove the element off the end of array

$fruit = array_pop($queue);
// print_r($queue);

// array_push - push values to the end of the array
array_push($queue, 'Garden Egg', 'Water melon');

// print_r($queue);


//array_diff - returns values which appear in the first array but does not appear in the second array
$arr1= [1,2,3,4,5];
$arr2 = [1,2,3,4,5,6,7,8,9,10,11,12];

// print_r(array_diff($arr2, $arr1));

// array_intersect -> values that exist in array 1 and array 2
$arrayIntersect = array_intersect($arr1, $arr2);

// print_r($arrayIntersect);

$arrSlice = array_slice($arr2, 2, 2, true); //specifying true allows the key to be preserved
// print_r($arrSlice);

$ran = range(0,24,2);
// print_r($ran);


$arrayMap = array_map(function($item){
	return $item ** 2;
}, $arr2);

// print_r($arrayMap);

// print_r(current($ran));

// echo sizeof($arr2);

// array_change_key_case — Changes the case of all keys in an array
// print_r(array_change_key_case($fruits, CASE_UPPER));





