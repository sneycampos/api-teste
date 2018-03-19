## API - CRUD de produtos

Esta api foi desenvolvida com o simples intuito de um teste. 

Passo-a-passo para instalação e uso:

1 - Clone o repositório

`$ git clone https://github.com/sneycampos/api-teste.git`

2 - Instale as dependências do Composer

`$ composer update`

3 - Gerar novas chaves para o Laravel e JWT

`$ php artisan key:generate`

`$ php artisan jwt:generate`

4 - Configure conexão com base de dados em `.env` 

5 - Rodar as migrations

`php artisan migrate`

6 - Para criar usuário de teste, basta rodar a Seeder:
`php artisan db:seed --class=UserTableSeeder`
 
login: `user@email.com`
password: `secret`

6 - Rotas e Métodos:

`POST | api/login` - Efetuar login, necessário informar email e senha    

`POST | api/products` - Cria novo produto

`GET | api/products` - Retorna lista de produtos

`GET | api/products/{id}` - Retorna Produto {id}

`PUT | api/products/{id}` - Atualiza Produto {id}

`DELETE | api/products/{id}` - Deleta produto {id}
