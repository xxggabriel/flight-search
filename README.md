# Busca de Passagens Aéreas com Algoritmo A* e Fronteira de Pareto

Este projeto é uma aplicação em PHP utilizando o framework Laravel para buscar passagens aéreas cadastradas no banco de dados. A busca é realizada utilizando o algoritmo A* em conjunto com a fronteira de Pareto para selecionar os voos a serem listados com base em critérios de custo, tempo e distância.

Este projeto foi desenvolvido como o trabalho final da disciplina de Análise e Estrutura de Dados do curso de Inteligência Artificial na Universidade Federal de Goiás. O objetivo do projeto é resolver problemas utilizando grafos.

## Funcionalidades

- Cadastro de voos
- Busca de voos utilizando o algoritmo A*
- Filtragem de voos com a fronteira de Pareto
- Listagem de voos otimizados de acordo com múltiplos critérios (custo, tempo e distância)

## Requisitos

- PHP 7.3 ou superior
- Composer
- Laravel 8.x
- MySQL ou outro banco de dados suportado pelo Laravel

## Instalação

1. Clone o repositório:
    ```sh
    git clone https://github.com/xxggabriel/flight-search
    ```

2. Navegue até o diretório do projeto:
    ```sh
    cd flight-search
    ```

3. Instale as dependências do Composer:
    ```sh
    composer install
    ```

4. Copie o arquivo `.env.example` para `.env` e configure suas credenciais de banco de dados:
    ```sh
    cp .env.example .env
    ```

5. Gere a chave da aplicação Laravel:
    ```sh
    php artisan key:generate
    ```

6. Execute as migrações do banco de dados:
    ```sh
    php artisan migrate
    ```

7. Popule o banco de dados com dados de voos (opcional):
    ```sh
    php artisan db:seed
    ```

8. Inicie o servidor de desenvolvimento:
    ```sh
    php artisan serve
    ```

A aplicação estará disponível em `http://localhost:8000`.

## Uso


### Busca de Voos

Para buscar voos, envie requisições GET para a seguinte rota da API:
    ```
        [GET] http://localhost:8000/api/flights/optimal
    ```

Caso queira fazer a busca via front-end, acessa pela seguinte rota:
    ```
        [GET] http://localhost:8000/flights
    ```

### Algoritmo A* e Fronteira de Pareto

A lógica do algoritmo A* e da fronteira de Pareto está implementada no diretório `app/Services/FlightService.php`. A busca leva em consideração múltiplos critérios para encontrar os voos mais otimizados.

## Estrutura do Projeto

- `app/Models/Flight.php`: Modelo de voo.
- `app/Http/Controllers/Web/FlightController.php`: Controlador responsável pela busca de voos.
- `app/Services/FlightService.php`: Serviço que implementa o algoritmo A* e a fronteira de Pareto.
- `database/migrations/`: Arquivos de migração do banco de dados.
- `database/seeders/`: Seeders para popular o banco de dados.


## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## Contato

Para dúvidas ou sugestões, entre em contato pelo email: gabrielsouza2@discente.ufg.br

---

Feito com ❤️ por Gabriel Oliveira
