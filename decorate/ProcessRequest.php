<?php

abstract class ProcessRequest
{
	abstract function process(RequestHelper $rep);
}