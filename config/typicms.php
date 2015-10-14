<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Cache system (use cache decorator in place of repository classes)
    |--------------------------------------------------------------------------
    */
    'cache' => true,

    /*
    |--------------------------------------------------------------------------
    | Save each front office page in public/html as flat html file.
    | Pages are generated only when debug is off and no user is connected.
    | Eloquent save and delete events empty html directory.
    |--------------------------------------------------------------------------
    */
    'html_cache' => false,

    /*
    |--------------------------------------------------------------------------
    | You can choose not to have main locale in URL
    |--------------------------------------------------------------------------
    |
    | If you chage this value, you will have to regenerate
    | menulinks and pages uri.
    |
    */
    'main_locale_in_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Welcome message url present in Dashboard
    |--------------------------------------------------------------------------
    */
    'welcome_message_url' => getEnv('WELCOME_MESSAGE_URL'),

    /*
    |--------------------------------------------------------------------------
    | Per module config
    |--------------------------------------------------------------------------
    |
    | Here you can override config for each module.
    |
    */
    'news' => [
        'per_page' => 50,
    ],

];
