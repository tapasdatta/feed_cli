# Feed CLI

A PHP command-line application that imports data from a local CSV file into a database.  
The project is designed with scalability, extensibility, and testability in mind.

A sample CSV file (`feed.csv`) is included in the project root.

1. **Copy the environment file**

    ```bash
    cp .env.example .env
    ```

2. **Start Docker + install dependencies**

    ```bash
    docker compose up -d database
    composer install
    ```

3. **Run database migrations**
    ```bash
    php bin/console doctrine:migrations:migrate
    ```

---

## Running Feed Imports

```bash
php bin/console feed:import products feed.csv csv
```
