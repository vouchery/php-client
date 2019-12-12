# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **string** | Valid only for creating customer. Determines unique customer identifier in your application. Can be hash, id, email or any other unique value. | 
**name** | **string** | Customer full name. | [optional] 
**loyalty_points** | **int** | Number of loyalty points customer will have. | [optional] 
**categories** | [**\Vouchery\Model\CustomerCategories[]**](CustomerCategories.md) | Determine how customer is related to specific category by providing related tag. | [optional] 
**metadata** | [**object**](.md) | Any metadata, you want to store, related to customer. Key-value object, that will be displayed on customer profile page. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


