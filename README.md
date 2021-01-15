# Larachat

##### Aplicação chat simplificada desenvolvida utilizando a framework Laravel

# Instalação e Configuração

Para importar o projeto, basta clonar o repositório:
```bash
$ git clone https://github.com/AlfredoHAC/Larachat.git
```
Depois de importado, é preciso configurar o banco de dados através das migrações:
```bash
$ php artisan migrate:fresh
```
A opção `:fresh` fará com que sejam executadas migrações limpas, ou seja, o banco será resetado.

##### Opcional

Para inserir dados *default* no banco, é necessário usar o `db:seed`, para que esses dados sejam gerados e inseridos no banco.
```bash
$ php artisan db:seed
```

Lembrando que o banco de dados utilizado foi o **PostgreSQL**, então pode ser necessário fazer as modificações apropriadas no arquivo `.env` e/ou no arquivo `config/database.php`.

# Execução

Depois de instalado e configurado o projeto, basta rodar o comando:
```bash
$ php artisan serve
```
Após executado o comando, abra o seu navegador e navegue até o endereço ` localhost:8000`.

**Pronto!** O projeto deve estar executando normalmente.
