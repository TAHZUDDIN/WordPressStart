<?php

function dwwp_add_custom_metabox() {
    add_meta_box( 
    			   'dwwp_meta',
                  __( 'Job Listing' ),
                   'dwwp_meta_callback', 
                    'job',
                    'normal',
                    'core' 
                    );
}
add_action( 'add_meta_boxes', 'dwwp_add_custom_metabox' ); 


function dwwp_meta_callback($post){
	wp_nonce_field( basename(__FILE__), 'dwwp_jobs_nonce');
	$dwwp_stored_meta = get_post_meta( $post->ID );
  
     ?>
        <div>
        	<div class="meta-row">
        		<div class="meta-th">
        		  <label for="job-id" class="dwwp-row-title"><?php _e('Job Id', 'wp-job-listing' ); ?></label>
        	    </div>

        	    <div class="meta-td">
        	    	<input type="text" name="job_id" id="job-id" value="<?php if(!empty($dwwp_stored_meta['job_id']))  echo esc_attr($dwwp_stored_meta['job_id'][0]); ?>"/>
        	    </div>
        	</div>

            <div class="meta-row">
        		<div class="meta-th">
        		  <label for="date-listed" class="dwwp-row-title"><?php _e('Date Listed', 'wp-job-listing' ); ?></label>
        	    </div>

        	    <div class="meta-td">
        	    	<input type="text" size=10 class="dwwp-row-content datepicker" name="date_listed" id="date-listed" value="<?php if(!empty($dwwp_stored_meta['date_listed']))  echo esc_attr($dwwp_stored_meta['date_listed'][0]); ?>"/>
        	    </div>
        	</div>

            <div class="meta-row">
                <div class="meta-th">
                  <label for="application-deadline" class="dwwp-row-title">Application Deadline</label>
                </div>

                 <div class="meta-td">
                    <input type="text" size=10 class="dwwp-row-content datepicker" name="application_deadline" id="application-deadline" value="<?php if(!empty($dwwp_stored_meta['application_deadline']))  echo esc_attr($dwwp_stored_meta['application_deadline'][0]); ?>"/>
                </div>               

            </div>

        </div>
        <div class="meta">
        	<div class="meta-th">
        		<span>Principle Duties</span>
        	</div>
        </div>

        <div class="meta-editor">
         <?php
             
             $content= get_post_meta($post -> ID, 'principle_duties', true);
             $editor = 'principle_duties';
             $settings = array(
                  'textarea_rows' => 5,
                  'media_buttons' => true,
             	);

             wp_editor( $content, $editor, $settings);
          
        ?>
        </div>

        <div class="meta-row">
            <div class="meta-th">
                <label for="minimum-requirements" class="dwwp-row-title">Minimum Requirements</label>
            </div>
            <div class="meta-td">
                <textarea name="minimum_requirements" class="dwwp-textarea" id="minimum-requirements"></textarea>
            </div>

        </div>

        <div class="meta-row">
            <div class="meta-th">
                <label for="preferred-requirements" class="dwwp-row-title">Preffered Requirements</label>
            </div>
            <div class="meta-td">
                <textarea name="preferred_requirements" class="dwwp-textarea" id="preferred-requirements"></textarea>
            </div>
        </div>


         <div class="meta-row">
            <div class="meta-th">
                <label for="relation-assistance" class="dwwp-row-title">Relation Assistance</label>
            </div>
            <div class="meta-td">
                <select name="relation_assistance" class="dwwp-textarea" id="relation-assistance">
                  
                  <option value="select-yes">Yes</option>;
                  <option value="select-no">No</option>;
                </select>
            </div>
        </div>

     <?php	
}

function dwwp_meta_save( $post_id ){
    // check save status
    $is_autosave = wp_is_post_autosave( $post_id);
    $is_revision = wp_is_post_revision( $post_id);
    $is_valid_nonce = (isset( $_POST[ 'dwwp_jobs_nonce']) && wp_verify_nonce( $_POST['dwwp_jobs_nonce'], basename(__FILE__))) ? 'true' : 'false' ;

    // Exits script depending on save status
    if( $is_autosave || $is_revision || $is_valid_nonce){
        return;
    }

    if( isset( $_POST['job_id'])){
      update_post_meta($post_id, 'job_id', sanitize_text_field( $_POST[ 'job_id' ]));
      // update_post_meta($post_id, $meta_key, $meta_value, $prev_value);
    }

    if( isset( $_POST['date_listed'])){
      update_post_meta($post_id, 'date_listed', sanitize_text_field( $_POST[ 'date_listed' ]));
      // update_post_meta($post_id, $meta_key, $meta_value, $prev_value);
    }

    if( isset( $_POST['principle_duties'])){
      update_post_meta($post_id, 'principle_duties', sanitize_text_field( $_POST[ 'principle_duties' ]));
      // update_post_meta($post_id, $meta_key, $meta_value, $prev_value);
    }
}
add_action('save_post', 'dwwp_meta_save');


?>