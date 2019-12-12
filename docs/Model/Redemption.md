# # Redemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional] [readonly] 
**transaction_id** | **string** | Unique transaction ID which identifies underlying transaction in your system, e.g. order number, invoice number | 
**customer_identifier** | **string** | A string uniquely identifying customer in your system. Please check customers API. | [optional] 
**total_transaction_cost** | **float** |  | 
**granted_discount** | **float** |  | [optional] [readonly] 
**user_agent** | **string** |  | [optional] 
**voucher** | [**\Vouchery\Model\RedemptionVoucher**](RedemptionVoucher.md) |  | [optional] 
**confirmed** | **bool** | Only confirmed redemption are counted towards budget and total number of redemptions. | [optional] 
**product_items** | [**\Vouchery\Model\RedemptionProductItems[]**](RedemptionProductItems.md) | Array of product items, associated with a redemption | [optional] 
**validated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 
**confirmed_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


