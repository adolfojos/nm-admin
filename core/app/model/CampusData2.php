<?php
    class CampusData2 {
        public static $tablename = "campus";
        
        
        public function CampusData2(){
            $this->name = "";
            $this->code = "";
            $this->zone = "";
            $this->dependence = "";
            $this->created_at = "NOW()";
        }
        
        public static function getById($id){
            $sql = "select * from ".self::$tablename." where id=$id";
            $query = Executor::doit($sql);
            return Model::one($query[0],new CampusData2());
        }
        // partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
        public function update(){
            $sql = "update ".self::$tablename." set name=\"$this->name\",code=\"$this->code\",zone=\"$this->zone\",dependence=\"$this->dependence\" where id=$this->id";
            Executor::doit($sql);
        }
        
    }
?>
	