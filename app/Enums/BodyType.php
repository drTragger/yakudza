<?php

namespace App\Enums;

enum BodyType: string
{
    case universal = 'Універсал';
    case jeep = 'Джип';
    case suv = 'Паркетник';
    case sedan = 'Седан';
    case notSure = 'Не важливо';
    case hatchback = 'Хетчбек';
}
