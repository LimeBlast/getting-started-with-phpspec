<?php namespace spec\Petersuhm\Todo;

use Petersuhm\Todo\Task;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskCollectionSpec extends ObjectBehavior {

	function it_is_initializable()
	{
		$this->shouldHaveType('Petersuhm\Todo\TaskCollection');
	}

	function it_adds_a_task_to_the_collection(Task $task, Task $anotherTask)
	{
		$this->add($task);
		$this->tasks[0]->shouldBe($task);

		$this->add($anotherTask);
		$this->tasks[1]->shouldBe($anotherTask);
	}

	function it_is_countable()
	{
		$this->shouldImplement('Countable');
	}

	function it_counts_elements_of_the_collection()
	{
		$this->count()->shouldReturn(0);

		$this->tasks = ['foo'];
		$this->count()->shouldReturn(1);
	}

}