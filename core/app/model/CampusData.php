<?php
class CampusData {
	public static $tablename = "campus";


	public function CampusData(){
		$this->name = "";
		$this->zone = "";
		$this->dependence = "";
		$this->birthdate = "";
		$this->address = "";
		$this->principal = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into campus (name,zone,dependence,code,birthdate,address,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->zone\",\"$this->dependence\",\"$this->code\",\"$this->birthdate\",\"$this->address\",$this->created_at)";
		return Executor::doit($sql);
	}

	public function add2(){
		$sql = "insert into campus (image,name,zone,dependence,campusname,birthdate,kind,created_at) ";
		$sql .= "value (\"$this->image\",\"$this->name\",\"$this->zone\",\"$this->dependence\",\"$this->campusname\",\"$this->birthdate\",$this->kind,$this->created_at)";
		return Executor::doit($sql);
	}

	public static function delete($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto CampusData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",zone=\"$this->zone\",campusname=\"$this->campusname\",dependence=\"$this->dependence\",kind=\"$this->kind\",status=\"$this->status\" where id=$this->id";
		Executor::doit($sql);
	}


	public function update_profile(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",zone=\"$this->zone\",bio=\"$this->bio\",address=\"$this->address\",phone=\"$this->phone\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set birthdate=\"$this->birthdate\" where id=$this->id";	
		Executor::doit($sql);
	}

	public function update_dependence(){
		$sql = "update ".self::$tablename." set dependence=\"$this->dependence\" where id=$this->id";	
		Executor::doit($sql);
	}

	public function update_img(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";	
		Executor::doit($sql);
	}

	public function activate(){
		$sql = "update ".self::$tablename." set is_active=1 where id=$this->id";	
	Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CampusData());
	}

	public static function getBydependence($dependence){
		$sql = "select * from ".self::$tablename." where dependence=\"$dependence\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CampusData());
	}


	public static function getLogin($dependence,$birthdate){
		$sql = "select * from ".self::$tablename." where dependence=\"$dependence\" and birthdate=\"$birthdate\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CampusData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new CampusData());

	}

	public static function getInactives(){
		$sql = "select * from ".self::$tablename." where is_active=0";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CampusData());
	}

	public static function getActives(){
		$sql = "select * from ".self::$tablename." where is_active=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CampusData());
	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CampusData());
	}


}

?>