Aula 03 - Migrate e Seeders

Configurando mysql - mudar na .env a conexão, no caso atual, rodar junto o xampp, para criar conexão com database.

LEMBRAR DE SALVAR OS ARQUIVOS ANTES DE RODAR COMANDOS

rodar php artisan migrate: Lendo os arquivos configurados, cria os bancos de dados e as tabelas.

rodar php artisan make:migration create_flights_table: Cria uma nova migração, configurando e criando novas tabelas no banco de dados.

rodar php artisan make:Seeder FlightSeeder: Cria uma semeadora, sendo capaz de popular o banco de dadas automaticamentes.

rodar php artisan db:seed: Popula o banco de dados com as informações codificadas no seeder.