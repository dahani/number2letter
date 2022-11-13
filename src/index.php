<?php
namespace Kompassit\Numbertoletter;

require "chifrenlettre_ar.php";
require "chifrenlettre.php";
class Index {
	private $lng="fr";
	function number2letter($f,$d1="",$d2=""){
		return $this->lng=="ar"?chiffre_en_arabe($f):chifre_en_lettre($f,$d1,$d2);
	}
	public function setLng($g){
		$this->lng=$g;
	}

}

?>