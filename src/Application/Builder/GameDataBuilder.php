<?php

declare(strict_types=1);

namespace StoreFrontClient\Application\Builder;

/**
 * Builder for game test data.
 * 
 * This class provides methods to build test data for games.
 */
class GameDataBuilder
{
    /**
     * @var array The game data
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
            'sku' => 'test-game-' . uniqid('', true),
            'name' => ['en-US' => 'Test Game'],
            'enabled' => true,
            'order' => 1,
            'description' => ['en-US' => 'Test game description'],
            'groups' => [],
            'attributes' => [],
            'image_url' => null,
            'release_date' => date('Y-m-d'),
            'publisher' => 'Test Publisher',
            'developer' => 'Test Developer',
            'genres' => ['Action', 'Adventure'],
            'platforms' => ['PC', 'Mac'],
            'system_requirements' => [
                'minimum' => [
                    'os' => 'Windows 10',
                    'processor' => 'Intel Core i5',
                    'memory' => '8 GB RAM',
                    'graphics' => 'NVIDIA GeForce GTX 1060',
                    'storage' => '50 GB available space'
                ],
                'recommended' => [
                    'os' => 'Windows 10',
                    'processor' => 'Intel Core i7',
                    'memory' => '16 GB RAM',
                    'graphics' => 'NVIDIA GeForce RTX 2070',
                    'storage' => '50 GB available space'
                ]
            ],
            'dlc' => [],
            'is_dlc' => false,
            'base_game' => null
        ];
        
        return $this;
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
     * Set whether the game is enabled.
     *
     * @param bool $enabled Whether the game is enabled
     * @return self
     */
    public function withEnabled(bool $enabled): self
    {
        $this->data['enabled'] = $enabled;
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
     * Set the release date.
     *
     * @param string $releaseDate The release date (YYYY-MM-DD)
     * @return self
     */
    public function withReleaseDate(string $releaseDate): self
    {
        $this->data['release_date'] = $releaseDate;
        return $this;
    }
    
    /**
     * Set the publisher.
     *
     * @param string $publisher The publisher
     * @return self
     */
    public function withPublisher(string $publisher): self
    {
        $this->data['publisher'] = $publisher;
        return $this;
    }
    
    /**
     * Set the developer.
     *
     * @param string $developer The developer
     * @return self
     */
    public function withDeveloper(string $developer): self
    {
        $this->data['developer'] = $developer;
        return $this;
    }
    
    /**
     * Set the genres.
     *
     * @param array $genres The genres
     * @return self
     */
    public function withGenres(array $genres): self
    {
        $this->data['genres'] = $genres;
        return $this;
    }
    
    /**
     * Set the platforms.
     *
     * @param array $platforms The platforms
     * @return self
     */
    public function withPlatforms(array $platforms): self
    {
        $this->data['platforms'] = $platforms;
        return $this;
    }
    
    /**
     * Set the system requirements.
     *
     * @param array $systemRequirements The system requirements
     * @return self
     */
    public function withSystemRequirements(array $systemRequirements): self
    {
        $this->data['system_requirements'] = $systemRequirements;
        return $this;
    }
    
    /**
     * Set the minimum system requirements.
     *
     * @param array $minimumRequirements The minimum system requirements
     * @return self
     */
    public function withMinimumSystemRequirements(array $minimumRequirements): self
    {
        $this->data['system_requirements']['minimum'] = $minimumRequirements;
        return $this;
    }
    
    /**
     * Set the recommended system requirements.
     *
     * @param array $recommendedRequirements The recommended system requirements
     * @return self
     */
    public function withRecommendedSystemRequirements(array $recommendedRequirements): self
    {
        $this->data['system_requirements']['recommended'] = $recommendedRequirements;
        return $this;
    }
    
    /**
     * Set the DLC.
     *
     * @param array $dlc The DLC
     * @return self
     */
    public function withDlc(array $dlc): self
    {
        $this->data['dlc'] = $dlc;
        return $this;
    }
    
    /**
     * Set whether the game is DLC.
     *
     * @param bool $isDlc Whether the game is DLC
     * @return self
     */
    public function withIsDlc(bool $isDlc): self
    {
        $this->data['is_dlc'] = $isDlc;
        return $this;
    }
    
    /**
     * Set the base game.
     *
     * @param string|null $baseGame The base game SKU
     * @return self
     */
    public function withBaseGame(?string $baseGame): self
    {
        $this->data['base_game'] = $baseGame;
        return $this;
    }
    
    /**
     * Build the game data.
     *
     * @return array The game data
     */
    public function build(): array
    {
        return $this->data;
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
}