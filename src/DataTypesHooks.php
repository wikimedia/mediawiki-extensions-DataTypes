<?php

namespace DataTypes;

class DataTypesHooks {

	public static function onUnitTestsList( &$paths ) {
		$paths[] = __DIR__ . '/../tests/Modules';
		$paths[] = __DIR__ . '/../tests/Phpunit';
	}

}
