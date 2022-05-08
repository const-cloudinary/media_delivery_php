# # CacheWarmupRequestPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The Media Editing API URL to cache. Any default (base) transformations specified in the relevant delivery profile are applied to the cached media. You can also specify other transformations, which are handled by your mapping function, as part of the URL. |
**notification_url** | **string** | An HTTP or HTTPS URL to receive the response (a webhook) when the derived media is available on the cache. If not specified, the response is sent to the global Notification URL (if defined) in the Delivery settings of your account console. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
