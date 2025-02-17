# Biblioteca de Objetos de Valor PHP

Uma robusta biblioteca PHP projetada para encapsular e proteger dados sensíveis por meio de objetos de valor fortemente tipados. Esta biblioteca oferece uma maneira segura de manipular Informações Pessoalmente Identificáveis (PII) com validação e mascaramento embutidos.

## Descrição

Esta biblioteca de Objetos de Valor (VO) foi desenvolvida para garantir a segurança e consistência dos dados ao lidar com informações sensíveis. Ela fornece:

- Tipagem forte para validação de dados
- Mascaramento embutido para dados PII
- Funcionalidades de formatação para documentos brasileiros
- Objetos de valor imutáveis
- Regras de validação consistentes

## Requisitos

- PHP 8.3 ou superior
- ext-mbstring

## Instalação

Instale via Composer:

```bash
  composer require datweb-sistemas/vo
```

## Uso Básico

### Manipulação de CPF (Cadastro de Pessoa Física)

```php
use Datweb\Vo\Compostos\Cpf;

// Cria uma nova instância de CPF com validação
$cpf = new Cpf('123.456.789-09');

// Obtém o valor formatado
echo $cpf->getFormatted(); // 123.456.789-09

// Obtém o valor mascarado para logs
echo $cpf->getMasked(); // ***.***.***-**

// Obtém o valor parcialmente mascarado
echo $cpf->getPartiallyMasked(); // ***.***.789-09
```

## Objetos de Valor Disponíveis

### Tipos Primitivos
- **Boolean** - Valores booleanos com tipagem segura
- **Text** - Manipulação de strings com suporte a encoding

### Tipos Compostos (Documentos Brasileiros)
- **Cpf** - Cadastro de Pessoa Física
- **Cnpj** - Cadastro Nacional da Pessoa Jurídica
- **Rg** - Registro Geral
- **Email** - Endereço de e-mail com validação
- **Nome** - Manipulação de nomes pessoais

## Trabalhando com Dados PII

Todos os objetos de valor relacionados a PII implementam a interface `MaskablePII`, que fornece os métodos:

```php
interface MaskablePII extends PII
{
    public function getMasked(): string;
    public function getPartiallyMasked(): string;
}
```

## Licença

Esta biblioteca está licenciada sob a [Licença MIT](https://opensource.org/licenses/MIT). Sinta-se à vontade para utilizá-la em outros projetos sem quaisquer restrições.