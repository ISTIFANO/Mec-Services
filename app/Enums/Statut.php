<?php

namespace App\Enums;

enum Statut: string {
    case REJECTED = 'rejected';
    case APPROVED = 'approved';
    case PENDING = 'pending';
}
