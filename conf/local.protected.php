<?php
/**
 * This file is used for configuration settings which cannot be modified by Dokuwiki admin panel
 * See here for explanations : https://www.dokuwiki.org/config
 * 
 * Yunohost dedicated settings are stored here in order to be able to upgrade the Yunohost package safely latter for Yunohost packager ( Yeah \o/ )
 *
 * You should not modify this file direclty as it will be overwritten by Yunohost package
 * Use "local.php" instead. You have been warned !
 */


/* Authentication Settings */
$conf['useacl']      = 1;                //Use Access Control Lists to restrict access?
$conf['authtype']    = 'authldap';       //which authentication backend should be used
$conf['passcrypt']   = 'sha1';           //Used crypt method (smd5,md5,sha1,ssha,crypt,mysql,my411)
$conf['superuser']   = '@__APP__.admin'; //The admin can be user or @group or comma separated list user1,@group1,user2
$conf['manager']     = '@__APP__.admin'; //The manager can be user or @group or comma separated list user1,@group1,user2

/* LDAP Yunohost config */
$conf['plugin']['authldap']['server']      = 'localhost';
$conf['plugin']['authldap']['port']        = 389;
$conf['plugin']['authldap']['version']     = 3;
$conf['plugin']['authldap']['usertree']    = 'ou=users,dc=yunohost,dc=org';
$conf['plugin']['authldap']['grouptree']   = 'ou=permission,dc=yunohost,dc=org';
$conf['plugin']['authldap']['userfilter']  = '(&(objectClass=posixAccount)(uid=%{user})(permission=cn=__APP__.main,ou=permission,dc=yunohost,dc=org))';
$conf['plugin']['authldap']['groupfilter'] = '(&(objectClass=posixGroup)(memberUid=%{user}))';
#$conf['plugin']['authldap']['debug']      = 1;


/* Advanced Settings */
$conf['updatecheck'] = 0;                //automatically check for new releases?

// Taken from previous package. Don't know what it does. Maybe Yunohost corner logo ?
$conf['cssdatauri']  = 512;              //Maximum byte size of small images to embed into CSS, won't work on IE<8

// URL Rewriting is handled by the webserver
$conf['userewrite'] = 1;                 // See https://www.dokuwiki.org/config:userewrite
