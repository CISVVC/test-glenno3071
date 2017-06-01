
<?php
class Task{
    private $description=" "; 
    private $completed=" ";
    private $date_created=" ";
    private $date_completed=" ";

  public function __getDescription(){
  return $this->description; }
  
  public function __setDescription($description){
    $this->description=$description;
  }
}

class TaskList {
    private $Tasks;
 
/*
  public function __construct($description, $completed, $date_created,$date_completed)
  {
    $this->description = $adescription;
    $this->completed = $acompleted;
    $this->date_created = $adate_created;
    $this->date_completed = $adate_completed;
  }
I am unable to figure the multiple construct to get to set work  ainto a multidimenisonal array workflow

*/ 
    public function __construct() {
      $this->Tasks = []; 
    }
    
    public function addTask($task) {
        $this->Tasks[] = $task;   
    }
    
    public function printTask() {
        foreach($this->Tasks as $task) {
            echo ($task)."\n";
        }
    }
}
    
$TaskHolder = new TaskList();
$TaskHolder->addTask("Description     Completed  Date Started  Date Finished ");
$TaskHolder->addTask("Feed the Dog       Y        1/1/1111      2/2/2222");
$TaskHolder->addTask("Feed the cat       Y        1/1/1111      2/2/2222" );
$TaskHolder->addTask("Feed the Monkey    Y        1/1/1111      2/2/2222");
$TaskHolder->addTask("Feed the Monkey    Y        1/1/1111      2/2/2222")
$TaskHolder->printTask();


<?php
class Task{
    public $description=" "; 
    public $completed=" ";
    public $date_created=" ";
    public $date_completed=" ";

  public function print_tasklist(){
   echo $this->description." ";
   echo $this->completed." ";
   echo $this->date_created." ";
   echo $this->date_completed." ";
   echo "\n";
}
public function set_tasklist($description,$completed,$date_created,$date_completed){
  $this->description;
  $this->completed;
  $this->date_created;
  $this->date_completed;
}
  public function __construct() {
      $this->Tasks = []; 
    }
    
    public function addTask($task) {
        $this->Tasks[] = $task;   
    }
    
    public function printTask() {
        foreach($this->Tasks as $task) {
            echo ($task)."\n";
  
}
}
$tasklist=new Task();
$tasklist->description="feed the cat";
$tasklist->completed="Nope";
$tasklist->date_created="1/22/1912";
$tasklist->date_completed="2/33/1932";
$tasklist->print_tasklist();

$tasklist->set_tasklist("feed the dog","Yes","1/11/1911", 2/22/1922);
$tasklist->set_tasklist("kick the dog","Yes","1/12/1911", 2/23/1922);
$tasklist->set_tasklist("hug the dog","Yes","1/13/1911", 2/24/1922);
$tasklist->print_tasklist();

?>
?>