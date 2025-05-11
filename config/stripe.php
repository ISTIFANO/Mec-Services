<?php


 return [
    'key' => env('STRIPE_KEY'),
    'secret' => env('STRIPE_SECRET'),
    'secret_exists' => !empty($secret),
    'secret_preview' => substr($secret, 0, 8) . '...',
    'publishable_exists' => !empty($publishable),
    'publishable_preview' => $publishable ? substr($publishable, 0, 8) . '...' : 'Not found',
    'publishable_key_full' => $publishable,
      ];


?>