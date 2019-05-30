## API - CRUD de produtos

Simples API de teste usando Laravel e Json Web Token (JWT) 
Esta api foi desenvolvida para fins de estudos. 


Passo-a-passo para instalação e uso:

Clone o repositório

`$ git clone https://github.com/sneycampos/api-teste.git`

Instale as dependências do Composer

`$ composer update`

Renomeie o arquivo `.env.example` para `.env` e faça as devidas configurações de banco de dados
 
Gerar novas chaves para o Laravel e JWT

`$ php artisan key:generate`

`$ php artisan jwt:secret`

Rodar as migrations

`php artisan migrate`

Para criar usuário de teste, basta rodar a Seeder:

`php artisan db:seed --class=UserTableSeeder`
 
login: `user@email.com`
password: `secret`

Executar servidor built-in:

`php artisan serve`

Rotas e Métodos:

`POST | api/login` - Efetuar login, necessário informar email e senha    

`POST | api/products` - Cria novo produto

`GET | api/products` - Retorna lista de produtos

`GET | api/products/{id}` - Retorna Produto {id}

`PUT | api/products/{id}` - Atualiza Produto {id}

`DELETE | api/products/{id}` - Deleta produto {id}
