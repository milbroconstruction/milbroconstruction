<?
$headtitle = 'main';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<? 
$display = $array_controller['landing_page']['switch_display'];
$status = $array_controller['landing_page']['switch_status'];

/* ————————————————————————————————————————————————————————— 
ECHO CLIPBOARD BELOW
————————————————————————————————————————————————————————— */

echo $_landing_body;
echo $_clipboard_footer;

?>

<?
@include('_library/link/php/footer.php');
?>