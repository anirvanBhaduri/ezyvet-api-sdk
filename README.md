# ezyVet API SDK

A simple yet elegant library that allows one to easily invoke ezyVet's API via the use of
query builders.

Built using `PHP7`.

## Getting Started

Have a read through 
[`ezyVet's API documentation`](https://apisandbox.trial.ezyvet.com/api/docs/?&_ezyhost=apisandbox.trial.ezyvet.com)
for a quick refresher on its data structure.

### Prerequisites

You will need `PHP7` installed along with `composer`.

### Installing

Using composer, you can require the package `anirvan/ezyvet-api-sdk`.

```
composer require anirvan/ezyvet-api-sdk
```

You can then use an `Entity` object to generate a query to get data from ezyVet's API.

```php
<?php

require_once "vendor/autoload.php";

// The number passed to the constructor is the ID of the entity.
// No ID or 0 means the query will not be filtered by ID.
$appointment = new \Modules\Appointment\Entity\AppointmentEntity(2);
```

More to come as more is developed...

### Coding Style

This project uses [`psr-2`](https://www.php-fig.org/psr/psr-2/) styling.

## Deployment

When deploying your project, ensure to have this package in your `autoload` and `require` sections of your
`composer.json` file.

## Built With

* [Composer](https://getcomposer.org/) - Dependency Manager for PHP
* [PHP7](http://www.php.net/) - Programming language

## Versions 

We use [SemVer](http://semver.org/) for versioning. For the versions available, 
see the [tags on this repository](https://github.com/anirvanBhaduri/ezyvet-api-sdk/tags). 

## Authors

* **Anirvan Bhaduri** - *Initial work* - [anirvanBhaduri](https://github.com/anirvanBhaduri)

See also the list of [contributors](https://github.com/anirvanBhaduri/ezyvet-api-sdk/contributors) 
who participated in this project.

## License

This project is licensed under the MIT License. See [`LICENSE`](LICENSE) for more details.

## Acknowledgements

* To ezyVet for creating a fantastic API.
