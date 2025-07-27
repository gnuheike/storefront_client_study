#!/bin/bash

# code-llvm.sh
# This script finds all PHP files (excluding test files, config files, etc.)
# and copies their content to the clipboard.
#
# Usage:
#   ./code-llvm.sh [path]
#
# Arguments:
#   path - Optional. The directory path to search for PHP files.
#          If not provided, the current directory will be used.

# Set default values
SEARCH_PATH="src"

# Parse arguments
if [ $# -eq 1 ]; then
    # Verify the provided path exists
    if [ -d "$1" ]; then
        SEARCH_PATH="$1"
    else
        echo "Error: The provided path '$1' is not a valid directory."
        echo "Usage: ./code-llvm.sh [path]"
        exit 1
    fi
fi

# Display search path
echo "Searching for PHP files in: $SEARCH_PATH"
echo "This may take a moment depending on the size of the codebase..."

# Find PHP files and copy their content to clipboard
if [ -d "$SEARCH_PATH" ]; then
    {
        find "$SEARCH_PATH" -name "*.php" \
            -not -path "*/vendor/*" \
            -not -path "*/generated_client/*" \
            -exec sh -c 'echo "=== $1 ==="; php scripts/strip-comments.php "$1"; echo' _ {} \;
    } | pbcopy
    echo "Done! PHP code has been copied to clipboard."
else
    echo "Error: Directory '$SEARCH_PATH' does not exist."
    exit 1
fi