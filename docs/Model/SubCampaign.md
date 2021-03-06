# # SubCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | This field is required only when you create a campaign | 
**id** | **int** |  | [optional] [readonly] 
**parent_id** | **int** | Main campaign ID | 
**status** | **string** |  | [optional] 
**name** | **string** | The name of the campaign must be unique. | 
**triggers_on** | **string** | What type of trigger sub campaign is reacting on to check rules and give rewards. | [optional] 
**trigger_name** | **string** | If campaign is triggered by custom trigger, it&#39;s name should be specified. | [optional] 
**template** | **string** | Valid templates are sub_redemption, sub_reward_points, sub_generate_vouchers. | [optional] 
**description** | **string** |  | [optional] 
**customer_information** | **string** | Text that can be displayed to the customer once the redemption is validated or confirmed. | [optional] 
**max_total_budget** | **float** | The budget available for discount campaign. | [optional] 
**max_redemptions** | **float** | The maximum number of redemptions available. | [optional] 
**minimum_value** | **float** |  | [optional] 
**max_discount** | **float** |  | [optional] 
**redemptions_count** | **float** |  | [optional] [readonly] 
**total_budget_spent** | **float** |  | [optional] [readonly] 
**vouchers_distributed_count** | **int** |  | [optional] [readonly] 
**vouchers_count** | **int** |  | [optional] [readonly] 
**currency** | **string** | Currency denominating monetary values in this campaign (USD, GBP, EUR, AUD) | [optional] [readonly] 
**currency_symbol** | **string** | Currency symbol ($, £, €) | [optional] [readonly] 
**channel** | **string** |  | [optional] 
**purpose** | **string** |  | [optional] 
**medium** | **string** |  | [optional] 
**voucher_type** | **string** | Determines what type of vouchers can be generated for campaign. Generic vouchers (eg. SALE10) can be redeemed multiple times. Unique vouchers allow for greater control and better tracking of who and how is using your promotions. | [optional] 
**voucher_max_redemptions** | **float** | The maximum number of redemptions per unique voucher code. | [optional] 
**voucher_code_type** | **string** | What characters should the code include when new voucher is created. Possible choices are digits, letters, and mixed. | [optional] 
**voucher_random_part_length** | **float** | How long should the random part of the code be? Valid values are between 2 and 10, depending on batch size. | [optional] 
**voucher_prefix** | **string** | A prefix that will be used to generate vouchers. Needs to be unique within project. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 
**created_by** | [**\Vouchery\Model\CampaignCreatedBy**](CampaignCreatedBy.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 
**updated_by** | [**\Vouchery\Model\CampaignCreatedBy**](CampaignCreatedBy.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


