<?php
class View
{
	
	function generate($content_view, $template_view, $data = null)
	{
		include MAIN_PATH .'/application/views/'.$template_view;
	}
}
?>