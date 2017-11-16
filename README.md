# SyliusThemeBundle

Easy way to custom Sylius template

Install :
=========

Clone file in `src/`

Register the bundle in `AppKernel.php` :

	new \Darkiron\ThemeBundle\DarkironThemeBundle(),

Declare Theme in `config.yml` :

	sylius_theme:
    	    sources:
                filesystem:
                    directories:
                        - "%kernel.project_dir%/src/Darkiron/ThemeBundle"

Add in `composer.json` :

	"autoload": {
           "psr-4": {
            ...
            "Darkiron\\ThemeBundle\\": "src/Darkiron/ThemeBundle/"
            }
	},

update autoload :  `composer dump-autoload`

Follow Twig extends view like for Symfony :
--------------------------------------------

[Sylius doc : Customizing Templates](http://docs.sylius.org/en/latest/customization/template.html)


Enjoys, 
