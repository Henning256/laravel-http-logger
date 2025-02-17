<?php

return [

    /*
     * The log profile which determines whether a request should be logged.
     * It should implement `LogProfile`.
     */
    'log_profile' => \Spatie\HttpLogger\LogNonGetRequests::class,

    /*
     * The log writer used to write the request to a log.
     * It should implement `LogWriter`.
     */
    'log_writer' => \Spatie\HttpLogger\DefaultLogWriter::class,

    /*
     * The log channel used to write the request.
     */
    'log_channel' => env('LOG_CHANNEL', 'stack'),

    /*
     * The log level used to log the request.
     */
    'log_level' => 'info',

    /*
     * A fixed string for the log message. If not null the request information is logged to the context.
     */
    'log_message' => null,

    /*
     * Filter out body fields which will never be logged.
     */
    'except' => [
        'password',
        'password_confirmation',
    ],

];
