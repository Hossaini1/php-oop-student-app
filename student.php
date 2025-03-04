<?php

require_once "db.php";

class Student
{

    public $table = "student";

    private $name;
    private $age;
    private $field;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setField($field)
    {
        $this->field = $field;
    }

    public function insertData()
    {
        $sql = "INSERT INTO $this->table (name, age , field) VALUES(:name, :age , :field)";
        $stmt = DB::prepareOwn($sql);

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":field", $this->field);

        try {
            return $stmt->execute();
        } catch (Exception $e) {
            throw new Exception("Error database" . $e->getMessage());
        }
    }

    public function readAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepareOwn($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteData($id)
    {
        $sql = "DELETE FROM $this->table WHERE id=:id";
        $stmt = DB::prepareOwn($sql);
        $stmt->bindParam(":id", $id);
       return $stmt->execute();
        
    }


    public function getOneUser($id){
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::prepareOwn($sql);

        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateData($id)
    {
        $sql = "UPDATE $this->table SET name=:name , field=:field , age=:age WHERE id=:id";
        $stmt = DB::prepareOwn($sql);

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":field", $this->field);
        $stmt->bindParam(":id", $id);

        try {

            return $stmt->execute();

        } catch (Exception $e) {

            throw new Exception("Error database" . $e->getMessage());
        }
    }
}
