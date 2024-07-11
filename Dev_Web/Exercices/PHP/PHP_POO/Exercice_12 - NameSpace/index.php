<?php

require_once "Entities/Paypal/Paiement.class.php";
require_once "Entities/Stripe/Paiement.class.php";

use \Entities\Paypal\Paiement as PaypalPaiement;

// $paiement = new Paiement(); // Si paypal à un "NameSpace" L'objet sera un objet provenant de Stripe car, paypal a un name space
$paiementPaypal = new PaypalPaiement();
$paiementStripe = new \Entities\Stripe\Paiement();

var_dump($paiementPaypal) . "<br>";
var_dump($paiementStripe) . "<br>";
?>