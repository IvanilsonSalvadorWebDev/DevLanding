# DevLanding 🚀

Landing page moderna construída com **Laravel**, **Blade**, **Vite**, **GSAP** e um sistema simples de **captura de leads (newsletter)**.

Ideal para testes, estudo e como base para futuros projetos de marketing digital, ecommerces e páginas de vendas.

---

## 📚 Índice

1. [Funcionalidades](#-funcionalidades)
2. [Tecnologias utilizadas](#-tecnologias-utilizadas)
3. [Pré-requisitos](#-pré-requisitos)
4. [Instalação do projeto](#-instalação-do-projeto)
5. [Configuração do banco de dados](#-configuração-do-banco-de-dados)
   - [Opção A — SQLite](#opção-a--sqlite-recomendado-para-teste)
   - [Opção B — MySQL](#opção-b--mysqlmariadb)
6. [Frontend com Vite e GSAP](#-frontend-com-vite-e-gsap)
7. [Rodando o projeto em desenvolvimento](#-rodando-o-projeto-em-desenvolvimento)
8. [Fluxo da newsletter](#-fluxo-da-newsletter)
9. [Estrutura principal do projeto](#-estrutura-principal-do-projeto)
10. [Subindo o projeto para o GitHub](#-subindo-o-projeto-para-o-github)
11. [Preparando para produção (build)](#-preparando-para-produção-build)
12. [Hospedagem / Deploy](#-hospedagem--deploy)
    - [Deploy em hospedagem compartilhada (exemplo genérico)](#1-deploy-em-hospedagem-compartilhada-exemplo-genérico)
    - [Deploy em VPS (visão geral)](#2-deploy-em-vps-visão-geral)
13. [TODO / Próximos passos](#-todo--próximos-passos)
14. [Autor](#-autor)

---

## ✅ Funcionalidades

- Landing page **responsiva** (mobile-first)
- Formulário de newsletter com:
  - Validação de email no backend (Laravel)
  - Salvamento em banco de dados na tabela `leads`
  - Proteção CSRF (`@csrf`)
- Popup animado de **sucesso** usando **GSAP**
- Animações de entrada no hero e no card principal
- Integração com **Laravel Vite** (CSS + JS separados, com build moderno)

---

## 🛠 Tecnologias utilizadas

- **PHP 8+**
- **Laravel**
- Blade (template engine)
- Vite (empacotador frontend)
- JavaScript (ES Modules)
- **GSAP** para animações
- Banco de dados:
  - **SQLite** (ideal pra teste)
  - ou **MySQL / MariaDB** (produção)

---

## ✅ Pré-requisitos

Antes de começar, você precisa ter instalado:

- [PHP 8+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js + NPM](https://nodejs.org/)
- Banco de dados:
  - SQLite (nenhuma instalação extra, só criar o ficheiro)
  - ou MySQL / MariaDB (XAMPP, Laragon, Wamp, Docker, etc.)
- Git (para versionamento e deploy via GitHub)

---

## 📦 Instalação do projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/SEU-USUARIO/DevLanding.git
cd DevLanding
