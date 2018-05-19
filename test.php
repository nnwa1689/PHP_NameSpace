<?php  
namespace my;
class test{
	private $test1;
    function __construct($test1){
		$this->test1=$test1;
        echo "TEST OK!<br>";
    }
	
	function getTest(){
		echo $this->test1;
	}
}
?>