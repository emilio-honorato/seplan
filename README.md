# 🚗 Sistema de Gestão de Veículos

Aplicação web desenvolvida em **Laravel 11**, containerizada com **Docker (Laravel Sail)**, para gerenciamento de veículos, incluindo CRUD completo, validações e módulo de relatórios.

---

## 🛠 Tecnologias Utilizadas

- PHP 8.2
- Laravel 11
- MySQL 8
- Eloquent ORM
- Blade
- Bootstrap 5
- Node.js 18+
- Docker & Docker Compose (Laravel Sail)

---

## 📋 Pré-requisitos

Antes de iniciar, é necessário ter instalado:

- Docker
- Docker Compose
- Git

> ❗ Não é necessário instalar PHP, Composer ou Node localmente.

---

## 🚀 Instalação com Docker (Laravel Sail)

---------------------------------
1 - Clonar o repositório
git clone https://github.com/emilio-honorato/seplan.git

---------------------------------
2 - Criar o arquivo de ambiente
cp .env.example .env

---------------------------------
3 - Subir os containers
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install

./vendor/bin/sail up -d

---------------------------------
4- Gerar a chave da aplicação
./vendor/bin/sail artisan key:generate

---------------------------------
5 - Executar migrations e seeders
./vendor/bin/sail artisan migrate --seed

---------------------------------
6 - Instalar dependências front-end
./vendor/bin/sail npm install
./vendor/bin/sail npm run build

./vendor/bin/sail npm run dev -> para ambiente dev


---------------------------------
Estrutura de Pastas:
app/
 ├── Http/Controllers
 ├── Http/Requests
 ├── Models
database/
 ├── migrations
 ├── seeders
resources/
 ├── views
routes/
 └── web.php




