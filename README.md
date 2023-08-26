# BreezeCrudLaravel

Este é um projeto de exemplo que demonstra as funcionalidades básicas de um CRUD (Create, Read, Update, Delete) utilizando o framework Laravel com a biblioteca Breeze para autenticação.

## Interfaces

Aqui estão algumas capturas de tela das interfaces principais do projeto:

### Listagem de Itens

![Listagem de Itens](https://github.com/bportugal01/BreezeCrudLaravel/raw/main/imagens/Listagem.png)

Nesta interface, você pode visualizar uma lista de itens existentes no sistema.

### Cadastro de Novo Item

![Cadastro de Novo Item](https://github.com/bportugal01/BreezeCrudLaravel/raw/main/imagens/cadastro.png)

Utilize esta interface para adicionar novos itens ao sistema, preenchendo os campos necessários.

### Edição de Item

![Edição de Item](https://github.com/bportugal01/BreezeCrudLaravel/raw/main/imagens/edicao.png)

Nesta interface, você pode editar informações de um item existente. Os campos podem ser atualizados de acordo com suas necessidades.

### Deletar Item

![Deletar Item](https://github.com/bportugal01/BreezeCrudLaravel/raw/main/imagens/deletar.png)

Cuidado ao acessar esta interface, pois ela permite que você exclua permanentemente um item do sistema.

### Página Inicial

![Página Inicial](https://github.com/bportugal01/BreezeCrudLaravel/raw/main/imagens/index.png)

Aqui está a página inicial do projeto. Ela pode conter informações gerais, navegação ou outros elementos relevantes.

## Como Executar o Projeto

Para executar o projeto localmente, siga os passos abaixo:

1. Clone este repositório para o seu ambiente local.
2. Instale as dependências utilizando o comando: `composer install`.
3. Crie um arquivo `.env` baseado no `.env.example` e configure as informações de banco de dados.
4. Gere uma nova chave de aplicativo com o comando: `php artisan key:generate`.
5. Execute as migrações do banco de dados: `php artisan migrate`.
6. Inicie o servidor de desenvolvimento: `php artisan serve`.
7. Acesse o projeto em seu navegador: `http://localhost:8000`.

Certifique-se de ter o PHP, o Composer e um servidor de banco de dados instalados em sua máquina.

## Conclusão

Este projeto é uma introdução simples à criação de um CRUD com Laravel Breeze. Sinta-se à vontade para explorar e personalizar conforme suas necessidades.
