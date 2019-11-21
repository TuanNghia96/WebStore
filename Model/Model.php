<?php

Class Model
{
    protected $conn;
    
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
// Check connection
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=laptop", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
    public function list_data()
    {
        $sql = "SELECT * FROM laptops";
        $result = $this->conn->query($sql);
        return $result;
    }
    
    public function show_data($id)
    {
        $conn = new PDO("mysql:host=$servername;dbname=laptop", $username, $password);
        
        $sql = "SELECT * FROM laptops WHERE id = $id";
        $result = $this->conn->query($sql);
        return $result;
    }
    
    public function store_data()
    {
        $sql = "INSERT INTO laptops (name, price, type) VALUES ('" . $_POST['name'] . "'," . $_POST['price'] . ",'" . $_POST['type'] . "')";
        if ($this->conn->query($sql) == true) {
            echo "New record created successfully";
        } else {
            echo "false";
        }
    }
    
    public function update_data()
    {
        $sql = "UPDATE laptops SET name ='" . $_POST['name'] . "', price=" . $_POST['price'] . ", type='" . $_POST['type'] . "' WHERE id=" . $_GET['id'];
        if ($this->conn->query($sql) == true) {
            return "New record updated successfully";
        } else {
            echo "false";
        }
    }
    
    public function delete_data($id)
    {
        $sql = "DELETE FROM laptops WHERE id = $id";
        var_dump($sql);
        $this->conn->query($sql);
//        return $this->conn->query($sql);
    }
}
?>