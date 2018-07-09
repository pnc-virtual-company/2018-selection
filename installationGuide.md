# Installation guide

Here is a step by step plan on how to install the Selection Committee application. It assumes you have a server at your disposal to host the website.

## Requirements

### PHP
PHP version at least 5.6 or 7.0+ (PHP 7 recommended) is required.

## Installation

Download the zip file attached to the latest release [here](https://github.com/pnc-virtual-company/2018-selection/releases) and move it to the adapted location on your server. The zip file contains the source code of the project.

## Database

Create a database named for example 'selection_committee' with the collating option `utf8_general_ci`
Import the schema by using the SQL script `selection_committee.sql` provided into the sql folder.

Now edit the file `application/config/database.php` in order to point to your database. For example, the properties below:

`$db['default']['dsn'] = 'mysql:host=localhost; dbname=selection_committee; charset=utf8;'
 $db['default']['hostname'] = 'localhost'
 $db['username'] = 'root'
 $db['password'] = ''
 $db['database'] = 'selection_committee'`

Would become:
`$db['default']['dsn'] = 'mysql:host=my_host_name; dbname=my_database_name; charset=utf8;'
 $db['default']['hostname'] = 'my_host_name'
 $db['username'] = 'my_database_username'
 $db['password'] = 'my_database_password'
 $db['database'] = 'my_database_name'`


Finally, you will need to edit the file `application/config/email.php` in order to allow the application to send emails (modify *smtp_host*). 

## Test connection

Once you have gone through the previous steps, it is now time to test if the application is correctly installed and configured. Go to the home page of the application and try to connect with the default user account (login *admin* and password *password*).