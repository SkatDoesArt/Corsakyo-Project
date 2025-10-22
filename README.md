# Corsakyo Project

A simple e-commerce storefront prototype built with HTML, CSS, and a small amount of PHP. This project is currently a work-in-progress.

Important:
- The website is not online yet.
- It is not perfect and not fully functional yet.
- Some interactive or server-side features may be stubbed or incomplete.

---

## Overview
Corsakyo Project is an early prototype of an online shop interface. It includes a shop page, a basket/cart page, a login page, and supporting assets. The goal is to iterate toward a functional small web shop while keeping the stack lightweight.

---

## Tech Stack
- HTML, CSS, PHP (no framework, no build step)
- Language composition (approx. by bytes):
  - HTML: ~59.7%
  - CSS: ~37.9%
  - PHP: ~2.4%

No package manager or build tooling is required at this stage.

---

## Project Structure
- [Shop.html](https://github.com/SkatDoesArt/Corsakyo-Project/blob/main/Shop.html) — Main shop/catalog view.
- [Basket.html](https://github.com/SkatDoesArt/Corsakyo-Project/blob/main/Basket.html) — Initial basket/cart page.
- [basketv2.html](https://github.com/SkatDoesArt/Corsakyo-Project/blob/main/basketv2.html) — Iteration of the basket/cart page.
- [login.html](https://github.com/SkatDoesArt/Corsakyo-Project/blob/main/login.html) — Login UI (prototype).
- [css/](https://github.com/SkatDoesArt/Corsakyo-Project/tree/main/css) — Stylesheets.
- [Pictures/](https://github.com/SkatDoesArt/Corsakyo-Project/tree/main/Pictures) — Product and UI images.
- [logo/](https://github.com/SkatDoesArt/Corsakyo-Project/tree/main/logo) — Logo assets.
- [php/](https://github.com/SkatDoesArt/Corsakyo-Project/tree/main/php) — PHP endpoints/placeholders (requires a PHP server to function).

Note: Because there is PHP code, purely static hosting will not run server-side features. Use a local PHP server for anything under the `php/` directory.

---

## Current Pages
- Shop: [Shop.html](https://github.com/SkatDoesArt/Corsakyo-Project/blob/main/Shop.html)
- Basket (v1): [Basket.html](https://github.com/SkatDoesArt/Corsakyo-Project/blob/main/Basket.html)
- Basket (v2): [basketv2.html](https://github.com/SkatDoesArt/Corsakyo-Project/blob/main/basketv2.html)
- Login: [login.html](https://github.com/SkatDoesArt/Corsakyo-Project/blob/main/login.html)

---

## Getting Started

Requirements:
- Any modern web browser.
- Optional (for PHP features): PHP 8+ installed locally.

### Option A: Open statically in your browser
1. Clone or download the repository.
2. Double-click `Shop.html` (or any `.html` file) to open it in your browser.
3. This is fine for layout and basic front-end viewing. PHP features will not work in this mode.

### Option B: Serve statically with a simple web server
Use any simple static server so paths work consistently:
- Python 3
  ```bash
  python3 -m http.server 8080
  # then open http://localhost:8080/Shop.html
  ```
- VS Code Live Server extension
  - Open the folder in VS Code, right-click `Shop.html`, choose “Open with Live Server”.

Note: This still won’t execute PHP; it’s only for static assets.

### Option C: Run with PHP’s built-in server (for PHP features)
1. Ensure PHP is installed: `php -v`
2. From the repository root:
   ```bash
   php -S localhost:8000 -t .
   ```
3. In your browser, open:
   - http://localhost:8000/Shop.html
   - http://localhost:8000/Basket.html
   - http://localhost:8000/basketv2.html
   - http://localhost:8000/login.html

This will allow PHP endpoints under the `php/` folder to run (if referenced by the pages). No database configuration is included yet.

---

## Screenshots

- Login :

<img src=LoginScreen.png alt="LoginScreen">
  
- Home :

<img src=HomeScreen.png alt="HomeScreen">
  

Example (replace with your own images):
```markdown
![Shop Page](docs/screenshots/shop.png)
![Basket Page](docs/screenshots/basket.png)
![Login Page](docs/screenshots/login.png)
```

---

## Status and Limitations
- Not online yet.
- Not perfect and not fully functional yet.
- PHP code requires running via a PHP-capable server; static hosting won’t execute it.
- No database or persistent storage is configured.
- Forms and authentication flows may be placeholders or incomplete.
- If you plan to deploy:
  - GitHub Pages does not run PHP. You’ll need a PHP-capable host (e.g., a small VPS or shared hosting with PHP).
  - Consider adding environment-specific configuration and secure handling of any credentials.


---

## Contributing
Contributions, ideas, and bug reports are welcome:
- Open an issue: [Issues](https://github.com/SkatDoesArt/Corsakyo-Project/issues)
- Fork the repo and submit a pull request.

Before contributing, please note this is an early prototype; scope and structure may change.

---

## Author
- Maintained by [SkatDoesArt](https://github.com/SkatDoesArt)

If you have questions or suggestions, feel free to open an issue.
