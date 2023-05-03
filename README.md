# Jadro

WordPress FSE theme by JadroWP.

# Getting Started

- [Home Page](https://jadrowp.com/)
- [View Demo](https://demo.jadrowp.com/)
- [GitHub Repo](https://github.com/jadrowp/jadro/)

# Theme Preview

![Screenshot](screenshot.png)

# Development

## Requirements

- [Composer](https://getcomposer.org/)
- [Node JS](https://nodejs.org/)
- [Pnpm](https://pnpm.io/)

## Setup

- Run `pnpm install` to install Node dependencies.
- Run `pnpm dlx husky add .husky/pre-commit 'pnpm dlx lint-staged'` to setup Husky.
- Run `composer install` to install composer dependencies.
- Run `cp .env.example .env` to create `.env` file.
- Edit `DEV_SERVER_URL` in your `.env` file to match the url of your local WP server.

## Available Scripts

* `pnpm run dev` - Starts dev server in watch mode.
* `pnpm run ready` - This will fix version, POT, etc and rebuilds assets.
* `pnpm run lint:js` - Run this to check if there are any issues in JavaScripts files.
* `pnpm run lint:css` - Run this to check if there are any issues in SCSS files.
* `pnpm run deploy` - This will prepare the theme for the production/release. Zip file will be inside `deploy` folder.

# Contributors

<a href="https://github.com/jadrowp/jadro/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=jadrowp/jadro" />
</a>
