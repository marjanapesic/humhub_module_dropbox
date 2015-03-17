<div class="panel panel-default"
	id="dropbox-post-<?php echo $object->id; ?>">
	<div class="panel-body">
        <?php $this->beginContent('application.modules_core.wall.views.wallLayout', array('object' => $object)); ?>
        
		<div class="media">
		    <?php foreach($object->files as $file):?>
		      <table style="margin-bottom: 8px;">
				<tr>
					<!-- File or photo icon -->
					<td style="vertical-align: top;">
    		          <?php if(!$file->thumbnail_link):?>
    		              <i class="fa fa-file"></i<
    		          <?php else: ?>
    		              <i class="fa fa-photo"></i>
    		          <?php endif; ?>
		            </td>

		            
					<!-- File links and thumbnail if exists -->
					<td style="padding-left: 15px; padding-right: 15px;">
		              <?php echo HHtml::link($file->name, $file->link, array ('target' => '_blank'));?>
		              
		              <!-- check http status code - if not 200 display thunder icon  -->
		              <?php /*file_get_contents($file->link); 
		              list($version,$status_code,$msg) = explode(' ',$http_response_header[0], 3);
                      if($status_code != 200): */?>
		                  <!-- <i class="fa fa-bolt" style="color: red;"></i>  -->
		              <?php //endif;?>
		              
		              <!-- Thumbnail -->
        		      <?php if($file->thumbnail_link):?>
        		          <br /> <img
						src="<?php echo $file->thumbnail_link;?>" />
        		      <?php endif;?>
        		      <br />
					</td>

					
				</tr>
			</table>
		       
		    <?php endforeach;?>	
            
			<span id="dropbox-post-content-<?php echo $object->id; ?>"
				style="overflow: hidden; margin-bottom: 5px;">
                <?php print HHtml::enrichText($object->message); ?>
            </span>

		</div>  
        
        <?php $this->endContent(); ?>
    </div>
</div>