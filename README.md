Create a form using Symfony framework without Doctrine ORM (Symfony Form Component)
====================================================================================

This is a fully-functional Symfony2+ application that helps you to create a form
 without the use of Doctrine ORM.

This document contains information on how to download, install, and start
using this application. For a more detailed explanation, see the [Installation][1]
chapter of the Symfony Documentation.

1) Installing
----------------------------------

When it comes to installing you have to first install the Symfony framework. 
Then you have to integrate the following files from this archive:
- the routing: 
copy from this archive the routing.yml file located into src/Demo/TestBundle/Resources/config/routing.yml
- the controller: 
copy from this archive the AddressController.php file located into src/Demo/TestBundle/Controller/AddressController.php
- the form generator class: 
copy from this archive the AddressForm.php file located into src/Demo/TestBundle/Form/AddressForm.php
- the model: 
copy from this archive the Address.php file located into src/Demo/TestBundle/Model/Address.php
- the view: 
copy from this archive the address.html.twig file located into src/Demo/TestBundle/Resources/views/Address/address.html.twig


2) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Access the `config.php` script from a browser:

    http://localhost/path-to-project/web/config.php

If you get any warnings or recommendations, fix them before moving on.

3) Browsing the Demo Application
--------------------------------

Congratulations! You're now ready to use the application.

By accessing this path http://localhost/path-to-project/add-address you will see the generated form.
You can now test it.

Enjoy!

[1]:  http://symfony.com/doc/2.4/book/installation.html