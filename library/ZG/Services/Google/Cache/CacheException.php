<?php
namespace ZG\Services\Google\Cache;

class CacheException extends \Exception {
	const ASSERT	= 1;
	const WARNING	= 2;
	const ERROR		= 4;

	const ACL_PERMISSION_DENIED = 100;
	const DATABASE_CONNECTION = 101;
	const DATABASE_MISSING_DRIVER = 102;
}

