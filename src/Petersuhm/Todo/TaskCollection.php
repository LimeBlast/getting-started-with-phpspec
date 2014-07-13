<?php namespace Petersuhm\Todo;

class TaskCollection implements \Countable {

	public $tasks;

	public function add($task)
	{
		$this->tasks[] = $task;
	}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Count elements of an object
	 *
	 * @link http://php.net/manual/en/countable.count.php
	 * @return int The custom count as an integer.
	 *       </p>
	 *       <p>
	 *       The return value is cast to an integer.
	 */
	public function count()
	{
		return count($this->tasks);
	}
}