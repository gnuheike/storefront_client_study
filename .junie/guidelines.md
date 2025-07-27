# Storefront Client Study Guidelines

This document provides guidance for new developers working on the Storefront Client project. It includes information on the project structure, architecture, running tests, executing scripts, and following best practices.

## Project Architecture

The project follows a clean architecture approach with four distinct layers:

1. **Domain Layer** (`src/Domain/`)
   - Contains core business logic, entities, value objects, and repository interfaces
   - Independent of other layers and external frameworks
   - Examples: `Item`, `Currency`, `ItemRepositoryInterface`

2. **Application Layer** (`src/Application/`)
   - Contains use cases, commands, and services that orchestrate domain objects
   - Depends on the Domain layer but is independent of Infrastructure and Presentation
   - Examples: `CreateItemHandler`, `CreateCurrencyHandler`, `AdminBehaviorServiceInterface`

3. **Infrastructure Layer** (`src/Infrastructure/`)
   - Contains implementations of interfaces defined in the Domain layer
   - Adapters for external services (e.g., OpenAPI client)
   - Configuration and dependency injection setup
   - Examples: `ItemConfiguredRepository`, `CurrencyConfiguredRepository`, `ItemMapper`

4. **Presentation Layer** (`src/Presentation/`)
   - Contains entry points to the application (console commands, controllers)
   - Depends on the Application layer
   - Examples: `AdminBehaviorConsoleRunner`, `AdminCurrencyProvider`, `AdminItemProvider`