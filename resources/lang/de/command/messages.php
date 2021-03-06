<?php

return [
    'location' => [
        'no_location_found' => 'Shortcode wurde nicht gefunden.',
        'ask_short' => 'Location Short Code',
        'ask_long' => 'Location Beschreibung',
        'created' => 'Neue  Location (:name) mit der ID :id erstellt.',
        'deleted' => 'Location gelöscht.',
    ],
    'user' => [
        'search_users' => 'Gib einen Benutzernamen, eine UUID oder eine Email an',
        'select_search_user' => 'ID des Benutzers (Gib \'0\' ein, um erneut zu suchen)',
        'deleted' => 'Benutzer erfolgreich gelöscht.',
        'confirm_delete' => 'Bist du dir wirklich sicher?',
        'no_users_found' => 'Es wurden keine Benutzer gefunden.',
        'multiple_found' => 'Es wurden mehrere Accounts gefunden.',
        'ask_admin' => 'Ist dieser Benutzer ein Administrator?',
        'ask_email' => 'Email Adresse',
        'ask_username' => 'Benutzername',
        'ask_name_first' => 'Vorname',
        'ask_name_last' => 'Nachname',
        'ask_password' => 'Passwort',
        'ask_password_tip' => 'Wenn du das wirklich tun willst drücke Strg+c und benutze das `--no-password` flag.',
        'ask_password_help' => 'Das Passwort muss Zahlen, Groß- und Kleinbuchstaben enthalten und mindestens 8 Zeichen lang sein.',
        '2fa_help_text' => [
            'Dieser Befehl deaktiviert 2-Faktor-Authentifizierung für ein Benutzerkonto, falls es aktiviert ist. Dieser Befehl sollte nur zur Accountrettung verwendet werden, wenn sich ein Nutzer aus seinem Account ausgeschlossen hat.',
            'Falls das nicht ist, was du erreichen wolltest, drücke Strg+C, um diesen Prozess zu beenden.',
        ],
        '2fa_disabled' => '2-Faktor-Authentifizierung wurde für :email deaktiviert.',
    ],
    'schedule' => [
        'output_line' => 'Erledigt den Job für die erste Aufgabe in `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Lösche Service Backup-Datei :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Rebuild-Nachfrage für ":name" (#:id) auf der Node ":node" scheiterte mit dem Fehler: :message',
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (e.g. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Benutzername',
            'ask_smtp_password' => 'SMTP Password',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Which driver should be used for sending emails?',
            'ask_mail_from' => 'Email address emails should originate from',
            'ask_mail_name' => 'Name that emails should appear from',
            'ask_encryption' => 'Encryption method to use',
        ],
        'database' => [
            'host_warning' => 'It is highly recommended to not use "localhost" as your database host as we have seen frequent socket connection issues. If you want to use a local connection you should be using "127.0.0.1".',
            'host' => 'Database Host',
            'port' => 'Database Port',
            'database' => 'Database Name',
            'username_warning' => 'Using the "root" account for MySQL connections is not only highly frowned upon, it is also not allowed by this application. You\'ll need to have created a MySQL user for this software.',
            'username' => 'Database Benutzername',
            'password_defined' => 'It appears you already have a MySQL connection password defined, would you like to change it?',
            'password' => 'Database Password',
            'connection_error' => 'Unable to connect to the MySQL server using the provided credentials. The error returned was ":error".',
            'creds_not_saved' => 'Your connection credentials have NOT been saved. You will need to provide valid connection information before proceeding.',
            'try_again' => 'Go back and try again?',
        ],
        'app' => [
            'app_url_help' => 'The application URL MUST begin with https:// or http:// depending on if you are using SSL or not. If you do not include the scheme your emails and other content will link to the wrong location.',
            'app_url' => 'Application URL',
            'timezone_help' => 'The timezone should match one of PHP\'s supported timezones. If you are unsure, please reference http://php.net/manual/en/timezones.php.',
            'timezone' => 'Application Timezone',
            'cache_driver' => 'Cache Driver',
            'session_driver' => 'Session Driver',
            'using_redis' => 'You\'ve selected the Redis driver for one or more options, please provide valid connection information below. In most cases you can use the defaults provided unless you have modified your setup.',
            'redis_host' => 'Redis Host',
            'redis_password' => 'Redis Password',
            'redis_pass_help' => 'By default a Redis server instance has no password as it is running locally and inaccessable to the outside world. If this is the case, simply hit enter without entering a value.',
            'redis_port' => 'Redis Port',
            'redis_pass_defined' => 'It seems a password is already defined for Redis, would you like to change it?',
        ],
    ],
];
