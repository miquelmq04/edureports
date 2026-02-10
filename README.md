# EduReports 🍎 - Gestió d'Informes Escolars

EduReports és una plataforma web per a la gestió d'alumnes i generació d'informes, construïda sobre una arquitectura MVC (Model-Vista-Controlador) i optimitzada per a un entorn de desenvolupament àgil.

## 🛠️ Stack de Desenvolupament (All-in-One)

Hem seleccionat un stack centrat en la simplicitat i la potència. El nucli del projecte és Laragon, que ens proporciona gairebé tot el necessari en un sol paquet.

| Component         | Tecnologia        | Funció                                                               |
| ----------------- | ----------------- | -------------------------------------------------------------------- |
| Backend           | PHP 8.2+          | Lògica de l'aplicació i rutes MVC.                                   |
| Dependències PHP  | **Composer** | Gestió de llibreries externes (com `phpdotenv`).                     |
| Frontend          | Tailwind CSS v4   | Estils moderns (Utility-first) sense configuració pesada.            |
| Base de Dades     | MySQL             | Emmagatzematge de dades (gestionat amb Vscode MySQL).                |
| Servidor Local    | Laragon           | Apache, PHP i MySQL "tot en un".                                     |
| Control de Versions| Git + GitHub Desktop | Col·laboració entre l'equip.                                     |

## 📋 Requisits i Dependències

Perquè el projecte funcioni idènticament en tots els ordinadors, cal tenir instal·lat:

### Programari Base
- **Laragon (Full):** El servidor local principal.
- **Composer:** Imprescindible per instal·lar les dependències de PHP (ve integrat a Laragon, però cal verificar-ho).
- **Node.js (LTS):** Necessari per al motor de Tailwind amb npm.
- **GitHub Desktop:** Per gestionar el codi de manera visual i senzilla.
- **VS Code:** L'editor de codi oficial.

### Extensions de VS Code (Imprescindibles)
- **Tailwind CSS IntelliSense:** Autocompletat i vista prèvia de colors.
- **PHP Intelephense:** Suport intel·ligent per al codi PHP.
- **MySQL (Opcional):** Per veure les taules des de l'editor.

## 🚀 Configuració Inicial

Seguiu aquests passos en ordre per configurar l'entorn:

1. **Clonar el projecte:** Obre GitHub Desktop i clona el repositori a la carpeta `C:\laragon\www\edureports`.

2. **Instal·lar Dependències (Backend i Frontend):** Obre una terminal a l'arrel del projecte i executa els dos comandaments:
   ```bash
   composer install  # Instal·la phpdotenv i llibreries PHP
   npm install       # Instal·la Tailwind CSS