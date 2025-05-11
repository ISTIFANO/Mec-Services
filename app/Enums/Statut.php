<?php

namespace App\Enums;

enum Statut: string {
    case REJECTED = 'rejected';
    case APPROVED = 'approved';
    case PENDING = 'pending';
    case EN_COURS = 'en cours';
    case POSTULE = 'postulee';
    case TERMINE = 'terminé';
    case ANNULE = 'annulé';
}

