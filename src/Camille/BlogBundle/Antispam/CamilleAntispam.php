<?php 

namespace Camille\BlogBundle\CamilleAntispam;

class Antispam{

	private $mailer;
	private $locale;
	private $minLength;

	public function __construct(\Swift_Mailer $mailer, $locale, $minLength){
		$this->mailer = $mailer;
		$this->locale = $locale;
		$this->minLength = (int) $minLength;
	}

	// Vérifie si le texte est un spam ou non

	public function isSpam($text){
		return strlen($text) < $this-minLength;
	}

}