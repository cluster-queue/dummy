cluster-queue - dummy
============================================================

EN | [DE](README.md)



<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
Contents

- [cluster-queue - Dummy - Project](#cluster-queue---dummy---project)
  - [Installation](#installation)
    - [Requirements](#requirements)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


cluster-queue - Dummy - Project
============================================================

Project related `'dummy'` sources for use as templates for/ as your own project.

Don't clone this project. Just [download](https://github.com/cluster-queue/dummy/releases)
it, install dependencies and start configuring your server/node configs and/or your config
dependencies.

This is your project base and you may commit the sources to your _private_ repository.

**Take care not publishing passwords or private keys!!!**

After installation watch out for the application documentation 'cluster-queue - `core`'
in `./vendor/cluster-queue/core/README.md`



Installation
------------------------------------------------------------

To use the application, dependencies must be installed.

Variant A:

    # A new project in 'your-workspace/newproject':
    cd ..../newproject
    /path/to/composer.phar create-project cluster-queue/dummy ./

Variant B:

    [Download](https://github.com/cluster-queue/dummy/releases) and extract.

    cd ./

    php /path/to/composer.phar install

    # If not executable or bin not available:
    php /path/to/composer.phar run post-install-cmd
    chmod +x ./php-cluster-queue


All variants:

    # Start:
    # ./php-cluster-queue

    # A first idea gives you:
    ./php-cluster-queue --config=dummy --action=defaults
    # or
    ./php-cluster-queue --config=dummy --action=configs

Composer (composer.phar)? "A Dependency Manager for PHP" [Homepage](https://getcomposer.org),
Download](https://getcomposer.org/download).



### Requirements

    php >= 7.3, 7.4, 8.0 ...
    php-cli
    ssh
    scp
    bash | zsh

