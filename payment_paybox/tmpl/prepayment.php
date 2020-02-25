<?php
/*
 * --------------------------------------------------------------------------------
   PayBox.Money  - J2Store - Payment Plugin - Paybox
 * --------------------------------------------------------------------------------
 * @package		Joomla! 2.5x
 * @subpackage	J2 Store
 * @author    	Galym Sarsebek - Weblogicx India http://www.weblogicxindia.com
 * @copyright	Copyright (c) 2020 PayBox Money Kazakhstan Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link		https://paybox.money
 * --------------------------------------------------------------------------------
*/

//no direct access
defined('_JEXEC') or die('Restricted access');



?>

<style type="text/css">
    #paybox_form { width: 100%; }
    #paybox_form td { padding: 5px; }
    #paybox_form .field_name { font-weight: bold; }
</style>

<form action="<?php echo JRoute::_( "https://api.paybox.money/payment.php" ); ?>" method="post" name="adminForm" enctype="multipart/form-data">

	<?foreach($vars as $name => $value){?>
		<input type='hidden' name='<?echo $name?>' value='<?echo $value?>'>
    <?}?>

    <input type="submit" class="btn btn-primary button" value="<?php echo JText::_('J2STORE_SAGEPAY_CLICK_TO_COMPLETE_ORDER'); ?>" />
</form>
