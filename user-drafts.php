<?php
$conn = getConnection();
$newPMdrafts = $conn->osc_dbFetchResults("SELECT * FROM %st_pm_drafts WHERE sender_id  = '%d' ORDER BY pm_id DESC", DB_TABLE_PREFIX, osc_logged_user_id());
$countPMdrafts = count($newPMdrafts);
?>
<div class="panel panel-success row">
		<div class="panel-heading">
			<strong><?php _e('User account manager', 'tuffclassified') ; ?></strong>
		</div>
<div class="content user_account panel-body">

			<div id="sidebar" class="col-md-3">
				<?php echo tfc_private_user_menu() ; ?>
				<div class="user-dashboard-widget"><?php osc_show_widgets('user-dashboard'); ?></div>
			</div>
    <div id="main" class="col-md-9">
        <legend><?php echo __('Drafts', 'osclass_pm') . ' (' . $countPMdrafts . ')'; ?></legend>
    </div>
</div>
</div>