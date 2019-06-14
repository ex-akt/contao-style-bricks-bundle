# Contao Style Bricks Bundle

## Idea

The idea behind this style bricks bundle is to have a start point for common usages.
It depends on ErdmannFreunde/euf_nutshell and needs at least Contao 4.5 because of the Symfony asset handlder.

Im Gegensatz zu klassischen Themes setzt das Style Bricks Bundle darauf, nur den Code auszuliefern, der für das Projekt
benötigt wird. Die Auswahl (Styling) findet daher über das importieren der entsprechenden Styles in SCSS bzw über die 
entsprechenden Javascript-Dateien in der app.js statt.

## Instructions

## What's inside?
- Navigation-Module with Hamburger Button
- Header-Styles
- Footer Styles
- Componentes
    - Hero (Image, Video)
    - Band for sections



## Release

Run the PHP-CS-Fixer and the unit test before you release your bundle:

```bash
vendor/bin/php-cs-fixer fix -v
vendor/bin/phpunit
```

