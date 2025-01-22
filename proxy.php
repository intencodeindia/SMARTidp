<?php
$token = '483de450064b65'; // Your API token
$api_url = 'https://ipinfo.io/json?token=' . $token;

// Fetch the content from ipinfo.io API
$response = @file_get_contents($api_url);

// Check if the request was successful
if ($response === FALSE) {
    echo json_encode(['error' => 'Error fetching data']);
    exit;
}

// Decode the JSON response to an associative array
$data = json_decode($response, true);

// Mapping of country code abbreviations to country calling codes
$country_code_map = [
    'US' => '+1',
    'GB' => '+44',
    'IN' => '+91',
    'AU' => '+61',
    'DE' => '+49',
    'FR' => '+33',
    'JP' => '+81',
    'CN' => '+86',
    'BR' => '+55',
    'NZ' => '+64',
    'KR' => '+82',
    'RU' => '+7',
    'AE' => '+971',
    'SA' => '+966',
    'KW' => '+965',
    'QA' => '+974',
    'OM' => '+968',
    'BH' => '+973',
    'PK' => '+92',
    'BD' => '+880',
    'MV' => '+960',
    'TH' => '+66',
    'PH' => '+63',
    // Add more mappings as needed
];

// Mapping of country code abbreviations to full country names
$country_name_map = [
    'US' => 'United States',
    'GB' => 'United Kingdom',
    'IN' => 'India',
    'AU' => 'Australia',
    'DE' => 'Germany',
    'FR' => 'France',
    'JP' => 'Japan',
    'CN' => 'China',
    'BR' => 'Brazil',
    'NZ' => 'New Zealand',
    'KR' => 'South Korea',
    'RU' => 'Russia',
    'AE' => 'United Arab Emirates',
    'SA' => 'Saudi Arabia',
    'KW' => 'Kuwait',
    'QA' => 'Qatar',
    'OM' => 'Oman',
    'BH' => 'Bahrain',
    'PK' => 'Pakistan',
    'BD' => 'Bangladesh',
    'MV' => 'Maldives',
    'TH' => 'Thailand',
    'PH' => 'Philippines',
    // Add more mappings as needed
];

// Extract the country and country code abbreviation
$country_code = isset($data['country']) ? $data['country'] : 'Unknown';

// Get the corresponding calling code or use default
$country_calling_code = isset($country_code_map[$country_code]) ? $country_code_map[$country_code] : (isset($data['country']) ? $data['country'] : 'Unknown');

// Get the corresponding full country name or fallback to the country abbreviation
$country_name = isset($country_name_map[$country_code]) ? $country_name_map[$country_code] : (isset($data['country']) ? $data['country'] : 'Unknown');

// Prepare the response with country name and country calling code
$response_data = [
    'country_name' => $country_name, // Full country name or fallback
    'country_calling_code' => $country_calling_code // Calling code or fallback
];

// Send the JSON response
echo json_encode($response_data);
?>
