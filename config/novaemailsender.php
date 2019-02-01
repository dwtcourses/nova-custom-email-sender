<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    |--------------------------------------------------------------------------
    |
    | The mail driver with which the message will be sent with.
    |
    */

    'provider' => config('mail.driver'),

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    |--------------------------------------------------------------------------
    |
    | The name and associated email address from which the message will be sent.
    |
    */

    'from' => [
        'address' => config('mail.from.address'),
        'name' => config('mail.from.name'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Default User Model
    |--------------------------------------------------------------------------
    |
    | To use the "send all" feature, define the model class and the accompanying
    | properties to populate the message with.
    |
    */

    'model' => [
        'class' => \App\User::class,
        'email' => 'email',
        'name' => null,
        'first_name' => 'first_name',
        'last_name' => 'last_name',
    ],

    /*
    |--------------------------------------------------------------------------
    | Email Template
    |--------------------------------------------------------------------------
    |
    | The Blade template used to send the email. By default this template
    | utilizes the existing notification layout template. So any modifications
    | that you have made to this layout template (like the header, colors, etc)
    | will be inherited by the view supplied by this package.

    | IMPORTANT: If you decide to supply your own Blade template, make sure that
    | it includes a {!! $content !!} tag as this is what is used to parse the
    | WYSIWYG's content
    |
    */

    'template' => resource_path('vendor/custom-email-sender/email'),

    /*
    |--------------------------------------------------------------------------
    | Quill WYSIWYG editor configuration
    |--------------------------------------------------------------------------
    |
    | The basic buttons that come enabled out of the box. These were chosen to
    | eliminate the potential intrusion of the email layout. Other options are
    | available and documented on the Quill website: https://quilljs.com/docs
    |
    */

    'editor' => [

        'toolbar' => [
            [ 'header' => 1 ],
            [ 'header' => 2 ],
            [ 'list' => 'ordered' ],
            [ 'list' => 'bullet' ],
            'bold',
            'italic',
            'link',
        ]
    ],

];
