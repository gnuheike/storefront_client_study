# Storefront Client

A PHP command-line application for interacting with a storefront system. This client provides both admin and user functionalities for managing and interacting with virtual items and currencies.

## Project Overview

The Storefront Client is a CLI tool that allows:

- **Admin Operations**:
  - Creating and managing virtual currencies
  - Creating and managing virtual items

- **Client Operations**:
  - Viewing available currencies
  - Browsing available items
  - Adding items to a cart
  - Viewing cart contents

The application communicates with a backend service using an OpenAPI client.

## Installation

### Prerequisites

- PHP 8.1 or higher
- Composer

### Setup

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd storefront_test
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Create a `.env` file in the project root with the following variables:
   ```
   STOREFRONT_PROJECT_ID=your_project_id
   STOREFRONT_ADMIN_TOKEN=your_admin_token
   STOREFRONT_CLIENT_TOKEN=your_client_token
   ```

4. Generate the OpenAPI client (if needed):
   ```bash
   ./generate-client.sh
   ```

## Usage

### Running the Client Application

To run the client application (browse items, add to cart):

```bash
php index.php
```

### Running the Admin Application

To run the admin application (create currencies and items), uncomment the admin runner in `index.php` and comment out the client runner:

```php
// Modify index.php
$adminBehaviorConsoleRunner->run();
// $clientBehaviorConsoleRunner->run();
```

Then run:

```bash
php index.php
```

## Project Architecture

The project follows a clean architecture approach with four distinct layers:

### 1. Domain Layer (`src/Domain/`)

Contains core business logic, entities, value objects, and repository interfaces:
- Models: `Item`, `Currency`, `Cart`
- Value Objects: `Sku`
- Repository Interfaces: `ItemRepositoryInterface`, `CurrencyRepositoryInterface`, `CartRepositoryInterface`

### 2. Application Layer (`src/Application/`)

Contains use cases, commands, and services that orchestrate domain objects:
- Command Handlers: `CreateCurrencyHandler`, `CreateItemHandler`, `AddItemToCartHandler`
- Query Handlers: `GetCurrenciesHandler`, `GetItemsHandler`, `GetCartsHandler`
- Services: `AdminApplicationService`, `ClientApplicationService`

### 3. Infrastructure Layer (`src/Infrastructure/`)

Contains implementations of interfaces defined in the Domain layer:
- Repository Implementations: `ItemConfiguredRepository`, `CurrencyConfiguredRepository`, `CartConfiguredRepository`
- Adapters: OpenAPI client integration
- Mappers: `ItemMapper`, `CurrencyMapper`, `CartMapper`
- Configuration: Dependency injection setup

### 4. Presentation Layer (`src/Presentation/`)

Contains entry points to the application:
- Console Runners: `AdminBehaviorConsoleRunner`, `ClientBehaviorConsoleRunner`
- Providers: `AdminCurrencyProvider`, `AdminItemProvider`

## Development Guidelines

### Adding New Features

1. Define domain models and interfaces in the Domain layer
2. Implement use cases in the Application layer
3. Provide infrastructure implementations in the Infrastructure layer
4. Create presentation components in the Presentation layer

### Coding Standards

- Follow PSR-12 coding standards
- Use strict typing (`declare(strict_types=1)`)
- Create immutable value objects where appropriate
- Use dependency injection for all dependencies

### Testing

The project uses PHPUnit for testing. To run tests:

```bash
vendor/bin/phpunit
```

## Troubleshooting

### Common Issues

- **Authentication Errors**: Ensure your `.env` file contains valid credentials
- **OpenAPI Client Issues**: Regenerate the client using `./generate-client.sh`
- **Dependency Issues**: Run `composer update` to update dependencies

## License

[Specify the license here]