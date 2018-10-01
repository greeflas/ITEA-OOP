<?php

class Boss
{
    private $employees = [];

    public function addEmployee(EmployeeInterface $employee)
    {
        $this->employees[] = $employee;
    }

    public function starWork()
    {
        foreach ($this->employees as $employee) {
            $employee->work();
        }
    }
}
