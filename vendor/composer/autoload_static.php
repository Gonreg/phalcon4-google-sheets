<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbda55cfd2466564d222d11aecde6df09
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '1f87db08236948d07391152dccb70f04' => __DIR__ . '/..' . '/google/apiclient-services/autoload.php',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Cache\\' => 10,
            'Phalcon\\Migrations\\' => 19,
            'Phalcon\\Cop\\' => 12,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Client\\' => 21,
        ),
        'H' => 
        array (
            'Hybridauth\\' => 11,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Google\\Service\\' => 15,
            'Google\\Auth\\' => 12,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'A' => 
        array (
            'AmoCRM\\OAuth2\\Client\\Provider\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Phalcon\\Migrations\\' => 
        array (
            0 => __DIR__ . '/..' . '/phalcon/migrations/src',
        ),
        'Phalcon\\Cop\\' => 
        array (
            0 => __DIR__ . '/..' . '/phalcon/cli-options-parser/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'Hybridauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Google\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/apiclient-services/src',
        ),
        'Google\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/auth/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'AmoCRM\\OAuth2\\Client\\Provider\\' => 
        array (
            0 => __DIR__ . '/..' . '/amocrm/oauth2-amocrm/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Google_' => 
            array (
                0 => __DIR__ . '/..' . '/google/apiclient/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Google\\Auth\\ApplicationDefaultCredentials' => __DIR__ . '/..' . '/google/auth/src/ApplicationDefaultCredentials.php',
        'Google\\Auth\\CacheTrait' => __DIR__ . '/..' . '/google/auth/src/CacheTrait.php',
        'Google\\Auth\\CredentialsLoader' => __DIR__ . '/..' . '/google/auth/src/CredentialsLoader.php',
        'Google\\Auth\\Credentials\\AppIdentityCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/AppIdentityCredentials.php',
        'Google\\Auth\\Credentials\\GCECredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/GCECredentials.php',
        'Google\\Auth\\Credentials\\IAMCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/IAMCredentials.php',
        'Google\\Auth\\Credentials\\ServiceAccountCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/ServiceAccountCredentials.php',
        'Google\\Auth\\Credentials\\ServiceAccountJwtAccessCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/ServiceAccountJwtAccessCredentials.php',
        'Google\\Auth\\Credentials\\UserRefreshCredentials' => __DIR__ . '/..' . '/google/auth/src/Credentials/UserRefreshCredentials.php',
        'Google\\Auth\\FetchAuthTokenInterface' => __DIR__ . '/..' . '/google/auth/src/FetchAuthTokenInterface.php',
        'Google\\Auth\\HttpHandler\\Guzzle5HttpHandler' => __DIR__ . '/..' . '/google/auth/src/HttpHandler/Guzzle5HttpHandler.php',
        'Google\\Auth\\HttpHandler\\Guzzle6HttpHandler' => __DIR__ . '/..' . '/google/auth/src/HttpHandler/Guzzle6HttpHandler.php',
        'Google\\Auth\\HttpHandler\\HttpHandlerFactory' => __DIR__ . '/..' . '/google/auth/src/HttpHandler/HttpHandlerFactory.php',
        'Google\\Auth\\Middleware\\AuthTokenMiddleware' => __DIR__ . '/..' . '/google/auth/src/Middleware/AuthTokenMiddleware.php',
        'Google\\Auth\\Middleware\\ScopedAccessTokenMiddleware' => __DIR__ . '/..' . '/google/auth/src/Middleware/ScopedAccessTokenMiddleware.php',
        'Google\\Auth\\Middleware\\SimpleMiddleware' => __DIR__ . '/..' . '/google/auth/src/Middleware/SimpleMiddleware.php',
        'Google\\Auth\\OAuth2' => __DIR__ . '/..' . '/google/auth/src/OAuth2.php',
        'Google\\Auth\\Subscriber\\AuthTokenSubscriber' => __DIR__ . '/..' . '/google/auth/src/Subscriber/AuthTokenSubscriber.php',
        'Google\\Auth\\Subscriber\\ScopedAccessTokenSubscriber' => __DIR__ . '/..' . '/google/auth/src/Subscriber/ScopedAccessTokenSubscriber.php',
        'Google\\Auth\\Subscriber\\SimpleSubscriber' => __DIR__ . '/..' . '/google/auth/src/Subscriber/SimpleSubscriber.php',
        'Google_Service_Exception' => __DIR__ . '/..' . '/google/apiclient/src/Google/Service/Exception.php',
        'Google_Service_Resource' => __DIR__ . '/..' . '/google/apiclient/src/Google/Service/Resource.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\HtmlStringable' => __DIR__ . '/..' . '/nette/utils/src/HtmlStringable.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Localization\\Translator' => __DIR__ . '/..' . '/nette/utils/src/Translator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\PhpGenerator\\Attribute' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Attribute.php',
        'Nette\\PhpGenerator\\ClassType' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/ClassType.php',
        'Nette\\PhpGenerator\\Closure' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Closure.php',
        'Nette\\PhpGenerator\\Constant' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Constant.php',
        'Nette\\PhpGenerator\\Dumper' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Dumper.php',
        'Nette\\PhpGenerator\\EnumCase' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/EnumCase.php',
        'Nette\\PhpGenerator\\Extractor' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Extractor.php',
        'Nette\\PhpGenerator\\Factory' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Factory.php',
        'Nette\\PhpGenerator\\GlobalFunction' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/GlobalFunction.php',
        'Nette\\PhpGenerator\\Helpers' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Helpers.php',
        'Nette\\PhpGenerator\\Literal' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Literal.php',
        'Nette\\PhpGenerator\\Method' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Method.php',
        'Nette\\PhpGenerator\\Parameter' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Parameter.php',
        'Nette\\PhpGenerator\\PhpFile' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PhpFile.php',
        'Nette\\PhpGenerator\\PhpLiteral' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PhpLiteral.php',
        'Nette\\PhpGenerator\\PhpNamespace' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PhpNamespace.php',
        'Nette\\PhpGenerator\\Printer' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Printer.php',
        'Nette\\PhpGenerator\\PromotedParameter' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PromotedParameter.php',
        'Nette\\PhpGenerator\\Property' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Property.php',
        'Nette\\PhpGenerator\\PsrPrinter' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/PsrPrinter.php',
        'Nette\\PhpGenerator\\TraitUse' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/TraitUse.php',
        'Nette\\PhpGenerator\\Traits\\AttributeAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/AttributeAware.php',
        'Nette\\PhpGenerator\\Traits\\CommentAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/CommentAware.php',
        'Nette\\PhpGenerator\\Traits\\FunctionLike' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/FunctionLike.php',
        'Nette\\PhpGenerator\\Traits\\NameAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/NameAware.php',
        'Nette\\PhpGenerator\\Traits\\VisibilityAware' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Traits/VisibilityAware.php',
        'Nette\\PhpGenerator\\Type' => __DIR__ . '/..' . '/nette/php-generator/src/PhpGenerator/Type.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/StaticClass.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Floats' => __DIR__ . '/..' . '/nette/utils/src/Utils/Floats.php',
        'Nette\\Utils\\Helpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/Helpers.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/compatibility.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\ObjectMixin' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectMixin.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\Type' => __DIR__ . '/..' . '/nette/utils/src/Utils/Type.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbda55cfd2466564d222d11aecde6df09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbda55cfd2466564d222d11aecde6df09::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbda55cfd2466564d222d11aecde6df09::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbda55cfd2466564d222d11aecde6df09::$classMap;

        }, null, ClassLoader::class);
    }
}
