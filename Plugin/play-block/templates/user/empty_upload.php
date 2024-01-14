<?php
/**
 * Empty
 */
defined( 'ABSPATH' ) || exit;
?>
<div class="user-placeholder">
	<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-radio"><circle cx="12" cy="12" r="2"></circle><path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path></svg>
<?php 
$user_id = get_queried_object_id();

if( get_current_user_id() == $user_id ){
?>
		<p><?php play_get_text('no-upload', true); ?></p>
<?php
}else{
?>
		<p><?php play_get_text('no-upload-alt', true); ?></p>
<?php
}
?>
</div>
