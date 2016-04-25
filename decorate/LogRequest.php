<?php

include '../autoLoad.php ';

class LogRequeset extends DecorateProcess
{
	public function process(RequestHelper $rep)
	{
		print_r(__CLASS__ . '类被调用1<br/>');
		$this->processRequest->process($rep);
	}
}


class AuthenticateRequest extends DecorateProcess
{
	public function process(RequestHelper $rep)
	{
		print_r(__CLASS__ . '类被调用2<br/>');
		$this->processRequest->process($rep);
	}
}


class StructureRequest extends DecorateProcess
{
	public function process(RequestHelper $rep)
	{
		print_r(__CLASS__ . '类被调用3<br/>');
		$this->processRequest->process($rep);
	}
}

/**
 * 装饰器模式
 * 调用过程
 * 对象依次调用
 */

header('Content-Type:text/html;charset=utf-8');
 $request = new AuthenticateRequest(new StructureRequest(new LogRequeset(new MainProcess())));
 
 $request->process(new RequestHelper());