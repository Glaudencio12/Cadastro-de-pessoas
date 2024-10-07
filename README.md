# Projeto de Cadastro de Pessoas

Este projeto foi desenvolvido como parte da avaliação da disciplina de Desenvolvimento Web II. 
O objetivo é implementar uma aplicação que permita o cadastro de pessoas, utilizando tecnologias web e práticas de programação.
# Equipe responsável pelo desenvolvimento:
Glaudencio da Costa Meneses;
Francisco das Chagas de Oliveira Sousa;
Fabrício Henrique da Costa Silva;
João Gabriel Lima Aguiar;
Matheus de Lima Carvalho;
João Gabriel Silva Sousa;

## Tecnologias Utilizadas

- **PHP**: Para a lógica de backend e conexão com o banco de dados.
- **MySQL**: Para o armazenamento dos dados.
- **HTML/CSS**: Para a construção da interface do usuário.

## Funcionalidades

- Cadastro de pessoas com informações básicas.
- Armazenamento e recuperação dos dados em um banco de dados MySQL.
- Edição e exclusão dos dados no banco de dados.
- Interface simples e intuitiva para melhor experiência do usuário.

## Estrutura do Projeto

O projeto pode ser organizado da seguinte forma:

```
/projeto-cadastro-pessoas
│
├── conect_bd.php         # Faz a conexão com o banco de dados
├── form_cadastro.html    # Página para cadastrar pessoas
├── insert_data.php       # Arquivo que trata das informaçãoes da pessoa e insere no BD
├── view_data.php         # Página para listar todos os cadastros
├── form_update.php       # Formulário utilizado para a atualização dos dados
└── update_user.php       # Arquivo que faz a conexão e tratamento das informações editadas
├── delete_user.php       # Arquivo resposável por excluir os dados da pessoa do BD
└── pessoas.sql           # Tabela na qual os dados são inserido, editado e excluidos
```

## Como Executar

1. Clone o repositório em sua máquina local.
2. Configure o banco de dados MySQL de acordo com o arquivo `conect_bd.php`.
3. Acesse o arquivo `form_cadastro.php` através de um servidor local (como XAMPP).

## Conclusão

Este projeto reflete os conhecimentos adquiridos ao longo do segundo bimestre da disciplina e demonstra a aplicação prática dos conceitos de desenvolvimento web e manipulação de banco de dados em PHP. 
Sinta-se à vontade para explorar e contribuir!

