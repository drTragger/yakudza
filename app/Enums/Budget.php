<?php

namespace App\Enums;

enum Budget: string
{
    case less8K = 'До 8 тис $';
    case less12K = 'До 12 тис $';
    case less15K = 'До 15 тис $';
    case less20K = 'До 20 тис $';
    case less30K = 'До 30 тис $';
    case more30K = 'Більше 30 тис $';
    case notSure = 'Не важливо';
}
