Yii 2 Minimal Console Application Template
==========================================

Yii 2 Minimal Console Application Template is a skeleton Yii 2 application best for
starting totally from scratch, especially for console application.

It includes all commonly used configurations that would allow you to focus on adding new
features to your console application.


DIRECTORY STRUCTURE
-------------------

      commands/           contains console commands (controllers)
      config/             contains application configurations
      models/             contains model classes
      runtime/            contains files generated during runtime
      vendor/             contains dependent 3rd-party packages


REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 7.4.0.


INSTALLATION
------------

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this application template using the following command:

~~~
composer create-project --prefer-dist --stability=dev agungsijawir/yii2-minimal-console path/to/your/project
~~~

Now you should be able to run the application through the command line / terminal:

~~~
./yii
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2minimal',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Follow best practice as detailed and clear explanation on [The Definitive Guide to Yii 2.0 - Section: Console applications](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-console#console-applications).

CREDITS
-------

This project is forked from [samdark/yii2-minimal](https://github.com/samdark/yii2-minimal) and `yii2` community.
Forked stripped out web view and just for console only.