<h1>Sunset Sidebar Options </h1>
<?php settings_errors(); ?>


<?php
    $picture = esc_attr(get_option('profile_picture'));
    $firstName = esc_attr(get_option('first_name'));
	$lastName = esc_attr(get_option('last_name'));
	$fullName = $firstName . ' ' .$lastName;
    $description = esc_attr(get_option('user_description'));
?>

<div class="sunset-sidebar-preview">
    <div class="sunset-sidebar">
        <div class="image-container">
            <div  class="profile-picture"> 
                <img id="profile-picture-preview" src="<?php print $picture; ?>" />           	
            </div>        	
        </div>

        <h1 class="sunset-username"><?php print $fullName ?></h1> 
        <h2 class="sunset-description"><?php print $description ?></h2>
        <div class="icons-wrapper">
        	

        </div>  	

    </div>
</div>


<form method="post" action="options.php" class="sunset-general-form">
	<?php settings_fields( 'sunset-settings-group'); ?>
	<?php do_settings_sections('tahzuddin_sunset'); ?>
	<?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>
</form>