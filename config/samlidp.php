<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SAML idP configuration file
    |--------------------------------------------------------------------------
    |
    | Use this file to configure the service providers you want to use.
    |
    */
    // Outputs data to your laravel.log file for debugging
    'debug' => false,
    // Define the email address field name in the users table
    'email_field' => 'email',
    // The URI to your login page
    'login_uri' => 'login',
    // The URI to the saml metadata file, this describes your idP
    'issuer_uri' => 'saml/metadata',
    // Name of the certificate PEM file
    'certname' => 'cert.pem',
    // Name of the certificate key PEM file
    'keyname' => 'key.pem',
    // list of all service providers
    'sp' => [
        // Base64 encoded ACS URL
        // 'aHR0cHM6Ly9teWZhY2Vib29rd29ya3BsYWNlLmZhY2Vib29rLmNvbS93b3JrL3NhbWwucGhw' => [
        //     // Your destination is the ACS URL of the Service Provider
        //     'destination' => 'https://myfacebookworkplace.facebook.com/work/saml.php'
        // ]
    ]
];
