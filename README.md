# Sistema de Gerenciamento de Livros - Biblioteca 📚

## 📖 Descrição

Este projeto é um **sistema de gerenciamento de livros** desenvolvido com a arquitetura **MVC (Model-View-Controller)** utilizando **PHP, HTML e CSS**.  

## 🧩 Estrutura do Projeto

```
aula4php/
│
├── index.php             # Ponto de entrada principal do sistema
├── /model/               # Classes de conexão e manipulação do banco de dados
├── /view/                # Páginas HTML e formulários
├── /controller/          # Lógica de controle entre model e view
└── /sql/                 # Scripts SQL para criação do banco de dados
```

---

## 💻 Como Utilizar o Projeto

### 1️⃣ Clonar o repositório

```bash
git clone https://github.com/seuusuario/aula4php.git
cd aula4php
```

### 2️⃣ Configurar o Banco de Dados (MySQL)

1. Acesse o MySQL pelo terminal:
   ```bash
   mysql -u root -p
   ```
2. Crie o banco de dados:
   ```sql
   CREATE DATABASE biblioteca;
   ```
3. Importe o script SQL localizado na pasta `/sql` (caso exista):
   ```bash
   SOURCE caminho/para/o/arquivo.sql;
   ```
4. Ajuste as configurações de conexão no arquivo do modelo (por exemplo, `model/Conexao.php`) com seu **usuário**, **senha** e **nome do banco**.

---

## ▶️ Executar o Servidor PHP

No diretório do projeto, execute:

```bash
php -S localhost:8000
```

Em seguida, acesse no navegador:

👉 [http://localhost:8000](http://localhost:8000)

---

## 👨‍💻 Autor
**Murilo Haddad Ferreira Souza**  
