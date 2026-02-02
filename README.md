# EduReports 🍎 - Gestió d'Informes Escolars

EduReports és una plataforma web per a la gestió d'alumnes i generació d'informes, construïda sobre una arquitectura MVC (Model-Vista-Controlador) i optimitzada per a un entorn de desenvolupament àgil.

## 🛠️ Stack de Desenvolupament (All-in-One)

Hem seleccionat un stack centrat en la simplicitat i la potència. El nucli del projecte és Laragon, que ens proporciona gairebé tot el necessari en un sol paquet.

| Component         | Tecnologia        | Funció                                                               |
| ----------------- | ----------------- | -------------------------------------------------------------------- |
| Backend           | PHP 8.2+         | Lògica de l'aplicació i rutes MVC.                                   |
| Frontend          | Tailwind CSS v4   | Estils moderns (Utility-first) sense configuració pesada.            |
| Base de Dades     | MySQL             | Emmagatzematge de dades (gestionat amb Vscode MySQL).                   |
| Servidor Local    | Laragon           | Apache, PHP i MySQL "tot en un".                                    |
| Control de Versions| Git + GitHub Desktop | Col·laboració entre l'equip.                                       |

## 📋 Requisits i Dependències

Perquè el projecte funcioni idènticament en tots els ordinadors, cal tenir instal·lat:

### Programari Base
- Laragon (Full): El servidor local principal.
- Node.js (LTS): Necessari per al motor de Tailwind amb npm (sol estar inclós).
- GitHub Desktop: Per gestionar el codi de manera visual i senzilla.
- VS Code: L'editor de codi oficial.

### Extensions de VS Code (Imprescindibles)
- Tailwind CSS IntelliSense: Autocompletat i vista prèvia de colors.
- PHP Intelephense: Suport intel·ligent per al codi PHP.
- MySQL (Opcional): Per veure les taules des de l'editor.

## 🚀 Configuració Inicial

1. Clonar el projecte: Obre GitHub Desktop i clona el repositori a la carpeta `C:\laragon\www\edureports` (És a dir fer el /clone a la carpeta www).
2. Instal·lar Tailwind: Obre una terminal a l'arrel del projecte i executa:
   ```bash
   npm install
   ```
3. Base de Dades:
   - Obre Laragon i prem Start All.
   - Configura el port de la base de dades al 3307 des de la configuració de Laragon.
   - Des de l'extensió de vscode configura la connexió a la BD segons la variable $config["bd"] del fitxer config.php.
   - Executa l'script per crear taules i omplir dades de prova que es troba /sql/init.sql.

## 🔄 Flux de Treball Diari

Perquè tot funcioni correctament mentre programes, segueix aquests 3 passos:

1. Engegar Laragon: Prem el botó Start All.
2. Activar el Disseny (Tailwind): Obre la terminal del VS Code i executa:
   ```bash
   npm run tailwind
   ```
   (Això generarà el CSS automàticament cada vegada que guardis un fitxer PHP).
3. Sincronitzar: Abans de tancar, fes Commit i Push a GitHub Desktop. Al matí, fes sempre Pull.

## 📂 Estructura de Carpetes

- `app/`: El cor del projecte (Models, Vistes, Controladors).
- `public/`: L'única carpeta oberta al món. Conté l'index.php i el CSS generat.
- `src/`: Fitxers font de Tailwind (input.css).
- `config/`: Paràmetres de connexió i constants globals.

## 🛑 El fitxer .gitignore (Molt Important)

Assegureu-vos de tenir un fitxer anomenat .gitignore a l'arrel amb el següent contingut per no embrutar el repositori:

```
node_modules/
.env
public/css/style.css.map
```

EduReports Team - Projecte de Desenvolupament d'Aplicacions Web.
