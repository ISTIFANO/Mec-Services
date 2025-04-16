<?php

namespace App\Enums;

enum Roles: string {
    case CLIENT = 'client';
    case MECHANICIEN = 'mechanicien';
    case ADMIN = 'admin';
}
