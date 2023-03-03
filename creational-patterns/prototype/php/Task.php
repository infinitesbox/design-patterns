<?php

class Task
{
	private $title;
	private $description;
	private $isDone = false;
	private $note;
	private $isOriginal = true;
	private $created_at;

	public function __construct(
		$title, $description
	)
	{
		$this->title = $title;
		$this->description = $description;
		$this->created_at = new DateTime; 
	}

	public function setNote($note)
	{
		$this->note = $note;
	}

	public function setDone($isDone)
	{
		$this->isDone = $isDone;
	}

	public function getStatus()
	{
		return $this->isDone ? 'Done' : 'On Progress';
	}

	public function info()
	{
		echo "<h4>{$this->title}</h4>";
		echo "<p>description: {$this->description}</p>";
		echo "<p>Createed At: {$this->created_at->format('Y-m-d H:i:s')}</p>";
		echo "<p>Is Done: {$this->getStatus()}</p>";
		if ($this->isDone)
			echo "<p>Note: {$this->note}</p>";
		if ($this->isOriginal == false)
			echo "<p>Someone else do or redo the same task.</p>";
	}

	public function __clone()
	{
		$this->isDone = false;
		$this->isOriginal = false;
		$this->created_at = new DateTime;
	}
}