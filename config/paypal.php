<?php

return [
/** set your paypal credential **/
'client_id' =>'AV6SRc8H_0rqPOx9LhwNO3JmKYiWmbFkVCF2FPIUOtoM9BEOrBqJLIr5hv3Qvq50dpbNEdb1k1lVVcxZ',
'secret' => 'ELQwnvZSrVNpnQ4dFYcSWIvRGniQ4pIOt9TICDNs0PeTR5YZhBIa0HmlhvuBL-q_vQWvXl-GgVCOsx4L',
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
	'http.ConnectionTimeOut' => 1000,
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
