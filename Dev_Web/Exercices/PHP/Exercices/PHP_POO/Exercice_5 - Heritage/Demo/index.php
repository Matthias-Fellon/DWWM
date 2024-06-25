<?php
require_once "Chien.class.php";

$chien = new Chien("Rex");
echo $chien->nom . " : " . $chien->parler();