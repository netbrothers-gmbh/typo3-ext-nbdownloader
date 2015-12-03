.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _admin-manual:

Administrator Manual
====================

Target group: **Administrators**


Installation
------------

1. Download and install the extension via Typo3 ExtensionManager
2. Create a **storage folder** to collect categories and downloads
3. Add the static TypoScript to your Root-Template
4. Add to your Root-Template the UID of your Storage-Folder (Edit constants for template)
5. If you wish to use the plugin's licence feature, you have to integrate jQuery by your own.


Advanced configuration
----------------------

#. You should create your own templates:
	* Copy the folder EXT:/nbdownloader/Resources/Private/Templates to your template folder (e.g. fileadmin/templates/nbdownloader/)
	* Copy the folder EXT:/nbdownloader/Resources/Private/Partials to your template folder (e.g. fileadmin/templates/nbdownloader/)
#. Add template information to your TypoScript-Setup.


.. note::

   You should change the licence by your needs.


TypoScript
----------

Use following properties with :ts:plugin.tx_nbdownloader.[property] = [value]


+------------------------+----------------------------+-------------------------------------------------------------------+
| Field                  | Description                | Default                                                           |
|                        |                            |                                                                   |
+========================+============================+===================================================================+
| view                                                                                                                    |
+------------------------+----------------------------+-------------------------------------------------------------------+
| templateRootPath       | path to templates          | EXT:/nbdownloader/Resources/Private/Templates                     |
+------------------------+----------------------------+-------------------------------------------------------------------+
| partialRootPath        | path to partials           | EXT:/nbdownloader/Resources/Private/Partials                      |
+------------------------+----------------------------+-------------------------------------------------------------------+
| layoutRootPath         | path to layouts            | EXT:/nbdownloader/Resources/Private/Layouts                       |
+------------------------+----------------------------+-------------------------------------------------------------------+
| persistence                                                                                                             |
+------------------------+----------------------------+-------------------------------------------------------------------+
| storagePid             | storage folder             | none                                                              |
+------------------------+----------------------------+-------------------------------------------------------------------+
| settings                                                                                                                |
+------------------------+----------------------------+-------------------------------------------------------------------+
| imgDeveloper           | image for licence          | EXT:/nbdownloader/Resources/Public/Icons/nb-ball.jpg              |
+------------------------+----------------------------+-------------------------------------------------------------------+
| developerName          | default developer name     | NetBrothers                                                       |
|                        | for licence                |                                                                   |
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


Templates and partial
---------------------

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


