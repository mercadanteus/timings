<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitTimingsClassLoader {
	public static $prefixLengthsPsr4 = array(
		'S' =>
			array(
				'Starlis\\Timings\\' => 16,
			),
	);

	public static $prefixDirsPsr4 = array(
		'Starlis\\Timings\\' =>
			array(
				0 => __DIR__ . '/../..' . '/lib',
			),
	);

	public static $prefixesPsr0 = array(
		'u' =>
			array(
				'utilphp\\' =>
					array(
						0 => __DIR__ . '/..' . '/brandonwamboldt/utilphp/src',
					),
			),
		'S' =>
			array(
				'Stiphle' =>
					array(
						0 => __DIR__ . '/..' . '/davedevelopment/stiphle/src',
					),
			),
	);

	public static $classMap = array(
		'Starlis\\Timings\\Cache' => __DIR__ . '/../..' . '/lib/Cache.php',
		'Starlis\\Timings\\CacheStorage' => __DIR__ . '/../..' . '/lib/CacheStorage.php',
		'Starlis\\Timings\\Daemon' => __DIR__ . '/../..' . '/lib/Daemon.php',
		'Starlis\\Timings\\DataLoader' => __DIR__ . '/../..' . '/lib/DataLoader.php',
		'Starlis\\Timings\\FromJson' => __DIR__ . '/../..' . '/lib/FromJson.php',
		'Starlis\\Timings\\FromJsonParent' => __DIR__ . '/../..' . '/lib/FromJson.php',
		'Starlis\\Timings\\Json\\MinuteReport' => __DIR__ . '/../..' . '/lib/Json/MinuteReport.php',
		'Starlis\\Timings\\Json\\Plugin' => __DIR__ . '/../..' . '/lib/Json/Plugin.php',
		'Starlis\\Timings\\Json\\Region' => __DIR__ . '/../..' . '/lib/Json/Region.php',
		'Starlis\\Timings\\Json\\TicksRecord' => __DIR__ . '/../..' . '/lib/Json/TicksRecord.php',
		'Starlis\\Timings\\Json\\TimingData' => __DIR__ . '/../..' . '/lib/Json/TimingData.php',
		'Starlis\\Timings\\Json\\TimingHandler' => __DIR__ . '/../..' . '/lib/Json/TimingHandler.php',
		'Starlis\\Timings\\Json\\TimingHistory' => __DIR__ . '/../..' . '/lib/Json/TimingHistory.php',
		'Starlis\\Timings\\Json\\TimingIdentity' => __DIR__ . '/../..' . '/lib/Json/TimingIdentity.php',
		'Starlis\\Timings\\Json\\TimingsMap' => __DIR__ . '/../..' . '/lib/Json/TimingsMap.php',
		'Starlis\\Timings\\Json\\TimingsMaster' => __DIR__ . '/../..' . '/lib/Json/TimingsMaster.php',
		'Starlis\\Timings\\Json\\TimingsSystemData' => __DIR__ . '/../..' . '/lib/Json/TimingsSystemData.php',
		'Starlis\\Timings\\Json\\World' => __DIR__ . '/../..' . '/lib/Json/World.php',
		'Starlis\\Timings\\LegacyHandler' => __DIR__ . '/../..' . '/lib/LegacyHandler.php',
		'Starlis\\Timings\\LegacyStorageService' => __DIR__ . '/../..' . '/lib/LegacyStorageService.php',
		'Starlis\\Timings\\Log' => __DIR__ . '/../..' . '/lib/Log.php',
		'Starlis\\Timings\\Security' => __DIR__ . '/../..' . '/lib/Security.php',
		'Starlis\\Timings\\Singleton' => __DIR__ . '/../..' . '/lib/Singleton.php',
		'Starlis\\Timings\\StorageService' => __DIR__ . '/../..' . '/lib/StorageService.php',
		'Starlis\\Timings\\Timings' => __DIR__ . '/../..' . '/lib/Timings.php',
		'Starlis\\Timings\\TimingsThrottle' => __DIR__ . '/../..' . '/lib/TimingsThrottle.php',
		'Starlis\\Timings\\Uploader' => __DIR__ . '/../..' . '/lib/Uploader.php',
		'Starlis\\Timings\\util' => __DIR__ . '/../..' . '/lib/util.php',
		'Stiphle\\Storage\\Apc' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Storage/Apc.php',
		'Stiphle\\Storage\\Apcu' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Storage/Apcu.php',
		'Stiphle\\Storage\\DoctrineCache' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Storage/DoctrineCache.php',
		'Stiphle\\Storage\\LockWaitTimeoutException' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Storage/LockWaitTimeoutException.php',
		'Stiphle\\Storage\\Memcached' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Storage/Memcached.php',
		'Stiphle\\Storage\\Process' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Storage/Process.php',
		'Stiphle\\Storage\\Redis' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Storage/Redis.php',
		'Stiphle\\Storage\\StorageInterface' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Storage/StorageInterface.php',
		'Stiphle\\Throttle\\LeakyBucket' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Throttle/LeakyBucket.php',
		'Stiphle\\Throttle\\ThrottleInterface' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Throttle/ThrottleInterface.php',
		'Stiphle\\Throttle\\TimeWindow' => __DIR__ . '/..' . '/davedevelopment/stiphle/src/Stiphle/Throttle/TimeWindow.php',
		'utilphp\\util' => __DIR__ . '/..' . '/brandonwamboldt/utilphp/src/utilphp/util.php',
	);

	public static function getInitializer(ClassLoader $loader) {
		return \Closure::bind(function () use ($loader) {
			$loader->prefixLengthsPsr4 = ComposerStaticInitTimingsClassLoader::$prefixLengthsPsr4;
			$loader->prefixDirsPsr4 = ComposerStaticInitTimingsClassLoader::$prefixDirsPsr4;
			$loader->prefixesPsr0 = ComposerStaticInitTimingsClassLoader::$prefixesPsr0;
			$loader->classMap = ComposerStaticInitTimingsClassLoader::$classMap;

		}, null, ClassLoader::class);
	}
}
