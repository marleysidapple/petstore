<?php
return [
    // set your paypal credential
    'client_id' => 'AYCGXb1tjr_f9zpA2_pQju0pvap-kvbueFOpvCioks6dWs-OhrznA40Ia3gn6hBGxOPnZHmbZf-nJqq1',
    'secret' => 'EPUUegRjnysfl2x44FP8CBdtmh5YHrrwoXvAae66DtRpBLjW3ZzIGlrJnEMn32hKkwxudk6ZSLSzEHRg',
    // 'client_id' => 'AQnXZKKS15r3lWSZxZfLz2kA1_lz7lpRLqYQ_TOe1qmEXw10Ix0oOdusCga2Pb8TzaiyLhw3oUV4XKfb',
    // 'secret' => 'EGVe4epYmxCMeJemGC47R5WZyNJUYQiQl2NR-zS91R2L11U-C9XHSG9dqcWejCuZr5jo8THxUF0vELzC',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        //'mode' => 'live',
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

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
];