<?php

class superGenerator {

  private $_glue;

  public function __construct($glue = ' ') {

    $this->_first = array("Doctor", "Mister", "Commander", "Sergeant", "Mega", "Captain", "Lord",
    "Chocolate", "Professor", "Black", "White", "Iron", "Steel", "Super", "Savage");
    
    $this->_last = array("Dragon", "Diamond", "Robot", "Octopus", "Horse", "Space", "Destroyer",
    "Blood", "Obvious", "Happy", "Storm", "Cloud", "Moon");
    
    $this->_glue = $glue;
  }
  
  function __destruct() {
  }

  public function next() {
    $first = $this->_first[array_rand($this->_first)];
    $last = $this->_last[array_rand($this->_last)];

    return $first . $this->_glue . $last;
  }

}

$obj = new superGenerator();
echo $obj->next();

?>
