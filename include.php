<?php

  include 'config.php';

  # pkg part
  for ($i=0; $i < count(ESN_USING_PKGS); $i++) {
      include './pkg/' . ESN_USING_PKGS[$i] . '/init.php';
  }

  include 'langpreset.php';
