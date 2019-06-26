<?php

  $default_lang_pkgs = array(
    #'engine-messages-en',
    'engine-messages-ru'
    // todo: create more translations
  );

  for ($i=0; $i2=0; $i < count(ESN_USING_PKGS); $i2 < count($default_lang_pkgs); $i++; $i2++) {
      if (ESN_USING_PKGS[$i] == $default_lang_pkgs[$i2]) {
        $_LangSel = array(
          'cct_err' => 'Connect error',
          'con_establ' => 'Connection established',
          'err' => 'Error',
          'y' => 'Yes',
          'n' => 'No',
          'cfg' => 'Configuration',
          'main' => 'Main',
          'del' => 'Delete',
          'authrz' => 'Authorize',
          'install_pkg' => 'Install Package',
          'pages' => 'Pages'
        );
      }
  }
