<?php

//Quote generator for index.html page
//Randomly pulls from a selection of 3 different quotes for each page load

$quotes =
[
  0 => "We shall never know all the good that a simple smile can do. -Mother Teresa",
  1 => "Do not take life too seriously. You will never get out of it alive. -Elbert Hubbard",
  2 => "It is during our darkest moments that we must focus and see the light. -Aristotle Onassis"
];

shuffle ($quotes);
