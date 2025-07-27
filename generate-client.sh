#!/usr/bin/env bash

# Script to generate PHP client for Xsolla Store API using openapi schema

# Check if Java is installed
if ! command -v java &> /dev/null; then
    echo "Error: Java is not installed. Please install Java to continue."
    exit 1
fi

# Define the OpenAPI generator JAR file path
GENERATOR_JAR="openapi-generator-cli.jar"
GENERATOR_VERSION="7.14.0"
GENERATOR_URL="https://repo1.maven.org/maven2/org/openapitools/openapi-generator-cli/${GENERATOR_VERSION}/openapi-generator-cli-${GENERATOR_VERSION}.jar"

# Check if the OpenAPI generator JAR file exists
if [ ! -f "$GENERATOR_JAR" ]; then
    echo "Downloading OpenAPI generator CLI..."
    if ! wget "$GENERATOR_URL" -O "$GENERATOR_JAR"; then
        echo "Error: Failed to download OpenAPI generator CLI."
        exit 1
    fi
    echo "Download completed."
else
    echo "OpenAPI generator CLI already exists."
fi

# Define Generator Parameters
JSON_URL="https://api.redocly.com/registry/bundle/xsolla/store-en/v1/openapi.json"
OUTPUT_DIR="src/Infrastructure/Adapter/OpenAPI/generated_client"

# Generate the PHP client
echo "Generating PHP client for Xsolla Store API..."
if java -jar "$GENERATOR_JAR" generate -i ${JSON_URL} -g php -o ${OUTPUT_DIR} --skip-validate-spec; then
    echo "Client generation completed successfully."

    echo "Installing PHP client dependencies..."
    cd OUTPUT_DIR
    composer install

    echo "Client generation completed successfully."
else
    echo "Error: Failed to generate client."
    exit 1
fi
