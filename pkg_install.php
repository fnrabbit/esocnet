<?php

  if (ESN_SITE_THEME !== NULL)
  {
      include "pkg/themes/" . ESN_SITE_THEME . "/init.php";
  }

  if (ESN_SITE_FWORK !== NULL)
  {
      include "pkg/frameworks/" . ESN_SITE_FwORK . "/init.php";
  }
