<?php

namespace StoreFrontClient\Infrastructure\Adapter\OpenAPI\Exception;

use OpenAPI\Client\Model\InlineObject1;
use OpenAPI\Client\Model\Model422InvalidRequest;
use StoreFrontClient\Domain\Exception\RepositoryException;

class StorefrontApiException extends RepositoryException
{
    public function __construct(string $message, ?object $responseObject = null)
    {
        if (isset($responseObject->errorMessage)) {
            parent::__construct($message . '. ' . $responseObject->errorMessage);
            return;
        }
        if ($responseObject instanceof InlineObject1 || $responseObject instanceof Model422InvalidRequest) {
            parent::__construct($message . '. ' . $responseObject->getErrorMessage());
            return;
        }

        parent::__construct($message);
    }
}