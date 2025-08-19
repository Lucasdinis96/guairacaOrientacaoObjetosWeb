Aula 08 - CRUD

Acrônimo para Create, read, update e delete.

Aluno -> Livros -> Professor

CRUD

Passos
1º: Criar uma migration - representação em código das tabelas de um banco de dados;
2º: Criar uma model - representação dos campos da base, para que possam ser salvos;
3º: Criar uma controller - concentra toda a lógica, chamando views e models, como exemplo;
4º: Criar as rotas - definição de caminhos
5º: Criar as views - paginas para os usuários

php artisan make:model nome_model -m
(-m: comando para criar a migration junto com a model)