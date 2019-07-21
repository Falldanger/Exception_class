<?php
	echo '<b>Try-catch-finally :</b>'.'</br>';

	class EmptyException extends Exception{
		public function __construct($name,int $code){
			parent::__construct('',$code);
		}
	}
	class LongException extends Exception{
		public function __construct($name,int $code){
			parent::__construct('',$code);
		}
	}
	class InvalidException extends Exception{
		public function __construct($name,int $code){
			parent::__construct('',$code);
		}
	}

			
	try{
		$email='';

		$reg = '/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+(([a-z]){2,4})$/';
		

		if($email=='') {throw new EmptyException('Email  not specified',1);
			}
		if(strlen($email)>255){throw new LongException('Email too long',2);
			}
		if(!preg_match($reg, $email)){throw new InvalidException('Email incorrectly specified',4);
			}
		else{
			echo 'Correct email';
		}
	}

	catch(Exception $e){
		if($e instanceof EmptyException){
			echo 'It`s exception of EmptyException class'.'</br>';
		}
		elseif($e instanceof LongException){
			echo 'It`s exception of LongException class'.'</br>';
		}
		elseif($e instanceof InvalidException){
			echo 'It`s exception of InvalidException class'.'</br>';
		}
		echo $e->getCode().'</br>';
	}

?>