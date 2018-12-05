# DokuWiki for YunoHost - [English Version]

[![Integration level](https://dash.yunohost.org/integration/dokuwiki.svg)](https://ci-apps-dev.yunohost.org/jenkins/job/dokuwiki%20%28Official%29/lastBuild/consoleFull)  
[![Install DokuWiki with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=dokuwiki)

> *This package allows you to install DokuWiki quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## What is DokuWiki?

DokuWiki is a simple to use and highly versatile Open Source wiki software that doesn't require a database. It is loved by users for its clean and readable syntax. The ease of maintenance, backup and integration makes it an administrator's favorite. Built in access controls and authentication connectors make DokuWiki especially useful in the enterprise context and the large number of plugins contributed by its vibrant community allow for a broad range of use cases beyond a traditional wiki.

**Shipped version:** 2018-04-22a "Greebo"

## Screenshots

![](https://www.dokuwiki.org/_media/dokuwikimainwindow.png)

## Documentation

* Official documentation: https://www.dokuwiki.org/manual
* YunoHost documentation: There is no dedicated documentation, feel free [to contribute](https://yunohost.org/#/app_dokuwiki)

## YunoHost specific features

* Integrate with YunoHost users and SSO - i.e. logout button
* Allow one user to be the "administrator" (set at the installation)
* Default authorization is set as read only so guest people cannot edit pages. (Especially needed if wiki is public to avoid spam and defacing. Can be changed from admin panel)
* During the upgrade, official plugins are also upgraded. We recommend that you should check that they run properly in the administration panel after the upgrade. We cannot know if some plugins are broken...

### Supported architectures

* x86-64b - ![](https://ci-apps.yunohost.org/ci/logs/dokuwiki%20%28Official%29.svg)
* ARMv8-A - ![](https://ci-apps-arm.yunohost.org/ci/logs/dokuwiki%20%28Official%29.svg)
* Jessie x86-64b - ![](https://ci-stretch.nohost.me/ci/logs/dokuwiki%20%28Official%29.svg)

## Limitations

* Cannot create or login with dokuwiki internal users, only users from Yunohost (Work needed for [authchained plugin](https://www.dokuwiki.org/plugin:authchained))

## Links

 * Report a bug: https://github.com/YunoHost-Apps/dokuwiki_ynh/issues
 * App website: https://www.dokuwiki.org
 * YunoHost website: https://yunohost.org

---

## Developers infos

**Only if you know what you are doing AND want to switch to an unstable branch for testing or coding**

Instead of merging directly into `master`, please do your pull request to the [`testing` branch](https://github.com/YunoHost-Apps/dokuwiki_ynh/tree/testing)

To try the `testing` branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/dokuwiki_ynh/tree/testing --debug
or
sudo yunohost app upgrade dokuwiki -u https://github.com/YunoHost-Apps/dokuwiki_ynh/tree/testing --debug
```

## Changelog
 
### _Testing Branch_

 * 1 Aug 2018 [#37](https://github.com/YunoHost-Apps/dokuwiki_ynh/pull/37) - Upgrade DokuWiki to version "Greebo 2018-04-22a" and rework of the Yunohost package

### _Master branch (Official release)_
* *Many missing - List taken from previous documentation*
* 07 Mar 2017 - Update app
* 11 Feb 2017 - Create script app



------------------
------------------



# Dokuwiki pour YunoHost - [Version Française]

[![Niveau d'intégration](https://dash.yunohost.org/integration/dokuwiki.svg)](https://ci-apps-dev.yunohost.org/jenkins/job/dokuwiki%20%28Official%29/lastBuild/consoleFull)  
[![Installer DokuWiki grâce à YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=dokuwiki)

## Dokuwiki, c'est quoi ?

DokuWiki est un logiciel wiki Open Source simple à utiliser et très polyvalent qui ne nécessite pas de base de données. Il est apprécié par les utilisateurs pour sa syntaxe propre et lisible. La facilité de maintenance, de sauvegarde et d'intégration en fait un favori d'administrateur. Des contrôles d'accès et des connecteurs d'authentification intégrés rendent DokuWiki particulièrement utile dans le contexte de l'entreprise et le grand nombre de plugins apportés par sa communauté dynamique permettent un large éventail de cas d'utilisation au-delà d'un wiki traditionnel.

**Version actuelle:** 2018-04-22a "Greebo"

## Captures d'écran

![](https://www.dokuwiki.org/_media/dokuwikimainwindow.png)

## Documentation

* Documentation officielle : https://www.dokuwiki.org/manual
* Documentation YunoHost : Pas de documentation dédiée, merci de [contribuer](https://yunohost.org/#/app_dokuwiki_fr) si vous le pouvez

## Fonctionnalités spécifiques YunoHost

* Fonctionne avec les utilisateurs YunoHost ainsi que le SSO - i.e. button de déconnexion
* Définit un utilisateur "administrateur" lors de l'installation
* Droits d'édition par défaut du wiki définis en lecture seule afin que les invités ne puissent éditer les pages. (Nécessaire surtout lorsque le wiki est public pour éviter le spam et le vandalisme. Peut être changé depuis la partie administration du wiki)
* Lors de la mise à jour, les plugins officiels sont également mis à jour. Nous vous recommandons toutefois de vérifier le bon fonctionnement des plugins dans le panneau d'administration après cette opération. Nous ne pouvons pas savoir si des plugins spéciaux posent problèmes...

### Architectures matérielles supportées
* x86-64b - ![](https://ci-apps.yunohost.org/ci/logs/dokuwiki%20%28Official%29.svg)
* ARMv8-A - ![](https://ci-apps-arm.yunohost.org/ci/logs/dokuwiki%20%28Official%29.svg)
* Jessie x86-64b - ![](https://ci-stretch.nohost.me/ci/logs/dokuwiki%20%28Official%29.svg)

## Limitations

* Impossible d'ajouter et d'utiliser les utilisateurs internes de DokuWiki, seulement ceux de Yunohost (travail nécessaire pour [authchained plugin](https://www.dokuwiki.org/plugin:authchained))

## Liens

 * Déclarer un bogue: https://github.com/YunoHost-Apps/dokuwiki_ynh/issues
 * Site officiel: https://www.dokuwiki.org
 * Site YunoHost: https://yunohost.org

---

## Informations pour développeurs et développeuses

**Si vous savez ce que vous faites ET que vous souhaitez passer sur une version instable pour tester ou coder**

Au lieu de fusionner directement dans `master`, merci d'envoyer vos "pull request" dans la [branche de test `testing`](https://github.com/YunoHost-Apps/dokuwiki_ynh/tree/testing)

Pour basculer sur la branche `testing`, merci de procéder ainsi:
```
sudo yunohost app install https://github.com/YunoHost-Apps/dokuwiki_ynh/tree/testing --debug
or
sudo yunohost app upgrade dokuwiki -u https://github.com/YunoHost-Apps/dokuwiki_ynh/tree/testing --debug
```

## Historique des versions
 
### _Testing Branch_

 * 1 Aug 2018 [#37](https://github.com/YunoHost-Apps/dokuwiki_ynh/pull/37) - Mise à jour de DokuWiki vers la version "Greebo 2018-04-22a" et rénovation du paquet Yunohost

### _Master branch (Official release)_
* *Many missing - List taken from previous documentation*
* 07 Mar 2017 - Update app
* 11 Feb 2017 - Create script app
