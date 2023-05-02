<?php

use Phalcon\Config;

defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

/*const GOOGLE_SHEET_ID = '1hPLuV0t7H9QfPp4N_YJ-A7vfdMvb18-9WFAcDdSTy5Q';
const GOOGLE_CLIENT_ID = '170736721093-ef2hrocttef8pqlukm6ujt3n35rqbl67.apps.googleusercontent.com';
const GOOGLE_CLIENT_SECRET = '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';
const GOOGLE_CONFIG = [
    'callback' => 'https://dev.viovan.world/api/callback',
    'keys'     => [
        'id' => GOOGLE_CLIENT_ID,
        'secret' => GOOGLE_CLIENT_SECRET
    ],
    'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
    'authorize_url_parameters' => [
        'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
        'access_type' => 'offline'
    ]
];

const AMO_CLIENT_ID = '4cbd5e04-45db-49cd-96c3-ce12d8200326';
const AMO_CLIENT_SECRET = '3SWYWcT2sjs42RYZzhvtygIyWYudvDiX2pUl8vvWysJw0AMVmlaivZLJ78cFKzdx';
const AMO_CLIENT_GRANT_TYPE = 'authorization_code';
const AMO_CLIENT_SECRET_CODE = 'def5020045cfa63e5fa3a8e357c3e82bf3978311be8c18bd221d508a8e4176cd12d449d434e5f13818dad71b3363fc0ba6e3243630d6ccf36a3c8c7d73b3373798d6a7fa0d6b3365e114ad1f1ebd1e8f48f74bd8275ffd01b9edad46911fc151384e653254425cd2c96ac888a4f4a1bb63d07eb7642ba4a5be0bd5ad9999e31c4b91642fbf5d66875e73da4557372159b95fb3824b04e9e470caf86debc03f75319222839ad8b47d4cb0f51cee28a3349f472e105c7d24284b7ee8533e1ac55fc3ffcedef9005dfc3bb1c1d9d2b061501a7e609dae0e94f7916dc45c9580e3b368238ac5025b757c9d6dfa08e4eb63dde0c08f358f1bb48ca46d12a1c3db02cec2d1aa920aa73f444dd9b79e676c129d6f2b0cf5d8095e02b202a16d0b75ca701d72cb89911174f07f7974b071cfc809bee2dc2b18fd477ecff6dca525140aa0eb6403c929aa0a6165d1a49f8c4f1522a99f478f46aba08584bd3184266846222150c88afc64922f8ef555a73cf5c813f632ad3838521037d7a5e24f1929f52a930c6a1d395e1fa9922c7145d8d1132f095b7e6bacddd5d9acad8a0829ed550cf08d65f73373df7986cd12f58a8e170c73c93d7ffc172a40c2c28ba524e909e9b599f222e575bcf204cd68b1b123f3e8fbf5687306f099ea8ee29f21062185ff3adb7e25cc8202ca';
const AMO_CLIENT_REDIRECT_URI = 'https://dev.viovan.world';
const AMO_CLIENT_SUBDOMAIN = 'vkaftancikov';*/

$config = new Config([
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'viovanco_root',
        'password'    => '-0^?Cy?I*?mn',
        'dbname'      => 'viovanco_leads',
        'charset'     => 'utf8',
    ],
    /*'database' => [
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '1111',
        'dbname'      => 'lead',
        'charset'     => 'utf8',
    ],*/
    'application' => [
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'libraryDir'     => APP_PATH . '/library/',
        'cacheDir'       => BASE_PATH . '/cache/',
        'baseUri'        => '/',
    ]
]);

return $config;
