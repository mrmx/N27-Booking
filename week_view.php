<? include_once("./includes/application_top.php"); ?>
<?
$page_title = 'Booking Calendar - Week View';
if (PAGE_REFRESH > 29) { $page_meta_refresh = true; }
include_once("header.php");
?>


<?include('week_widget.php')?>


<?

include_once("footer.php");

include_once("application_bottom.php");
?>