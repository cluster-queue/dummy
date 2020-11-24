DE | [EN](README_EN.md)

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
Inhalt

- [cluster-queue - Dummy-Projekt](#cluster-queue---dummy-projekt)
  - [Installation](#installation)
    - [Anforderungen](#anforderungen)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->



cluster-queue - Dummy-Projekt
============================================================

Projektbezogene 'Dummy'-Quellen zur Verwendung als Vorlagen für/ als Ihr eigenes Projekt.

Klonen Sie dieses Projekt nicht. Einfach
[herunterladen](https://github.com/cluster-queue/dummy/releases) und entpacken.
Installieren Sie Abhängigkeiten und beginnen Sie mit der Konfiguration Ihrer Server/
Knoten-Konfigurationen und/oder Ihrer Konfigurations- Abhängigkeiten.

Dies ist Ihr Projekt-'Root' und Sie können die Quellen in Ihr _privates_ Repository
committen.

**Achten Sie darauf, keine Passwörter oder privaten Schlüssel zu veröffentlichen!**

Schauen Sie nach der Installation in die Anwendungs- Dokumentation 'cluster-queue - `core`'.
[vendor/cluster-queue/core/README.md](vendor/cluster-queue/core/README.md)



Installation
------------------------------------------------------------

Um die Anwendung nutzen zu können, müssen Abhängigkeiten installiert werden.

Variante A:

    # Ein neues Projekt in 'your-workspace/newproject' erstellen:
    cd newproject
    /pfad/zu/composer.phar create-project cluster-queue/dummy ./

Variante B:

    [Download](https://github.com/cluster-queue/dummy/releases) und entpacken.

    cd ./

    php /pfad/zu/composer.phar install

    # Wenn nicht ausführbar:
    chmod +x ./php-cluster-queue


Alle Varianten:

    # Start:
    # ./php-cluster-queue

    # Für den ersten Eindruck:
    ./php-cluster-queue --config=dummy --action=defaults
    # oder
    ./php-cluster-queue --config=dummy --action=configs

Composer (composer.phar)? "Ein Abhängigkeitsmanager für PHP" [Homepage](https://getcomposer.org),
[Herunterladen](https://getcomposer.org/download).



### Anforderungen

Anforderungen:

    php >= 7.3, 7.4, 8.0 ...
    php-cli
    ssh
    scp
    bash | zsh

