# # MediaSourceConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**s3_bucket_name** | **string** | The name of the S3 bucket. | [optional]
**s3_bucket_folder** | **string** | The bucket containing your media files. | [optional]
**s3_access_key** | **string** | The access key ID required to read from your S3 bucket. | [optional]
**s3_secret_key** | **string** | The secret access key required to read from your S3 bucket. | [optional]
**s3_uri_template** | **string** | Advanced option for specifying parameters to include in the fetch request. You can use interpolated variables that are defined in the mapping function code. | [optional]
**gs_bucket_name** | **string** | The name of the Google Storage bucket. | [optional]
**gs_bucket_folder** | **string** | The bucket containing your media files. | [optional]
**gs_service_account_key** | **string** | The JSON configuration converted to a string. Can be downloaded from the keys page for your service account. | [optional]
**gs_uri_template** | **string** | Advanced option for specifying parameters to include in the fetch request. You can use interpolated variables that are defined in the mapping function code. | [optional]
**web_uri_base** | **string** | The full URL of the web server (including http:// or https://). | [optional]
**web_headers** | **array<string,string>** | Advanced option for specifying headers in key/value pairs to include in the fetch request, for authentication or authorization purposes. | [optional]
**web_uri_template** | **string** | Advanced option for specifying parameters to include in the fetch request. You can use interpolated variables that are defined in the mapping function code. | [optional]
**cld_cloud_name** | **string** | The cloud name of the Cloudinary account where your media is stored. It must share the same overall Cloudinary account as the Media Editing API sub-account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
