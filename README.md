# NombreEnLettres

###  PHP Lib, Convertisseur de nombres et chiffre en lettres
Pour convertir et écrire les nombres en français et Arabe

Ce convertisseur de chiffres en lettres est pratique pour écrire les nombres en lettre et les chiffres en Français ou pour vérifier l'orthographe d'un nombre.


## PHP FRANÇAIS
```php
	use Kompassit\Numbertoletter\Index;
	require_once 'vendor/autoload.php';
	$number = new Index();$number->setLng("fr");
	echo $number->number2letter(123.3,"EUROS","CENTIMES");
	//CENT VINGT TROIS EUROS TRENTE CENTIMES

```

## PHP ARABE
```php
	use Kompassit\Numbertoletter\Index;
	require_once 'vendor/autoload.php';
	$number = new Index();$number->setLng("ar");
	echo $number->number2letter(123.3);
	//مائة و ثلاثة و عشرون درهم و ثلاثة سنتيمات
