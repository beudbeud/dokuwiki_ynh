<?php
/**
 * This is an example of how a local.php could look like.
 * Simply copy the options you want to change from dokuwiki.php
 * to this file and change them.
 *
 * When using the installer, a correct local.php file be generated for
 * you automatically.
 */


/* Authentication Settings */
$conf['useacl']      = 1;                //Use Access Control Lists to restrict access?
$conf['authtype']    = 'authldap';       //which authentication backend should be used
$conf['passcrypt']   = 'sha1';           //Used crypt method (smd5,md5,sha1,ssha,crypt,mysql,my411)
$conf['superuser']   = 'YNH_ADMIN_USER'; //The admin can be user or @group or comma separated list user1,@group1,user2
$conf['manager']     = 'YNH_ADMIN_USER'; //The manager can be user or @group or comma separated list user1,@group1,user2

/* LDAP Yunohost config */
$conf['plugin']['authldap']['server']      = 'localhost';
$conf['plugin']['authldap']['port']        = 389;
$conf['plugin']['authldap']['version']     = 3;
$conf['plugin']['authldap']['usertree']    = 'ou=users,dc=yunohost,dc=org';
$conf['plugin']['authldap']['userfilter']  = '(&(uid=%{user})(objectClass=posixAccount))';
# no groups
#$conf['plugin']['authldap']['grouptree']   = 'ou=Group, dc=server, dc=tld';
#$conf['plugin']['authldap']['groupfilter'] = '(&(objectClass=posixGroup)(|(gidNumber=%{gid})(memberUID=%{user})))'; 

/* Advanced Settings */
$conf['updatecheck'] = 0;                //automatically check for new releases?
$conf['cssdatauri']  = 512;              //Maximum byte size of small images to embed into CSS, won't work on IE<8
