<?php
	class calcClass
	{
		public function two_sum($nums,$target_num){
			for($i=0;$i < count($nums) - 1;$i++){
				for($j=1;$j < count($nums);$j++){
					$k = $nums[$i] + $nums[$j];
					if($k == $target_num){
						return array($i,$j);
					}
				}
			}
			return array();
		}
	}
	$calc = new calcClass();
	$result = $calc->two_sum($nums,$target_num);
?>