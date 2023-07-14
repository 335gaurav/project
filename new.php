<?php

class AttendanceSheet {
    private $name;
    private $date;
    private $status;

    // Constructor to set initial values
    public function __construct($name, $date, $status) {
        $this->name = $name;
        $this->date = $date;
        $this->status = $status;
    }

    // Getters and Setters
    public function getName() {
        return $this->name;
    }

    public function getDate() {
        return $this->date;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}


// Create an array of attendance sheet objects
$students = array(
    new AttendanceSheet("John Doe", "2023-03-13", "Present"),
    new AttendanceSheet("Jane Smith", "2023-03-13", "Absent"),
    new AttendanceSheet("Mike Johnson", "2023-03-13", "Present")
);

// Display the attendance details
foreach ($students as $student) {
    echo "Name: " . $student->getName() . "<br>";
    echo "Date: " . $student->getDate() . "<br>";
    echo "Status: " . $student->getStatus() . "<br><br>";
}






class Attendance {
  private $conn;

  public function __construct($conn) {
      $this->conn = $conn;
  }

  public function markAttendance($studentName, $date, $status) {
      $sql = "INSERT INTO attendance (student_name, date, status) VALUES (?, ?, ?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param("sss", $studentName, $date, $status);
      return $stmt->execute();
  }

  public function getAttendanceRecords() {
      $sql = "SELECT * FROM attendance";
      $result = $this->conn->query($sql);
      return $result->fetch_all(MYSQLI_ASSOC);
  }

  // Implement other methods like updateAttendance(), deleteAttendance(), etc.
}

// Example Usage:
// $conn = new mysqli("localhost", "username", "password", "database");
// $attendance = new Attendance($conn);

// $attendance->markAttendance("John Doe", "2023-03-15", "Present");

// $records = $attendance->getAttendanceRecords();
// foreach ($records as $record) {
//   echo $record['student_name'] . " - " . $record['status'] . "<br>";
// }



class Button {
  private $label;
  
  public function __construct($label) {
      $this->label = $label;
  }
  
  public function render() {
      echo "<button>" . $this->label . "</button>";
  }
}

?>
<!DOCTYPE html>
<html>
<body>

<?php
    // Create button instances
    $button1 = new Button('Button 1');
    $button2 = new Button('Button 2');
    
    if(isset($_POST['switch'])) {
        // Swap the buttons
        $temp = $button1;
        $button1 = $button2;
        $button2 = $temp;
    }
?>

<!-- Render the buttons -->
<?php $button1->render(); ?>
<?php $button2->render(); ?>

<!-- Form to switch buttons -->
<form method="post">
    <input type="submit" name="switch" value="Switch Buttons">
</form>

</body>
</html>


