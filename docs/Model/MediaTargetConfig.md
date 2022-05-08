# # MediaTargetConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**s3_bucket_name** | **string** | The name of the S3 bucket. | [optional]
**s3_bucket_folder** | **string** | The bucket folder to store your transformed media files. | [optional]
**s3_access_key** | **string** | The access key ID required to access your S3 bucket. | [optional]
**s3_secret_key** | **string** | The secret access key required to access your S3 bucket. | [optional]
**s3_uri_template** | **string** | Advanced option for specifying parameters to include in the requests. You can use interpolated variables that are defined in the mapping function code. | [optional]
**gs_bucket_name** | **string** | The name of the Google Storage bucket. | [optional]
**gs_bucket_folder** | **string** | The bucket folder to store your transformed media files. | [optional]
**gs_service_account_key** | **string** | The JSON file downloaded from the keys page for your service account. | [optional]
**gs_uri_template** | **string** | Advanced option for specifying parameters to include in the requests. You can use interpolated variables that are defined in the mapping function code. | [optional]
**cld_cloud_name** | **string** | The cloud name of the Cloudinary account to store your transformed media. It must share the same overall Cloudinary account as the Media Editing API sub-account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
