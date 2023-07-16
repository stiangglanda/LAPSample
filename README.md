## 🛸 Prerequisites

### 🪐 Tools
- [x] Install [Visual Studio Code](https://code.visualstudio.com/download)
- [x] Install [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)

### 🌍 Database
- [x] Install [MariaDB](https://mariadb.org/download/?t=mariadb&p=mariadb)
- [x] Create a `.env` file based on [.env.example](https://github.com/itsthistim/astro-template/blob/main/.env.example) in the root of your project
- [x] Create all needed tables by running the [SQL script](https://github.com/itsthistim/astro-template/blob/main/src/models/example.sql) or create your own

### 🌌 Backend
- [x] Install [Git](https://git-scm.com/downloads)
- [x] Install [Node.js](https://nodejs.org/en/download/)

## 🚀 Start Up

```bash
git clone https://github.com/itsthistim/astro-template.git
cd astro-template
npm install
npm run dev
```

## ⭐ Project Structure

Astro looks for `.astro`, `.html` or `.md` files in the `src/pages/` directory. Each page is exposed as a route based on its file name.

There's nothing special about `src/components/`, but that's where I like to put any Astro/React/Vue/Svelte/Preact components.

Any static assets, like images, can be placed in the `public/` directory.

## 🧞 Commands

All commands are run from the root of the project, from a terminal:

| Command                   | Action                                           |
| :------------------------ | :----------------------------------------------- |
| `npm install`             | Installs dependencies                            |
| `npm run dev`             | Starts local dev server at `localhost:3000`      |
| `npm run build`           | Build your production site to `./dist/`          |
| `npm run preview`         | Preview your build locally, before deploying     |
| `npm run astro ...`       | Run CLI commands like `astro add`, `astro check` |
| `npm run astro -- --help` | Get help using the Astro CLI                     |

Feel free to [check out Astro](https://astro.build) yourself!
