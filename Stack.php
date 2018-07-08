<?php
class stack{

	public $stacksize=100;
	public $stackarray;
	public $top;
	
	public function stack()
	{
		$this->top = -1;
	}
	public function isFull()
        {
                return ($this->top == $this->stacksize-1);
        }
        public function isEmpty()
        {
                return ($this->top == -1);
        }

	public function push($num)
	{
		if($this->isFull()==true)
			return;
		else
		{
			$this->top++;
			$this->stackarray[$this->top]=$num;	
		}	
	}
	public function pop()
	{
		if($this->isEmpty()==true)
			return;
		else
		{
			$num=$this->stackarray[$this->top];
			$this->top--;
			return $num;
		}
	}
	
}
$s=new stack();
$s->push(2);
$s->push(3);
$s->push(5);
echo $s->pop()."\n";
echo $s->pop()."\n";
$s->push(12);
$s->push(13);
$s->push(15);
echo $s->pop()."\n";
echo $s->pop()."\n";

?>
 

