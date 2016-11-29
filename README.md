# Map for CodeIgniter

Library for getting information about currently visiting user on website with CodeIgniter 3+

**Version:** 3.1.2

> This library is meant to help you to getting geo location about user with CodeIgniter. It provides user information like ip address,latitude,longitude,city,hostname etc.

## Requirements

- PHP 5.4+
- [CodeIgniter 3](http://www.codeigniter.com/)
- [CodeIgniter session library](http://www.codeigniter.com/userguide3/libraries/sessions.html)

## Notice

This will increase your website landing time to 5-8 seconds more depends on your internet speed for first time in 30 min.

## Installation

**It is very important that you follow the installation steps closely to get the library and Map to work**

1. Download the library files and add the files to your CodeIgniter installation. Only the library, config files are required.
1. In your CodeIgniter `/application/config/config.php` file.
2. In your CodeIgniter `/application/config/config.php` file, configure the `Session Variables` section. [Read more](https://www.codeigniter.com/user_guide/libraries/sessions.html)
3. Autoload the library in `application/config/autoload.php` or load it in needed controllers with `$this->load->library('map');`.
4. Enjoy!

## Usage

The library download includes a sample controller and views. The example code might not be the best or most beautiful code, but it is there to help you get started quicker.

## Methods

#### get_ip()

Get the ip address of user.

```php
$this->map->get_ip();
```

#### get_host_name()

Get the host name of user.

```php
$this->map->get_host_name();
```

#### get_city()

Get the city of user.

```php
$this->map->get_city();
```

#### get_region()

Get the region of user.

```php
$this->map->get_region();
```

#### get_country()

Get the country of user.

```php
$this->map->get_country();
```

#### get_latitude()

Get the latitude position of user.

```php
$this->map->get_latitude();
```

#### get_longitude()

Get the longitude position of user.

```php
$this->map->get_longitude();
```

#### get_organization()

Get the organisation of user.

```php
$this->map->get_organization();
```

