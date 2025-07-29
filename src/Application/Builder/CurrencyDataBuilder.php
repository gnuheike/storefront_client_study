<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Builder;

/**
 * Builder for currency test data.
 *
 * This class provides methods to build test data for currencies.
 */
class CurrencyDataBuilder
{
    /**
     * @var array The currency data
     */
    private array $data;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Reset the builder to its initial state.
     *
     * @return self
     */
    public function reset(): self
    {
        $this->data = [
            'sku' => 'test-currency-' . uniqid('', true),
            'name' => ['en-US' => 'Test Currency'],
            'enabled' => true,
            'virtual' => true,
            'order' => 1,
            'description' => ['en-US' => 'Test currency description'],
            'groups' => [],
            'attributes' => [],
            'price' => null,
            'image_url' => null,
            'is_free' => true
        ];

        return $this;
    }

    /**
     * Create a new instance of the builder.
     *
     * @return self
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Set the SKU.
     *
     * @param string $sku The SKU
     * @return self
     */
    public function withSku(string $sku): self
    {
        $this->data['sku'] = $sku;
        return $this;
    }

    /**
     * Set the name.
     *
     * @param array $name The name (localized)
     * @return self
     */
    public function withName(array $name): self
    {
        $this->data['name'] = $name;
        return $this;
    }

    /**
     * Set whether the currency is enabled.
     *
     * @param bool $enabled Whether the currency is enabled
     * @return self
     */
    public function withEnabled(bool $enabled): self
    {
        $this->data['enabled'] = $enabled;
        return $this;
    }

    /**
     * Set whether the currency is virtual.
     *
     * @param bool $virtual Whether the currency is virtual
     * @return self
     */
    public function withVirtual(bool $virtual): self
    {
        $this->data['virtual'] = $virtual;
        return $this;
    }

    /**
     * Set the order.
     *
     * @param int $order The order
     * @return self
     */
    public function withOrder(int $order): self
    {
        $this->data['order'] = $order;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param array $description The description (localized)
     * @return self
     */
    public function withDescription(array $description): self
    {
        $this->data['description'] = $description;
        return $this;
    }

    /**
     * Set the groups.
     *
     * @param array $groups The groups
     * @return self
     */
    public function withGroups(array $groups): self
    {
        $this->data['groups'] = $groups;
        return $this;
    }

    /**
     * Set the attributes.
     *
     * @param array $attributes The attributes
     * @return self
     */
    public function withAttributes(array $attributes): self
    {
        $this->data['attributes'] = $attributes;
        return $this;
    }

    /**
     * Set the price.
     *
     * @param array|null $price The price
     * @return self
     */
    public function withPrice(?array $price): self
    {
        $this->data['price'] = $price;
        return $this;
    }

    /**
     * Set the image URL.
     *
     * @param string|null $imageUrl The image URL
     * @return self
     */
    public function withImageUrl(?string $imageUrl): self
    {
        $this->data['image_url'] = $imageUrl;
        return $this;
    }

    /**
     * Set whether the currency is free.
     *
     * @param bool $isFree Whether the currency is free
     * @return self
     */
    public function withIsFree(bool $isFree): self
    {
        $this->data['is_free'] = $isFree;
        return $this;
    }

    /**
     * Build the currency data.
     *
     * @return array The currency data
     */
    public function build(): array
    {
        return $this->data;
    }
}