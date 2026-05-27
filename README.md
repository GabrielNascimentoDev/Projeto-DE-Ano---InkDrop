<div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&color=0:1a1a2e,50:16213e,100:0f3460&height=180&section=header&text=🖋️%20InkDrop&fontSize=50&fontColor=e94560&fontAlignY=38&desc=E-commerce%20desenvolvido%20com%20Laravel&descAlignY=58&descSize=18&animation=fadeIn"/>

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![Blade](https://img.shields.io/badge/Blade-FF2D20?style=flat-square&logo=laravel&logoColor=white)](#)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white)](#)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black)](#)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)](#)

</div>

---

## 💡 A ideia por trás do projeto

Você já tentou vender ou comprar algo online e sentiu que a plataforma era confusa, lenta ou simplesmente genérica demais? O **InkDrop** nasceu dessa frustração.

O projeto foi desenvolvido como **Projeto de Conclusão de Ano** com o objetivo de criar uma solução de e-commerce completa, funcional e de fácil uso — do cadastro do produto até o momento em que o cliente finaliza a compra.

> *"Queria entender como funciona um sistema real de ponta a ponta. Não só o front bonito, mas o que acontece por baixo dos panos."*

---

## 🎯 Qual dor ele resolve?

| Problema | Solução do InkDrop |
|---|---|
| Lojas improvisadas em grupos de WhatsApp | Catálogo organizado com página por produto |
| Sem controle de estoque ou pedidos | Painel administrativo para gestão |
| Processo de compra confuso | Fluxo simples: catálogo → carrinho → checkout |
| Dependência de plataformas pagas | Sistema próprio e customizável |

---

## ✨ Funcionalidades

- 🛍️ **Catálogo de produtos** com listagem e página de detalhe
- 🛒 **Carrinho de compras** com adição, remoção e atualização de itens
- 👤 **Autenticação de usuários** — cadastro, login e sessão
- 🔐 **Painel administrativo** para gerenciar produtos e pedidos
- 📦 **Controle de estoque** integrado ao fluxo de vendas
- 📱 **Layout responsivo** para acesso em qualquer dispositivo

---

## 🧠 O que aprendi construindo isso

Este foi meu primeiro projeto full-stack de verdade. Alguns dos conceitos que precisei dominar:

- **MVC com Laravel** — entender como Model, View e Controller se comunicam
- **Eloquent ORM** — consultas ao banco sem escrever SQL puro
- **Migrations e Seeders** — controle de versão do banco de dados
- **Autenticação com Laravel Breeze/Auth** — sistema de login seguro
- **Blade Templates** — reutilização de layouts e componentes de view
- **Rotas RESTful** — organização das URLs da aplicação

---

## 🛠️ Tecnologias utilizadas

| Tecnologia | Papel no projeto |
|---|---|
| **Laravel** | Framework PHP — estrutura MVC, rotas, autenticação |
| **Blade** | Template engine — renderização das views |
| **PHP** | Linguagem backend — lógica de negócio |
| **MySQL** | Banco de dados relacional |
| **CSS3 / JS** | Estilização e interatividade no front |

---

## 🚀 Como rodar localmente

```bash
# 1. Clone o repositório
git clone https://github.com/GabrielNascimentoDev/Projeto-DE-Ano---InkDrop.git
cd Projeto-DE-Ano---InkDrop

# 2. Instale as dependências PHP
composer install

# 3. Instale as dependências JS
npm install && npm run dev

# 4. Configure o ambiente
cp .env.example .env
php artisan key:generate

# 5. Configure o banco no .env e rode as migrations
php artisan migrate --seed

# 6. Inicie o servidor
php artisan serve
```

> Acesse em: `http://localhost:8000`

---

## 📁 Estrutura do projeto

```
InkDrop/
├── app/
│   ├── Http/Controllers/   → Lógica de cada rota
│   └── Models/             → Entidades do banco (Produto, Pedido, Usuário)
├── database/
│   ├── migrations/         → Estrutura das tabelas
│   └── seeders/            → Dados iniciais
├── resources/views/        → Templates Blade (HTML dinâmico)
├── routes/web.php          → Definição das rotas
└── public/                 → Assets públicos (CSS, JS, imagens)
```

---

## 🔮 Próximos passos

- [ ] Integração com gateway de pagamento (Stripe / Mercado Pago)
- [ ] Sistema de avaliação de produtos
- [ ] Filtros e busca avançada no catálogo
- [ ] Notificações por e-mail ao cliente

---

<div align="center">

**Desenvolvido por [Gabriel Henrique](https://github.com/GabrielNascimentoDev) como projeto de conclusão de ano** 🎓

<img src="https://capsule-render.vercel.app/api?type=waving&color=0:0f3460,50:16213e,100:1a1a2e&height=100&section=footer"/>

</div>
