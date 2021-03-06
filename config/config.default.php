<?php

// To change settings create a config.php

return [
    // MySQL-Connection Settings
    'database'                => [
        'host'     => env('MYSQL_HOST', (env('CI', false) ? 'mariadb' : 'localhost')),
        'database' => env('MYSQL_DATABASE', 'engelsystem'),
        'username' => env('MYSQL_USER', 'root'),
        'password' => env('MYSQL_PASSWORD', ''),
    ],

    // For accessing stats
    'api_key'                 => '',

    // Enable maintenance mode (show a static page)
    'maintenance'             => (bool)env('MAINTENANCE', false),

    // Application name (not the event name!)
    'app_name'                => env('APP_NAME', 'OIO Engelsystem'),

    // Set to development to enable debugging messages
    'environment'             => env('ENVIRONMENT', 'production'),

    // Footer links
    'footer_items'            => [
        // URL to the angel faq and job description
       // 'FAQ'     => env('FAQ_URL', 'https://events.ccc.de/congress/2013/wiki/Static:Volunteers'),

        // Contact email address, linked on every page
        'Contact' => env('CONTACT_EMAIL', 'mailto:35c3-orga@freifunk.space'),
    ],

    // Email config
    'email'                   => [
        // Can be mail, smtp, sendmail or log
        'driver' => env('MAIL_DRIVER', 'mail'),
        'from'   => [
            // From address of all emails
            'address' => env('MAIL_FROM_ADDRESS', 'noreply@freifunk.space'),
            'name'    => env('MAIL_FROM_NAME', env('APP_NAME', 'OIO Engelsystem'))
        ],

        'host'       => env('MAIL_HOST', 'localhost'),
        'port'       => env('MAIL_PORT', 587),
        // Transport encryption like tls
        'encryption' => env('MAIL_ENCRYPTION', null),
        'username'   => env('MAIL_USERNAME'),
        'password'   => env('MAIL_PASSWORD'),
        'sendmail'   => env('MAIL_SENDMAIL', '/usr/sbin/sendmail -bs'),
    ],

    // Default theme, 1=style1.css
    'theme'                   => env('THEME', 0),

    // Available themes
    'available_themes'        => [
        '7' => 'Engelsystem 35c3 dark (2018)',
        '6' => 'Engelsystem 34c3 dark (2017)',
        '5' => 'Engelsystem 34c3 light (2017)',
        '4' => 'Engelsystem 33c3 (2016)',
        '3' => 'Engelsystem 32c3 (2015)',
        '2' => 'Engelsystem cccamp15',
        '0' => 'Engelsystem light',
        '1' => 'Engelsystem dark',
    ],

    // Rewrite URLs with mod_rewrite
    'rewrite_urls'            => true,

    // Number of News shown on one site
    'display_news'            => 6,

    // Users are able to sign up
    'registration_enabled'    => (bool)env('REGISTRATION_ENABLED', true),

    // Only arrived angels can sign up for shifts
    'signup_requires_arrival' => false,

    // Number of hours that an angel has to sign out own shifts
    'last_unsubscribe'        => 3,

    // Define the algorithm to use for `crypt()` of passwords
    // If the user uses an old algorithm the password will be converted to the new format
    //  MD5         '$1'
    //  Blowfish    '$2y$13'
    //  SHA-256     '$5$rounds=5000'
    //  SHA-512     '$6$rounds=5000'
    'crypt_alg'               => '$6$rounds=5000',

    // The minimum length for passwords
    'min_password_length'     => 8,

    // Enables the T-Shirt configuration on signup and profile
    'enable_tshirt_size'      => false,

    // Number of shifts to freeload until angel is locked for shift signup.
    'max_freeloadable_shifts' => 2,

    // Local timezone
    'timezone'                => env('TIMEZONE', 'Europe/Berlin'),

    // Multiply 'night shifts' and freeloaded shifts (start or end between 2 and 6 exclusive) by 2
    'night_shifts'            => [
        'enabled'    => false, // Disable to weigh every shift the same
        'start'      => 2,
        'end'        => 6,
        'multiplier' => 2,
    ],

    // Voucher calculation
    'voucher_settings'        => [
        'initial_vouchers'   => 0,
        'shifts_per_voucher' => 1,
    ],

    // Available locales in /locale/
    'locales'                 => [
        'de_DE.UTF-8' => 'Deutsch',
        'en_US.UTF-8' => 'English',
    ],

    // The default locale to use
    'default_locale'          => env('DEFAULT_LOCALE', 'en_US.UTF-8'),

    // Available T-Shirt sizes, set value to null if not available
    'tshirt_sizes'            => [],

    // Session config
    'session'                 => [
        // Supported: pdo or native
        'driver' => env('SESSION_DRIVER', 'pdo'),

        // Cookie name
        'name'   => 'session',
    ],

    // IP addresses of reverse proxies that are trusted, can be an array or a comma separated list
    'trusted_proxies'         => env('TRUSTED_PROXIES', ['127.0.0.0/8', '::ffff:127.0.0.0/8', '::1/128']),

    // Add additional headers
    'add_headers'             => (bool)env('ADD_HEADERS', true),
    'headers'                 => [
        'X-Content-Type-Options'  => 'nosniff',
        'X-Frame-Options'         => 'sameorigin',
        'Referrer-Policy'         => 'strict-origin-when-cross-origin',
        'Content-Security-Policy' => 'default-src \'self\' \'unsafe-inline\' \'unsafe-eval\'',
        'X-XSS-Protection'        => '1; mode=block',
        'Feature-Policy'          => 'autoplay \'none\'',
        //'Strict-Transport-Security' => 'max-age=7776000',
        //'Expect-CT' => 'max-age=7776000,enforce,report-uri="[uri]"',
    ],
];
