# Number-to-Text API

Este projeto é uma API pública desenvolvida em Laravel que converte números para seus equivalentes em texto por extenso em português.

## Funcionalidades

- Recebe um número como entrada via requisição HTTP.
- Retorna o número em texto por extenso.
- A API é pública e não requer autenticação.

## Tecnologias Utilizadas

- Laravel 11: Framework principal para a API.
- PHP Intl Extension: Usada para realizar a conversão de números para texto.
- Composer: Gerenciador de dependências PHP.

## Requisitos

- PHP >= 8.1 com extensão `intl` habilitada.
- Composer instalado.
- Um servidor HTTP (por exemplo, Apache, Nginx ou o servidor embutido do Laravel).

## Instalação

1. Clone este repositório:
   git clone https://github.com/seu-usuario/number-to-text-api.git
   cd number-to-text-api

2. Instale as dependências do projeto:
   composer install

3. Configure o ambiente:
   - Copie o arquivo `.env.example` para `.env`:
     cp .env.example .env
   - Gere a chave da aplicação:
     php artisan key:generate

4. Inicie o servidor de desenvolvimento:
   php artisan serve

5. Certifique-se de que a extensão `intl` está habilitada:
   - No terminal, execute:
     php -m | grep intl
   - Se não aparecer, habilite a extensão conforme indicado na documentação acima.

## Uso

A API possui apenas um endpoint:

### Endpoint: /api/number-to-text/{number}

**Método**: GET

**Parâmetro**:
- `{number}`: Um número válido (inteiro ou decimal) a ser convertido para texto por extenso.

**Exemplo de Requisição**:
GET http://127.0.0.1:8000/api/number-to-text/123

**Exemplo de Resposta**:
{
    "number": 123,
    "text": "cento e vinte e três"
}

**Erros**:
- Entrada inválida (não numérica):
{
    "error": "Input must be a valid number."
}

## Estrutura do Projeto

- `app/Http/Controllers`: Contém o controlador `NumberToTextController`.
- `app/Services`: Contém a lógica de conversão no `NumberTranslationService`.
- `routes/api.php`: Define a rota pública da API.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto é licenciado sob a [MIT License](LICENSE).

---

Desenvolvido com ❤️ por Hugobsan.
