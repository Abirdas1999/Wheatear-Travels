<?php

class QUpdate
{
    protected $id = "";
    protected $travel = "";
    protected $name = "";
    protected $mail = "";
    protected $message = "";
    protected $phone = ""; // New phone attribute
    public $conn;

    function __construct()
    {
        include_once '../admin/admin/config/database.php';
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
    function setTravel($travel)
    {
        $this->travel = $travel;
    }
    function getTravel()
    {
        return $this->travel;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    function setMail($mail)
    {
        $this->mail = $mail;
    }
    function getMail()
    {
        return $this->mail;
    }

    function setMessage($message)
    {
        $this->message = $message;
    }
    function getMessage()
    {
        return $this->message;
    }

    function setPhone($phone) // Setter for phone
    {
        $this->phone = $phone;
    }
    function getPhone() // Getter for phone
    {
        return $this->phone;
    }

    // Insert data into the enquiryform table
    public function insertEnquiry()
    {
        $sql = "INSERT INTO enquiryform (travel, name, mail, message, phone) VALUES (:travel, :name, :mail, :message, :phone)";
        $stmt = $this->conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':travel', $this->travel);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->bindParam(':message', $this->message);
        $stmt->bindParam(':phone', $this->phone);

        try {
            return $stmt->execute();
        } catch (Exception $e) {
            throw new Exception("Error inserting enquiry: " . $e->getMessage());
        }
    }

    // Fetch data from the enquiryform table by ID
    public function getEnquiryById()
    {
        $sql = "SELECT * FROM enquiryform WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $this->id);

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Error fetching enquiry: " . $e->getMessage());
        }
    }

    // Fetch all enquiries
    public function getAllEnquiries()
    {
        $sql = "SELECT * FROM enquiryform";
        $stmt = $this->conn->prepare($sql);

        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Error fetching all enquiries: " . $e->getMessage());
        }
    }
}
