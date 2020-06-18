<?php
$enemies=[
    "Jay",
    "Chris",
    "Jessica",
    "Heather",
    "Melanie",
    "Allison",
    "Ryan",
    "Samantha",
    "Elaine",
    "Shawn",
];
shuffle($enemies);
// for($x=0; $x<rand(5,10); $x++){
//   echo "Enemy {$enemies[$x]} spawned <br />";

// }
$x2=0;
while($x2<rand(5,10)){
  echo "Enemy {$enemies[$x2]} spawned <br />";
  $x2++;
}

$enemies=[
  "Josh" =>[
      "health"=>100
  ]
];
print_r ($enemies["Josh"]["health"]);
