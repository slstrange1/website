<?php

$authors = [
  'Samantha Strange' => 'samantha',
  'Ryan Hein' => 'ryan',
];

//This function get the select value based on the current key

function getSelectKeyFromValue($author, $selected_author)
{
  $author = @$authors[$author];  
  if($author == $selected_author){
        return 'selected';
    }

        return '';
}