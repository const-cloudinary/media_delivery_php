# Cloudinary media_delivery_php

Media Delivery API

For more information, please visit [https://cloudinary.com](https://cloudinary.com).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/const-cloudinary/media_delivery_php.git"
    }
  ],
  "require": {
    "const-cloudinary/media_delivery_php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/media_delivery_php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\CacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string
$cloud_name = my_cloud; // string | Name of the Cloud
$cache_invalidate_request_payload = new \Cloudinary\Model\CacheInvalidateRequestPayload(); // \Cloudinary\Model\CacheInvalidateRequestPayload | Payload to invalidate the cache

try {
    $apiInstance->invalidate($authorization, $cloud_name, $cache_invalidate_request_payload);
} catch (Exception $e) {
    echo 'Exception when calling CacheApi->invalidate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.cloudinary.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CacheApi* | [**invalidate**](docs/Api/CacheApi.md#invalidate) | **POST** /{cloud_name}/media_delivery/cache/invalidate | Invalidate the cache
*CacheApi* | [**warmup**](docs/Api/CacheApi.md#warmup) | **POST** /{cloud_name}/media_delivery/cache/warmup | Warm up the cache
*DeliveryProfileApi* | [**createDeliveryProfile**](docs/Api/DeliveryProfileApi.md#createdeliveryprofile) | **POST** /{cloud_name}/media_delivery/profiles | Create a new Delivery Profile
*DeliveryProfileApi* | [**deleteDeliveryProfile**](docs/Api/DeliveryProfileApi.md#deletedeliveryprofile) | **DELETE** /{cloud_name}/media_delivery/profiles/{id} | Delete the Delivery Profile
*DeliveryProfileApi* | [**getDeliveryProfile**](docs/Api/DeliveryProfileApi.md#getdeliveryprofile) | **GET** /{cloud_name}/media_delivery/profiles/{id} | Get the Delivery Profile
*DeliveryProfileApi* | [**getDeliveryProfiles**](docs/Api/DeliveryProfileApi.md#getdeliveryprofiles) | **GET** /{cloud_name}/media_delivery/profiles | Get the Delivery Profiles
*DeliveryProfileApi* | [**updateDeliveryProfile**](docs/Api/DeliveryProfileApi.md#updatedeliveryprofile) | **PATCH** /{cloud_name}/media_delivery/profiles/{id} | Update the Delivery Profile
*MappingFunctionApi* | [**createMappingFunction**](docs/Api/MappingFunctionApi.md#createmappingfunction) | **POST** /{cloud_name}/media_delivery/mapping_functions | Create a new Mapping Function
*MappingFunctionApi* | [**deleteMappingFunction**](docs/Api/MappingFunctionApi.md#deletemappingfunction) | **DELETE** /{cloud_name}/media_delivery/mapping_functions/{id} | Delete the Mapping Function
*MappingFunctionApi* | [**getMappingFunction**](docs/Api/MappingFunctionApi.md#getmappingfunction) | **GET** /{cloud_name}/media_delivery/mapping_functions/{id} | Get the Mapping Function
*MappingFunctionApi* | [**getMappingFunctions**](docs/Api/MappingFunctionApi.md#getmappingfunctions) | **GET** /{cloud_name}/media_delivery/mapping_functions | Get the Mapping Functions
*MappingFunctionApi* | [**updateMappingFunction**](docs/Api/MappingFunctionApi.md#updatemappingfunction) | **PATCH** /{cloud_name}/media_delivery/mapping_functions/{id} | Update the Mapping Function
*MediaSourceApi* | [**createMediaSource**](docs/Api/MediaSourceApi.md#createmediasource) | **POST** /{cloud_name}/media_delivery/media_sources | Create a new Media Source
*MediaSourceApi* | [**deleteMediaSource**](docs/Api/MediaSourceApi.md#deletemediasource) | **DELETE** /{cloud_name}/media_delivery/media_sources/{id} | Delete the Media Source
*MediaSourceApi* | [**getMediaSource**](docs/Api/MediaSourceApi.md#getmediasource) | **GET** /{cloud_name}/media_delivery/media_sources/{id} | Get the Media Source
*MediaSourceApi* | [**getMediaSources**](docs/Api/MediaSourceApi.md#getmediasources) | **GET** /{cloud_name}/media_delivery/media_sources | Get the Media Sources
*MediaSourceApi* | [**updateMediaSource**](docs/Api/MediaSourceApi.md#updatemediasource) | **PATCH** /{cloud_name}/media_delivery/media_sources/{id} | Update the Media Source
*MediaTargetApi* | [**createMediaTarget**](docs/Api/MediaTargetApi.md#createmediatarget) | **POST** /{cloud_name}/media_delivery/media_targets | Create a new Media Target
*MediaTargetApi* | [**deleteMediaTarget**](docs/Api/MediaTargetApi.md#deletemediatarget) | **DELETE** /{cloud_name}/media_delivery/media_targets/{id} | Delete the Media Target
*MediaTargetApi* | [**getMediaTarget**](docs/Api/MediaTargetApi.md#getmediatarget) | **GET** /{cloud_name}/media_delivery/media_targets/{id} | Get the Media Target
*MediaTargetApi* | [**getMediaTargets**](docs/Api/MediaTargetApi.md#getmediatargets) | **GET** /{cloud_name}/media_delivery/media_targets | Get the Media Targets
*MediaTargetApi* | [**updateMediaTarget**](docs/Api/MediaTargetApi.md#updatemediatarget) | **PATCH** /{cloud_name}/media_delivery/media_targets/{id} | Update the Media Target

## Models

- [CacheInvalidateAsset](docs/Model/CacheInvalidateAsset.md)
- [CacheInvalidateMediaResource](docs/Model/CacheInvalidateMediaResource.md)
- [CacheInvalidateRequestPayload](docs/Model/CacheInvalidateRequestPayload.md)
- [CacheWarmupRequestPayload](docs/Model/CacheWarmupRequestPayload.md)
- [CacheWarmupSuccessResponse](docs/Model/CacheWarmupSuccessResponse.md)
- [DeliveryProfile](docs/Model/DeliveryProfile.md)
- [DeliveryProfileCreatePayload](docs/Model/DeliveryProfileCreatePayload.md)
- [DeliveryProfileUpdatePayload](docs/Model/DeliveryProfileUpdatePayload.md)
- [MappingFunction](docs/Model/MappingFunction.md)
- [MappingFunctionCreatePayload](docs/Model/MappingFunctionCreatePayload.md)
- [MappingFunctionUpdatePayload](docs/Model/MappingFunctionUpdatePayload.md)
- [MediaSource](docs/Model/MediaSource.md)
- [MediaSourceAllOf](docs/Model/MediaSourceAllOf.md)
- [MediaSourceConfig](docs/Model/MediaSourceConfig.md)
- [MediaSourceCreatePayload](docs/Model/MediaSourceCreatePayload.md)
- [MediaSourceUpdatePayload](docs/Model/MediaSourceUpdatePayload.md)
- [MediaTarget](docs/Model/MediaTarget.md)
- [MediaTargetConfig](docs/Model/MediaTargetConfig.md)
- [MediaTargetCreatePayload](docs/Model/MediaTargetCreatePayload.md)
- [MediaTargetUpdatePayload](docs/Model/MediaTargetUpdatePayload.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication


### bearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This Cloudinary PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
