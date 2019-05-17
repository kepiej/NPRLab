<?php
function createMailto($strEmail){
  $strNewAddress = '';
  for($intCounter = 0; $intCounter < strlen($strEmail); $intCounter++){
    $strNewAddress .= "&#" . ord(substr($strEmail,$intCounter,1)) . ";";
  }
  $arrEmail = explode("&#64;", $strNewAddress);
  $strTag = "<script language="."Javascript"." type="."text/javascript".">\n";
  $strTag .= "<!--\n";
  $strTag .= "document.write('<a href=\"mai');\n";
  $strTag .= "document.write('lto');\n";
  $strTag .= "document.write(':" . $arrEmail[0] . "');\n";
  $strTag .= "document.write('@');\n";
  $strTag .= "document.write('" . $arrEmail[1] . "\">');\n";
  $strTag .= "document.write('" . $arrEmail[0] . "');\n";
  $strTag .= "document.write('@');\n";
  $strTag .= "document.write('" . $arrEmail[1] . "<\/a>');\n";
  $strTag .= "// -->\n";
  $strTag .= "</script><noscript>" . $arrEmail[0] . " at \n";
  $strTag .= str_replace("&#46;"," dot ",$arrEmail[1]) . "</noscript>";
  return $strTag;
}
?>