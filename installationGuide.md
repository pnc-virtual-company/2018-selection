# Installation guide

Here is a step by step plan on how to install the Selection Committee application. It assumes you have a server at your disposal to host the website.

## Requirements

### PHP
PHP version at least 5.6 or 7.0+ (PHP 7 recommended) is required. You can check which PHP version is installed with the following command

```php --version```

### Composer
Composer is also required to install dependencies. Detailed explanations on how to install composer can be found [here](https://getcomposer.org/doc/00-intro.md) 

### Git
Git is required to install the application and for future updates. Installation details can be found [here](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

## Installation

Clone the github repository on the server with the following command

```git clone https://github.com/pnc-virtual-company/2018-selection.git```

Then open the command shell, get to the root of the application and install all dependencies with the following command 

```composer install```

## Database

By using the command shell or the graphic interface of phpMyAdmin, import the schema by using the SQL script `selection_committee.sql` provided into the sql folder.

Now edit the file `application/config/database.php` in order to point to your database.

Finally, you will need to edit the file `application/config/email.php` in order to allow the application to send emails (modify *smtp_host*). 

## Test connection

Once you have gone through the previous steps, it is now time to test if the application is correctly installed and configured. Go to the home page of the application and try to connect with the default user account (login *admin* and password *password*).