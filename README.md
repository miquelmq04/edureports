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
   ```
3. **Configurar Variables d'Entorn (.env):** Hem deixat de posar contrasenyes al codi (`config.php`). Ara fem servir un fitxer `.env`.
- Crea una còpia del fitxer `.env.example` i anomena-la **`.env`**.
- Obre el nou fitxer `.env` i configura les teves credencials (BBDD, API Keys, etc).

*Nota: Mai pugis el fitxer `.env` al GitHub!*
4. Base de Dades:
   - Obre Laragon i prem Start All.
   - Configura el port de la base de dades al 3307 des de la configuració de Laragon.
   - Des de l'extensió de vscode configura la connexió a la BD segons les dades a la variable `$config["bd"]` del fitxer `config.php`.
   - Executa l'script per crear taules i omplir dades de prova que es troba `/sql/init.sql`.

## 🔄 Flux de Treball Diari

Perquè tot funcioni correctament mentre programes, segueix aquests 3 passos:

1. Engegar Laragon: Prem el botó Start All.
2. Activar el Disseny (Tailwind): Obre la terminal del VS Code i executa:
   ```bash
   npm run tailwind
   ```
   (Això generarà el CSS automàticament cada vegada que guardis un fitxer PHP).
3. Sincronitzar: Abans de tancar, fes Commit i Push a GitHub Desktop. Al matí, fes sempre Pull.
4. Gestionar els conflictes i si cal contactar amb l'equip per solucionar (Amb GH Desktop es fàcil).
5. Si algú afegeix una nova llibreria PHP, hauràs de fer `composer install` després de fer el Pull.

## 📂 Estructura de Carpetes

- `app/`: El cor del projecte (Models, Vistes, Controladors).
- `public/`: L'única carpeta oberta al món. Conté l'index.php i el CSS generat.
- `src/`: Fitxers font de Tailwind (input.css).
- `config/`: Paràmetres de connexió i constants globals.
- `vendor/`: Llibreries de Composer (no tocar).

## 🛑 El fitxer .gitignore (Molt Important)

Assegureu-vos de tenir un fitxer anomenat .gitignore a l'arrel amb el següent contingut per no embrutar el repositori:

```
/node_modules
/vendor
.env
.DS_Store
public/css/style.css
```

EduReports Team - Projecte de Desenvolupament d'Aplicacions Web.
