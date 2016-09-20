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

