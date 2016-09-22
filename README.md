# typo3IntensivSchulung



## Performance Tips 

	-php über php-fpm laufen lassen
	-Varnish Proxy  (Software Laodbalancer,Cacher)
	-Redis -> Key/Value Store als Cache
	-Pound Proxy (no Cache) aufteilung zwischen Seiten mit und ohne Caching z.B. Backend am varnish vorbei direkt in den Webserver 
	
## Dateien
	-typo3/typo3conf/AdditionalConfiguration.php 
			-> $GLOBALS['TYPO3_CONF_VARS']['SYS']['clearCacheSystem'] = '1'
			-> TYPO3_CONTEXT  - z.B. unterschiedliche DB für DEV und Prod(>http://blog.marit.ag/2014/11/03/typo3-context-verstehen-und-anwenden/)
			-> Mail Funktion ausstellen 
				$GLOBALS['TYPO4_CONF_VARS']['MAIL']['transport'] = 'mbox';
				$GLOBALS['TYPO4_CONF_VARS']['MAIL']['transport_mbox_file'] = '/var/www/a1308/mail'
			->Im CLI Modus muss 	 APC Caching gesondert aktiviert werden
			
	-PackagesStates.php -> Extension manuell löschen
	-deprecation_*.log  !!!! UNBEDINGT DEAKTIVIEREN !!!!! Im Installtool

## Mehrsprachigkeit i10n	
	-hreflang


## Extensions 
	- Typo3Console -> Wartung im Terminal
	
	
	
## Wichtig 
	- Warning Emailaddress eingeben / Warningmode einstellen
	-letsencrypt.org -> Kostenlose Certificate
	-cHashExcludedParameters eintragen für Faccebook etc.
	
	-https://einfach-fuer-alle.de/
## Einstellungen 
###GFX 
			-im_noScaleUP =1
			-Formate einschränken ? 
			- jpg_quality   =80 
			- use gdlib_png = 1
###http




##Notizen
	Einbau Slider im Header als Extension im Contentbereich oder als MediaProcessor
	https://docs.typo3.org/typo3cms/extensions/fluid_styled_content/latest/AddingYourOwnContentElements/Index.html
	http://www.typo3-formhandler.com/formhandler/
	Suche mit #page: etc. möglich
	
	
## Page Cache Configurieren 
https://docs.typo3.org/typo3cms/TSconfigReference/PageTsconfig/TCEmain/Index.html?highlight=tcemain


Page-TSConfig  add -> TCEMAIN.clearCacheCmd = cacheTag:pagetag1


##Install
Aus der Startseite Root Template anlegen und in Constants and Setup folgende Zeilen hinzufügen: 
<INCLUDE_TYPOSCRIPT: source="FILE:typo3conf/ext/ot_bootstrap3/Configuration/TypoScript/constants.txt">
<INCLUDE_TYPOSCRIPT: source="FILE:typo3conf/ext/ot_bootstrap3/Configuration/TypoScript/setup.txt">
