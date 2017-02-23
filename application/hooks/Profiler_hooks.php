<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profiler_hooks
{
	public function before_method()
	{
		if (ENVIRONMENT == 'development')
		{
			$CI =& get_instance();
			$CI->output->enable_profiler(TRUE);
		}
	}

}//end class
