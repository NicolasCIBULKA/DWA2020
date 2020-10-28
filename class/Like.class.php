<?php

class Like{
	private $_liked;
	private $_numberLikes;

	public function __construct($liked,$numberLikes){
		
		$this->setLiked($liked);
		$this->setNumberLikes($numberLikes);

	}
	
	public function setLiked($liked){
		if(!is_bool($liked)){
			trigger_error("Cette partie doit s'agir d'un bool", E_USER_WARNING);
        		return;
      		}

		$this->_liked=$liked;
	}
	
	public function setNumberLikes($numberLikes){

		if(!is_int($numberLikes)){
			trigger_error("Cette partie doit s'agir d'un int", E_USER_WARNING);
        		return;
      		}


		$this->_numberLikes=$numberLikes;
	}

	public function getLiked(){
		return $this->_liked;
	}

	public function getNumberLikes(){
		return $this->_numberLikes;
	}

}