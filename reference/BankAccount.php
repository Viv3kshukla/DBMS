<?php
	class BankAccount{
		public function __construct($amount){
			$this->account=$amount;
		}
		public function deposit($amount){
			$this->account=$this->account+$amount;
		}
		public function withdraw($amount){
			if($this->account>=$amount){
				$this->account=$this->account-$amount;
			}
			else{
				echo "<center><b> Not Sufficient Balance.<br></b></center>";
			}
		}
		public function printAccount(){
			echo "Account Balance is : ".$this->account."<br>";
		}
	}
?>