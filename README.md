# GitHub Explorer Service

This Laravel service project allows you to search for popular GitHub repositories.

## Installation

1. Clone the repository:
   ```bash
   git clone git@github.com:AbanoubSamuel/GitHubExplorer.git
   
   cd GitHubExplorer
   
   composer install
   
   cp .env.example .env

   php artisan serve


## Usage

You can use the following endpoint to search for popular GitHub repositories:

### Search GitHub Repositories

- **Endpoint**: `/api/github/repos`
- **Method**: GET
- **Parameters**:
    - `q` (string, required): Your search query.
    - `sort` (string, optional): sort the results by keyword.
    - `order` (string, optional): Specify the order of the result i.e. desc.
    - `limit` (integer, optional): Number of results to return (default is unlimited).
    - `limit` (date, optional): Filter results by date.

**Example**:

```http
 GET http://localhost:8000/api/github/repos?q=laravel&limit=5&sort=stars

 ## Postman Collection

 You can find a Postman collection for testing the GitHub Explorer Service [below]
 (https://rumblers.postman.co/workspace/iLinux~dec7751f-e111-41e2-ae8a-e4325043ec97/collection/20412580-a83858e3-2d68-4f57-9ff1-bdde7e7ccd2a?action=share&creator=20412580).

