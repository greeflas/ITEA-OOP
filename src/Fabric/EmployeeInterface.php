<?php

namespace App\Fabric;

interface EmployeeInterface
{
    public function work();

    public function pause($minutes);
}
