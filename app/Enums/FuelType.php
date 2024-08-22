<?php

namespace App\Enums;

enum FuelType: string
{
    case petrol = 'Бензин';
    case gas = 'Газ';
    case diesel = 'Дизель';
    case electric = 'Електро';
    case notSure = 'Не важливо';
    case hybrid = 'Гібрид';
}
