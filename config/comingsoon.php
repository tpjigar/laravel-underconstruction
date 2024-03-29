<?php

return [
    'snw_enable_email_form' => env('OFFLINE_SHOW_EMAIL_FORM', false),
    'snw_send_email_to' => env('OFFLINE_SEND_EMAIL_TO','contact@example.com'),
    'snw_test_mode' => env('OFFLINE_ENABLE', true),
    'snw_year'=> env('OFFLINE_YEAR', '2022'),
    'snw_month'=> env('OFFLINE_MONTH', '12'),
    'snw_day' => env('OFFLINE_DAY' , '31'),
    'snw_hours' => env('OFFLINE_HOURS', '23'),
    'snw_minutes' => env('OFFLINE_MINUTES','59'),
    'snw_seconds' => env ('OFFLINE_SECONDS','59'),

    'snw_facebook' => env ('OFFLINE_FACEBOOK','https://www.facebook.com/'),
    'snw_twitter' => env ('OFFLINE_TWITTER','https://twitter.com/'),
    'snw_instagram' => env ('OFFLINE_INSTAGRAM','https://www.instagram.com'),
    'snw_github' => env ('OFFLINE_GITHUB','https://github.com/'),
    'snw_mail' => env ('OFFLINE_MAIL','info@example.com')
];
