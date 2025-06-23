![logo](https://github.com/user-attachments/assets/56a1d64d-8470-481a-b58e-33585270279c)
# 🧱 Beauty Framework

**Beauty** is a blazing-fast, PSR-compliant, modular microframework for building REST and gRPC APIs on top of RoadRunner. It provides first-class support for clean architecture, strong developer ergonomics, and production-ready features without FPM overhead. This skeleton is ideal for building microservices, APIs, and gRPC services with Modular Architecture.

---

## 🎯 Goals

Beauty is designed as a lightweight, modular and fast foundation for building microservices:

* 🧩 Package-oriented: each module is self-contained and reusable
* 🚀 RoadRunner-native: zero FPM, ultra-low latency
* ⚙️ Clean architecture: clear separation between application layers
* 🧪 Testing-friendly: services are testable by design
* 🐳 Docker-first: fully containerized by default
* 📦 Modularity: easy to extend

---

## 🚀 Features

* Fully PSR-compliant (PSR-3, 4, 7, 11, 15, 14)
* Built-in DI container (PHP-DI powered)
* Attribute-based routing and middleware
* Event system with listener registry
* Lightweight config and cache system
* Jobs, events, queues (via RoadRunner)
* Console kernel for CLI tools
* Powered by RoadRunner — no FPM
* Modular architecture

---

## 🗂 Project Structure

```shell
├── app
│   ├── Console               # CLI commands
│   └── Container             # DI bindings for core services      
├── modules
│   └── hello                 # Example module
│       ├── composer.json     # Module metadata
│       └── src
│           ├── Container     # Module-specific DI bindings
│           ├── Controllers   # HTTP/API controllers
│           ├── Events        # Application events
│           ├── Jobs          # Async jobs
│           ├── Listeners     # Event listeners
│           ├── Middlewares   # PSR-15 middleware
│           ├── Repositories  # Data access
│           ├── Requests      # Validated requests
│           ├── Responses     # Typed responses
│           └── Services      # Business logic
├── config                    # Configuration files
├── workers                   # RoadRunner workers (http, jobs, etc)
├── bootstrap                 # Kernel bootstrapping
├── public/index.php          # Entry point (optional)
```

---

## 📦 Installation

```bash
composer create-project beauty-framework/module-app beauty-framework
cd beauty-framework
cp .env.example .env
make up # or make prod
```

---

## ⚙️ Configuration (.env)

```
APP_NAME=Beauty
APP_ENV=local
APP_VERSION=1.0
APP_TIMEZONE=UTC
APP_LOCALE=en
APP_DEBUG=true
USE_DI_CACHE=true

DB_CONNECTION=pgsql
DB_HOST=database
DB_PORT=5432
DB_DATABASE=my_db
DB_USERNAME=root
DB_PASSWORD=password

CACHE_DRIVER=redis

REDIS_HOST=redis
REDIS_PORT=6379
```

---

## 🧠 CLI Commands

| Command              | Description                |
|----------------------|----------------------------|
| generate\:controller | Generate controller        |
| generate\:command    | Generate a new CLI command |
| generate\:middleware | Generate a new middleware  |
| generate\:request    | Generate a new request     |
| generate\:event      | Create a new event         |
| generate\:listener   | Create a new listener      |
| generate\:job        | Create a new job           |
| generate\:module     | Create a new module        |

---

## 🐳 Docker Setup (default)

Beauty is designed to run **natively inside Docker**. By default, all services are containerized:

| Service | Image               | Notes                          |
|---------|---------------------|--------------------------------|
| app     | php:8.4-alpine + RR | RoadRunner + CLI build targets |
| db      | postgres:16         | PostgreSQL 16                  |
| redis   | redis\:alpine       | Redis 7                        |

```yaml
services:
  app:
    build:
      target: dev
    environment:
      PHP_IDE_CONFIG: "serverName=stage"
    restart: unless-stopped

  db:
    image: postgres:16
    ports:
      - "5432:5432"

  redis:
    image: redis:alpine
    ports:
      - "6379:6379"
```

---

## 🛠 Makefile Commands

| Category | Command                                | Description                                     |
|----------|----------------------------------------|-------------------------------------------------|
| Start    | `make up`                              | Start the DEV environment                       |
|          | `make prod`                            | Start the PROD environment                      |
| Stop     | `make stop`                            | Stop all containers                             |
|          | `make down`                            | Remove all containers and volumes               |
|          | `make restart`                         | Restart all containers                          |
|          | `make restart-container CONTAINER=...` | Restart a specific container                    |
|          | `make stop-container CONTAINER=...`    | Stop a specific container                       |
| PHP      | `make php <cmd>`                       | Run php command inside the app container        |
|          | `make beauty <cmd>`                    | Run beauty CLI command inside the app container |
| Tests    | `make test`                            | Run PHPUnit tests                               |
| Composer | `make composer <cmd>`                  | Run composer command inside the app container   |
| Shell    | `make bash`                            | Open bash shell inside the app container        |
| Logs     | `make logs <container>`                | View logs of specific container                 |
| Database | `make psql`                            | Access PostgreSQL CLI                           |
| Cache    | `make redis`                           | Access Redis CLI                                |

---

## 📚 Documentation

See [Documentation](https://beauty-framework.github.io/) page

---

## 📦 Related Modules

See full list of modules at [Documentation](https://beauty-framework.github.io/docs/Components/Modules%20and%20Components) page.

---

## 📝 TODO

* [ ] ORM support (query builder + migrations)
* [ ] `beauty/testing` package with framework-aware test harness
* [x] gRPC server module with RoadRunner integration
* [ ] Job retries, delays, and failure handlers
* [ ] OpenAPI/Swagger support
* [x] Full module documentation

---

Welcome to Beauty Framework — lean, fast, clean. Let's build some serious APIs ⚡
