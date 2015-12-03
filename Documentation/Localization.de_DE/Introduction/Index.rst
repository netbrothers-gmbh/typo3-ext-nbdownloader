.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt

.. _introduction:

Introduction
============


.. _what-it-does:

Was tut die Extension?
----------------------

Die Extension **NetBrothers Downloader** ist ein Frontend-Plugin. Mit ihr können Dateien kategorisiert und als Download angeboten werden. Die erfolgten Downloads werden gezählt.

Die Download-Dateien und -Kategorien werden im Backend in einem Storage verwaltet.

Das Plugin bietet eine Einzelansicht zum Download einer bestimmten Datei oder eine Listenasicht aller Dateien einer Kategorie.

Das Plugin bietet die Möglichkeit, vor dem Start eines Downloads entsprechend eine Lizenz anzeigen zu lassen.

.. note::
	Das Plugin verwaltet nur ZIP-Archive. Wenn Sie zusätzliche Dateitypen anbieten wollen, müssen Sie das TCA in der Extension modifizieren.


.. _requirements:

Anforderungen
-------------

#. **NetBrothers Downloader** läuft ab Typo3 6.2 LTS.
#. Wenn Sie die Lizenz vor einem Download anbieten wollen, müssen Sie jQuery bereit stellen. jQuery ist nicht Teil der Extension ;-)
#. Das Design basiert auf Twitter Bootstrap und Font Awesome. Beides ist nicht bestandteil der Extension und muss von Ihnen bereit gestellt werden.

.. note::

    Dank Fluid können Sie ohne Probleme das Design ändern (siehe :ref:`admin-manual`).




.. _screenshots:

Screenshots
-----------


.. figure:: ../../Images/01-Frontend.png
	:width: 800px
	:alt: Frontend Einzelansicht

	Frontend: Einzelansicht.


.. figure:: ../../Images/03-Frontend.png
	:width: 800px
	:alt: Frontend Listenasicht

	Frontend: Kategorie.


.. figure:: ../../Images/02-Frontend.png
	:width: 800px
	:alt: Frontend Einzelansicht mit Kategorie

	Frontend: Der Nutzer muss der Lizenz zustimmen (jQuery nötig).

