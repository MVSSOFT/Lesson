<?php
class DB{
    private $dbName;
    private $dbHost;
    private $dbUser;
    private $dbPassw;
    private $conn;
    
    public function __construct($dbH,$dbU,$dbP,$dbN)
    {
            $this->dbName=$dbN;
            $this->dbHost=$dbH;
            $this->dbUser=$dbU;
            $this->dbPassw=$dbP;
            $this->conn=mysqli_connect($this->dbHost,$this->dbUser,$this->dbPassw,$this->dbName);
            mysqli_set_charset($this->conn,"utf8");
    }
    
    public function selectSQL($sql)
    {
        $a  = mysqli_query($this->conn,$sql);
        while($row = mysqli_fetch_array($a,MYSQLI_ASSOC))
        {
            echo "<pre>";
            var_dump($row);
            echo "</pre>";
            
        }
    }
    
    public function __destruct()
    {
        echo __CLASS__."մահամերձ է";
        mysqli_close($this->conn);
    }
    
    public function __toString()
    {
        return "Սա DB տիպի օբյեկտ է";
    }
}
$myDb = new DB("localhost", "root", "", "less");
$myDb->selectSQL("SELECT * FROM EmployeeContacts LIMIT 0,5");
$myDb->selectSQL("SELECT * FROM Employees LIMIT 0,5");

unset($myDb); //Ջնջում է օբյեկտը
?>