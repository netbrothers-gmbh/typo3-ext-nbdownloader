.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _admin-manual:

Administrator Manual
====================

Target group: **Administrators**


Installation
------------

1. Laden und installieren Sie die Extension via Typo3 ExtensionManager
2. Erstellen Sie einen **storage folder** für Ihre Datensammlung
3. Fügen Sie das statische TypoScript der Erweiterung Ihrem Root-Template hinzu
4. Fügen Sie Ihrem Root-Template die UID Ihres **storage folder** als Konstante hinzu (Edit constants for template)
5. Wenn Sie die Lizenzen anzeigen wollen, müssen Sie jQuery Ihrem Projekt hinzufügen.


Erweiterte Konfiguration
------------------------

#. Sie sollten die Templates Ihren Bedürfnissen anpassen:
	* Kopieren Sie das Verzeichnis EXT:/nbdownloader/Resources/Private/Templates in Ihr Template-Verzeichnis (z. B. fileadmin/templates/nbdownloader/)
	* Kopieren Sie das Verzeichnis EXT:/nbdownloader/Resources/Private/Partials in Ihr Template-Verzeichnis (z. B. fileadmin/templates/nbdownloader/)
#. Fügen Sie die Template-Informationen Ihrem TypoScript-Setup hinzu.


.. note::

   Passen Sie die Lizenzen an Ihre Bedürfnisse an.


TypoScript
----------

Verwenden Sie die Eigenschaften der Erweiterung im TypoScript wie folgt :ts:plugin.tx_nbdownloader.[property] = [value]


+------------------------+----------------------------+-------------------------------------------------------------------+
| Feld                   | Beschreibung               | Default                                                           |
|                        |                            |                                                                   |
+========================+============================+===================================================================+
| view                                                                                                                    |
+------------------------+----------------------------+-------------------------------------------------------------------+
| templateRootPath       | Pfad zum Template          | EXT:/nbdownloader/Resources/Private/Templates                     |
+------------------------+----------------------------+-------------------------------------------------------------------+
| partialRootPath        | Pfad zu den Partials       | EXT:/nbdownloader/Resources/Private/Partials                      |
+------------------------+----------------------------+-------------------------------------------------------------------+
| layoutRootPath         | Pfad zu den Layouts        | EXT:/nbdownloader/Resources/Private/Layouts                       |
+------------------------+----------------------------+-------------------------------------------------------------------+
| persistence                                                                                                             |
+------------------------+----------------------------+-------------------------------------------------------------------+
| storagePid             | storage folder             | none                                                              |
+------------------------+----------------------------+-------------------------------------------------------------------+
| settings                                                                                                                |
+------------------------+----------------------------+-------------------------------------------------------------------+
| imgDeveloper           | Bild für Lizenz            | EXT:/nbdownloader/Resources/Public/Icons/nb-ball.jpg              |
+------------------------+----------------------------+-------------------------------------------------------------------+
| developerName          | Name des Entwicklers (wenn | NetBrothers                                                       |
|                        | in der Datei keiner        |                                                                   |
|                        | angegeben ist)             |                                                                   |
+------------------------+----------------------------+-------------------------------------------------------------------+


::

	plugin.tx_nbdownloader {
		view {
			templateRootPath = {$plugin.tx_nbdownloader.view.templateRootPath}
			partialRootPath = {$plugin.tx_nbdownloader.view.partialRootPath}
			layoutRootPath = {$plugin.tx_nbdownloader.view.layoutRootPath}
		}
		persistence {
			storagePid = {$plugin.tx_nbdownloader.persistence.storagePid}
		}
		settings {
			# image of developer team
			imgDeveloper = typo3conf/ext/nbdownloader/Resources/Public/Icons/nb-ball.jpg
			# name developer team
			developerName = NetBrothers
		}
	}


Templates und Partials
----------------------

+------------------------+-----------------------------------+-------------------------------------------------------------------+
| View                   | Template                          | Partial                                                           |
|                        |                                   |                                                                   |
+========================+===================================+===================================================================+
| Category               | Templates/Category/Single.html    | Partials/Download/Item.html                                       |
+------------------------+-----------------------------------+-------------------------------------------------------------------+
| Download (Single)      | Templates/Download/Single.html    | Partials/Download/Item.html                                       |
+------------------------+-----------------------------------+-------------------------------------------------------------------+
| Licence                |                                   | Partials/Licence/Licence1.html                                    |
|                        |                                   |                                                                   |
|                        |                                   | Partials/Licence/Licence2.html                                    |
+------------------------+-----------------------------------+-------------------------------------------------------------------+


