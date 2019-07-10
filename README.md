# Contao Style Bricks Bundle

## Idea

The idea behind this style bricks bundle is to have a start point for common usages.
It depends on ErdmannFreunde/euf_nutshell and needs at least Contao 4.5 because of the Symfony asset handlder.

Im Gegensatz zu klassischen Themes setzt das Style Bricks Bundle darauf, nur den Code auszuliefern, der für das Projekt
benötigt wird. Die Auswahl (Styling) findet daher über das importieren der entsprechenden Styles in SCSS bzw über die 
entsprechenden Javascript-Dateien in der app.js statt.

## Installation
At the moment you need to npm install the dependencies in this package manually.
```bash
cd vendor/ex-akt/contao-style-bricks-bundle && npm install
```
In future version this should be done automatically during installation.

## What's inside?
- Default Contao settings
    - prepend_locale: false
    - enableSearch: false
    - disableCron: true
    - folderUrl: false
    - installPassword: "%install_password%" (define in your app/config/parameters.yml)
    - dateFormat: "d.m.Y"
    - datimFormat: "d.m.Y H:i"
    - timeZone: 'Europe/Berlin'
    - maxFileSize: 20480000 (2MB)
    - imageWidth: 3000
    - imageHeight: 3000
- Navigation-Module with Hamburger Button (pending)
- Header-Styles (pending)
- Footer Styles (pending)
- Componentes
    - Hero (Image, Video) (pending)
    - Band for sections (pending)



## Release

Run the PHP-CS-Fixer and the unit test before you release your bundle:

```bash
vendor/bin/php-cs-fixer fix -v
vendor/bin/phpunit
```

