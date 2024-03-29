<?php
/* This file is part of Jeedom.
*
* Jeedom is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Jeedom is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
*/

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';

// Fonction exécutée automatiquement après l'installation du plugin
function fordcar_install() {
  fordcar::dependancy_install();
  $cron = cron::byClassAndFunction('fordcar', 'pull');
  if (!is_object($cron)) {
      $cron = new cron();
      $cron->setClass('fordcar');
      $cron->setFunction('pull');
      $cron->setEnable(1);
      $cron->setDeamon(0);
      $cron->setSchedule('2 0 * * *');
      $cron->save();
  }
}

// Fonction exécutée automatiquement après la mise à jour du plugin
function fordcar_update() {
	fordcar::dependancy_install_update();
  //exec('../ressources/install_apt.sh');
  foreach (eqLogic::byType('fordcar') as $eqLogic) {
        		$eqLogic->save();
        		log::add('fordcar', 'debug', 'Mise à jour des commandes effectuée pour l\'équipement '. $eqLogic->getHumanName());
    		}

        $cron = cron::byClassAndFunction('fordcar', 'pull');
        if (!is_object($cron)) {
            $cron = new cron();
            $cron->setClass('fordcar');
            $cron->setFunction('pull');
            $cron->setEnable(1);
            $cron->setDeamon(0;
            $cron->setSchedule('2 0 * * *');
            $cron->save();
        }

}

// Fonction exécutée automatiquement après la suppression du plugin
function fordcar_remove() {
	$cron = cron::byClassAndFunction('fordcar', 'pull');
    if (is_object($cron)) {
        $cron->remove();
    }
}