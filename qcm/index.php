<?php 


// page_1.php
echo "PAGE 1 ( $fileName )";

<?php
// page-2.php
echo "PAGE 2 ( $filename )";

<?php
// page-3.php
echo "PAGE 3 ( $fileName )";

<?php
// page-quatre.php
echo "PAGE 4 ( $fileName )";

<?php
// index.php
if(array_key_exists('page', $_GET) == true)
{
  if(ctype_digit($_GET['page']) == true)
  {
    echo "BONJOUR ";

    if(in_array($_GET['page'], [ '1', '2', 'quatre' ]) == true)
    {
      $fileName = "page-".$_GET['page'].".php";

      require $fileName;
    }
  }
}





include 'index.phtml';
?>