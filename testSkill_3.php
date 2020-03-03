<?php 
    class Company{
        public $name;

        public function setCompanyName($name){
            $this->name= $name;
        }

        public function getCompanyName(){
            return $this->name;
        }
    }

    $outName = new Company;

    $outName->setCompanyName('PT DOT');
    echo '<b>' . $outName->getCompanyName() . '</b>' ;

    class Department{
        public $nameD;

        public function setDepartmentName($nameD){
            $this->nameD= $nameD;
        }

        public function getDepartmentName(){
            return $this->nameD;
        }
    }

    $outNameD = new Department;

    $outNameD->setDepartmentName('IT');
    echo '<br> <b>' . $outNameD->getDepartmentName() . '</b>' ;

    class Employee{
        public $nameEmployee;
        public $tittle;
        public $salary;

        public function setEmployeeName($nameEmployee){
            $this->nameEmployee= $nameEmployee;
        }

        public function getEmployeeTittle($tittle){
            return "Posisi Anda Saat Ini $tittle";
        }

        public function getEmployeeProfile($profile){
            return "Posisi Anda Saat Ini $Profile";
        }

        public function getEmployeeMonthlySalary($Salary){
            return "Posisi Anda Saat Ini $Salary";
        }
    }

    $outNameE = new Employee;

    $outNameE->setEmployeeName('Dandy Kurniawan');
    echo '<br> <b>' . $outNameE->getEmployeeName() . '</b>' ;

    $outTittle = new Tittle;
    echo '<br> <b>' . $outTittle->getEmployeeTittle("QA Engineer") . '</b>' ; 

    $outProfile = new Profile;
    echo '<br> <b>' . $outProfile->getEmployeeProfile("On Site Malang") . '</b>' ; 

    $outSalary = new Salary;
    echo '<br> <b>' . $outSalary->getEmployeeSalary("Rp 5.000.000") . '</b>' ; 
    
?>