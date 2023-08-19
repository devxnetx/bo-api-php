# PHP package for burzi-obiavi.com API

[burzi-obiavi.com JSON API documentation](https://documenter.getpostman.com/view/17578164/2s9Y5SW5Us#cde58389-c1f6-484a-b156-a08fd7c6a752)

## Installation

You can install this package via composer

```bash
composer require devxnetx/bo-api-php
```

## Example usage

Initialize the API with your burzi-obiavi.com registration credentials (username/password)
you can also see these examples in examples folder.

```php
$burziObiavi = new BurziObiavi('username', '123123123');
```

### Get cities

```php
$burziObiaviCitites = $burziObiavi->getNomenclatureService()->cities();
```

### Get categories

```php
$burziObiaviCategories = $burziObiavi->getNomenclatureService()->categories();
```

### Post ad

api_custom_id - Put your product id here, if we match already existing product ids, the AD data will be updated, else we
create the product.

```php
$burziObiaviPostAdResponse = $burziObiavi->getAdService()->postAd([
    "title"         => "Your Ad Title - Не приема HTML",
    "content"       => "<b>DESCRIPTION</b>",
    "price"         => "100",
    "phone"         => "0888888888",
    "city"          => 727011,
    "catid"         => 11,
    "subcatid"      => 181,
    "api_custom_id" => "ID from your system",
    "images"        => ["https://cdn.shopify.com/s/files/1/2394/4001/files/21_MAYO_e83d41cd-e674-4508-8d9a-267075361e02_480x480.jpg"]
]);
```