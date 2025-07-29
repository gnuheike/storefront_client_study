<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Handler\Command;

use StoreFrontClient\Application\Command\UploadCodesBySkuCommand;
use StoreFrontClient\Domain\Exception\BusinessRuleException;
use StoreFrontClient\Domain\Exception\RepositoryException;
use StoreFrontClient\Domain\Repository\CodeRepositoryInterface;

final readonly class UploadCodesBySkuHandler
{
    public function __construct(
        private CodeRepositoryInterface $codeRepository
    )
    {
    }

    /**
     * @throws BusinessRuleException
     * @throws RepositoryException
     */
    public function __invoke(UploadCodesBySkuCommand $command): bool
    {
        if (!file_exists($command->filePath)) {
            throw new BusinessRuleException("File $command->filePath does not exist");
        }

        return $this->codeRepository->uploadCodesBySk(
            $command->sku,
            $command->filePath,
        );
    }
}