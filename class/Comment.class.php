<?php

class Comment{
	private $_textComment;
	private $_previousComment;


	public function __construct($textComment,$previousComment){
		
		$this->setTextComment($textComment);
		$this->setPreviousComment($previousComment);

	}
	public function getTextComment(){
		return $this->_textComment;
	}

	public function getPreviousComment(){
		return $this->_previousComment;
	}

	public function setTextComment($textComment){
		
		if(!is_string($textComment)){
			trigger_error("Cette partie doit s'agir d'un string", E_USER_WARNING);
        		return;

		$this->_textComment;
	}
	
	public function setPreviousComment($previousComment){
		$this->_previousComment;
	}
}



	