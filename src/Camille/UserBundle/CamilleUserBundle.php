<?php

namespace Camille\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CamilleUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
