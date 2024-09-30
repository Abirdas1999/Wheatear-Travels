<?php
class PackageUpdate
{
    protected $no = ""; // Auto-increment column
    protected $name = "";
    protected $title = "";
    protected $subtitle = "";
    protected $days = "";
    protected $price = "";
    protected $sell = "";
    protected $fromD = "";
    protected $toD = "";
    protected $schedule = "";
    protected $inclusion = "";
    protected $exclusion = "";
    protected $hotel = "";
    protected $photo1 = "";
    protected $photo2 = "";
    protected $photo3 = "";
    protected $photo4 = "";
    protected $photo5 = "";
    protected $photo6 = "";
    public $conn;

    // Constructor to initialize database connection
    function __construct()
    {
        include_once '../admin/admin/config/database.php';
        // include_once '../config/database.php';

        $db = new database();
        $this->conn = $db->connect();
    }

    // Setters and Getters for each property
    function setNo($no)
    {
        $this->no = $no;
    }
    function getNo()
    {
        return $this->no;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }
    function getTitle()
    {
        return $this->title;
    }

    function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }
    function getSubtitle()
    {
        return $this->subtitle;
    }

    function setDays($days)
    {
        $this->days = $days;
    }
    function getDays()
    {
        return $this->days;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        return $this->price;
    }

    function setSell($sell)
    {
        $this->sell = $sell;
    }
    function getSell()
    {
        return $this->sell;
    }

    function setFromD($fromD)
    {
        $this->fromD = $fromD;
    }
    function getFromD()
    {
        return $this->fromD;
    }

    function setToD($toD)
    {
        $this->toD = $toD;
    }
    function getToD()
    {
        return $this->toD;
    }

    function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    }
    function getSchedule()
    {
        return $this->schedule;
    }

    function setInclusion($inclusion)
    {
        $this->inclusion = $inclusion;
    }
    function getInclusion()
    {
        return $this->inclusion;
    }

    function setExclusion($exclusion)
    {
        $this->exclusion = $exclusion;
    }
    function getExclusion()
    {
        return $this->exclusion;
    }


    function setHotel($hotel)
    {
        $this->hotel = $hotel;
    }
    function getHotel()
    {
        return $this->hotel;
    }



    function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;
    }
    function getPhoto1()
    {
        return $this->photo1;
    }


    function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;
    }
    function getPhoto2()
    {
        return $this->photo2;
    }


    function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;
    }
    function getPhoto3()
    {
        return $this->photo3;
    }


    function setPhoto4($photo4)
    {
        $this->photo4 = $photo4;
    }
    function getPhoto4()
    {
        return $this->photo4;
    }


    function setPhoto5($photo5)
    {
        $this->photo5 = $photo5;
    }
    function getPhoto5()
    {
        return $this->photo5;
    }


    function setPhoto6($photo6)
    {
        $this->photo6 = $photo6;
    }
    function getPhoto6()
    {
        return $this->photo6;
    }


    // Add a new package
    public function addPackage($fileUploads = [])
    {
        // Handle image uploads
        foreach ($fileUploads as $index => $file) {
            if (isset($file['name']) && $file['error'] === 0) {
                $imageName = $file['name'];
                $imageTempName = $file['tmp_name'];
                $targetPath = "../admin/admin/img/packages/" . basename($imageName);
                if (move_uploaded_file($imageTempName, $targetPath)) {
                    $this->{'photo' . ($index + 1)} = $imageName;  // Store the image name
                } else {
                    throw new Exception("Failed to upload image: " . $imageName);
                }
            }
        }

        $sql = "INSERT INTO package (name, title, subtitle, days, price, sell, fromD, toD, schedule, inclusion, exclusion, hotel, photo1, photo2, photo3, photo4, photo5, photo6) 
                VALUES (:name, :title, :subtitle, :days, :price, :sell, :fromD, :toD, :schedule, :inclusion, :exclusion, :hotel, :photo1, :photo2, :photo3, :photo4, :photo5, :photo6)";
        $stmt = $this->conn->prepare($sql);

        // Binding parameters
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":subtitle", $this->subtitle);
        $stmt->bindParam(":days", $this->days);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":sell", $this->sell);
        $stmt->bindParam(":fromD", $this->fromD);
        $stmt->bindParam(":toD", $this->toD);
        $stmt->bindParam(":schedule", $this->schedule);
        $stmt->bindParam(":inclusion", $this->inclusion);
        $stmt->bindParam(":exclusion", $this->exclusion);
        $stmt->bindParam(":hotel", $this->hotel);
        $stmt->bindParam(":photo1", $this->photo1);
        $stmt->bindParam(":photo2", $this->photo2);
        $stmt->bindParam(":photo3", $this->photo3);
        $stmt->bindParam(":photo4", $this->photo4);
        $stmt->bindParam(":photo5", $this->photo5);
        $stmt->bindParam(":photo6", $this->photo6);

        try {
            return $stmt->execute();
        } catch (Exception $e) {
            throw new Exception("Error adding Package Details: " . $e->getMessage());
        }
    }


    // Fetch all packages
    public function getPackage()
    {
        $stmt = $this->conn->prepare('SELECT * FROM package');

        try {
            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            throw new Exception("Error fetching Package Details: " . $e->getMessage());
        }
    }

    public function getPackageByNo($no)
    {
        $stmt = $this->conn->prepare("SELECT * FROM package WHERE no = :no");
        $stmt->bindParam(':no', $no, PDO::PARAM_INT);

        try {
            if ($stmt->execute()) {
                return $stmt->fetch(PDO::FETCH_ASSOC); // Fetch the data as an associative array
            }
        } catch (Exception $e) {
            throw new Exception("Error fetching Package Details by No: " . $e->getMessage());
        }

        return null;
    }

     //fetch 4 package
     public function getCPackage() {
        $sql = "SELECT * FROM package ORDER BY no DESC LIMIT 4";
        $stmt = $this->conn->prepare($sql); // Assuming $this->conn is your database connection
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all the rows as associative arrays
    }
    

// Update package by no (auto-incremented field)
    public function updatePackage($no, $name, $title, $subtitle, $days, $price, $sell, $fromD, $toD, $schedule, $inclusion, $exclusion, $hotel, $photo1, $photo2, $photo3, $photo4, $photo5, $photo6) {
        // Assuming 'details' corresponds to 'description' in your SQL schema
        $sql = "UPDATE package SET name = :name, title = :title, subtitle = :subtitle, days = :days, price = :price, sell = :sell, fromD = :fromD, toD = :toD, schedule = :schedule, inclusion = :inclusion, exclusion = :exclusion, hotel = :hotel, photo1 = :photo1, photo2 = :photo2, photo3 = :photo3, photo4 = :photo4, photo5 = :photo5, photo6 = :photo6 WHERE no = :no";
        $stmt = $this->conn->prepare($sql);
        
        // Bind the parameters correctly
        $stmt->bindParam(':no', $no, PDO::PARAM_INT, PDO::PARAM_STR);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":title", $title, PDO::PARAM_STR);
        $stmt->bindParam(":subtitle", $subtitle, PDO::PARAM_STR);
        $stmt->bindParam(":days", $days, PDO::PARAM_STR);
        $stmt->bindParam(":price", $price, PDO::PARAM_INT);
        $stmt->bindParam(":sell", $sell, PDO::PARAM_INT);
        $stmt->bindParam(":fromD", $fromD, PDO::PARAM_STR);
        $stmt->bindParam(":toD", $toD, PDO::PARAM_STR);
        $stmt->bindParam(":schedule", $schedule, PDO::PARAM_STR);
        $stmt->bindParam(":inclusion", $inclusion, PDO::PARAM_STR);
        $stmt->bindParam(":exclusion", $exclusion, PDO::PARAM_STR);
        $stmt->bindParam(":hotel", $hotel, PDO::PARAM_STR);
        $stmt->bindParam(":photo1", $photo1, PDO::PARAM_STR);
        $stmt->bindParam(":photo2", $photo2, PDO::PARAM_STR);
        $stmt->bindParam(":photo3", $photo3, PDO::PARAM_STR);
        $stmt->bindParam(":photo4", $photo4, PDO::PARAM_STR);
        $stmt->bindParam(":photo5", $photo5, PDO::PARAM_STR);
        $stmt->bindParam(":photo6", $photo6, PDO::PARAM_STR);
    
        try {
            return $stmt->execute(); // Execute within try-catch block for error handling
        } catch (Exception $e) {
            throw new Exception("Error updating Service Details: " . $e->getMessage());
        }
    }

    // Delete package by no (auto-incremented field)
    public function deletePackageByNo($no)
    {
        $sql = "DELETE FROM package WHERE no = :no";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":no", $no, PDO::PARAM_INT);

        try {
            return $stmt->execute();
        } catch (Exception $e) {
            throw new Exception("Error deleting Package Details: " . $e->getMessage());
        }
    }
}
