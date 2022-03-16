# TA-Gateways_api

Getting started
1- Clone the Repository in your local workspace
2- Use an apache and MySql server controller (Xammp)
3- g to httpd.conf file in C:xammp\apache\conf\httpd.conf find:
  DocumentRoot "C:\xampp\htdocs"
  <Directory "C:\xampp\htdocs">
  and replace it for:
  DocumentRoot "...YOUR LOCAL WORKSPACE\api\public"
  <Directory "...YOUR LOCAL WORKSPACE\api\public">

DB
1- Go to an DB Gestor and create a new database called "gateways" with utf8_unicode_ci
2- Run the gateways.sql file.

Run tests
1- Open a cmd.
2- Stand at the root of the project.
3- Run vendor/bin/phpunit.
