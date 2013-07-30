BootIgniter
===========

BEWARE - !!!
===========
This Package will no longer be updated.


A CodeIgniter bundle setup with

- CodeIgniter 2.1.3
- Phil Sturgeon's REST server
https://github.com/philsturgeon/codeigniter-restserver
- Jamie Rumbelow's CI base model
https://github.com/jamierumbelow/codeigniter-base-model
- MY_Pagaination prepared with the semantics that twitter bootstrap use.
- Initializr Verekia 4.0 (Html5Boilerplate variant)
 - Twitter Bootstrap 2.*
 - jQuery 1.9.1 (updated)
 - HTML 5 Shiv
 - IE Classes
- Backbone.js


What is prepared?
============

A very basic .htaccess file is included but set not to rewrite

Url Helper is autoloaded in /application/config/autoload.php

Two view files. head.php and footer.php. These include the parts from html5boilerplate.

Added js, css, and img folder to root. 

Setup
============
Configure or remove .htaccess file.

Edit the header and footer for your needs.


Notes
============
 Phil Sturgeon's REST class has been added to /application/models/MY_Model instead of the suggested application/core/
