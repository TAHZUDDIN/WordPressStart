jQuery(document).ready( function($){
	 
      var mediaUploader;
      
      $('#upload-button').on('click',function(e){
      	e.preventDefault();
      	if(mediaUploader){
      		mediaUploader.open();
      		return;
      	}

      	mediaUploader = wp.media.frames.file_frame = wp.media({
      		title: 'Choose a Profile Picture',
      		button: {
      			text: 'Choose Picture'
      		},
      		multiple: false
      	});

      	mediaUploader.on('select', function(){
      		attachment = mediaUploader.state().get('selection').first().toJSON();
      		$('#profile-picture').val(attachment.url);
      		/*$('#profile-picture-preview').css('background-image','url('+attachment.url+')');*/
      		$('#profile-picture-preview').attr('src',attachment.url);
      	});

      	mediaUploader.open();

      });


      $('#remove-picture').on('click',function(e){
             console.log('inside remove picture');      
            e.preventDefault();
            var answer = confirm("Are you sure you want to remove Profile Picture ?");
            if(answer == true){
                  $('#profile-picture').val('');
                  $('.sunset-general-form').submit();
            }
            else{
                   console.log('No , Oh my God ,pleae don\'t!');
            }
            return;
      });
});