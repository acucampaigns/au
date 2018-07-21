<?php
// Function for resizing jpg, gif, or png image files
function compress_image($source_url, $destination_url, $quality,$newcopy, $w, $h) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
			list($w_orig, $h_orig) = getimagesize($destination_url);
			$scale_ratio = $w_orig / $h_orig;
			if (($w / $h) > $scale_ratio) {
				  $h = $w;
			}
			$tci = imagecreatetruecolor($w, $h);
		  	imagecopyresampled($tci, $image, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
			imagejpeg($tci, $newcopy, 80);
			return $destination_url;
	}
	?>