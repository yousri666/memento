<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------------
| This file will contain the settings needed to access your Mongo database.
|
|
| ------------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| ------------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['write_concerns'] Default is 1: acknowledge write operations.  ref(http://php.net/manual/en/mongo.writeconcerns.php)
|	['journal'] Default is TRUE : journal flushed to disk. ref(http://php.net/manual/en/mongo.writeconcerns.php)
|	['read_preference'] Set the read preference for this connection. ref (http://php.net/manual/en/mongoclient.setreadpreference.php)
|	['read_preference_tags'] Set the read preference for this connection.  ref (http://php.net/manual/en/mongoclient.setreadpreference.php)
|
| The $config['mongo']['active'] variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
*/

$config['mongo']['active'] = 'default';

$config['mongo']['default']['no_auth'] = TRUE;
$config['mongo']['default']['hostname'] = 'localhost';
$config['mongo']['default']['port'] = '27017';
$config['mongo']['default']['username'] = 'username';
$config['mongo']['default']['password'] = 'password';
$config['mongo']['default']['database'] = 'Memento';
$config['mongo']['default']['db_debug'] = TRUE;
$config['mongo']['default']['return_as'] = 'array';
$config['mongo']['default']['write_concerns'] = (int)1;
$config['mongo']['default']['journal'] = TRUE;
$config['mongo']['default']['read_preference'] = NULL;
$config['mongo']['default']['read_preference_tags'] = NULL;

$config['mongo']['test']['no_auth'] = FALSE;
$config['mongo']['test']['hostname'] = 'localhost';
$config['mongo']['test']['port'] = '27017';
$config['mongo']['test']['username'] = 'username';
$config['mongo']['test']['password'] = 'password';
$config['mongo']['test']['database'] = 'database';
$config['mongo']['test']['db_debug'] = TRUE;
$config['mongo']['test']['return_as'] = 'array';
$config['mongo']['test']['write_concerns'] = (int)1;
$config['mongo']['test']['journal'] = TRUE;
$config['mongo']['test']['read_preference'] = NULL;
$config['mongo']['test']['read_preference_tags'] = NULL;

/* End of file database.php */
/* Location: ./application/config/database.php */
