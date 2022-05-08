# Cloudinary\DeliveryProfileApi

All URIs are relative to https://api.cloudinary.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeliveryProfile()**](DeliveryProfileApi.md#createDeliveryProfile) | **POST** /{cloud_name}/media_delivery/profiles | Create a new Delivery Profile
[**deleteDeliveryProfile()**](DeliveryProfileApi.md#deleteDeliveryProfile) | **DELETE** /{cloud_name}/media_delivery/profiles/{id} | Delete the Delivery Profile
[**getDeliveryProfile()**](DeliveryProfileApi.md#getDeliveryProfile) | **GET** /{cloud_name}/media_delivery/profiles/{id} | Get the Delivery Profile
[**getDeliveryProfiles()**](DeliveryProfileApi.md#getDeliveryProfiles) | **GET** /{cloud_name}/media_delivery/profiles | Get the Delivery Profiles
[**updateDeliveryProfile()**](DeliveryProfileApi.md#updateDeliveryProfile) | **PATCH** /{cloud_name}/media_delivery/profiles/{id} | Update the Delivery Profile


## `createDeliveryProfile()`

```php
createDeliveryProfile($cloud_name, $delivery_profile_create_payload): \Cloudinary\Model\DeliveryProfile
```

Create a new Delivery Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\DeliveryProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_name = my_cloud; // string | Name of the Cloud
$delivery_profile_create_payload = new \Cloudinary\Model\DeliveryProfileCreatePayload(); // \Cloudinary\Model\DeliveryProfileCreatePayload | Payload to create Delivery Profile

try {
    $result = $apiInstance->createDeliveryProfile($cloud_name, $delivery_profile_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->createDeliveryProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_name** | **string**| Name of the Cloud |
 **delivery_profile_create_payload** | [**\Cloudinary\Model\DeliveryProfileCreatePayload**](../Model/DeliveryProfileCreatePayload.md)| Payload to create Delivery Profile |

### Return type

[**\Cloudinary\Model\DeliveryProfile**](../Model/DeliveryProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeliveryProfile()`

```php
deleteDeliveryProfile($authorization, $cloud_name, $id)
```

Delete the Delivery Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\DeliveryProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string
$cloud_name = my_cloud; // string | Name of the Cloud
$id = 1abc2def345g678hij90; // string | ID of the Delivery Profile

try {
    $apiInstance->deleteDeliveryProfile($authorization, $cloud_name, $id);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->deleteDeliveryProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **cloud_name** | **string**| Name of the Cloud |
 **id** | **string**| ID of the Delivery Profile |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeliveryProfile()`

```php
getDeliveryProfile($authorization, $cloud_name, $id): \Cloudinary\Model\DeliveryProfile
```

Get the Delivery Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\DeliveryProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string
$cloud_name = my_cloud; // string | Name of the Cloud
$id = 1abc2def345g678hij90; // string | ID of the Delivery Profile

try {
    $result = $apiInstance->getDeliveryProfile($authorization, $cloud_name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->getDeliveryProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **cloud_name** | **string**| Name of the Cloud |
 **id** | **string**| ID of the Delivery Profile |

### Return type

[**\Cloudinary\Model\DeliveryProfile**](../Model/DeliveryProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeliveryProfiles()`

```php
getDeliveryProfiles($cloud_name): \Cloudinary\Model\DeliveryProfile[]
```

Get the Delivery Profiles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\DeliveryProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_name = my_cloud; // string | Name of the Cloud

try {
    $result = $apiInstance->getDeliveryProfiles($cloud_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->getDeliveryProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_name** | **string**| Name of the Cloud |

### Return type

[**\Cloudinary\Model\DeliveryProfile[]**](../Model/DeliveryProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeliveryProfile()`

```php
updateDeliveryProfile($authorization, $cloud_name, $id, $delivery_profile_update_payload): \Cloudinary\Model\DeliveryProfile
```

Update the Delivery Profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer (JWT) authorization: bearerAuth
$config = Cloudinary\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cloudinary\Api\DeliveryProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = 'authorization_example'; // string
$cloud_name = my_cloud; // string | Name of the Cloud
$id = 1abc2def345g678hij90; // string | ID of the Delivery Profile
$delivery_profile_update_payload = new \Cloudinary\Model\DeliveryProfileUpdatePayload(); // \Cloudinary\Model\DeliveryProfileUpdatePayload | Payload to update the Delivery Profile

try {
    $result = $apiInstance->updateDeliveryProfile($authorization, $cloud_name, $id, $delivery_profile_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryProfileApi->updateDeliveryProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |
 **cloud_name** | **string**| Name of the Cloud |
 **id** | **string**| ID of the Delivery Profile |
 **delivery_profile_update_payload** | [**\Cloudinary\Model\DeliveryProfileUpdatePayload**](../Model/DeliveryProfileUpdatePayload.md)| Payload to update the Delivery Profile |

### Return type

[**\Cloudinary\Model\DeliveryProfile**](../Model/DeliveryProfile.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
