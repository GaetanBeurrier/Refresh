<?php

/*
	Plateforme web PPR - outil de crowdsourcing
	Copyright(C) 2011 Nicolas SEICHEPINE

	This file is part of PPR.
	
	PPR is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
	Contact : nicolas.seichepine.org/?action=contact
*/

include_once("pages_secondlevel/actions.php");

// Demande
if (isset($_GET["action"]) && is_string($_GET["action"]))
{
	$ccar_to_treat=htmlentities($_GET["action"]);
}

// Appel de la fonction associ�e � la demande
switch ($ccar_to_treat)
{
	case "post":
		echo "tetestsetestestete";
		break;

	// Message d'erreur
	default:
		// unexistent_page();
		break;
}

?>