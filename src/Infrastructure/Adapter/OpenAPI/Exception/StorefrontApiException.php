<?php

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Exception;

use OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\InlineObject1;
use OpenAPI\Client\Model\Model422InvalidRequest;
use StoreFrontClient\Domain\Exception\RepositoryException;

class StorefrontApiException extends RepositoryException
{
    public function __construct(string $message, ?object $responseObject = null, ?ApiException $exception = null)
    {
        if (isset($responseObject->errorMessage)) {
            parent::__construct($message . '. ' . $responseObject->errorMessage);
            return;
        }
        if ($responseObject instanceof InlineObject1 || $responseObject instanceof Model422InvalidRequest) {
            parent::__construct($message . '. ' . $responseObject->getErrorMessage());
            return;
        }

        if ($exception && $exception->getResponseBody()) {
            $body = json_decode($exception->getResponseBody(), true, 512, JSON_THROW_ON_ERROR);
            if (isset($body['errorMessage'])) {
                parent::__construct($message . '. ' . $body['errorMessage']);
                return;
            }
        }

        parent::__construct($message);
    }
}