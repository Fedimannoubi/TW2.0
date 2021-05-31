<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '1.11.3@3bb5588cec00a0268829cc4a518490df6741af9d',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.1@c800380457948e65bbd30ba92cc17cda108bf8c9',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.3.2@d6b3c37804539a24ba8a7d647a6144cab2f13242',
  'doctrine/doctrine-migrations-bundle' => '2.2.2@85f0b847174daf243362c7da80efe1539be64f47',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '2.3.3@c4c46f7064f6e7795bd7f26549579918b46790fa',
  'doctrine/orm' => '2.9.2@75b4b88c5b7cebc24ed7251a20c2a5aa027300e1',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.3.0@1beb4447f9efd26041eba7eff50614e798c353fd',
  'laminas/laminas-eventmanager' => '3.3.1@966c859b67867b179fde1eff0cd38df51472ce4a',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'monolog/monolog' => '1.26.1@c6b00f05152ae2c9b04a448f99c7590beb6042f5',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.1.5@62c5909f49cf74dccdf50a294511cc24be2f969c',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v4.4.22@aeedecee0bce60320521083efaf6c359ad710e20',
  'symfony/cache' => 'v4.4.24@9084b7312c3de1e6d621d60e00c5d42a4b77cfee',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v4.4.23@be9e601f17fc684ddfd6c675fdfcd04bb51fa928',
  'symfony/console' => 'v4.4.24@1b15ca1b1bedda86f98064da9ff5d800560d4c6d',
  'symfony/debug' => 'v4.4.22@45b2136377cca5f10af858968d6079a482bca473',
  'symfony/dependency-injection' => 'v4.4.24@8422396fb0b477ecbbe130907f90a0809b49c835',
  'symfony/doctrine-bridge' => 'v4.4.24@3ed56b83120af2bdba31161b2ccc67a70d700a06',
  'symfony/dotenv' => 'v4.4.20@4952e5ce9e6df3d737b9e9c337bddf781180a213',
  'symfony/error-handler' => 'v4.4.23@21d75bfbdfdd3581a7f97080deb98926987f14a7',
  'symfony/event-dispatcher' => 'v4.4.20@c352647244bd376bf7d31efbd5401f13f50dad0c',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.22@0dd911bbb99d7210a8f38d8de4a7964ff4a06533',
  'symfony/filesystem' => 'v4.4.22@f0f06656a18304cdeacb2c4c0113a2b78a2b4c2a',
  'symfony/finder' => 'v4.4.24@a96bc19ed87c88eec78e1a4c803bdc1446952983',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => 'v4.4.24@cad760955dac6b6e4c7ae7c31ffe40844f0e7b8d',
  'symfony/framework-bundle' => 'v4.4.24@0e9b5cec25fb3de04fb51d8ec05eb35df1385096',
  'symfony/http-client' => 'v4.4.24@30b901a6e645fde5fd66102e9e0c023a8bfc404a',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v4.4.23@2ffb43bd6c589a274ee1e93a5fd6b7ef1577b9c5',
  'symfony/http-kernel' => 'v4.4.24@59925ee79f2541b4c6e990843e1a42768e898254',
  'symfony/inflector' => 'v4.4.23@89dc6b7d1143c114e7e251ab965f4a751bfe7ad5',
  'symfony/intl' => 'v4.4.22@a9e178284728e945c839d0a73d5343562cd3de3c',
  'symfony/mailer' => 'v4.4.22@327107fc7fd82a9f30357c9babee4acd5a7efd04',
  'symfony/mime' => 'v4.4.24@7e8e9192500d0bae9f6aff60c842befc7d887b68',
  'symfony/monolog-bridge' => 'v4.4.22@cdf4b4cdf9ffbc47fc8f3612a291e6b4db1b9e7e',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/options-resolver' => 'v4.4.20@cd8c6a2778d5f8b5e8fc4b7abdf126790b5d5095',
  'symfony/orm-pack' => 'v2.1.0@357f6362067b1ebb94af321b79f8939fc9118751',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/process' => 'v4.4.22@f5481b22729d465acb1cea3455fc04ce84b0148b',
  'symfony/property-access' => 'v4.4.20@94a1d9837396c71a0d8c31686c16693a15651622',
  'symfony/property-info' => 'v4.4.23@3b6d316b1e007dc637962573e2599eb0b82176f6',
  'symfony/proxy-manager-bridge' => 'v4.4.24@4f1a76bca5c9a0159f7cee17d25c77917b0580b1',
  'symfony/routing' => 'v4.4.24@b42c3631fd9e3511610afb2ba081ea7e38d9fa38',
  'symfony/security-bundle' => 'v4.4.23@a2416b9d4a6c1c8c4b162a9c84c60210fdda5b72',
  'symfony/security-core' => 'v4.4.24@c8b37f1583138cc53edbefe81f0fa274f548129c',
  'symfony/security-csrf' => 'v4.4.22@77289cc6cfe25113b4e7c780fa98e0d39a552eeb',
  'symfony/security-guard' => 'v4.4.23@d0326e1c4a833c9df598d08e1496cb6d79a443f3',
  'symfony/security-http' => 'v4.4.24@3d259bd550b2f059ee4666213d779fe9925bbc9b',
  'symfony/serializer' => 'v4.4.24@c9c90ead6a87d5bc76a8c8dc49e6aeceea414707',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v4.4.20@c5572f6494fc20668a73b77684d8dc77e534d8cf',
  'symfony/translation' => 'v4.4.24@424d29dfcc15575af05196de0100d7b52f650602',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v4.4.22@48b4ae9cf1b42d37710ea5857770c13f0b9d5579',
  'symfony/twig-bundle' => 'v4.4.24@9847d8e991f2afc2a1b3d8044017cf1656198684',
  'symfony/validator' => 'v4.4.24@0a947c69d66d5560f244a754524445b9002b1e4b',
  'symfony/var-dumper' => 'v4.4.22@c194bcedde6295f3ec3e9eba1f5d484ea97c41a7',
  'symfony/var-exporter' => 'v4.4.23@11439b8e3264502293bd5e5ecd6957f70319f526',
  'symfony/web-link' => 'v4.4.21@565789cb9293a71a92410f50e663b91c0c4c0eac',
  'symfony/yaml' => 'v4.4.24@8b6d1b97521e2f125039b3fcb4747584c6dfa0ef',
  'twig/extra-bundle' => 'v3.3.1@e12a8ee63387abb83fb7e4c897663bfb94ac22b6',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'symfony/browser-kit' => 'v4.4.24@7e6a92d5d97d826830924bd8cd22daa452c9e467',
  'symfony/css-selector' => 'v4.4.24@947cacaf1b3a2af6f13a435392873d5ddaba5f70',
  'symfony/debug-bundle' => 'v4.4.20@1e136a4c6d8c2364b77e31c5bf124660cff6d084',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/dom-crawler' => 'v4.4.24@fc0bd1f215b0cd9f4efdc63bb66808f3417331bc',
  'symfony/maker-bundle' => 'v1.31.1@4f57a44cef0b4555043160b8bf223fcde8a7a59a',
  'symfony/phpunit-bridge' => 'v5.3.0@15cab721487b7bf43ad545a1e7d0095782e26f8c',
  'symfony/web-profiler-bundle' => 'v4.4.23@ef4101cbc316b4514b480b8e84e96719f848c282',
  'paragonie/random_compat' => '2.*@6d488fb5aeea773283e366f65c3ac3d3ac3b9b51',
  'symfony/polyfill-ctype' => '*@6d488fb5aeea773283e366f65c3ac3d3ac3b9b51',
  'symfony/polyfill-iconv' => '*@6d488fb5aeea773283e366f65c3ac3d3ac3b9b51',
  'symfony/polyfill-php71' => '*@6d488fb5aeea773283e366f65c3ac3d3ac3b9b51',
  'symfony/polyfill-php70' => '*@6d488fb5aeea773283e366f65c3ac3d3ac3b9b51',
  'symfony/polyfill-php56' => '*@6d488fb5aeea773283e366f65c3ac3d3ac3b9b51',
  '__root__' => 'dev-main@6d488fb5aeea773283e366f65c3ac3d3ac3b9b51',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
