# Storefront Client

A PHP command-line application for interacting with a storefront system. This client provides both admin and user
functionalities for managing and interacting with virtual items and currencies.

## Project Overview

The Storefront Client is a CLI tool that allows:

- **Admin Operations**:
    - Creating and managing virtual currencies
    - Creating and managing virtual items
    - Uploading game keys

- **Client Operations**:
    - Browsing available currencies
    - Browsing available items
    - Adding items to a cart
    - Viewing cart contents
    - Making order
    - Generating order token

The application communicates with a backend service using an OpenAPI client.

## Installation

### Prerequisites

- PHP 8.3 or higher
- Composer

### Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/gnuheike/storefront_client_study.git
   cd storefront_test
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Create a `.env` file in the project root with the following variables:
   ```
   STOREFRONT_SERVER=yor_server_id (https://store.xsolla.com/api)
   STOREFRONT_PROJECT_ID=your_project_id
   STOREFRONT_ADMIN_TOKEN=your_admin_token
   STOREFRONT_CLIENT_TOKEN=your_client_token
   ```

4. Regenerate the OpenAPI client (as needed):
   ```bash
   ./generate-client.sh
   ```

## Running the Application

To run the application:

```bash
php index.php
```
