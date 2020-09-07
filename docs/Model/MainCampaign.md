# # MainCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | This field is required only when you create a campaign. Main Campaign is a wrapper for multipe Sub Campaings, grouped together. Main Campaign can have own budget and redemptions limit. | 
**id** | **int** |  | [optional] [readonly] 
**status** | **string** |  | [optional] 
**name** | **string** | The name of the campaign must be unique. | 
**template** | **string** | Valid template values for MainCampaign are: discount, loyalty, gift_card. | [optional] 
**description** | **string** |  | [optional] 
**max_total_budget** | **float** | The budget available for all discount campaigns grouped by this campaign. | [optional] 
**max_redemptions** | **float** | The maximum number of redemptions available across all discount campaigns grouped by this campaign. | [optional] 
**team** | **string** |  | [optional] 
**budget_code** | **string** |  | [optional] 
**children** | [**\Vouchery\Model\SubCampaign[]**](SubCampaign.md) | List of child campaigns | [optional] [readonly] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 
**created_by** | [**\Vouchery\Model\CampaignCreatedBy**](CampaignCreatedBy.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 
**updated_by** | [**\Vouchery\Model\CampaignCreatedBy**](CampaignCreatedBy.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


