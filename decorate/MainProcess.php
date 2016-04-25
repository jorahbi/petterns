<?php

class MainProcess extends ProcessRequest
{
	public function process(RequestHelper $rep)
	{
		print_r(__CLASS__ . '被调用了\n');
	}
}