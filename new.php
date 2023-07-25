<?php
class WorkSchedule {
    private $startHour;
    private $endHour;
  
    public function __construct($startHour, $endHour) {
        $this->startHour = $startHour;
        $this->endHour = $endHour;
    }
  
    public function getWorkingHours() {
        $start = new DateTime($this->startHour);
        $end = new DateTime($this->endHour);
        $diff = $end->diff($start);
  
        return $diff->format('%H:%I:%S');
    }
  }
  
  // Example usage
  $schedule = new WorkSchedule('09:46:44', '17:20:02');
  $workingHours = $schedule->getWorkingHours();
  echo "Working hours: $workingHours";









  class WorkingDay extends DashboardController {
    private $startHour;
    private $endHour;

    public function __construct($startHour, $endHour) {
        $this->startHour = $startHour;
        $this->endHour = $endHour;
    }

    public function getWorkingHours() {
        return $this->endHour - $this->startHour;
    }
}

// Example usage:
$today = new WorkingDay(9, 17); // Assuming the working day starts at 9 AM and ends at 5 PM
$workingHours = $today->getWorkingHours();
echo "Working hours in a day: " . $workingHours;