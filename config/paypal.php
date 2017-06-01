<?php
return array(
    // set your paypal credential
    'client_id' => 'AVyG6nwqRRGJlW1o5j2s0DhVFWgTrBoOeLcIJYAo0GLPJtdmy5YAWpwvdXIAlsqYldzngNRKN2SOytF8',
    'secret' => 'EP-uFlHk62iQja_-o-xMfAsiMYWKhV0xz9Km99G2grGAtFWw-2hi5og0w0AsYEwdNfkLkfUs0SLG_A5_',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 0,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);