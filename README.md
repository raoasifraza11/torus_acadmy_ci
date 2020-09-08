# LinksChild

The web and mobile application making automate the nurserry process.


Web site URL: `www.linkschild.com`

Cloud:  `AWS`

Domain: `Godadday`

##Default User Created for Testing

| Email  |      Password      |  Role |
|:------------:|:------------------|------:|
| admin@linkschild.com |      123      |  Admin |
| school@linkschild.com  |      123      |  School |
| teacher@linkschild.com |      123      |  Teacher of School |
| studnet@linkschild.com |      123      |  Student of School |

## Table of content

- [Code Follow log](#code-follow-log)
- [Application logs](#application-logs)
- [Application Configuration](#application-configuration)
- [Application commands](#application-commands)

<a name="code-follow-log"/>

## Code Follow log

| Log Date   |      Comments      |  Days |
|:------------:|:------------------|------:|
| 01 Apr |  Started the project with CI | 21 |
| 21 Apr|  Added login, signup, forget, admin login, dashboard template, Tools, setup basic structure for templating | 1 |


<a name="application-logs"/>

## Application logs

Application log will be available in `logs` directory.

<a name="application-configuration"/>


## Application Configuration

Application configuration available in `config` direcotry, based on operation system.


| Directory  |      Comments      |  Running on |  Path |
|------------|:------------------:|------:|------:|
| developmentOsx |  For OSX (MacX) | localhost:8001 | application/config/developmentOsx
| developmentOsw |  For Windows | localhost/linkschild | application/config/developmentOsw


## Application commands

1. Clear the application view cache

```diff
php index.php tools clear_cache

Description: Clear the all file insided the cache folderr except .htaccess and index.html.
Response: Cache has been cleared!
 
```

## Code Licensed

Under the TriTechTeal Pvt. Ltd. polices.
