<?php
declare(strict_types=1);

namespace StoreFrontClient;

use GuzzleHttp\Client;
use OpenAPI\Client\Api\BundlesAdminApi;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Model\BundlesAdminBundleRequest;
use OpenAPI\Client\Model\BundlesAdminContentRequestInner;
use OpenAPI\Client\Model\BundlesBundleType;
use OpenAPI\Client\Model\DescriptionLocalizationObject;
use OpenAPI\Client\Model\NameLocalizationObject;

class AdminBundleManager
{
    public function createBundle(Configuration $config, Client $client): void
    {
        $model = $this->createBundleModel();
        $apiInstance = new BundlesAdminApi($client, $config);
        $response = $apiInstance->adminCreateBundle($config->getUsername(), $model);
        dump($response);
    }

    private function createBundleModel(): BundlesAdminBundleRequest
    {
        $bundleSku = "com.xsolla.bundle." . time();
        $bundleName = "Bundle " . time();

        // Create name localization object
        $name = new NameLocalizationObject();
        $name->setEn($bundleName);

        // Create description localization object
        $description = new DescriptionLocalizationObject();
        $description->setEn("This is a bundle created via API");

        // Create bundle content items
        $contentItem1 = new BundlesAdminContentRequestInner();
        $contentItem1->setSku("com.xsolla.item1753460733");
        $contentItem1->setQuantity(1);

        $contentItem2 = new BundlesAdminContentRequestInner();
        $contentItem2->setSku("com.xsolla.item1753460084");
        $contentItem2->setQuantity(2);

        // Create bundle request
        $bundleData = [
            "sku" => $bundleSku,
            "name" => $name,
            "description" => $description,
            "bundle_type" => BundlesBundleType::STANDARD,
            "content" => [$contentItem1, $contentItem2],
            "is_free" => false,
            "is_enabled" => true,
            "is_show_in_store" => true,
            "order" => 1,
            "groups" => [],
            "prices" => [
                ["currency" => "USD",
                    "amount" => 100,
                    "is_default" => true,
                    "is_enabled" => true
                ]
            ]
        ];

        return new BundlesAdminBundleRequest($bundleData);
    }
}