# Cloudinary\MediaSourceApi

All URIs are relative to https://api.cloudinary.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMediaSource()**](MediaSourceApi.md#createMediaSource) | **POST** /{cloud_name}/media_delivery/media_sources | Create a new Media Source
[**deleteMediaSource()**](MediaSourceApi.md#deleteMediaSource) | **DELETE** /{cloud_name}/media_delivery/media_sources/{id} | Delete the Media Source
[**getMediaSource()**](MediaSourceApi.md#getMediaSource) | **GET** /{cloud_name}/media_delivery/media_sources/{id} | Get the Media Source
[**getMediaSources()**](MediaSourceApi.md#getMediaSources) | **GET** /{cloud_name}/media_delivery/media_sources | Get the Media Sources
[**updateMediaSource()**](MediaSourceApi.md#updateMediaSource) | **PATCH** /{cloud_name}/media_delivery/media_sources/{id} | Update the Media Source


## `createMediaSource()`

```php
createMediaSource($cloud_name, $media_source_create_payload): \Cloudinary\Model\MediaSource
```

Create a new Media Source

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


$apiInstance = new Cloudinary\Api\MediaSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_name = my_cloud; // string | Name of the Cloud
$media_source_create_payload = {"display_name":"my_media_source","source_type":"s3","config":{"s3_bucket_name":"my_bucket","s3_bucket_folder":"my_bucket_folder","s3_access_key":"123456789","s3_secret_key":"123456789","s3_uri_template":"s3://mybucket/images/{{vars.signature}}/{{fwd_key}}"}}; // \Cloudinary\Model\MediaSourceCreatePayload | Payload to create Media Source

try {
    $result = $apiInstance->createMediaSource($cloud_name, $media_source_create_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->createMediaSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_name** | **string**| Name of the Cloud |
 **media_source_create_payload** | [**\Cloudinary\Model\MediaSourceCreatePayload**](../Model/MediaSourceCreatePayload.md)| Payload to create Media Source |

### Return type

[**\Cloudinary\Model\MediaSource**](../Model/MediaSource.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMediaSource()`

```php
deleteMediaSource($cloud_name, $id)
```

Delete the Media Source

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


$apiInstance = new Cloudinary\Api\MediaSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_name = my_cloud; // string | Name of the Cloud
$id = 1abc2def345g678hij90; // string | ID of the Media Source

try {
    $apiInstance->deleteMediaSource($cloud_name, $id);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->deleteMediaSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_name** | **string**| Name of the Cloud |
 **id** | **string**| ID of the Media Source |

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

## `getMediaSource()`

```php
getMediaSource($cloud_name, $id): \Cloudinary\Model\MediaSource
```

Get the Media Source

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


$apiInstance = new Cloudinary\Api\MediaSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_name = my_cloud; // string | Name of the Cloud
$id = 1abc2def345g678hij90; // string | ID of the Media Source

try {
    $result = $apiInstance->getMediaSource($cloud_name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->getMediaSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_name** | **string**| Name of the Cloud |
 **id** | **string**| ID of the Media Source |

### Return type

[**\Cloudinary\Model\MediaSource**](../Model/MediaSource.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaSources()`

```php
getMediaSources($cloud_name): \Cloudinary\Model\MediaSource[]
```

Get the Media Sources

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


$apiInstance = new Cloudinary\Api\MediaSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_name = my_cloud; // string | Name of the Cloud

try {
    $result = $apiInstance->getMediaSources($cloud_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->getMediaSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_name** | **string**| Name of the Cloud |

### Return type

[**\Cloudinary\Model\MediaSource[]**](../Model/MediaSource.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMediaSource()`

```php
updateMediaSource($cloud_name, $id, $media_source_update_payload): \Cloudinary\Model\MediaSource
```

Update the Media Source

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


$apiInstance = new Cloudinary\Api\MediaSourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_name = my_cloud; // string | Name of the Cloud
$id = 1abc2def345g678hij90; // string | ID of the Media Source
$media_source_update_payload = {"display_name":"my_media_source","source_type":"s3","config":{"s3_bucket_name":"my_bucket","s3_bucket_folder":"my_bucket_folder","s3_access_key":"123456789","s3_secret_key":"123456789","s3_uri_template":"s3://mybucket/images/{{vars.signature}}/{{fwd_key}}"}}; // \Cloudinary\Model\MediaSourceUpdatePayload | Payload to update the Media Source

try {
    $result = $apiInstance->updateMediaSource($cloud_name, $id, $media_source_update_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourceApi->updateMediaSource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloud_name** | **string**| Name of the Cloud |
 **id** | **string**| ID of the Media Source |
 **media_source_update_payload** | [**\Cloudinary\Model\MediaSourceUpdatePayload**](../Model/MediaSourceUpdatePayload.md)| Payload to update the Media Source |

### Return type

[**\Cloudinary\Model\MediaSource**](../Model/MediaSource.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
