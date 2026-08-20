<div align="center">

# AMS Connect

### Sistema desenvolvido com Laravel e MySQL

[![Laravel](https://img.shields.io/badge/Laravel-Framework-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)

</div>

---

## 📌 Sobre o projeto

Projeto desenvolvido utilizando **Laravel** para demonstrar a criação e utilização de um banco de dados **MySQL** através de **Laravel Migrations**, além do cadastro e gerenciamento de usuários.

---

## 🗄️ Estrutura do banco

### 👤 Users

Armazena os usuários cadastrados no sistema.

### 📋 Profiles

Armazena o perfil de cada usuário.

**Relacionamento:** `Users 1:1 Profiles`

### 📝 Posts

Armazena as publicações realizadas pelos usuários.

**Relacionamento:** `Users 1:N Posts`

### 🏷️ Tags

Armazena as categorias/tags utilizadas nos posts.

### 🔗 Post_Tag

Tabela pivô responsável pelo relacionamento entre posts e tags.

**Relacionamento:** `Posts N:M Tags`

---

## 🔄 Relacionamentos

```text
Users
  │
  ├──── 1:1 ──── Profiles
  │
  └──── 1:N ──── Posts
                   │
                   └──── N:M ──── Tags
