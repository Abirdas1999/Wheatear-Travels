<?php

class Register
{
    protected $id = "";
    protected $name = "";
    protected $email = "";
    protected $pass = "";
    public $conn;

    function __construct()
    {
        // include the database connection file
        // include_once 'config/dbConnect.php';
        include_once './admin/config/database.php';
        $db = new database();
        $this->conn = $db->connect();
    }

    // Setters and Getters
    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
    {
        return $this->email;
    }

    function setPass($pass)
    {
        $this->pass = $pass;
    }
    function getPass()
    {
        return $this->pass;
    }

    // Insert registration data into the database
    public function registerUser()
    {
        $sql = "INSERT INTO register (name, email, pass) VALUES (:name, :email, :pass)";
        $stmt = $this->conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);

        try {
            return $stmt->execute();
        } catch (Exception $e) {
            throw new Exception("Error registering user: " . $e->getMessage());
        }
    }

    // Fetch user data by email for login
    public function loginUser()
    {
        $sql = "SELECT * FROM register WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $this->email);

        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Check if user exists and compare plain text passwords
            if ($user && $this->pass === $user['pass']) {
                return $user;  // Login successful
            } else {
                return false;  // Invalid email or password
            }
        } catch (Exception $e) {
            throw new Exception("Error logging in user: " . $e->getMessage());
        }
    }
}
