# OpenAPIClient-php

# Overview

* **Version:** 2.0.0
* **Servers**: `https://store.xsolla.com/api`
* **[Contact Us by Email](mailto:integration@xsolla.com)**
* **Contact URL:** https://xsolla.com/
* **Required TLS version:** 1.2

Shop Builder API provides a third-party solution for implementing
the server side for your store interface. Use the endpoints to manage in-game items,
in-game currencies, cart, player inventory, promotions, game library, etc.

# Download API definition

You can download the API definition in two formats:
- [YAML](https://api.redocly.com/registry/bundle/xsolla/store-en/v1/openapi.yaml)
- [JSON](https://api.redocly.com/registry/bundle/xsolla/store-en/v1/openapi.json)


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AttributeAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 44056; // int | Project ID. You can find this parameter in your [Publisher Account](https://publisher.xsolla.com/) next to the name of the project.
$admin_create_attribute_request = {"external_id":"genre","name":{"en":"Genre","de":"Genre"}}; // \OpenAPI\Client\Model\AdminCreateAttributeRequest

try {
    $result = $apiInstance->adminCreateAttribute($project_id, $admin_create_attribute_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeAdminApi->adminCreateAttribute: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://store.xsolla.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AttributeAdminApi* | [**adminCreateAttribute**](docs/Api/AttributeAdminApi.md#admincreateattribute) | **POST** /v2/project/{project_id}/admin/attribute | Create attribute
*AttributeAdminApi* | [**adminCreateAttributeValue**](docs/Api/AttributeAdminApi.md#admincreateattributevalue) | **POST** /v2/project/{project_id}/admin/attribute/{external_id}/value | Create attribute value
*AttributeAdminApi* | [**adminDeleteAllAttributeValue**](docs/Api/AttributeAdminApi.md#admindeleteallattributevalue) | **DELETE** /v2/project/{project_id}/admin/attribute/{external_id}/value | Delete all values of attribute
*AttributeAdminApi* | [**adminDeleteAttributeValue**](docs/Api/AttributeAdminApi.md#admindeleteattributevalue) | **DELETE** /v2/project/{project_id}/admin/attribute/{external_id}/value/{value_external_id} | Delete attribute value
*AttributeAdminApi* | [**adminGetAttribute**](docs/Api/AttributeAdminApi.md#admingetattribute) | **GET** /v2/project/{project_id}/admin/attribute/{external_id} | Get specified attribute
*AttributeAdminApi* | [**adminGetAttributeList**](docs/Api/AttributeAdminApi.md#admingetattributelist) | **GET** /v2/project/{project_id}/admin/attribute | Get list of attributes (admin)
*AttributeAdminApi* | [**adminUpdateAttribute**](docs/Api/AttributeAdminApi.md#adminupdateattribute) | **PUT** /v2/project/{project_id}/admin/attribute/{external_id} | Update attribute
*AttributeAdminApi* | [**adminUpdateAttributeValue**](docs/Api/AttributeAdminApi.md#adminupdateattributevalue) | **PUT** /v2/project/{project_id}/admin/attribute/{external_id}/value/{value_external_id} | Update attribute value
*AttributeAdminApi* | [**deleteAttribute**](docs/Api/AttributeAdminApi.md#deleteattribute) | **DELETE** /v2/project/{project_id}/admin/attribute/{external_id} | Delete attribute
*BundlesAdminApi* | [**adminCreateBundle**](docs/Api/BundlesAdminApi.md#admincreatebundle) | **POST** /v2/project/{project_id}/admin/items/bundle | Create bundle
*BundlesAdminApi* | [**adminDeleteBundle**](docs/Api/BundlesAdminApi.md#admindeletebundle) | **DELETE** /v2/project/{project_id}/admin/items/bundle/sku/{sku} | Delete bundle
*BundlesAdminApi* | [**adminGetBundle**](docs/Api/BundlesAdminApi.md#admingetbundle) | **GET** /v2/project/{project_id}/admin/items/bundle/sku/{sku} | Get bundle
*BundlesAdminApi* | [**adminGetBundleList**](docs/Api/BundlesAdminApi.md#admingetbundlelist) | **GET** /v2/project/{project_id}/admin/items/bundle | Get list of bundles (admin)
*BundlesAdminApi* | [**adminGetBundleListInGroupByExternalId**](docs/Api/BundlesAdminApi.md#admingetbundlelistingroupbyexternalid) | **GET** /v2/project/{project_id}/admin/items/bundle/group/external_id/{external_id} | Get list of bundles by specified group external id
*BundlesAdminApi* | [**adminGetBundleListInGroupById**](docs/Api/BundlesAdminApi.md#admingetbundlelistingroupbyid) | **GET** /v2/project/{project_id}/admin/items/bundle/group/id/{group_id} | Get list of bundles by specified group id
*BundlesAdminApi* | [**adminHideBundle**](docs/Api/BundlesAdminApi.md#adminhidebundle) | **PUT** /v2/project/{project_id}/admin/items/bundle/sku/{sku}/hide | Hide bundle in catalog
*BundlesAdminApi* | [**adminShowBundle**](docs/Api/BundlesAdminApi.md#adminshowbundle) | **PUT** /v2/project/{project_id}/admin/items/bundle/sku/{sku}/show | Show bundle in catalog
*BundlesAdminApi* | [**adminUpdateBundle**](docs/Api/BundlesAdminApi.md#adminupdatebundle) | **PUT** /v2/project/{project_id}/admin/items/bundle/sku/{sku} | Update bundle
*BundlesCatalogApi* | [**getBundle**](docs/Api/BundlesCatalogApi.md#getbundle) | **GET** /v2/project/{project_id}/items/bundle/sku/{sku} | Get specified bundle
*BundlesCatalogApi* | [**getBundleList**](docs/Api/BundlesCatalogApi.md#getbundlelist) | **GET** /v2/project/{project_id}/items/bundle | Get list of bundles
*BundlesCatalogApi* | [**getBundleListInGroup**](docs/Api/BundlesCatalogApi.md#getbundlelistingroup) | **GET** /v2/project/{project_id}/items/bundle/group/{external_id} | Get list of bundles by specified group
*CartClientSideApi* | [**cartClear**](docs/Api/CartClientSideApi.md#cartclear) | **PUT** /v2/project/{project_id}/cart/clear | Delete all cart items from current cart
*CartClientSideApi* | [**cartClearById**](docs/Api/CartClientSideApi.md#cartclearbyid) | **PUT** /v2/project/{project_id}/cart/{cart_id}/clear | Delete all cart items by cart ID
*CartClientSideApi* | [**cartFill**](docs/Api/CartClientSideApi.md#cartfill) | **PUT** /v2/project/{project_id}/cart/fill | Fill cart with items
*CartClientSideApi* | [**cartFillById**](docs/Api/CartClientSideApi.md#cartfillbyid) | **PUT** /v2/project/{project_id}/cart/{cart_id}/fill | Fill specific cart with items
*CartClientSideApi* | [**deleteItem**](docs/Api/CartClientSideApi.md#deleteitem) | **DELETE** /v2/project/{project_id}/cart/item/{item_sku} | Delete cart item from current cart
*CartClientSideApi* | [**deleteItemByCartId**](docs/Api/CartClientSideApi.md#deleteitembycartid) | **DELETE** /v2/project/{project_id}/cart/{cart_id}/item/{item_sku} | Delete cart item by cart ID
*CartClientSideApi* | [**getCartById**](docs/Api/CartClientSideApi.md#getcartbyid) | **GET** /v2/project/{project_id}/cart/{cart_id} | Get cart by cart ID
*CartClientSideApi* | [**getUserCart**](docs/Api/CartClientSideApi.md#getusercart) | **GET** /v2/project/{project_id}/cart | Get current user&#39;s cart
*CartClientSideApi* | [**putItem**](docs/Api/CartClientSideApi.md#putitem) | **PUT** /v2/project/{project_id}/cart/item/{item_sku} | Update cart item from current cart
*CartClientSideApi* | [**putItemByCartId**](docs/Api/CartClientSideApi.md#putitembycartid) | **PUT** /v2/project/{project_id}/cart/{cart_id}/item/{item_sku} | Update cart item by cart ID
*CartServerSideApi* | [**adminCartFill**](docs/Api/CartServerSideApi.md#admincartfill) | **PUT** /v2/admin/project/{project_id}/cart/fill | Fill cart with items
*CartServerSideApi* | [**adminFillCartById**](docs/Api/CartServerSideApi.md#adminfillcartbyid) | **PUT** /v2/admin/project/{project_id}/cart/{cart_id}/fill | Fill cart by cart ID with items
*ClanRewardChainClientApi* | [**getUserClanTopContributors**](docs/Api/ClanRewardChainClientApi.md#getuserclantopcontributors) | **GET** /v2/project/{project_id}/user/clan/contributors/{reward_chain_id}/top | Get top 10 contributors to reward chain under clan
*ClanRewardChainClientApi* | [**userClanUpdate**](docs/Api/ClanRewardChainClientApi.md#userclanupdate) | **PUT** /v2/project/{project_id}/user/clan/update | Update current user&#39;s clan
*CommonCatalogApi* | [**getSellableItemById**](docs/Api/CommonCatalogApi.md#getsellableitembyid) | **GET** /v2/project/{project_id}/items/id/{item_id} | Get sellable item by ID
*CommonCatalogApi* | [**getSellableItemBySku**](docs/Api/CommonCatalogApi.md#getsellableitembysku) | **GET** /v2/project/{project_id}/items/sku/{sku} | Get sellable item by SKU
*CommonCatalogApi* | [**getSellableItems**](docs/Api/CommonCatalogApi.md#getsellableitems) | **GET** /v2/project/{project_id}/items | Get sellable items list
*CommonCatalogApi* | [**getSellableItemsGroup**](docs/Api/CommonCatalogApi.md#getsellableitemsgroup) | **GET** /v2/project/{project_id}/items/group/{external_id} | Get sellable items list by specified group
*CommonMerchantApi* | [**getProjects**](docs/Api/CommonMerchantApi.md#getprojects) | **GET** /v2/merchant/{merchant_id}/projects | Get projects
*CommonPreOrdersApi* | [**addPreOrderLimit**](docs/Api/CommonPreOrdersApi.md#addpreorderlimit) | **POST** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku} | Add quantity to item pre-order limit
*CommonPreOrdersApi* | [**getPreOrderLimit**](docs/Api/CommonPreOrdersApi.md#getpreorderlimit) | **GET** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku} | Get information about item pre-order limit
*CommonPreOrdersApi* | [**removeAllPreOrderLimit**](docs/Api/CommonPreOrdersApi.md#removeallpreorderlimit) | **DELETE** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku}/all | Remove all quantity of item pre-order limit
*CommonPreOrdersApi* | [**removePreOrderLimit**](docs/Api/CommonPreOrdersApi.md#removepreorderlimit) | **DELETE** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku} | Remove quantity of item pre-order limit
*CommonPreOrdersApi* | [**setPreOrderLimit**](docs/Api/CommonPreOrdersApi.md#setpreorderlimit) | **PUT** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku} | Set quantity of item pre-order limit
*CommonPreOrdersApi* | [**togglePreOrderLimit**](docs/Api/CommonPreOrdersApi.md#togglepreorderlimit) | **PUT** /v2/project/{project_id}/admin/items/pre_order/limit/item/sku/{item_sku}/toggle | Toggle item&#39;s pre-order limit
*CommonRegionsApi* | [**adminCreateRegion**](docs/Api/CommonRegionsApi.md#admincreateregion) | **POST** /v2/project/{project_id}/admin/region | Create region
*CommonRegionsApi* | [**adminDeleteRegion**](docs/Api/CommonRegionsApi.md#admindeleteregion) | **DELETE** /v2/project/{project_id}/admin/region/{region_id} | Delete region
*CommonRegionsApi* | [**adminGetRegion**](docs/Api/CommonRegionsApi.md#admingetregion) | **GET** /v2/project/{project_id}/admin/region/{region_id} | Get region
*CommonRegionsApi* | [**adminGetRegions**](docs/Api/CommonRegionsApi.md#admingetregions) | **GET** /v2/project/{project_id}/admin/region | Get list of regions
*CommonRegionsApi* | [**adminUpdateRegion**](docs/Api/CommonRegionsApi.md#adminupdateregion) | **PUT** /v2/project/{project_id}/admin/region/{region_id} | Update region
*CommonWebhooksApi* | [**getWebhook**](docs/Api/CommonWebhooksApi.md#getwebhook) | **GET** /v2/project/{project_id}/admin/webhook | Get information about webhook settings
*CommonWebhooksApi* | [**updateWebhook**](docs/Api/CommonWebhooksApi.md#updatewebhook) | **PUT** /v2/project/{project_id}/admin/webhook | Update information about webhook settings
*ConnectorAdminApi* | [**getItemsImportStatus**](docs/Api/ConnectorAdminApi.md#getitemsimportstatus) | **GET** /v1/admin/projects/{project_id}/connectors/import_items/import/status | Get status of items import
*ConnectorAdminApi* | [**importItemsFromExternalFile**](docs/Api/ConnectorAdminApi.md#importitemsfromexternalfile) | **POST** /v1/projects/{project_id}/import/from_external_file | Import items via JSON file
*FreeItemApi* | [**createFreeOrder**](docs/Api/FreeItemApi.md#createfreeorder) | **POST** /v2/project/{project_id}/free/cart | Create order with free cart
*FreeItemApi* | [**createFreeOrderByCartId**](docs/Api/FreeItemApi.md#createfreeorderbycartid) | **POST** /v2/project/{project_id}/free/cart/{cart_id} | Create order with particular free cart
*FreeItemApi* | [**createFreeOrderWithItem**](docs/Api/FreeItemApi.md#createfreeorderwithitem) | **POST** /v2/project/{project_id}/free/item/{item_sku} | Create order with specified free item
*GameKeysAdminApi* | [**adminCreateGame**](docs/Api/GameKeysAdminApi.md#admincreategame) | **POST** /v2/project/{project_id}/admin/items/game | Create game
*GameKeysAdminApi* | [**adminDeleteCodesById**](docs/Api/GameKeysAdminApi.md#admindeletecodesbyid) | **DELETE** /v2/project/{project_id}/admin/items/game/key/delete/id/{item_id} | Delete codes by ID
*GameKeysAdminApi* | [**adminDeleteCodesBySku**](docs/Api/GameKeysAdminApi.md#admindeletecodesbysku) | **DELETE** /v2/project/{project_id}/admin/items/game/key/delete/sku/{item_sku} | Delete codes
*GameKeysAdminApi* | [**adminDeleteGameById**](docs/Api/GameKeysAdminApi.md#admindeletegamebyid) | **DELETE** /v2/project/{project_id}/admin/items/game/id/{item_id} | Delete game by ID
*GameKeysAdminApi* | [**adminDeleteGameBySku**](docs/Api/GameKeysAdminApi.md#admindeletegamebysku) | **DELETE** /v2/project/{project_id}/admin/items/game/sku/{item_sku} | Delete game by SKU
*GameKeysAdminApi* | [**adminGetCodesById**](docs/Api/GameKeysAdminApi.md#admingetcodesbyid) | **GET** /v2/project/{project_id}/admin/items/game/key/request/id/{item_id} | Get codes by ID
*GameKeysAdminApi* | [**adminGetCodesBySku**](docs/Api/GameKeysAdminApi.md#admingetcodesbysku) | **GET** /v2/project/{project_id}/admin/items/game/key/request/sku/{item_sku} | Get codes
*GameKeysAdminApi* | [**adminGetCodesSession**](docs/Api/GameKeysAdminApi.md#admingetcodessession) | **GET** /v2/project/{project_id}/admin/items/game/key/upload/session/{session_id} | Get codes loading session information
*GameKeysAdminApi* | [**adminGetGameById**](docs/Api/GameKeysAdminApi.md#admingetgamebyid) | **GET** /v2/project/{project_id}/admin/items/game/id/{item_id} | Get game by ID (admin)
*GameKeysAdminApi* | [**adminGetGameBySku**](docs/Api/GameKeysAdminApi.md#admingetgamebysku) | **GET** /v2/project/{project_id}/admin/items/game/sku/{item_sku} | Get game (admin)
*GameKeysAdminApi* | [**adminGetGameList**](docs/Api/GameKeysAdminApi.md#admingetgamelist) | **GET** /v2/project/{project_id}/admin/items/game | Get list of games (admin)
*GameKeysAdminApi* | [**adminUpdateGameById**](docs/Api/GameKeysAdminApi.md#adminupdategamebyid) | **PUT** /v2/project/{project_id}/admin/items/game/id/{item_id} | Update game by ID
*GameKeysAdminApi* | [**adminUpdateGameBySku**](docs/Api/GameKeysAdminApi.md#adminupdategamebysku) | **PUT** /v2/project/{project_id}/admin/items/game/sku/{item_sku} | Update game by SKU
*GameKeysAdminApi* | [**adminUploadCodesById**](docs/Api/GameKeysAdminApi.md#adminuploadcodesbyid) | **POST** /v2/project/{project_id}/admin/items/game/key/upload/id/{item_id} | Upload codes by ID
*GameKeysAdminApi* | [**adminUploadCodesBySku**](docs/Api/GameKeysAdminApi.md#adminuploadcodesbysku) | **POST** /v2/project/{project_id}/admin/items/game/key/upload/sku/{item_sku} | Upload codes
*GameKeysCatalogApi* | [**getDrmList**](docs/Api/GameKeysCatalogApi.md#getdrmlist) | **GET** /v2/project/{project_id}/items/game/drm | Get DRM list
*GameKeysCatalogApi* | [**getGameBySku**](docs/Api/GameKeysCatalogApi.md#getgamebysku) | **GET** /v2/project/{project_id}/items/game/sku/{item_sku} | Get game for catalog
*GameKeysCatalogApi* | [**getGameKeyBySku**](docs/Api/GameKeysCatalogApi.md#getgamekeybysku) | **GET** /v2/project/{project_id}/items/game/key/sku/{item_sku} | Get game key for catalog
*GameKeysCatalogApi* | [**getGameKeysGroup**](docs/Api/GameKeysCatalogApi.md#getgamekeysgroup) | **GET** /v2/project/{project_id}/items/game/key/group/{external_id} | Get game keys list by specified group
*GameKeysCatalogApi* | [**getGamesGroup**](docs/Api/GameKeysCatalogApi.md#getgamesgroup) | **GET** /v2/project/{project_id}/items/game/group/{external_id} | Get games list by specified group
*GameKeysCatalogApi* | [**getGamesList**](docs/Api/GameKeysCatalogApi.md#getgameslist) | **GET** /v2/project/{project_id}/items/game | Get games list
*GameKeysEntitlementApi* | [**getUserGames**](docs/Api/GameKeysEntitlementApi.md#getusergames) | **GET** /v2/project/{project_id}/entitlement | Get list of games owned by user
*GameKeysEntitlementApi* | [**grantEntitlementAdmin**](docs/Api/GameKeysEntitlementApi.md#grantentitlementadmin) | **POST** /v2/project/{project_id}/admin/entitlement/grant | Grant entitlement (admin)
*GameKeysEntitlementApi* | [**redeemGamePinCode**](docs/Api/GameKeysEntitlementApi.md#redeemgamepincode) | **POST** /v2/project/{project_id}/entitlement/redeem | Redeem game code by client
*GameKeysEntitlementApi* | [**revokeEntitlementAdmin**](docs/Api/GameKeysEntitlementApi.md#revokeentitlementadmin) | **POST** /v2/project/{project_id}/admin/entitlement/revoke | Revoke entitlement (admin)
*OfferChainAdminApi* | [**adminCreateOfferChain**](docs/Api/OfferChainAdminApi.md#admincreateofferchain) | **POST** /v2/project/{project_id}/admin/offer_chain | Create offer chain
*OfferChainAdminApi* | [**adminDeleteOfferChain**](docs/Api/OfferChainAdminApi.md#admindeleteofferchain) | **DELETE** /v2/project/{project_id}/admin/offer_chain/id/{offer_chain_id} | Delete offer chain
*OfferChainAdminApi* | [**adminGetOfferChain**](docs/Api/OfferChainAdminApi.md#admingetofferchain) | **GET** /v2/project/{project_id}/admin/offer_chain/id/{offer_chain_id} | Get offer chain
*OfferChainAdminApi* | [**adminGetOfferChains**](docs/Api/OfferChainAdminApi.md#admingetofferchains) | **GET** /v2/project/{project_id}/admin/offer_chain | Get list of offer chains
*OfferChainAdminApi* | [**adminToggleOfferChain**](docs/Api/OfferChainAdminApi.md#admintoggleofferchain) | **PUT** /v2/project/{project_id}/admin/offer_chain/id/{offer_chain_id}/toggle | Toggle offer chain
*OfferChainAdminApi* | [**adminUpdateOfferChain**](docs/Api/OfferChainAdminApi.md#adminupdateofferchain) | **PUT** /v2/project/{project_id}/admin/offer_chain/id/{offer_chain_id} | Update offer chain
*OfferChainClientApi* | [**claimUserOfferChainStepReward**](docs/Api/OfferChainClientApi.md#claimuserofferchainstepreward) | **POST** /v2/project/{project_id}/user/offer_chain/{offer_chain_id}/step/number/{step_number}/claim | Claim free offer chain step
*OfferChainClientApi* | [**getOfferChainsList**](docs/Api/OfferChainClientApi.md#getofferchainslist) | **GET** /v2/project/{project_id}/user/offer_chain | Get current user&#39;s offer chains
*OfferChainClientApi* | [**getUserOfferChainById**](docs/Api/OfferChainClientApi.md#getuserofferchainbyid) | **GET** /v2/project/{project_id}/user/offer_chain/{offer_chain_id} | Get current user&#39;s offer chain by ID
*OfferChainClientApi* | [**orderUserOfferChainStepReward**](docs/Api/OfferChainClientApi.md#orderuserofferchainstepreward) | **POST** /v2/project/{project_id}/user/offer_chain/{offer_chain_id}/step/number/{step_number}/order | Create order for paid offer chain step
*OrderApi* | [**adminOrderSearch**](docs/Api/OrderApi.md#adminordersearch) | **POST** /v3/project/{project_id}/admin/order/search | Get orders list for specified period
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /v2/project/{project_id}/order/{order_id} | Get order
*PaymentClientSideApi* | [**createOrder**](docs/Api/PaymentClientSideApi.md#createorder) | **POST** /v2/project/{project_id}/payment/cart | Create order with all items from current cart
*PaymentClientSideApi* | [**createOrderByCartId**](docs/Api/PaymentClientSideApi.md#createorderbycartid) | **POST** /v2/project/{project_id}/payment/cart/{cart_id} | Create order with all items from particular cart
*PaymentClientSideApi* | [**createOrderWithItem**](docs/Api/PaymentClientSideApi.md#createorderwithitem) | **POST** /v2/project/{project_id}/payment/item/{item_sku} | Create order with specified item
*PaymentClientSideApi* | [**orderUserOfferChainStepReward**](docs/Api/PaymentClientSideApi.md#orderuserofferchainstepreward) | **POST** /v2/project/{project_id}/user/offer_chain/{offer_chain_id}/step/number/{step_number}/order | Create order for paid offer chain step
*PaymentServerSideApi* | [**adminCreatePaymentToken**](docs/Api/PaymentServerSideApi.md#admincreatepaymenttoken) | **POST** /v3/project/{project_id}/admin/payment/token | Create payment token for purchase
*PersonalizedCatalogApi* | [**createFilterRule**](docs/Api/PersonalizedCatalogApi.md#createfilterrule) | **POST** /v2/project/{project_id}/admin/user/attribute/rule | Create catalog filter rule
*PersonalizedCatalogApi* | [**deleteFilterRuleById**](docs/Api/PersonalizedCatalogApi.md#deletefilterrulebyid) | **DELETE** /v2/project/{project_id}/admin/user/attribute/rule/{rule_id} | Delete catalog filter rule
*PersonalizedCatalogApi* | [**getAllFilterRules**](docs/Api/PersonalizedCatalogApi.md#getallfilterrules) | **GET** /v2/project/{project_id}/admin/user/attribute/rule/all | Get all catalog rules for searching on client-side
*PersonalizedCatalogApi* | [**getFilterRuleById**](docs/Api/PersonalizedCatalogApi.md#getfilterrulebyid) | **GET** /v2/project/{project_id}/admin/user/attribute/rule/{rule_id} | Get catalog filter rule
*PersonalizedCatalogApi* | [**getFilterRules**](docs/Api/PersonalizedCatalogApi.md#getfilterrules) | **GET** /v2/project/{project_id}/admin/user/attribute/rule | Get list of catalog filter rules
*PersonalizedCatalogApi* | [**patchFilterRuleById**](docs/Api/PersonalizedCatalogApi.md#patchfilterrulebyid) | **PATCH** /v2/project/{project_id}/admin/user/attribute/rule/{rule_id} | Patch catalog filter rule
*PersonalizedCatalogApi* | [**updateFilterRuleById**](docs/Api/PersonalizedCatalogApi.md#updatefilterrulebyid) | **PUT** /v2/project/{project_id}/admin/user/attribute/rule/{rule_id} | Update catalog filter rule
*PromotionsBonusesApi* | [**createBonusPromotion**](docs/Api/PromotionsBonusesApi.md#createbonuspromotion) | **POST** /v2/project/{project_id}/admin/promotion/bonus | Create bonus promotion
*PromotionsBonusesApi* | [**deleteBonusPromotion**](docs/Api/PromotionsBonusesApi.md#deletebonuspromotion) | **DELETE** /v2/project/{project_id}/admin/promotion/{promotion_id}/bonus | Delete bonus promotion
*PromotionsBonusesApi* | [**getBonusPromotion**](docs/Api/PromotionsBonusesApi.md#getbonuspromotion) | **GET** /v2/project/{project_id}/admin/promotion/{promotion_id}/bonus | Get bonus promotion
*PromotionsBonusesApi* | [**getBonusPromotionList**](docs/Api/PromotionsBonusesApi.md#getbonuspromotionlist) | **GET** /v2/project/{project_id}/admin/promotion/bonus | Get list of bonus promotions
*PromotionsBonusesApi* | [**updateBonusPromotion**](docs/Api/PromotionsBonusesApi.md#updatebonuspromotion) | **PUT** /v2/project/{project_id}/admin/promotion/{promotion_id}/bonus | Update bonus promotion
*PromotionsCommonApi* | [**activatePromotion**](docs/Api/PromotionsCommonApi.md#activatepromotion) | **PUT** /v2/project/{project_id}/admin/promotion/{promotion_id}/activate | Activate promotion
*PromotionsCommonApi* | [**deactivatePromotion**](docs/Api/PromotionsCommonApi.md#deactivatepromotion) | **PUT** /v2/project/{project_id}/admin/promotion/{promotion_id}/deactivate | Deactivate promotion
*PromotionsCommonApi* | [**getPromotionList**](docs/Api/PromotionsCommonApi.md#getpromotionlist) | **GET** /v2/project/{project_id}/admin/promotion | Get all promotion list
*PromotionsCommonApi* | [**getRedeemablePromotionByCode**](docs/Api/PromotionsCommonApi.md#getredeemablepromotionbycode) | **GET** /v2/project/{project_id}/admin/promotion/redeemable/code/{code} | Get redeemable promotion by code
*PromotionsCommonApi* | [**verifyPromotionCode**](docs/Api/PromotionsCommonApi.md#verifypromotioncode) | **GET** /v2/project/{project_id}/promotion/code/{code}/verify | Verify promotion code
*PromotionsCouponsApi* | [**activateCoupon**](docs/Api/PromotionsCouponsApi.md#activatecoupon) | **PUT** /v2/project/{project_id}/admin/coupon/{external_id}/activate | Activate coupon promotion
*PromotionsCouponsApi* | [**addCouponUserPromotionLimit**](docs/Api/PromotionsCouponsApi.md#addcouponuserpromotionlimit) | **POST** /v2/project/{project_id}/admin/user/limit/coupon/external_id/{external_id} | Increase coupon limit for specified user
*PromotionsCouponsApi* | [**adminCreateCoupon**](docs/Api/PromotionsCouponsApi.md#admincreatecoupon) | **POST** /v2/project/{project_id}/admin/coupon | Create coupon promotion
*PromotionsCouponsApi* | [**createCouponCode**](docs/Api/PromotionsCouponsApi.md#createcouponcode) | **POST** /v2/project/{project_id}/admin/coupon/{external_id}/code | Create coupon code
*PromotionsCouponsApi* | [**deactivateCoupon**](docs/Api/PromotionsCouponsApi.md#deactivatecoupon) | **PUT** /v2/project/{project_id}/admin/coupon/{external_id}/deactivate | Deactivate coupon promotion
*PromotionsCouponsApi* | [**deleteCouponPromotion**](docs/Api/PromotionsCouponsApi.md#deletecouponpromotion) | **DELETE** /v2/project/{project_id}/admin/coupon/{external_id} | Delete coupon promotion
*PromotionsCouponsApi* | [**generateCouponCodes**](docs/Api/PromotionsCouponsApi.md#generatecouponcodes) | **PUT** /v2/project/{project_id}/admin/coupon/{external_id}/code/generate | Generate coupon codes
*PromotionsCouponsApi* | [**getCoupon**](docs/Api/PromotionsCouponsApi.md#getcoupon) | **GET** /v2/project/{project_id}/admin/coupon/{external_id} | Get coupon promotion
*PromotionsCouponsApi* | [**getCouponCodeLimit**](docs/Api/PromotionsCouponsApi.md#getcouponcodelimit) | **GET** /v2/project/{project_id}/admin/code/limit/coupon/external_id/{external_id} | Get unique coupon code limits
*PromotionsCouponsApi* | [**getCouponCodes**](docs/Api/PromotionsCouponsApi.md#getcouponcodes) | **GET** /v2/project/{project_id}/admin/coupon/{external_id}/code | Get coupon codes
*PromotionsCouponsApi* | [**getCouponRewardsByCode**](docs/Api/PromotionsCouponsApi.md#getcouponrewardsbycode) | **GET** /v2/project/{project_id}/coupon/code/{coupon_code}/rewards | Get coupon rewards
*PromotionsCouponsApi* | [**getCouponUserLimit**](docs/Api/PromotionsCouponsApi.md#getcouponuserlimit) | **GET** /v2/project/{project_id}/admin/user/limit/coupon/external_id/{external_id} | Get coupon limit for specified user
*PromotionsCouponsApi* | [**getCoupons**](docs/Api/PromotionsCouponsApi.md#getcoupons) | **GET** /v2/project/{project_id}/admin/coupon | Get list of coupon promotions
*PromotionsCouponsApi* | [**redeemCoupon**](docs/Api/PromotionsCouponsApi.md#redeemcoupon) | **POST** /v2/project/{project_id}/coupon/redeem | Redeem coupon code
*PromotionsCouponsApi* | [**removeCouponUserPromotionLimit**](docs/Api/PromotionsCouponsApi.md#removecouponuserpromotionlimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/coupon/external_id/{external_id} | Decrease coupon limit for specified user
*PromotionsCouponsApi* | [**setCouponUserPromotionLimit**](docs/Api/PromotionsCouponsApi.md#setcouponuserpromotionlimit) | **PUT** /v2/project/{project_id}/admin/user/limit/coupon/external_id/{external_id} | Set coupon limit for specified user
*PromotionsCouponsApi* | [**updateCouponPromotion**](docs/Api/PromotionsCouponsApi.md#updatecouponpromotion) | **PUT** /v2/project/{project_id}/admin/coupon/{external_id} | Update coupon promotion
*PromotionsDiscountsApi* | [**createItemPromotion**](docs/Api/PromotionsDiscountsApi.md#createitempromotion) | **POST** /v2/project/{project_id}/admin/promotion/item | Create discount promotion for item
*PromotionsDiscountsApi* | [**deleteItemPromotion**](docs/Api/PromotionsDiscountsApi.md#deleteitempromotion) | **DELETE** /v2/project/{project_id}/admin/promotion/{promotion_id}/item | Delete item promotion
*PromotionsDiscountsApi* | [**getItemPromotion**](docs/Api/PromotionsDiscountsApi.md#getitempromotion) | **GET** /v2/project/{project_id}/admin/promotion/{promotion_id}/item | Get item promotion
*PromotionsDiscountsApi* | [**getItemPromotionList**](docs/Api/PromotionsDiscountsApi.md#getitempromotionlist) | **GET** /v2/project/{project_id}/admin/promotion/item | Get list of item promotions
*PromotionsDiscountsApi* | [**updateItemPromotion**](docs/Api/PromotionsDiscountsApi.md#updateitempromotion) | **PUT** /v2/project/{project_id}/admin/promotion/{promotion_id}/item | Update item promotion
*PromotionsPromoCodesApi* | [**activatePromoCode**](docs/Api/PromotionsPromoCodesApi.md#activatepromocode) | **PUT** /v2/project/{project_id}/admin/promocode/{external_id}/activate | Activate promo code promotion
*PromotionsPromoCodesApi* | [**addPromoCodeUserPromotionLimit**](docs/Api/PromotionsPromoCodesApi.md#addpromocodeuserpromotionlimit) | **POST** /v2/project/{project_id}/admin/user/limit/promocode/external_id/{external_id} | Increase promo code limit for specified user
*PromotionsPromoCodesApi* | [**createPromoCode**](docs/Api/PromotionsPromoCodesApi.md#createpromocode) | **POST** /v2/project/{project_id}/admin/promocode | Create promo code promotion
*PromotionsPromoCodesApi* | [**createPromoCodeCode**](docs/Api/PromotionsPromoCodesApi.md#createpromocodecode) | **POST** /v2/project/{project_id}/admin/promocode/{external_id}/code | Create code for promo code promotion
*PromotionsPromoCodesApi* | [**deactivatePromoCode**](docs/Api/PromotionsPromoCodesApi.md#deactivatepromocode) | **PUT** /v2/project/{project_id}/admin/promocode/{external_id}/deactivate | Deactivate promo code promotion
*PromotionsPromoCodesApi* | [**deletePromoCode**](docs/Api/PromotionsPromoCodesApi.md#deletepromocode) | **DELETE** /v2/project/{project_id}/admin/promocode/{external_id} | Delete promo code promotion
*PromotionsPromoCodesApi* | [**generatePromoCodeCodes**](docs/Api/PromotionsPromoCodesApi.md#generatepromocodecodes) | **PUT** /v2/project/{project_id}/admin/promocode/{external_id}/code/generate | Generate codes for promo code promotion
*PromotionsPromoCodesApi* | [**getPromoCode**](docs/Api/PromotionsPromoCodesApi.md#getpromocode) | **GET** /v2/project/{project_id}/admin/promocode/{external_id} | Get promo code promotion
*PromotionsPromoCodesApi* | [**getPromoCodeCodeLimit**](docs/Api/PromotionsPromoCodesApi.md#getpromocodecodelimit) | **GET** /v2/project/{project_id}/admin/code/limit/promocode/external_id/{external_id} | Get promo code limit for codes
*PromotionsPromoCodesApi* | [**getPromoCodeRewardsByCode**](docs/Api/PromotionsPromoCodesApi.md#getpromocoderewardsbycode) | **GET** /v2/project/{project_id}/promocode/code/{promocode_code}/rewards | Get promo code rewards
*PromotionsPromoCodesApi* | [**getPromoCodeUserLimit**](docs/Api/PromotionsPromoCodesApi.md#getpromocodeuserlimit) | **GET** /v2/project/{project_id}/admin/user/limit/promocode/external_id/{external_id} | Get promo code limit for specified user
*PromotionsPromoCodesApi* | [**getPromoCodes**](docs/Api/PromotionsPromoCodesApi.md#getpromocodes) | **GET** /v2/project/{project_id}/admin/promocode | Get list of promo code promotions
*PromotionsPromoCodesApi* | [**getPromocodeCodes**](docs/Api/PromotionsPromoCodesApi.md#getpromocodecodes) | **GET** /v2/project/{project_id}/admin/promocode/{external_id}/code | Get codes of promo code promotion
*PromotionsPromoCodesApi* | [**redeemPromoCode**](docs/Api/PromotionsPromoCodesApi.md#redeempromocode) | **POST** /v2/project/{project_id}/promocode/redeem | Redeem promo code
*PromotionsPromoCodesApi* | [**removeCartPromoCode**](docs/Api/PromotionsPromoCodesApi.md#removecartpromocode) | **PUT** /v2/project/{project_id}/promocode/remove | Remove promo code from cart
*PromotionsPromoCodesApi* | [**removePromoCodeUserPromotionLimit**](docs/Api/PromotionsPromoCodesApi.md#removepromocodeuserpromotionlimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/promocode/external_id/{external_id} | Decrease promo code limit for specified user
*PromotionsPromoCodesApi* | [**setPromoCodeUserPromotionLimit**](docs/Api/PromotionsPromoCodesApi.md#setpromocodeuserpromotionlimit) | **PUT** /v2/project/{project_id}/admin/user/limit/promocode/external_id/{external_id} | Set promo code limit for specified user
*PromotionsPromoCodesApi* | [**updatePromoCode**](docs/Api/PromotionsPromoCodesApi.md#updatepromocode) | **PUT** /v2/project/{project_id}/admin/promocode/{external_id} | Update promo code promotion
*PromotionsUniqueCatalogOffersApi* | [**activateUniqueCatalogOffer**](docs/Api/PromotionsUniqueCatalogOffersApi.md#activateuniquecatalogoffer) | **PUT** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/activate | Activate unique catalog offer promotion
*PromotionsUniqueCatalogOffersApi* | [**adminCreateUniqueCatalogOffer**](docs/Api/PromotionsUniqueCatalogOffersApi.md#admincreateuniquecatalogoffer) | **POST** /v2/project/{project_id}/admin/unique_catalog_offer | Create unique catalog offer promotion
*PromotionsUniqueCatalogOffersApi* | [**createUniqueCatalogOfferCode**](docs/Api/PromotionsUniqueCatalogOffersApi.md#createuniquecatalogoffercode) | **POST** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/code | Create unique catalog offer code
*PromotionsUniqueCatalogOffersApi* | [**deactivateUniqueCatalogOffer**](docs/Api/PromotionsUniqueCatalogOffersApi.md#deactivateuniquecatalogoffer) | **PUT** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/deactivate | Deactivate unique catalog offer promotion
*PromotionsUniqueCatalogOffersApi* | [**deleteUniqueCatalogOfferPromotion**](docs/Api/PromotionsUniqueCatalogOffersApi.md#deleteuniquecatalogofferpromotion) | **DELETE** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id} | Delete unique catalog offer promotion
*PromotionsUniqueCatalogOffersApi* | [**generateUniqueCatalogOfferCodes**](docs/Api/PromotionsUniqueCatalogOffersApi.md#generateuniquecatalogoffercodes) | **PUT** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/code/generate | Generate unique catalog offer codes
*PromotionsUniqueCatalogOffersApi* | [**getUniqueCatalogOffer**](docs/Api/PromotionsUniqueCatalogOffersApi.md#getuniquecatalogoffer) | **GET** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id} | Get unique catalog offer promotion
*PromotionsUniqueCatalogOffersApi* | [**getUniqueCatalogOfferCodes**](docs/Api/PromotionsUniqueCatalogOffersApi.md#getuniquecatalogoffercodes) | **GET** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id}/code | Get unique catalog offer codes
*PromotionsUniqueCatalogOffersApi* | [**getUniqueCatalogOffers**](docs/Api/PromotionsUniqueCatalogOffersApi.md#getuniquecatalogoffers) | **GET** /v2/project/{project_id}/admin/unique_catalog_offer | Get list of unique catalog offer promotions
*PromotionsUniqueCatalogOffersApi* | [**updateUniqueCatalogOfferPromotion**](docs/Api/PromotionsUniqueCatalogOffersApi.md#updateuniquecatalogofferpromotion) | **PUT** /v2/project/{project_id}/admin/unique_catalog_offer/{external_id} | Update unique catalog offer promotion
*RewardChainClientApi* | [**claimUserRewardChainStepReward**](docs/Api/RewardChainClientApi.md#claimuserrewardchainstepreward) | **POST** /v2/project/{project_id}/user/reward_chain/{reward_chain_id}/step/{step_id}/claim | Claim step reward
*RewardChainClientApi* | [**getRewardChainsList**](docs/Api/RewardChainClientApi.md#getrewardchainslist) | **GET** /v2/project/{project_id}/user/reward_chain | Get current user&#39;s reward chains
*RewardChainClientApi* | [**getUserRewardChainBalance**](docs/Api/RewardChainClientApi.md#getuserrewardchainbalance) | **GET** /v2/project/{project_id}/user/reward_chain/{reward_chain_id}/balance | Get current user&#39;s value point balance
*RewardChainValuePointsAdminApi* | [**adminCreateRewardChain**](docs/Api/RewardChainValuePointsAdminApi.md#admincreaterewardchain) | **POST** /v2/project/{project_id}/admin/reward_chain | Create reward chain
*RewardChainValuePointsAdminApi* | [**adminCreateValuePoints**](docs/Api/RewardChainValuePointsAdminApi.md#admincreatevaluepoints) | **POST** /v2/project/{project_id}/admin/items/value_points | Create value point
*RewardChainValuePointsAdminApi* | [**adminDeleteItemsValuePointReward**](docs/Api/RewardChainValuePointsAdminApi.md#admindeleteitemsvaluepointreward) | **DELETE** /v2/project/{project_id}/admin/items/{value_point_sku}/value_points/rewards | Delete value points from items
*RewardChainValuePointsAdminApi* | [**adminDeleteRewardChain**](docs/Api/RewardChainValuePointsAdminApi.md#admindeleterewardchain) | **DELETE** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id} | Delete reward chain
*RewardChainValuePointsAdminApi* | [**adminDeleteValuePoint**](docs/Api/RewardChainValuePointsAdminApi.md#admindeletevaluepoint) | **DELETE** /v2/project/{project_id}/admin/items/value_points/sku/{item_sku} | Delete value points
*RewardChainValuePointsAdminApi* | [**adminGetItemsValuePointReward**](docs/Api/RewardChainValuePointsAdminApi.md#admingetitemsvaluepointreward) | **GET** /v2/project/{project_id}/admin/items/{value_point_sku}/value_points/rewards | Get list of items with value points
*RewardChainValuePointsAdminApi* | [**adminGetRewardChain**](docs/Api/RewardChainValuePointsAdminApi.md#admingetrewardchain) | **GET** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id} | Get reward chain
*RewardChainValuePointsAdminApi* | [**adminGetRewardChains**](docs/Api/RewardChainValuePointsAdminApi.md#admingetrewardchains) | **GET** /v2/project/{project_id}/admin/reward_chain | Get list of reward chains
*RewardChainValuePointsAdminApi* | [**adminGetValuePoint**](docs/Api/RewardChainValuePointsAdminApi.md#admingetvaluepoint) | **GET** /v2/project/{project_id}/admin/items/value_points/sku/{item_sku} | Get value point
*RewardChainValuePointsAdminApi* | [**adminGetValuePointsList**](docs/Api/RewardChainValuePointsAdminApi.md#admingetvaluepointslist) | **GET** /v2/project/{project_id}/admin/items/value_points | Get list of value points (admin)
*RewardChainValuePointsAdminApi* | [**adminPatchItemsValuePointReward**](docs/Api/RewardChainValuePointsAdminApi.md#adminpatchitemsvaluepointreward) | **PATCH** /v2/project/{project_id}/admin/items/{value_point_sku}/value_points/rewards | Partially update value points for items
*RewardChainValuePointsAdminApi* | [**adminResetRewardChain**](docs/Api/RewardChainValuePointsAdminApi.md#adminresetrewardchain) | **POST** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id}/reset | Reset reward chain
*RewardChainValuePointsAdminApi* | [**adminSetItemsValuePointReward**](docs/Api/RewardChainValuePointsAdminApi.md#adminsetitemsvaluepointreward) | **PUT** /v2/project/{project_id}/admin/items/{value_point_sku}/value_points/rewards | Set value points for items
*RewardChainValuePointsAdminApi* | [**adminToggleRewardChain**](docs/Api/RewardChainValuePointsAdminApi.md#admintogglerewardchain) | **PUT** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id}/toggle | Toggle reward chain
*RewardChainValuePointsAdminApi* | [**adminUpdateRewardChain**](docs/Api/RewardChainValuePointsAdminApi.md#adminupdaterewardchain) | **PUT** /v2/project/{project_id}/admin/reward_chain/id/{reward_chain_id} | Update reward chain
*RewardChainValuePointsAdminApi* | [**adminUpdateValuePoint**](docs/Api/RewardChainValuePointsAdminApi.md#adminupdatevaluepoint) | **PUT** /v2/project/{project_id}/admin/items/value_points/sku/{item_sku} | Update value point
*UpsellAdminApi* | [**getUpsellConfigurationsForProjectAdmin**](docs/Api/UpsellAdminApi.md#getupsellconfigurationsforprojectadmin) | **GET** /v2/project/{project_id}/admin/items/upsell | Get information about upsell in project
*UpsellAdminApi* | [**postUpsell**](docs/Api/UpsellAdminApi.md#postupsell) | **POST** /v2/project/{project_id}/admin/items/upsell | Create upsell
*UpsellAdminApi* | [**putUpsell**](docs/Api/UpsellAdminApi.md#putupsell) | **PUT** /v2/project/{project_id}/admin/items/upsell | Update upsell
*UpsellAdminApi* | [**putUpsellToggleActiveInactive**](docs/Api/UpsellAdminApi.md#putupselltoggleactiveinactive) | **PUT** /v2/project/{project_id}/admin/items/upsell/{toggle} | Activate/Deactivate project&#39;s upsell
*UpsellClientApi* | [**getUpsellForProjectClient**](docs/Api/UpsellClientApi.md#getupsellforprojectclient) | **GET** /v2/project/{project_id}/items/upsell | Get list of upsell items in project
*UserLimitsAdminApi* | [**addUserItemLimit**](docs/Api/UserLimitsAdminApi.md#adduseritemlimit) | **POST** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku} | Increase number of items available to specified user
*UserLimitsAdminApi* | [**addUserPromotionLimit**](docs/Api/UserLimitsAdminApi.md#adduserpromotionlimit) | **POST** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id} | Increase promotion limit for specified user
*UserLimitsAdminApi* | [**getUserItemLimit**](docs/Api/UserLimitsAdminApi.md#getuseritemlimit) | **GET** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku} | Get number of items available to specified user
*UserLimitsAdminApi* | [**getUserPromotionLimit**](docs/Api/UserLimitsAdminApi.md#getuserpromotionlimit) | **GET** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id} | Get promotion limit for specified user
*UserLimitsAdminApi* | [**removeUserItemLimit**](docs/Api/UserLimitsAdminApi.md#removeuseritemlimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku} | Decrease number of items available to specified user
*UserLimitsAdminApi* | [**removeUserPromotionLimit**](docs/Api/UserLimitsAdminApi.md#removeuserpromotionlimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id} | Decrease promotion limit for specified user
*UserLimitsAdminApi* | [**resetAllUserItemsLimit**](docs/Api/UserLimitsAdminApi.md#resetalluseritemslimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/item/all | Refresh all purchase limits for specified user
*UserLimitsAdminApi* | [**resetAllUserPromotionsLimit**](docs/Api/UserLimitsAdminApi.md#resetalluserpromotionslimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/promotion/all | Refresh all promotion limits for specified user
*UserLimitsAdminApi* | [**resetUserItemLimit**](docs/Api/UserLimitsAdminApi.md#resetuseritemlimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku}/all | Refresh purchase limit
*UserLimitsAdminApi* | [**resetUserPromotionLimit**](docs/Api/UserLimitsAdminApi.md#resetuserpromotionlimit) | **DELETE** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id}/all | Refresh promotion limit for users
*UserLimitsAdminApi* | [**setUserItemLimit**](docs/Api/UserLimitsAdminApi.md#setuseritemlimit) | **PUT** /v2/project/{project_id}/admin/user/limit/item/sku/{item_sku} | Set number of items available to specified user
*UserLimitsAdminApi* | [**setUserPromotionLimit**](docs/Api/UserLimitsAdminApi.md#setuserpromotionlimit) | **PUT** /v2/project/{project_id}/admin/user/limit/promotion/id/{promotion_id} | Set promotion limit for specified user
*VirtualItemsCurrencyAdminApi* | [**adminCreateVirtualCurrency**](docs/Api/VirtualItemsCurrencyAdminApi.md#admincreatevirtualcurrency) | **POST** /v2/project/{project_id}/admin/items/virtual_currency | Create virtual currency
*VirtualItemsCurrencyAdminApi* | [**adminCreateVirtualCurrencyPackage**](docs/Api/VirtualItemsCurrencyAdminApi.md#admincreatevirtualcurrencypackage) | **POST** /v2/project/{project_id}/admin/items/virtual_currency/package | Create virtual currency package
*VirtualItemsCurrencyAdminApi* | [**adminCreateVirtualItem**](docs/Api/VirtualItemsCurrencyAdminApi.md#admincreatevirtualitem) | **POST** /v2/project/{project_id}/admin/items/virtual_items | Create virtual item
*VirtualItemsCurrencyAdminApi* | [**adminDeleteVirtualCurrency**](docs/Api/VirtualItemsCurrencyAdminApi.md#admindeletevirtualcurrency) | **DELETE** /v2/project/{project_id}/admin/items/virtual_currency/sku/{virtual_currency_sku} | Delete virtual currency
*VirtualItemsCurrencyAdminApi* | [**adminDeleteVirtualCurrencyPackage**](docs/Api/VirtualItemsCurrencyAdminApi.md#admindeletevirtualcurrencypackage) | **DELETE** /v2/project/{project_id}/admin/items/virtual_currency/package/sku/{item_sku} | Delete virtual currency package
*VirtualItemsCurrencyAdminApi* | [**adminDeleteVirtualItem**](docs/Api/VirtualItemsCurrencyAdminApi.md#admindeletevirtualitem) | **DELETE** /v2/project/{project_id}/admin/items/virtual_items/sku/{item_sku} | Delete virtual item
*VirtualItemsCurrencyAdminApi* | [**adminGetVirtualCurrenciesList**](docs/Api/VirtualItemsCurrencyAdminApi.md#admingetvirtualcurrencieslist) | **GET** /v2/project/{project_id}/admin/items/virtual_currency | Get list of virtual currencies (admin)
*VirtualItemsCurrencyAdminApi* | [**adminGetVirtualCurrency**](docs/Api/VirtualItemsCurrencyAdminApi.md#admingetvirtualcurrency) | **GET** /v2/project/{project_id}/admin/items/virtual_currency/sku/{virtual_currency_sku} | Get virtual currency
*VirtualItemsCurrencyAdminApi* | [**adminGetVirtualCurrencyPackage**](docs/Api/VirtualItemsCurrencyAdminApi.md#admingetvirtualcurrencypackage) | **GET** /v2/project/{project_id}/admin/items/virtual_currency/package/sku/{item_sku} | Get virtual currency package
*VirtualItemsCurrencyAdminApi* | [**adminGetVirtualCurrencyPackagesList**](docs/Api/VirtualItemsCurrencyAdminApi.md#admingetvirtualcurrencypackageslist) | **GET** /v2/project/{project_id}/admin/items/virtual_currency/package | Get list of virtual currency packages (admin)
*VirtualItemsCurrencyAdminApi* | [**adminGetVirtualItem**](docs/Api/VirtualItemsCurrencyAdminApi.md#admingetvirtualitem) | **GET** /v2/project/{project_id}/admin/items/virtual_items/sku/{item_sku} | Get virtual item
*VirtualItemsCurrencyAdminApi* | [**adminGetVirtualItemsList**](docs/Api/VirtualItemsCurrencyAdminApi.md#admingetvirtualitemslist) | **GET** /v2/project/{project_id}/admin/items/virtual_items | Get list of virtual items (admin)
*VirtualItemsCurrencyAdminApi* | [**adminGetVirtualItemsListByGroupExternalId**](docs/Api/VirtualItemsCurrencyAdminApi.md#admingetvirtualitemslistbygroupexternalid) | **GET** /v2/project/{project_id}/admin/items/virtual_items/group/external_id/{external_id} | Get list of virtual items by specified group external id
*VirtualItemsCurrencyAdminApi* | [**adminGetVirtualItemsListByGroupId**](docs/Api/VirtualItemsCurrencyAdminApi.md#admingetvirtualitemslistbygroupid) | **GET** /v2/project/{project_id}/admin/items/virtual_items/group/id/{group_id} | Get list of virtual items by specified group id
*VirtualItemsCurrencyAdminApi* | [**adminUpdateVirtualCurrency**](docs/Api/VirtualItemsCurrencyAdminApi.md#adminupdatevirtualcurrency) | **PUT** /v2/project/{project_id}/admin/items/virtual_currency/sku/{virtual_currency_sku} | Update virtual currency
*VirtualItemsCurrencyAdminApi* | [**adminUpdateVirtualCurrencyPackage**](docs/Api/VirtualItemsCurrencyAdminApi.md#adminupdatevirtualcurrencypackage) | **PUT** /v2/project/{project_id}/admin/items/virtual_currency/package/sku/{item_sku} | Update virtual currency package
*VirtualItemsCurrencyAdminApi* | [**adminUpdateVirtualItem**](docs/Api/VirtualItemsCurrencyAdminApi.md#adminupdatevirtualitem) | **PUT** /v2/project/{project_id}/admin/items/virtual_items/sku/{item_sku} | Update virtual item
*VirtualItemsCurrencyCatalogApi* | [**getAllVirtualItems**](docs/Api/VirtualItemsCurrencyCatalogApi.md#getallvirtualitems) | **GET** /v2/project/{project_id}/items/virtual_items/all | Get all virtual items list
*VirtualItemsCurrencyCatalogApi* | [**getItemGroups**](docs/Api/VirtualItemsCurrencyCatalogApi.md#getitemgroups) | **GET** /v2/project/{project_id}/items/groups | Get item group list
*VirtualItemsCurrencyCatalogApi* | [**getVirtualCurrency**](docs/Api/VirtualItemsCurrencyCatalogApi.md#getvirtualcurrency) | **GET** /v2/project/{project_id}/items/virtual_currency | Get virtual currency list
*VirtualItemsCurrencyCatalogApi* | [**getVirtualCurrencyPackage**](docs/Api/VirtualItemsCurrencyCatalogApi.md#getvirtualcurrencypackage) | **GET** /v2/project/{project_id}/items/virtual_currency/package | Get virtual currency package list
*VirtualItemsCurrencyCatalogApi* | [**getVirtualCurrencyPackageSku**](docs/Api/VirtualItemsCurrencyCatalogApi.md#getvirtualcurrencypackagesku) | **GET** /v2/project/{project_id}/items/virtual_currency/package/sku/{virtual_currency_package_sku} | Get virtual currency package by SKU
*VirtualItemsCurrencyCatalogApi* | [**getVirtualCurrencySku**](docs/Api/VirtualItemsCurrencyCatalogApi.md#getvirtualcurrencysku) | **GET** /v2/project/{project_id}/items/virtual_currency/sku/{virtual_currency_sku} | Get virtual currency by SKU
*VirtualItemsCurrencyCatalogApi* | [**getVirtualItems**](docs/Api/VirtualItemsCurrencyCatalogApi.md#getvirtualitems) | **GET** /v2/project/{project_id}/items/virtual_items | Get virtual items list
*VirtualItemsCurrencyCatalogApi* | [**getVirtualItemsGroup**](docs/Api/VirtualItemsCurrencyCatalogApi.md#getvirtualitemsgroup) | **GET** /v2/project/{project_id}/items/virtual_items/group/{external_id} | Get items list by specified group
*VirtualItemsCurrencyCatalogApi* | [**getVirtualItemsSku**](docs/Api/VirtualItemsCurrencyCatalogApi.md#getvirtualitemssku) | **GET** /v2/project/{project_id}/items/virtual_items/sku/{item_sku} | Get virtual item by SKU
*VirtualPaymentApi* | [**createOrderWithItemForVirtualCurrency**](docs/Api/VirtualPaymentApi.md#createorderwithitemforvirtualcurrency) | **POST** /v2/project/{project_id}/payment/item/{item_sku}/virtual/{virtual_currency_sku} | Create order with specified item purchased by virtual currency

## Models

- [AddCouponUserPromotionLimitRequest](docs/Model/AddCouponUserPromotionLimitRequest.md)
- [AddPreOrderLimitRequest](docs/Model/AddPreOrderLimitRequest.md)
- [AddPromoCodeUserPromotionLimitRequest](docs/Model/AddPromoCodeUserPromotionLimitRequest.md)
- [AddUserItemLimitRequest](docs/Model/AddUserItemLimitRequest.md)
- [AdminAttributeResponse](docs/Model/AdminAttributeResponse.md)
- [AdminCreateAttributeRequest](docs/Model/AdminCreateAttributeRequest.md)
- [AdminCreateCoupon201Response](docs/Model/AdminCreateCoupon201Response.md)
- [AdminCreateCouponRequest](docs/Model/AdminCreateCouponRequest.md)
- [AdminCreateCouponRequestAttributeConditions](docs/Model/AdminCreateCouponRequestAttributeConditions.md)
- [AdminCreateGame201Response](docs/Model/AdminCreateGame201Response.md)
- [AdminCreateGameRequest](docs/Model/AdminCreateGameRequest.md)
- [AdminCreateGameRequestGroupsInner](docs/Model/AdminCreateGameRequestGroupsInner.md)
- [AdminCreateGameRequestMediaListInner](docs/Model/AdminCreateGameRequestMediaListInner.md)
- [AdminCreateGameRequestUnitItemsInner](docs/Model/AdminCreateGameRequestUnitItemsInner.md)
- [AdminCreateGameRequestUnitItemsInnerPreOrder](docs/Model/AdminCreateGameRequestUnitItemsInnerPreOrder.md)
- [AdminCreateGameRequestUnitItemsInnerPricesInner](docs/Model/AdminCreateGameRequestUnitItemsInnerPricesInner.md)
- [AdminCreateGameRequestUnitItemsInnerVcPricesInner](docs/Model/AdminCreateGameRequestUnitItemsInnerVcPricesInner.md)
- [AdminCreatePaymentTokenRequest](docs/Model/AdminCreatePaymentTokenRequest.md)
- [AdminCreatePaymentTokenRequestSettings](docs/Model/AdminCreatePaymentTokenRequestSettings.md)
- [AdminCreateRegionRequest](docs/Model/AdminCreateRegionRequest.md)
- [AdminCreateRewardChainRequest](docs/Model/AdminCreateRewardChainRequest.md)
- [AdminCreateUniqueCatalogOfferRequest](docs/Model/AdminCreateUniqueCatalogOfferRequest.md)
- [AdminGetGameById404Response](docs/Model/AdminGetGameById404Response.md)
- [AdminGetRewardChainItemBasicModel](docs/Model/AdminGetRewardChainItemBasicModel.md)
- [AdminGetRewardChainItemBasicModelValuePoint](docs/Model/AdminGetRewardChainItemBasicModelValuePoint.md)
- [AdminGetRewardChainItemClanBasicModel](docs/Model/AdminGetRewardChainItemClanBasicModel.md)
- [AdminGetRewardChainItemClanBasicModelAllOfValuePoint](docs/Model/AdminGetRewardChainItemClanBasicModelAllOfValuePoint.md)
- [AdminGetRewardChainItemClanFullModel](docs/Model/AdminGetRewardChainItemClanFullModel.md)
- [AdminGetRewardChainItemClanFullModelAllOfValuePoint](docs/Model/AdminGetRewardChainItemClanFullModelAllOfValuePoint.md)
- [AdminGetRewardChainItemFullModel](docs/Model/AdminGetRewardChainItemFullModel.md)
- [AdminGetRewardChainItemFullModelValuePoint](docs/Model/AdminGetRewardChainItemFullModelValuePoint.md)
- [AdminItemValuePointReward](docs/Model/AdminItemValuePointReward.md)
- [AdminOfferChainItemModel](docs/Model/AdminOfferChainItemModel.md)
- [AdminOfferChainLongModel](docs/Model/AdminOfferChainLongModel.md)
- [AdminOfferChainShortModel](docs/Model/AdminOfferChainShortModel.md)
- [AdminOfferChainStepModel](docs/Model/AdminOfferChainStepModel.md)
- [AdminOrderSearchRequest](docs/Model/AdminOrderSearchRequest.md)
- [AdminPostPutAttributeItem](docs/Model/AdminPostPutAttributeItem.md)
- [AdminPromotions200GetCouponPromotionModel](docs/Model/AdminPromotions200GetCouponPromotionModel.md)
- [AdminPromotions200GetCouponPromotionModelAttributeConditions](docs/Model/AdminPromotions200GetCouponPromotionModelAttributeConditions.md)
- [AdminPromotions200GetRedeemableCouponPromotionModel](docs/Model/AdminPromotions200GetRedeemableCouponPromotionModel.md)
- [AdminPromotions200GetRedeemableCouponPromotionModelDiscount](docs/Model/AdminPromotions200GetRedeemableCouponPromotionModelDiscount.md)
- [AdminPromotions200GetRedeemableCouponPromotionModelDiscountedItemsInner](docs/Model/AdminPromotions200GetRedeemableCouponPromotionModelDiscountedItemsInner.md)
- [AdminPromotions200GetRedeemableCouponPromotionModelDiscountedItemsInnerDiscount](docs/Model/AdminPromotions200GetRedeemableCouponPromotionModelDiscountedItemsInnerDiscount.md)
- [AdminRecurrentSchedule](docs/Model/AdminRecurrentSchedule.md)
- [AdminUpdateRewardChainRequest](docs/Model/AdminUpdateRewardChainRequest.md)
- [AdminValuePointsCreate](docs/Model/AdminValuePointsCreate.md)
- [Attribute](docs/Model/Attribute.md)
- [AttributeValue](docs/Model/AttributeValue.md)
- [BundleType](docs/Model/BundleType.md)
- [Bundles422InvalidRequest](docs/Model/Bundles422InvalidRequest.md)
- [BundlesAdminBundleRequest](docs/Model/BundlesAdminBundleRequest.md)
- [BundlesAdminBundleResponse](docs/Model/BundlesAdminBundleResponse.md)
- [BundlesAdminContentRequestInner](docs/Model/BundlesAdminContentRequestInner.md)
- [BundlesAdminContentResponse](docs/Model/BundlesAdminContentResponse.md)
- [BundlesAdminRegionsInner](docs/Model/BundlesAdminRegionsInner.md)
- [BundlesAdminResponseVirtualPrice](docs/Model/BundlesAdminResponseVirtualPrice.md)
- [BundlesBundleType](docs/Model/BundlesBundleType.md)
- [BundlesClientAttributesInner](docs/Model/BundlesClientAttributesInner.md)
- [BundlesClientAttributesInnerValuesInner](docs/Model/BundlesClientAttributesInnerValuesInner.md)
- [BundlesClientBundle](docs/Model/BundlesClientBundle.md)
- [BundlesClientContentInner](docs/Model/BundlesClientContentInner.md)
- [BundlesClientContentInnerPrice](docs/Model/BundlesClientContentInnerPrice.md)
- [BundlesClientContentInnerVirtualPricesInner](docs/Model/BundlesClientContentInnerVirtualPricesInner.md)
- [BundlesGroupsResponseInner](docs/Model/BundlesGroupsResponseInner.md)
- [BundlesPrice](docs/Model/BundlesPrice.md)
- [BundlesPricesInner](docs/Model/BundlesPricesInner.md)
- [BundlesTotalContentPrice](docs/Model/BundlesTotalContentPrice.md)
- [BundlesVcPricesInner](docs/Model/BundlesVcPricesInner.md)
- [BundlesVirtualPricesInner](docs/Model/BundlesVirtualPricesInner.md)
- [Cart](docs/Model/Cart.md)
- [CartAdminPayment](docs/Model/CartAdminPayment.md)
- [CartAdminPaymentItemsInner](docs/Model/CartAdminPaymentItemsInner.md)
- [CartFillRequest](docs/Model/CartFillRequest.md)
- [CartFillRequestItemsInner](docs/Model/CartFillRequestItemsInner.md)
- [CartPaymentAdminUserRequestBody](docs/Model/CartPaymentAdminUserRequestBody.md)
- [CartPaymentAdminUserRequestBodyCountry](docs/Model/CartPaymentAdminUserRequestBodyCountry.md)
- [CartPaymentAdminUserRequestBodyEmail](docs/Model/CartPaymentAdminUserRequestBodyEmail.md)
- [CartPaymentAdminUserRequestBodyId](docs/Model/CartPaymentAdminUserRequestBodyId.md)
- [CartPaymentAdminUserRequestBodyLegal](docs/Model/CartPaymentAdminUserRequestBodyLegal.md)
- [CartPaymentAdminUserRequestBodyName](docs/Model/CartPaymentAdminUserRequestBodyName.md)
- [CartPaymentAdminUserRequestBodyPhone](docs/Model/CartPaymentAdminUserRequestBodyPhone.md)
- [CartPaymentAdminUserRequestBodySteamId](docs/Model/CartPaymentAdminUserRequestBodySteamId.md)
- [CartPaymentAdminUserRequestBodyTrackingId](docs/Model/CartPaymentAdminUserRequestBodyTrackingId.md)
- [CartPaymentCustomParametersValue](docs/Model/CartPaymentCustomParametersValue.md)
- [CartPaymentRedirectPolicy](docs/Model/CartPaymentRedirectPolicy.md)
- [CartPaymentSettingsUi](docs/Model/CartPaymentSettingsUi.md)
- [CartPaymentSettingsUiDesktop](docs/Model/CartPaymentSettingsUiDesktop.md)
- [CartPaymentSettingsUiDesktopHeader](docs/Model/CartPaymentSettingsUiDesktopHeader.md)
- [CartPaymentSettingsUiHeader](docs/Model/CartPaymentSettingsUiHeader.md)
- [CartPaymentSettingsUiMobile](docs/Model/CartPaymentSettingsUiMobile.md)
- [CartPaymentSettingsUiMobileHeader](docs/Model/CartPaymentSettingsUiMobileHeader.md)
- [CartPaymentSettingsUiUserAccount](docs/Model/CartPaymentSettingsUiUserAccount.md)
- [CartPaymentSettingsUiUserAccountInfo](docs/Model/CartPaymentSettingsUiUserAccountInfo.md)
- [CartPaymentSettingsUiUserAccountPaymentAccounts](docs/Model/CartPaymentSettingsUiUserAccountPaymentAccounts.md)
- [CartPaymentSettingsUiUserAccountSubscriptions](docs/Model/CartPaymentSettingsUiUserAccountSubscriptions.md)
- [CatalogItemLimits](docs/Model/CatalogItemLimits.md)
- [CatalogItemLimitsPerItem](docs/Model/CatalogItemLimitsPerItem.md)
- [CatalogItemLimitsPerUser](docs/Model/CatalogItemLimitsPerUser.md)
- [CatalogItemLimitsPerUserRecurrentSchedule](docs/Model/CatalogItemLimitsPerUserRecurrentSchedule.md)
- [CatalogItemPromotionsInner](docs/Model/CatalogItemPromotionsInner.md)
- [CatalogItemPromotionsInnerBonusInner](docs/Model/CatalogItemPromotionsInnerBonusInner.md)
- [CatalogItemPromotionsInnerDiscount](docs/Model/CatalogItemPromotionsInnerDiscount.md)
- [CatalogItemPromotionsInnerLimits](docs/Model/CatalogItemPromotionsInnerLimits.md)
- [CatalogItemPromotionsInnerLimitsPerUser](docs/Model/CatalogItemPromotionsInnerLimitsPerUser.md)
- [ClaimUserOfferChainStepReward200Response](docs/Model/ClaimUserOfferChainStepReward200Response.md)
- [ClanType](docs/Model/ClanType.md)
- [ClientItemValuePointRewardInner](docs/Model/ClientItemValuePointRewardInner.md)
- [ClientOfferChainItemModel](docs/Model/ClientOfferChainItemModel.md)
- [ClientOfferChainModel](docs/Model/ClientOfferChainModel.md)
- [ClientOfferChainStepModel](docs/Model/ClientOfferChainStepModel.md)
- [ClientOfferChainStepModelStepLoyaltyRewardsInner](docs/Model/ClientOfferChainStepModelStepLoyaltyRewardsInner.md)
- [ClientRewardChainItemModel](docs/Model/ClientRewardChainItemModel.md)
- [ClientRewardChainItemModelStepsInner](docs/Model/ClientRewardChainItemModelStepsInner.md)
- [ClientRewardChainItemModelStepsInnerPrice](docs/Model/ClientRewardChainItemModelStepsInnerPrice.md)
- [ClientRewardChainItemModelStepsInnerRewardInner](docs/Model/ClientRewardChainItemModelStepsInnerRewardInner.md)
- [ClientRewardChainItemModelValuePoint](docs/Model/ClientRewardChainItemModelValuePoint.md)
- [CodeLimitPromoCode](docs/Model/CodeLimitPromoCode.md)
- [CodeLimitPromoCodePerCode](docs/Model/CodeLimitPromoCodePerCode.md)
- [CouponRewards](docs/Model/CouponRewards.md)
- [CreateBonusPromotionRequest](docs/Model/CreateBonusPromotionRequest.md)
- [CreateBonusPromotionRequestBonusInner](docs/Model/CreateBonusPromotionRequestBonusInner.md)
- [CreateBonusPromotionRequestConditionInner](docs/Model/CreateBonusPromotionRequestConditionInner.md)
- [CreateClanRewardChainModel](docs/Model/CreateClanRewardChainModel.md)
- [CreateClanRewardChainModelAllOfValuePoint](docs/Model/CreateClanRewardChainModelAllOfValuePoint.md)
- [CreateCouponCodeRequest](docs/Model/CreateCouponCodeRequest.md)
- [CreateFilterRule201Response](docs/Model/CreateFilterRule201Response.md)
- [CreateItemPromotionRequest](docs/Model/CreateItemPromotionRequest.md)
- [CreateItemPromotionRequestAttributeConditionsInner](docs/Model/CreateItemPromotionRequestAttributeConditionsInner.md)
- [CreateItemPromotionRequestDiscount](docs/Model/CreateItemPromotionRequestDiscount.md)
- [CreateItemPromotionRequestItemsInner](docs/Model/CreateItemPromotionRequestItemsInner.md)
- [CreateOfferChainModel](docs/Model/CreateOfferChainModel.md)
- [CreateOfferChainStepModel](docs/Model/CreateOfferChainStepModel.md)
- [CreateOrderByCartIdRequest](docs/Model/CreateOrderByCartIdRequest.md)
- [CreateOrderByCartIdRequestSettings](docs/Model/CreateOrderByCartIdRequestSettings.md)
- [CreateOrderWithItemForVirtualCurrencyRequest](docs/Model/CreateOrderWithItemForVirtualCurrencyRequest.md)
- [CreateOrderWithItemRequest](docs/Model/CreateOrderWithItemRequest.md)
- [CreatePromoCodeRequest](docs/Model/CreatePromoCodeRequest.md)
- [CreatePromoCodeRequestDiscount](docs/Model/CreatePromoCodeRequestDiscount.md)
- [CreateRewardChainModel](docs/Model/CreateRewardChainModel.md)
- [CreateRewardChainModelValuePoint](docs/Model/CreateRewardChainModelValuePoint.md)
- [CreateRewardStep](docs/Model/CreateRewardStep.md)
- [CreateRewardStepRewardInner](docs/Model/CreateRewardStepRewardInner.md)
- [DescriptionLocalizationObject](docs/Model/DescriptionLocalizationObject.md)
- [FiveLetterLocale](docs/Model/FiveLetterLocale.md)
- [GameKeys422InvalidRequest](docs/Model/GameKeys422InvalidRequest.md)
- [GameKeysClientAttributesInner](docs/Model/GameKeysClientAttributesInner.md)
- [GameKeysClientAttributesInnerValuesInner](docs/Model/GameKeysClientAttributesInnerValuesInner.md)
- [GameKeysDrmSku](docs/Model/GameKeysDrmSku.md)
- [GameKeysEntitlementItem](docs/Model/GameKeysEntitlementItem.md)
- [GameKeysRegionsInner](docs/Model/GameKeysRegionsInner.md)
- [GenerateCouponCodes200Response](docs/Model/GenerateCouponCodes200Response.md)
- [GenerateCouponCodesRequest](docs/Model/GenerateCouponCodesRequest.md)
- [GetAllFilterRules200Response](docs/Model/GetAllFilterRules200Response.md)
- [GetFilterRules200Response](docs/Model/GetFilterRules200Response.md)
- [GetGameBySku200Response](docs/Model/GetGameBySku200Response.md)
- [GetGameBySku200ResponseGroupsInner](docs/Model/GetGameBySku200ResponseGroupsInner.md)
- [GetGameBySku200ResponseUnitItemsInner](docs/Model/GetGameBySku200ResponseUnitItemsInner.md)
- [GetGameBySku200ResponseUnitItemsInnerPrice](docs/Model/GetGameBySku200ResponseUnitItemsInnerPrice.md)
- [GetGameBySku200ResponseUnitItemsInnerVirtualPricesInner](docs/Model/GetGameBySku200ResponseUnitItemsInnerVirtualPricesInner.md)
- [GetGameBySku404Response](docs/Model/GetGameBySku404Response.md)
- [GetGameKeyBySku200Response](docs/Model/GetGameKeyBySku200Response.md)
- [GetGameKeyBySku200ResponseVirtualPricesInner](docs/Model/GetGameKeyBySku200ResponseVirtualPricesInner.md)
- [GetGameKeyBySku404Response](docs/Model/GetGameKeyBySku404Response.md)
- [GetItemPromotion200Response](docs/Model/GetItemPromotion200Response.md)
- [GetItemPromotion200ResponseDiscount](docs/Model/GetItemPromotion200ResponseDiscount.md)
- [GetItemPromotion200ResponseItemsInner](docs/Model/GetItemPromotion200ResponseItemsInner.md)
- [GetItemPromotion404Response](docs/Model/GetItemPromotion404Response.md)
- [GetPreOrderLimit200Response](docs/Model/GetPreOrderLimit200Response.md)
- [GetProjects200Response](docs/Model/GetProjects200Response.md)
- [GetPromoCodeCodeLimit422Response](docs/Model/GetPromoCodeCodeLimit422Response.md)
- [GetUpsellConfigurationsForProjectAdmin200ResponseInner](docs/Model/GetUpsellConfigurationsForProjectAdmin200ResponseInner.md)
- [GetUpsellConfigurationsForProjectAdmin200ResponseInnerItemsInner](docs/Model/GetUpsellConfigurationsForProjectAdmin200ResponseInnerItemsInner.md)
- [GetUpsellConfigurationsForProjectAdmin200ResponseInnerItemsInnerUnitItemsInner](docs/Model/GetUpsellConfigurationsForProjectAdmin200ResponseInnerItemsInnerUnitItemsInner.md)
- [GetUserClanTopContributors200ResponseInner](docs/Model/GetUserClanTopContributors200ResponseInner.md)
- [GetWebhook200Response](docs/Model/GetWebhook200Response.md)
- [GrantEntitlementAdminRequest](docs/Model/GrantEntitlementAdminRequest.md)
- [GrantEntitlementAdminRequestDrm](docs/Model/GrantEntitlementAdminRequestDrm.md)
- [GrantEntitlementAdminRequestGame](docs/Model/GrantEntitlementAdminRequestGame.md)
- [ImportItemsFromExternalFile201Response](docs/Model/ImportItemsFromExternalFile201Response.md)
- [ImportItemsFromExternalFileRequest](docs/Model/ImportItemsFromExternalFileRequest.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject10](docs/Model/InlineObject10.md)
- [InlineObject10ItemsInner](docs/Model/InlineObject10ItemsInner.md)
- [InlineObject10ItemsInnerGroupsInner](docs/Model/InlineObject10ItemsInnerGroupsInner.md)
- [InlineObject10ItemsInnerPrice](docs/Model/InlineObject10ItemsInnerPrice.md)
- [InlineObject10Price](docs/Model/InlineObject10Price.md)
- [InlineObject11](docs/Model/InlineObject11.md)
- [InlineObject11WarningsInner](docs/Model/InlineObject11WarningsInner.md)
- [InlineObject12](docs/Model/InlineObject12.md)
- [InlineObject13](docs/Model/InlineObject13.md)
- [InlineObject14](docs/Model/InlineObject14.md)
- [InlineObject15](docs/Model/InlineObject15.md)
- [InlineObject16](docs/Model/InlineObject16.md)
- [InlineObject17](docs/Model/InlineObject17.md)
- [InlineObject18](docs/Model/InlineObject18.md)
- [InlineObject18Content](docs/Model/InlineObject18Content.md)
- [InlineObject18ContentItemsInner](docs/Model/InlineObject18ContentItemsInner.md)
- [InlineObject18ContentItemsInnerPrice](docs/Model/InlineObject18ContentItemsInnerPrice.md)
- [InlineObject18ContentPrice](docs/Model/InlineObject18ContentPrice.md)
- [InlineObject18ContentVirtualPrice](docs/Model/InlineObject18ContentVirtualPrice.md)
- [InlineObject19](docs/Model/InlineObject19.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject20](docs/Model/InlineObject20.md)
- [InlineObject20OrdersInner](docs/Model/InlineObject20OrdersInner.md)
- [InlineObject20OrdersInnerCouponsInner](docs/Model/InlineObject20OrdersInnerCouponsInner.md)
- [InlineObject20OrdersInnerItemsInner](docs/Model/InlineObject20OrdersInnerItemsInner.md)
- [InlineObject20OrdersInnerItemsInnerDescription](docs/Model/InlineObject20OrdersInnerItemsInnerDescription.md)
- [InlineObject20OrdersInnerItemsInnerPrice](docs/Model/InlineObject20OrdersInnerItemsInnerPrice.md)
- [InlineObject20OrdersInnerPrice](docs/Model/InlineObject20OrdersInnerPrice.md)
- [InlineObject20OrdersInnerPromotionsInner](docs/Model/InlineObject20OrdersInnerPromotionsInner.md)
- [InlineObject20OrdersInnerUser](docs/Model/InlineObject20OrdersInnerUser.md)
- [InlineObject21](docs/Model/InlineObject21.md)
- [InlineObject22](docs/Model/InlineObject22.md)
- [InlineObject22ItemsInner](docs/Model/InlineObject22ItemsInner.md)
- [InlineObject22ItemsInnerPrice](docs/Model/InlineObject22ItemsInnerPrice.md)
- [InlineObject22Price](docs/Model/InlineObject22Price.md)
- [InlineObject23](docs/Model/InlineObject23.md)
- [InlineObject24](docs/Model/InlineObject24.md)
- [InlineObject25](docs/Model/InlineObject25.md)
- [InlineObject26](docs/Model/InlineObject26.md)
- [InlineObject26ItemsInner](docs/Model/InlineObject26ItemsInner.md)
- [InlineObject26ItemsInnerUnitItemsInner](docs/Model/InlineObject26ItemsInnerUnitItemsInner.md)
- [InlineObject27](docs/Model/InlineObject27.md)
- [InlineObject27ItemsInner](docs/Model/InlineObject27ItemsInner.md)
- [InlineObject28](docs/Model/InlineObject28.md)
- [InlineObject28DrmInner](docs/Model/InlineObject28DrmInner.md)
- [InlineObject29](docs/Model/InlineObject29.md)
- [InlineObject29ItemsInner](docs/Model/InlineObject29ItemsInner.md)
- [InlineObject29ItemsInnerGroupsInner](docs/Model/InlineObject29ItemsInnerGroupsInner.md)
- [InlineObject29ItemsInnerUnitItemsInner](docs/Model/InlineObject29ItemsInnerUnitItemsInner.md)
- [InlineObject29ItemsInnerUnitItemsInnerKeys](docs/Model/InlineObject29ItemsInnerUnitItemsInnerKeys.md)
- [InlineObject29ItemsInnerUnitItemsInnerPreOrder](docs/Model/InlineObject29ItemsInnerUnitItemsInnerPreOrder.md)
- [InlineObject29ItemsInnerUnitItemsInnerPricesInner](docs/Model/InlineObject29ItemsInnerUnitItemsInnerPricesInner.md)
- [InlineObject29ItemsInnerUnitItemsInnerVirtualPricesInner](docs/Model/InlineObject29ItemsInnerUnitItemsInnerVirtualPricesInner.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject30](docs/Model/InlineObject30.md)
- [InlineObject30UnitItemsInner](docs/Model/InlineObject30UnitItemsInner.md)
- [InlineObject30UnitItemsInnerVirtualPricesInner](docs/Model/InlineObject30UnitItemsInnerVirtualPricesInner.md)
- [InlineObject31](docs/Model/InlineObject31.md)
- [InlineObject32](docs/Model/InlineObject32.md)
- [InlineObject33](docs/Model/InlineObject33.md)
- [InlineObject34](docs/Model/InlineObject34.md)
- [InlineObject35](docs/Model/InlineObject35.md)
- [InlineObject36](docs/Model/InlineObject36.md)
- [InlineObject37](docs/Model/InlineObject37.md)
- [InlineObject37ItemsInner](docs/Model/InlineObject37ItemsInner.md)
- [InlineObject37ItemsInnerPrice](docs/Model/InlineObject37ItemsInnerPrice.md)
- [InlineObject38](docs/Model/InlineObject38.md)
- [InlineObject39](docs/Model/InlineObject39.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject40](docs/Model/InlineObject40.md)
- [InlineObject41](docs/Model/InlineObject41.md)
- [InlineObject42](docs/Model/InlineObject42.md)
- [InlineObject43](docs/Model/InlineObject43.md)
- [InlineObject44](docs/Model/InlineObject44.md)
- [InlineObject45](docs/Model/InlineObject45.md)
- [InlineObject46](docs/Model/InlineObject46.md)
- [InlineObject46CodesInner](docs/Model/InlineObject46CodesInner.md)
- [InlineObject47](docs/Model/InlineObject47.md)
- [InlineObject48](docs/Model/InlineObject48.md)
- [InlineObject49](docs/Model/InlineObject49.md)
- [InlineObject49ItemsInner](docs/Model/InlineObject49ItemsInner.md)
- [InlineObject49Price](docs/Model/InlineObject49Price.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject50](docs/Model/InlineObject50.md)
- [InlineObject51](docs/Model/InlineObject51.md)
- [InlineObject51ItemsInner](docs/Model/InlineObject51ItemsInner.md)
- [InlineObject52](docs/Model/InlineObject52.md)
- [InlineObject53](docs/Model/InlineObject53.md)
- [InlineObject54](docs/Model/InlineObject54.md)
- [InlineObject55](docs/Model/InlineObject55.md)
- [InlineObject55PromotionsInner](docs/Model/InlineObject55PromotionsInner.md)
- [InlineObject55PromotionsInnerItemsInner](docs/Model/InlineObject55PromotionsInnerItemsInner.md)
- [InlineObject56](docs/Model/InlineObject56.md)
- [InlineObject57](docs/Model/InlineObject57.md)
- [InlineObject58](docs/Model/InlineObject58.md)
- [InlineObject59](docs/Model/InlineObject59.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject60](docs/Model/InlineObject60.md)
- [InlineObject60Rewards](docs/Model/InlineObject60Rewards.md)
- [InlineObject61](docs/Model/InlineObject61.md)
- [InlineObject62](docs/Model/InlineObject62.md)
- [InlineObject63](docs/Model/InlineObject63.md)
- [InlineObject64](docs/Model/InlineObject64.md)
- [InlineObject65](docs/Model/InlineObject65.md)
- [InlineObject66](docs/Model/InlineObject66.md)
- [InlineObject67](docs/Model/InlineObject67.md)
- [InlineObject67ItemsInner](docs/Model/InlineObject67ItemsInner.md)
- [InlineObject68](docs/Model/InlineObject68.md)
- [InlineObject68ItemsInner](docs/Model/InlineObject68ItemsInner.md)
- [InlineObject68ItemsInnerGroupsInner](docs/Model/InlineObject68ItemsInnerGroupsInner.md)
- [InlineObject68ItemsInnerPrice](docs/Model/InlineObject68ItemsInnerPrice.md)
- [InlineObject68ItemsInnerVirtualPricesInner](docs/Model/InlineObject68ItemsInnerVirtualPricesInner.md)
- [InlineObject69](docs/Model/InlineObject69.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [InlineObject70](docs/Model/InlineObject70.md)
- [InlineObject70GroupsInner](docs/Model/InlineObject70GroupsInner.md)
- [InlineObject70GroupsInnerChildrenInner](docs/Model/InlineObject70GroupsInnerChildrenInner.md)
- [InlineObject70GroupsInnerChildrenInnerChildrenInner](docs/Model/InlineObject70GroupsInnerChildrenInnerChildrenInner.md)
- [InlineObject71](docs/Model/InlineObject71.md)
- [InlineObject72](docs/Model/InlineObject72.md)
- [InlineObject72ItemsInner](docs/Model/InlineObject72ItemsInner.md)
- [InlineObject72ItemsInnerGroupsInner](docs/Model/InlineObject72ItemsInnerGroupsInner.md)
- [InlineObject72ItemsInnerInventoryOptions](docs/Model/InlineObject72ItemsInnerInventoryOptions.md)
- [InlineObject72ItemsInnerInventoryOptionsExpirationPeriod](docs/Model/InlineObject72ItemsInnerInventoryOptionsExpirationPeriod.md)
- [InlineObject72ItemsInnerPrice](docs/Model/InlineObject72ItemsInnerPrice.md)
- [InlineObject72ItemsInnerVirtualPricesInner](docs/Model/InlineObject72ItemsInnerVirtualPricesInner.md)
- [InlineObject72ItemsInnerVirtualPricesInnerCalculatedPrice](docs/Model/InlineObject72ItemsInnerVirtualPricesInnerCalculatedPrice.md)
- [InlineObject73](docs/Model/InlineObject73.md)
- [InlineObject73VirtualPricesInner](docs/Model/InlineObject73VirtualPricesInner.md)
- [InlineObject74](docs/Model/InlineObject74.md)
- [InlineObject75](docs/Model/InlineObject75.md)
- [InlineObject76](docs/Model/InlineObject76.md)
- [InlineObject76ItemsInner](docs/Model/InlineObject76ItemsInner.md)
- [InlineObject76ItemsInnerInventoryOptions](docs/Model/InlineObject76ItemsInnerInventoryOptions.md)
- [InlineObject76ItemsInnerInventoryOptionsExpirationPeriod](docs/Model/InlineObject76ItemsInnerInventoryOptionsExpirationPeriod.md)
- [InlineObject76ItemsInnerVirtualPricesInner](docs/Model/InlineObject76ItemsInnerVirtualPricesInner.md)
- [InlineObject77](docs/Model/InlineObject77.md)
- [InlineObject78](docs/Model/InlineObject78.md)
- [InlineObject79](docs/Model/InlineObject79.md)
- [InlineObject8](docs/Model/InlineObject8.md)
- [InlineObject80](docs/Model/InlineObject80.md)
- [InlineObject81](docs/Model/InlineObject81.md)
- [InlineObject82](docs/Model/InlineObject82.md)
- [InlineObject83](docs/Model/InlineObject83.md)
- [InlineObject84](docs/Model/InlineObject84.md)
- [InlineObject85](docs/Model/InlineObject85.md)
- [InlineObject86](docs/Model/InlineObject86.md)
- [InlineObject87](docs/Model/InlineObject87.md)
- [InlineObject88](docs/Model/InlineObject88.md)
- [InlineObject88RewardInner](docs/Model/InlineObject88RewardInner.md)
- [InlineObject89](docs/Model/InlineObject89.md)
- [InlineObject9](docs/Model/InlineObject9.md)
- [InlineObject90](docs/Model/InlineObject90.md)
- [InlineObject90ItemsInner](docs/Model/InlineObject90ItemsInner.md)
- [InlineObject91](docs/Model/InlineObject91.md)
- [InlineObject92](docs/Model/InlineObject92.md)
- [InlineObject93](docs/Model/InlineObject93.md)
- [InlineObject94](docs/Model/InlineObject94.md)
- [InlineObject95](docs/Model/InlineObject95.md)
- [InlineObject96](docs/Model/InlineObject96.md)
- [InlineObject97](docs/Model/InlineObject97.md)
- [InlineObject98](docs/Model/InlineObject98.md)
- [InlineObject99](docs/Model/InlineObject99.md)
- [InlineObject99Result](docs/Model/InlineObject99Result.md)
- [InlineObject99ResultErrorsBySkuInner](docs/Model/InlineObject99ResultErrorsBySkuInner.md)
- [IntervalTypeDaily](docs/Model/IntervalTypeDaily.md)
- [IntervalTypeMonthly](docs/Model/IntervalTypeMonthly.md)
- [IntervalTypeMonthly1](docs/Model/IntervalTypeMonthly1.md)
- [IntervalTypeMonthly2](docs/Model/IntervalTypeMonthly2.md)
- [IntervalTypeMonthly3](docs/Model/IntervalTypeMonthly3.md)
- [IntervalTypeMonthly4](docs/Model/IntervalTypeMonthly4.md)
- [IntervalTypeWeekly](docs/Model/IntervalTypeWeekly.md)
- [IntervalTypeWeekly1](docs/Model/IntervalTypeWeekly1.md)
- [IntervalTypeWeekly2](docs/Model/IntervalTypeWeekly2.md)
- [IntervalTypeWeekly3](docs/Model/IntervalTypeWeekly3.md)
- [IntervalTypeWeekly4](docs/Model/IntervalTypeWeekly4.md)
- [ItemLimit](docs/Model/ItemLimit.md)
- [ItemLimitResponse](docs/Model/ItemLimitResponse.md)
- [ItemLimitResponsePerItem](docs/Model/ItemLimitResponsePerItem.md)
- [ItemLimitResponsePerUser](docs/Model/ItemLimitResponsePerUser.md)
- [ItemLimitResponsePerUserRecurrentSchedule](docs/Model/ItemLimitResponsePerUserRecurrentSchedule.md)
- [ItemPeriodsInner](docs/Model/ItemPeriodsInner.md)
- [ItemPeriodsResponseInner](docs/Model/ItemPeriodsResponseInner.md)
- [ItemValuePointRewardSetForPatchInner](docs/Model/ItemValuePointRewardSetForPatchInner.md)
- [ItemValuePointRewardSetInner](docs/Model/ItemValuePointRewardSetInner.md)
- [LongDescriptionLocalizationObject](docs/Model/LongDescriptionLocalizationObject.md)
- [Model404NotFound](docs/Model/Model404NotFound.md)
- [Model422InvalidRequest](docs/Model/Model422InvalidRequest.md)
- [Model422RcVpInvalidRequest](docs/Model/Model422RcVpInvalidRequest.md)
- [ModifyOfferChainItemModel](docs/Model/ModifyOfferChainItemModel.md)
- [ModifyOfferChainModel](docs/Model/ModifyOfferChainModel.md)
- [ModifyOfferChainStepModel](docs/Model/ModifyOfferChainStepModel.md)
- [ModifyRewardStep](docs/Model/ModifyRewardStep.md)
- [NameLocalizationObject](docs/Model/NameLocalizationObject.md)
- [OfferChainErrorModel](docs/Model/OfferChainErrorModel.md)
- [OfferChainIntervalTypeMonthly](docs/Model/OfferChainIntervalTypeMonthly.md)
- [OfferChainIntervalTypeWeekly](docs/Model/OfferChainIntervalTypeWeekly.md)
- [OfferChainRecurrentSchedule](docs/Model/OfferChainRecurrentSchedule.md)
- [OfferChainRecurrentScheduleClientSide](docs/Model/OfferChainRecurrentScheduleClientSide.md)
- [OfferChainRecurrentScheduleCreateUpdate](docs/Model/OfferChainRecurrentScheduleCreateUpdate.md)
- [OfferChainStepPrice](docs/Model/OfferChainStepPrice.md)
- [PopupHeaderTwoLetterLocale](docs/Model/PopupHeaderTwoLetterLocale.md)
- [PopupInstructionTwoLetterLocale](docs/Model/PopupInstructionTwoLetterLocale.md)
- [PriceConditionsItems](docs/Model/PriceConditionsItems.md)
- [PromoCodeRewards](docs/Model/PromoCodeRewards.md)
- [PromoCodeRewardsVerify](docs/Model/PromoCodeRewardsVerify.md)
- [Promotions200CouponBonusReward](docs/Model/Promotions200CouponBonusReward.md)
- [Promotions200CouponBonusRewardItem](docs/Model/Promotions200CouponBonusRewardItem.md)
- [Promotions200CouponBonusRewardItemUnitItemsInner](docs/Model/Promotions200CouponBonusRewardItemUnitItemsInner.md)
- [Promotions200CouponDiscountReward](docs/Model/Promotions200CouponDiscountReward.md)
- [Promotions200GetBonusPromotionModel](docs/Model/Promotions200GetBonusPromotionModel.md)
- [Promotions200GetBonusPromotionModelBonusInner](docs/Model/Promotions200GetBonusPromotionModelBonusInner.md)
- [Promotions200GetPromocodePromotionModel](docs/Model/Promotions200GetPromocodePromotionModel.md)
- [Promotions200GetPromotionModel](docs/Model/Promotions200GetPromotionModel.md)
- [Promotions200GetPromotionModelDiscount](docs/Model/Promotions200GetPromotionModelDiscount.md)
- [Promotions200GetUniqueCatalogOfferPromotionModel](docs/Model/Promotions200GetUniqueCatalogOfferPromotionModel.md)
- [Promotions200PromoCodeBonusReward](docs/Model/Promotions200PromoCodeBonusReward.md)
- [Promotions200PromoCodeBonusRewardItem](docs/Model/Promotions200PromoCodeBonusRewardItem.md)
- [Promotions200PromoCodeBonusRewardItemUnitItemsInner](docs/Model/Promotions200PromoCodeBonusRewardItemUnitItemsInner.md)
- [Promotions422LimitError](docs/Model/Promotions422LimitError.md)
- [Promotions422ReglockError](docs/Model/Promotions422ReglockError.md)
- [PromotionsCouponTotalLimitState](docs/Model/PromotionsCouponTotalLimitState.md)
- [PromotionsDiscountedItemsInner](docs/Model/PromotionsDiscountedItemsInner.md)
- [PromotionsDiscountedItemsVerifyInner](docs/Model/PromotionsDiscountedItemsVerifyInner.md)
- [PromotionsDiscountedItemsVerifyInnerDiscount](docs/Model/PromotionsDiscountedItemsVerifyInnerDiscount.md)
- [PromotionsDiscountedItemsVerifyInnerUnitItemsInner](docs/Model/PromotionsDiscountedItemsVerifyInnerUnitItemsInner.md)
- [PromotionsPromocodeTotalLimitState](docs/Model/PromotionsPromocodeTotalLimitState.md)
- [PromotionsPromotionConditionInner](docs/Model/PromotionsPromotionConditionInner.md)
- [PromotionsPromotionConditionInnerItem](docs/Model/PromotionsPromotionConditionInnerItem.md)
- [PromotionsPromotionLimits](docs/Model/PromotionsPromotionLimits.md)
- [PromotionsPromotionLimitsResponse](docs/Model/PromotionsPromotionLimitsResponse.md)
- [PromotionsPromotionLimitsResponsePerUser](docs/Model/PromotionsPromotionLimitsResponsePerUser.md)
- [PutItemByCartIdRequest](docs/Model/PutItemByCartIdRequest.md)
- [PutUpsellRequest](docs/Model/PutUpsellRequest.md)
- [RecurrentSchedule](docs/Model/RecurrentSchedule.md)
- [RecurrentScheduleClientSide](docs/Model/RecurrentScheduleClientSide.md)
- [RecurrentScheduleCreateUpdate](docs/Model/RecurrentScheduleCreateUpdate.md)
- [RecurrentSchedulePerUser](docs/Model/RecurrentSchedulePerUser.md)
- [RecurrentScheduleResponse](docs/Model/RecurrentScheduleResponse.md)
- [RecurrentScheduleResponsePerUser](docs/Model/RecurrentScheduleResponsePerUser.md)
- [RedeemCouponRequest](docs/Model/RedeemCouponRequest.md)
- [RedeemGamePinCode404Response](docs/Model/RedeemGamePinCode404Response.md)
- [RedeemGamePinCode422Response](docs/Model/RedeemGamePinCode422Response.md)
- [RedeemGamePinCodeRequest](docs/Model/RedeemGamePinCodeRequest.md)
- [RedeemPromoCodeRequest](docs/Model/RedeemPromoCodeRequest.md)
- [RedeemPromoCodeRequestCart](docs/Model/RedeemPromoCodeRequestCart.md)
- [Regions200RegionModel](docs/Model/Regions200RegionModel.md)
- [Regions200RegionShortModel](docs/Model/Regions200RegionShortModel.md)
- [RemoveCartPromoCodeRequest](docs/Model/RemoveCartPromoCodeRequest.md)
- [RemovePreOrderLimitRequest](docs/Model/RemovePreOrderLimitRequest.md)
- [RequestAttributeValue](docs/Model/RequestAttributeValue.md)
- [ResetAllUserItemsLimit404Response](docs/Model/ResetAllUserItemsLimit404Response.md)
- [ResetAllUserItemsLimit422Response](docs/Model/ResetAllUserItemsLimit422Response.md)
- [ResetAllUserItemsLimit422ResponseErrorMessageExtendedInner](docs/Model/ResetAllUserItemsLimit422ResponseErrorMessageExtendedInner.md)
- [ResetAllUserItemsLimitRequest](docs/Model/ResetAllUserItemsLimitRequest.md)
- [ResetUserItemLimit422Response](docs/Model/ResetUserItemLimit422Response.md)
- [ResetUserItemLimitRequest](docs/Model/ResetUserItemLimitRequest.md)
- [RevokeEntitlementAdminRequest](docs/Model/RevokeEntitlementAdminRequest.md)
- [RewardStepPrice](docs/Model/RewardStepPrice.md)
- [RewardStepShort](docs/Model/RewardStepShort.md)
- [RewardStepShortRewardInner](docs/Model/RewardStepShortRewardInner.md)
- [Schemas422InvalidRequest](docs/Model/Schemas422InvalidRequest.md)
- [SetCouponUserPromotionLimitRequest](docs/Model/SetCouponUserPromotionLimitRequest.md)
- [SetPreOrderLimitRequest](docs/Model/SetPreOrderLimitRequest.md)
- [SetPromoCodeUserPromotionLimitRequest](docs/Model/SetPromoCodeUserPromotionLimitRequest.md)
- [SetUserItemLimitRequest](docs/Model/SetUserItemLimitRequest.md)
- [TogglePreOrderLimitRequest](docs/Model/TogglePreOrderLimitRequest.md)
- [TopContributors](docs/Model/TopContributors.md)
- [TwoLetterLocale](docs/Model/TwoLetterLocale.md)
- [UpdateClanRewardChainModel](docs/Model/UpdateClanRewardChainModel.md)
- [UpdateCouponPromotionRequest](docs/Model/UpdateCouponPromotionRequest.md)
- [UpdatePromoCodeRequest](docs/Model/UpdatePromoCodeRequest.md)
- [UpdateRewardChainModel](docs/Model/UpdateRewardChainModel.md)
- [UpdateUniqueCatalogOfferPromotionRequest](docs/Model/UpdateUniqueCatalogOfferPromotionRequest.md)
- [UpdateWebhookRequest](docs/Model/UpdateWebhookRequest.md)
- [Upsell422InvalidRequest](docs/Model/Upsell422InvalidRequest.md)
- [UpsellItem](docs/Model/UpsellItem.md)
- [UpsellItemInventoryOptions](docs/Model/UpsellItemInventoryOptions.md)
- [UpsellItemList](docs/Model/UpsellItemList.md)
- [UpsellItemPrice](docs/Model/UpsellItemPrice.md)
- [UpsellModel](docs/Model/UpsellModel.md)
- [UpsellModelNotFixedList](docs/Model/UpsellModelNotFixedList.md)
- [UserAttributeConditionsDateInner](docs/Model/UserAttributeConditionsDateInner.md)
- [UserAttributeConditionsNumberInner](docs/Model/UserAttributeConditionsNumberInner.md)
- [UserAttributeConditionsPropertiesOperator](docs/Model/UserAttributeConditionsPropertiesOperator.md)
- [UserAttributeConditionsPropertiesOperatorString](docs/Model/UserAttributeConditionsPropertiesOperatorString.md)
- [UserAttributeConditionsPropertiesTypeDate](docs/Model/UserAttributeConditionsPropertiesTypeDate.md)
- [UserAttributeConditionsPropertiesTypeNumber](docs/Model/UserAttributeConditionsPropertiesTypeNumber.md)
- [UserAttributeConditionsPropertiesTypeString](docs/Model/UserAttributeConditionsPropertiesTypeString.md)
- [UserAttributeConditionsResponseDateInner](docs/Model/UserAttributeConditionsResponseDateInner.md)
- [UserAttributeConditionsResponseNumberInner](docs/Model/UserAttributeConditionsResponseNumberInner.md)
- [UserAttributeConditionsResponseStringInner](docs/Model/UserAttributeConditionsResponseStringInner.md)
- [UserAttributeConditionsStringInner](docs/Model/UserAttributeConditionsStringInner.md)
- [UserAttributePersonalizedCatalog](docs/Model/UserAttributePersonalizedCatalog.md)
- [UserAttributePersonalizedCatalogAll](docs/Model/UserAttributePersonalizedCatalogAll.md)
- [UserAttributePersonalizedCatalogBody](docs/Model/UserAttributePersonalizedCatalogBody.md)
- [UserAttributePersonalizedCatalogBodyRequired](docs/Model/UserAttributePersonalizedCatalogBodyRequired.md)
- [UserAttributePersonalizedCatalogBodyRequiredItemsInner](docs/Model/UserAttributePersonalizedCatalogBodyRequiredItemsInner.md)
- [UserAttributePersonalizedCatalogBodyRequiredItemsInnerOneOf](docs/Model/UserAttributePersonalizedCatalogBodyRequiredItemsInnerOneOf.md)
- [UserAttributePersonalizedCatalogBodyRequiredItemsInnerOneOf1](docs/Model/UserAttributePersonalizedCatalogBodyRequiredItemsInnerOneOf1.md)
- [UserAttributePersonalizedCatalogItemsInner](docs/Model/UserAttributePersonalizedCatalogItemsInner.md)
- [UserLimitCoupon](docs/Model/UserLimitCoupon.md)
- [UserLimitCouponPerUser](docs/Model/UserLimitCouponPerUser.md)
- [UserLimitItem](docs/Model/UserLimitItem.md)
- [UserLimitItemPerUser](docs/Model/UserLimitItemPerUser.md)
- [UserLimitPromoCode](docs/Model/UserLimitPromoCode.md)
- [UserLimitPromoCodePerUser](docs/Model/UserLimitPromoCodePerUser.md)
- [UserLimitPromotion](docs/Model/UserLimitPromotion.md)
- [UserLimitPromotionPerUser](docs/Model/UserLimitPromotionPerUser.md)
- [UserLimitUser](docs/Model/UserLimitUser.md)
- [UserLimitUserFlexible](docs/Model/UserLimitUserFlexible.md)
- [ValuePointItemModel](docs/Model/ValuePointItemModel.md)
- [ValuePointsItemModel](docs/Model/ValuePointsItemModel.md)
- [VirtualItemsAdminPricesInner](docs/Model/VirtualItemsAdminPricesInner.md)
- [VirtualItemsCurrency422InvalidRequest](docs/Model/VirtualItemsCurrency422InvalidRequest.md)
- [VirtualItemsCurrencyAdminAttributes](docs/Model/VirtualItemsCurrencyAdminAttributes.md)
- [VirtualItemsCurrencyAdminCreateVcPricesInner](docs/Model/VirtualItemsCurrencyAdminCreateVcPricesInner.md)
- [VirtualItemsCurrencyAdminCreateVirtualCurrency](docs/Model/VirtualItemsCurrencyAdminCreateVirtualCurrency.md)
- [VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage](docs/Model/VirtualItemsCurrencyAdminCreateVirtualCurrencyPackage.md)
- [VirtualItemsCurrencyAdminCreateVirtualItem](docs/Model/VirtualItemsCurrencyAdminCreateVirtualItem.md)
- [VirtualItemsCurrencyAdminGetVcPricesInner](docs/Model/VirtualItemsCurrencyAdminGetVcPricesInner.md)
- [VirtualItemsCurrencyAdminPreOrder](docs/Model/VirtualItemsCurrencyAdminPreOrder.md)
- [VirtualItemsCurrencyAdminPricesInner](docs/Model/VirtualItemsCurrencyAdminPricesInner.md)
- [VirtualItemsCurrencyAdminVirtualCurrency](docs/Model/VirtualItemsCurrencyAdminVirtualCurrency.md)
- [VirtualItemsCurrencyAdminVirtualCurrencyPackage](docs/Model/VirtualItemsCurrencyAdminVirtualCurrencyPackage.md)
- [VirtualItemsCurrencyAdminVirtualCurrencyPackageContentInner](docs/Model/VirtualItemsCurrencyAdminVirtualCurrencyPackageContentInner.md)
- [VirtualItemsCurrencyAdminVirtualItem](docs/Model/VirtualItemsCurrencyAdminVirtualItem.md)
- [VirtualItemsCurrencyClientAttributesInner](docs/Model/VirtualItemsCurrencyClientAttributesInner.md)
- [VirtualItemsCurrencyInventoryOptions](docs/Model/VirtualItemsCurrencyInventoryOptions.md)
- [VirtualItemsCurrencyInventoryOptionsConsumable](docs/Model/VirtualItemsCurrencyInventoryOptionsConsumable.md)
- [VirtualItemsCurrencyInventoryOptionsExpirationPeriod](docs/Model/VirtualItemsCurrencyInventoryOptionsExpirationPeriod.md)
- [VirtualItemsCurrencyItem](docs/Model/VirtualItemsCurrencyItem.md)
- [VirtualItemsCurrencyItemList](docs/Model/VirtualItemsCurrencyItemList.md)
- [VirtualItemsCurrencyItemPrice](docs/Model/VirtualItemsCurrencyItemPrice.md)
- [VirtualItemsCurrencyVirtualCurrency](docs/Model/VirtualItemsCurrencyVirtualCurrency.md)
- [VirtualItemsCurrencyVirtualCurrencyList](docs/Model/VirtualItemsCurrencyVirtualCurrencyList.md)
- [VirtualItemsCurrencyVirtualCurrencyPackage](docs/Model/VirtualItemsCurrencyVirtualCurrencyPackage.md)
- [VirtualItemsCurrencyVirtualCurrencyPackageContentInner](docs/Model/VirtualItemsCurrencyVirtualCurrencyPackageContentInner.md)
- [VirtualItemsCurrencyVirtualCurrencyPackageContentInnerInventoryOptions](docs/Model/VirtualItemsCurrencyVirtualCurrencyPackageContentInnerInventoryOptions.md)
- [VirtualItemsCurrencyVirtualCurrencyPackageContentInnerInventoryOptionsExpirationPeriod](docs/Model/VirtualItemsCurrencyVirtualCurrencyPackageContentInnerInventoryOptionsExpirationPeriod.md)
- [VirtualItemsCurrencyVirtualCurrencyPackagePrice](docs/Model/VirtualItemsCurrencyVirtualCurrencyPackagePrice.md)
- [VirtualItemsCurrencyVirtualCurrencyPackages](docs/Model/VirtualItemsCurrencyVirtualCurrencyPackages.md)
- [VirtualItemsCurrencyVirtualCurrencyVirtualPricesInner](docs/Model/VirtualItemsCurrencyVirtualCurrencyVirtualPricesInner.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

### XsollaLoginUserJWT

- **Type**: Bearer authentication (JWT)

### AuthForCart

- **Type**: Bearer authentication

### basicMerchantAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
