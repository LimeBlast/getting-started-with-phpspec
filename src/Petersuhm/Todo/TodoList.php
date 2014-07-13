<?php namespace Petersuhm\Todo;

class TodoList {

	public $tasks;

	public function addTask(Task $task)
	{
		$this->tasks->add($task);
	}

	public function hasTasks()
	{
		if ($this->tasks->count() > 0) {
			return true;
		}

		return false;
	}

}
