<?php
return array(
    // set your paypal credential SDK credentials
    //'client_id' => 'AQkquBDf1zctJOWGKWUEtKXm6qVhueUEMvXO_-MCI4DQQ4-LWvkDLIN2fGsd',
    //'secret' => 'EL1tVxAjhT7cJimnz5-Nsx9k2reTKSVfErNQF-CmrwJgxRtylkGTKlU4RvrX',
    
    //Tom development paypal credentials sandbox
    //'client_id' => 'AS6XVccloFXb5ixsNaR9R5OyhFqzeEovNGS4a8MzSytQIRJPQ1BBpWbn-TEX4gJYKuNMaFaXMVGK2Pla',
    //'secret' => 'EE8t3F94KElE8anGUK351PyHwu09wrKIlGkHduE8ifU1fV1jY7oBSAwDlrsFIMPl-6TCTowQVmRDIbkO]',
    
    //Tom development paypal credentials live
    'client_id' => 'Acg8xEPQPkEy4fGj-u8drL3FGep9BPFg4oCCDMH_alI1hujTPRF2xSazUDqhEz1upK3sYiXKRJC5SvkW',
    'secret' => 'EJaoiWozOzsI953wAtvBJo-IvyzXZ9dh4xjJzMgOkmPRliLvPWLJOq7EvWjslgcwGTfMWP1XZabCLXED',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        //'mode' => 'sandbox',
        'mode' => 'live',

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
);