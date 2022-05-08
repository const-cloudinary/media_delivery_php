# # CacheInvalidateRequestPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**urls** | **string[]** | An array of up to 20 Media Editing API URLs to invalidate. These URLs, and any derived media from the specified assets, are invalidated. Transformation parameters can be given in the URLs, but all derived resources are invalidated, regardless. | [optional]
**assets** | [**\Cloudinary\Model\CacheInvalidateAsset[]**](CacheInvalidateAsset.md) | An array of up to 20 media resources to invalidate. | [optional]
**media_resources** | [**\Cloudinary\Model\CacheInvalidateMediaResource[]**](CacheInvalidateMediaResource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
