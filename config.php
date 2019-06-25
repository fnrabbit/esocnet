<?php

  // This is configuration file. Be fuckin' accurate!

  # Date & Time
  define(ESN_TIMEZONE_SET, 'Europe/Moscow');

  # MySQL
  define(ESN_MYSQL_UNAME, 'root');
  define(ESN_MYSQL_PWRD, '');
  define(ESN_MYSQL_SERVER, '127.0.0.1');
  define(ESN_MYSQL_DB, '');

  # Site info
  define(ESN_SITE_NAME, 'Sample Site');
  define(ESN_SITE_SLOGAN, 'Warning: very sample lamas inside..');
  define(ESN_SITE_DOMAIN, 'SampleDomain.com');
  define(ESN_SITE_COPYRIGHT, '&copy; ' . date("Y") . ' ' . ESN_SITE_DOMAIN);

  # Site inside
  define(ESN_USING_PKGS, array(
    'helloworld-test'
  ));

  # Control Panel
  // i don't know why this thing need, but.. why not?
  define(ESN_CPA_ADMINS, array( // username => sha512 password
    // there password is root
    'root' => '99adc231b045331e514a516b4b7680f588e3823213abe901738bc3ad67b2f6fcb3c64efb93d18002588d3ccc1a49efbae1ce20cb43df36b38651f11fa75678e8'
  ));

  # Booleans
  define(ESN_BOOL_SHOW_SLOGAN, TRUE);

  //echo var_dump(ESN_CPA_ADMINS);
