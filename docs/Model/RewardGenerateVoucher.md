# # RewardGenerateVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | This reward generates voucher within specific subcampaign, that related only to particular customer. | [default to 'generate_voucher']
**title** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**prefix** | **string** | A prefix in all generated vouchers. Needs to be unique within a project. | 
**code_type** | **string** | What characters should the code include. Possible choices are digits, letters, and mixed. | 
**random_part_length** | **float** | How long should the random part of the code be? Valid values are between 2 and 10. | [optional] 
**voucher_campaign_id** | **float** | Subcampaign ID, new voucher will be related to. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


