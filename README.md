# ⛪ Igreja de Jesus Cristo

Site institucional e painel administrativo para a **Igreja de Jesus Cristo — Comunidade Cristã**.

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel&logoColor=white)
![Vue.js](https://img.shields.io/badge/Vue.js-3-4FC08D?logo=vuedotjs&logoColor=white)
![Tailwind](https://img.shields.io/badge/Tailwind-4-06B6D4?logo=tailwindcss&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?logo=php&logoColor=white)

---

## 📖 Sobre

Plataforma web completa para a comunidade da igreja, com:

- **Site público** — Páginas institucionais (Início, Sobre, Ministérios, Contribua, Sermões, Oração)
- **Painel Admin** — Dashboard com métricas, gestão de conteúdo e controle de acesso por roles
- **Autenticação** — Login com 2FA, recuperação de senha e registro

---

## 🛠️ Tech Stack

| Camada | Tecnologia |
|--------|-----------|
| **Backend** | Laravel 12, PHP 8.2+, Fortify (2FA) |
| **Frontend** | Vue 3, Inertia.js, TypeScript |
| **Estilo** | Tailwind CSS v4, shadcn-vue (Reka UI) |
| **Ícones** | Lucide Vue, Material Symbols |
| **Fontes** | Crimson Pro, Lora, Inter |
| **Build** | Vite 7, Wayfinder |
| **Banco** | MySQL (via XAMPP) |

---

## 🚀 Instalação

```bash
# 1. Clone o repositório
git clone https://github.com/seu-usuario/igreja.git
cd igreja

# 2. Instale dependências
composer install
npm install

# 3. Configure o ambiente
cp .env.example .env
php artisan key:generate

# 4. Configure o banco de dados no .env
# DB_DATABASE=igreja
# DB_USERNAME=root
# DB_PASSWORD=

# 5. Execute migrations e seeders
php artisan migrate --seed

# 6. Inicie os servidores
php artisan serve
npm run dev
```

Acesse: `http://localhost:8000`

---

## 👥 Credenciais de Teste

| Role | Email | Senha |
|------|-------|-------|
| **Admin** | `admin@igreja.com` | `password` |
| **Editor** | `editor@igreja.com` | `password` |
| **Membro** | `membro@igreja.com` | `password` |

---

## 📁 Estrutura do Projeto

```
igreja/
├── app/
│   ├── Http/Controllers/Admin/   # Controllers do painel
│   ├── Http/Middleware/           # RoleMiddleware, Inertia
│   └── Models/                   # User, Sermon, PrayerRequest
├── resources/
│   ├── css/app.css               # Design tokens (church-*)
│   └── js/
│       ├── components/site/      # Header, Footer, SermonGrid...
│       ├── components/ui/        # shadcn-vue components
│       ├── layouts/              # Public, App, Auth layouts
│       └── pages/                # Home, Sobre, Dashboard, auth/
├── routes/
│   └── web.php                   # Rotas públicas + /admin
└── database/
    ├── migrations/               # Users, Sermons, PrayerRequests
    └── seeders/                  # Admin, Editor, Membro, Sermões
```

---

## 🔐 Sistema de Roles

| Role | Acesso |
|------|--------|
| **admin** | Dashboard, Sermões, Oração, Usuários, Configurações |
| **editor** | Dashboard, Sermões, Oração |
| **member** | Dashboard |

---

## 🎨 Design System

Paleta baseada em tons terrosos e dourados, transmitindo acolhimento e elegância:

| Token | Cor | Uso |
|-------|-----|-----|
| `church-primary` | `#8b7e6d` | Botões, links ativos |
| `church-gold` | `#c9a96e` | Destaques, subtítulos |
| `church-text-dark` | `#2c2a27` | Títulos, texto principal |
| `church-text-muted` | `#6b6661` | Texto secundário |
| `church-bg-light` | `#faf9f6` | Fundo de páginas |
| `church-accent` | `#f4f1ea` | Hover de botões |

**Fontes:** `Crimson Pro` (display), `Lora` (body serif), `Inter` (UI sans)

---

## 📜 Licença

Este projeto é privado e de uso exclusivo da Igreja de Jesus Cristo.
