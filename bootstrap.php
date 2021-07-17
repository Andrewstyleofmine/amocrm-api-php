<?php

use AmoCRM\Client\AmoCRMApiClient;
use Symfony\Component\Dotenv\Dotenv;

const API_PER_PAGE_LIMIT = 500;
include_once __DIR__ . '/vendor/autoload.php';

echo "start";
$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$clientId = $_ENV['CLIENT_ID'];
$clientSecret = $_ENV['CLIENT_SECRET'];
$redirectUri = $_ENV['CLIENT_REDIRECT_URI'];


$apiClient = new AmoCRMApiClient($clientId, $clientSecret, $redirectUri);

include_once __DIR__ . '/token_actions.php';
include_once __DIR__ . '/error_printer.php';
