<?php
include_once('DB.php');

class Student extends DB {
    public static function all()
    {
        return parent::connect()->query("SELECT * FROM students")->fetch_all(MYSQLI_ASSOC);
    }

    public static function find($id){
        return parent::connect()->query("SELECT * FROM students WHERE id = '$id'")->fetch_assoc();
    }

    public static function create($data)
    {
        $name = $data['name'];

        parent::connect()->query("INSERT INTO students (name) VALUES ('$name')");

        $insert_id = parent::$koneksi->insert_id;

        return Student::find($insert_id);

    }
}
?>