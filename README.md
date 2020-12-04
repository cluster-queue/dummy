cluster-queue - dummy
============================================================

DE | [EN](README_EN.md)



<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
Inhalt

- [Über](#%C3%BCber)
- [cluster-queue - Dummy - Projekt](#cluster-queue---dummy---projekt)
  - [Installation](#installation)
    - [Anforderungen](#anforderungen)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->



Über
============================================================

Mit dem zugrunde liegenden Programm hinterlegt man standard Shell- Kommandos sowie
Remote Übertragungen von Dateien die in einer Reihenfolge ausgeführt werden wie man sie
definiert.

Man kann die Reihenfolgen der Ausführung Gruppieren und Abhängigkeiten dieser setzen.
(FIFO per default, LIFO oder im mix per Konfiguration)

Ziel: Mehrer Server automatisch konfigurieren und das übertragbar für künftige, neue, 
Server die dem gleichen Setup/ Basis- Konfiguration und installation folgen.

Auch als HACK-PLACE nutzbar um ggf. Jobs pro Server zu hinterlegen die man immer wieder
einmal Remote benötigt.



cluster-queue - Dummy - Projekt
============================================================

Projektbezogene 'Dummy'-Quellen zur Verwendung als Vorlagen für/ als Ihr eigenes Projekt.

Klonen Sie dieses Projekt nicht. Einfach
[herunterladen](https://github.com/cluster-queue/dummy/releases) und entpacken oder den
Anweisungen unten folgen.

Installieren Sie die Quellen- Abhängigkeiten und beginnen Sie mit der Konfiguration 
Ihrer Server/Knoten-Konfigurationen und/oder Ihrer Konfigurations- Abhängigkeiten.

Dies ist Ihre Projekt- Basis und Sie können die Quellen in Ihr _privates_ Repository
committen.

**Achten Sie darauf, keine Passwörter oder privaten Schlüssel zu veröffentlichen!**

Schauen Sie nach der Installation der Abhängigkeiten in die Anwendungs- Dokumentation
'cluster-queue - `core`' -> `./vendor/cluster-queue/core/README.md`

Im `core` Projekt liegen auch weitere Konfigurationen die vielleicht für den Einstieg
helfen.



Installation
------------------------------------------------------------

Um die Anwendung nutzen zu können müssen Abhängigkeiten installiert werden.

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

    php >= 7.3, 7.4, 8.0 ...
    php-cli
    ssh
    scp
    bash | zsh

