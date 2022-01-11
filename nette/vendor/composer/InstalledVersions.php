<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'v3.1.6',
    'version' => '3.1.6.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'nette/web-project',
  ),
  'versions' => 
  array (
    'latte/latte' => 
    array (
      'pretty_version' => 'v2.10.4',
      'version' => '2.10.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '6e0540c60805b33148dc95db2602a087fb2ef9fb',
    ),
    'nette/application' => 
    array (
      'pretty_version' => 'v3.1.4',
      'version' => '3.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'db6eedc199732ed6cf9982da97a38219e8601c62',
    ),
    'nette/bootstrap' => 
    array (
      'pretty_version' => 'v3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'efe6c30fc009451f59fe56f3b309eb85c48b2baf',
    ),
    'nette/caching' => 
    array (
      'pretty_version' => 'v3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e771c589dee414724be473c24ad16dae50c1960',
    ),
    'nette/component-model' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '20a39df12009029c7e425bc5e0439ee4ab5304af',
    ),
    'nette/database' => 
    array (
      'pretty_version' => 'v3.1.3',
      'version' => '3.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '08aff4d62c80873752254b0b655027211f501c4d',
    ),
    'nette/di' => 
    array (
      'pretty_version' => 'v3.0.10',
      'version' => '3.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f0cb0b3f032a9106aa3fb29e33da381564716c2',
    ),
    'nette/finder' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
    ),
    'nette/forms' => 
    array (
      'pretty_version' => 'v3.1.5',
      'version' => '3.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '2786ebc772cde724dad945e8bc2d7c578d831f4e',
    ),
    'nette/http' => 
    array (
      'pretty_version' => 'v3.1.3',
      'version' => '3.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '999f54884deed7a419b13552271c7059a5acb428',
    ),
    'nette/mail' => 
    array (
      'pretty_version' => 'v3.1.7',
      'version' => '3.1.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '0825a071b896c2ed8cbe1af776c2539acd7bb976',
    ),
    'nette/neon' => 
    array (
      'pretty_version' => 'v3.2.2',
      'version' => '3.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e4ca6f4669121ca6876b1d048c612480e39a28d5',
    ),
    'nette/php-generator' => 
    array (
      'pretty_version' => 'v3.6.2',
      'version' => '3.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bce6abcd4090ab5eec24b78f26c753c6525a425c',
    ),
    'nette/robot-loader' => 
    array (
      'pretty_version' => 'v3.4.1',
      'version' => '3.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e2adc334cb958164c050f485d99c44c430f51fe2',
    ),
    'nette/routing' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5532e7e3612e13def357f089c1a5c25793a16843',
    ),
    'nette/schema' => 
    array (
      'pretty_version' => 'v1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f5ed39fc96358f922cedfd1e516f0dadf5d2be0d',
    ),
    'nette/security' => 
    array (
      'pretty_version' => 'v3.1.4',
      'version' => '3.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a78bbb9d2260fffd898701b1ebdafcc797acb663',
    ),
    'nette/tester' => 
    array (
      'pretty_version' => 'v2.4.1',
      'version' => '2.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b54326b3c1a2c6c76d2662a06b5ad5a10d822e98',
    ),
    'nette/utils' => 
    array (
      'pretty_version' => 'v3.2.5',
      'version' => '3.2.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cd80396ca58d7969ab44fc7afcf03624dfa526e',
    ),
    'nette/web-project' => 
    array (
      'pretty_version' => 'v3.1.6',
      'version' => '3.1.6.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'symfony/thanks' => 
    array (
      'pretty_version' => 'v1.2.10',
      'version' => '1.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e9c4709560296acbd4fe9e12b8d57a925aa7eae8',
    ),
    'tracy/tracy' => 
    array (
      'pretty_version' => 'v2.8.7',
      'version' => '2.8.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '8e708de7c611f626c8792d43f1c78812ea24e6f6',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
