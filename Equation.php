<?php namespace polueva;

Class Equation{
	public function line($a, $b){
		if($a == 0){
			throw new PoluevaException("Ошибка: уравнения не существует.");
		}
		MyLog::log("Определено, что это линейное уравнение");
		return $this->X=array(-($b/$a));
	}
	protected $X;
}

?>