# Teste Veículos

CRUD de veículos feito com Laravel: listar, cadastrar, editar e excluir, com validação e paginação.

## Requisitos
- PHP 8.2+
- Composer
- MySQL

## Instalação
```bash
git clone https://github.com/tiagomouradjesus/teste-veiculos.git
cd teste-veiculos
composer install
cp .env.example .env
php artisan key:generate
```

Configure o banco no `.env` (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`), crie o banco no MySQL e rode:

```bash
php artisan migrate --seed
php artisan serve
```

## Uso
Acesse `http://127.0.0.1:8000/veiculos`.
