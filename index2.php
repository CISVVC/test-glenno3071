<?php
$description=" ";
$completed=" ";
$date_created=" ";
$date_completed=" ";

$get_task=task_list($description,$completed,$date_created,$date_completed);
echo "Task Description: ".$get_task[0]."\nCompleted (y/n): ".$get_task[1]."\nDate created: ".$get_task[2]."\nDate completed: ".$get_task[3];
echo "\n\n";
print_r($get_task); //just checking the array

function task_list($description,$completed,$date_created,$date_completed){
$description="feed the dog";
$completed="yes";
$date_created="jan 1";
$date_completed="jan 2";
$task=array($description,$completed,$date_created,$date_completed);
return $task;
}
?>


/*
*********************************************************************************************************
//Inside the class structure you can then add the member data and the functions:


class Task {
    private $description;
    private $completed;
    private $date_created;
    private $date_completed;
    
//public function getDescription() {
// return $this->description;
// replaced PTs code with below.
// i'm using echos to see the process

   public function __get($Description) {
      echo "fetching description ".$description." to ".$this->description."<br/>";
   }
  
   public function __set($description,$desc)   {
      $this->description=$desc; //perhaps it should be $this->$description=$desc
      echo "assigning: ". $description. "a value of: ".$desc."<br/>";
   }
  
  public function __isset($description) {
   echo "Is there a entry in field description : ".$description."<br/>";
  return isset($this->description);
    }
}



//The TaskList class is then a "container" class that contains and manages Task. it should utilize the special __construct member function to initialize the tasks array.  http://php.net/manual/en/language.oop5.decon.php

class TaskList extends task  {
    private  $tasks;
    
    function __construct($description,$completed,$date_created,$date_completed)
     {
      parent::__construct();
      $this->description=$description;
      $this->completed=$completed;
      $this->date_created=$date_created;
      $this->date_completed=$date_completed;
  }
    public function __construct() {
         $this->tasks = []; 
    }

   public function addTask($task) {
       $this->tasks[] = $task;
   }

//$description_one=new description();
//$description_one-$description = "wash the dog";
//$description_one-$completed = "yes";
//$description_one-$date_created = "Jan 1";
//$description_one-$date_completed="jan 2";

*****************************************************************************
class person {		
	var $name;		
		public $height;		
		protected $social_insurance;
		private $pinn_number;
 
		function __construct($persons_name) {		
			$this->name = $persons_name;		
		}		
 
		function set_name($new_name) {   	
			$this->name = $new_name;
		}	
 
		function get_name() {
			return $this->name;
	**********************************************************

class BaseClass {
   function __construct() {
       print "In BaseClass constructor\n";
   }
}

class SubClass extends BaseClass {
   function __construct() {
       parent::__construct();
       print "In SubClass constructor\n";
   }
}		
*/
