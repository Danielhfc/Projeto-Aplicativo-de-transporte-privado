<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'aplicacao_transporte' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'WXGkxknGRTfEsEkm' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A]TD?w/[1-71gcP(.!ZHw@n*5gzu}qfn4-t(+&xj0GtAeM(1GFHmMe#Bzlku!.]`' );
define( 'SECURE_AUTH_KEY',  'xwF<^Q}q-g),4S6K?Cmz)~c}}q{@Cq&0BqO;_yd.:q7.w6E%!(dV(y9wuHC%kJUn' );
define( 'LOGGED_IN_KEY',    'NV^RznjId}V#9~h|,;24!&IkL5/n,(h810-#F+zVlB_z]RH$?TJW|E>mN3y w=[n' );
define( 'NONCE_KEY',        'Drp%|S/xO}6F6x+]xu:NQ=7&c[vLJ=izH*{#d-:)Z{6a44)+e!G/ Z/Xk>CVG(XQ' );
define( 'AUTH_SALT',        '5sinMc+,#tWFbe7r28M fI;Y7])](8y5##AGNhsqTTP 4@~39RF-9u `*<c7R7>@' );
define( 'SECURE_AUTH_SALT', 'br?hS{C6/Ng+|otZ7cv^Pt^HYduYS3C?<,EMLm-|hHdx?FrtjI4i6[|m [ATCk1#' );
define( 'LOGGED_IN_SALT',   '^8bO9.s721$Y>[J82=FGdkh$Fn7]SFU:,P7JHCZ{ =*(&T;];qKl.;GM VH)e#1r' );
define( 'NONCE_SALT',       'SgXT]}^8d2rRl%?;8?_iGB6x4Cmcmx$yDtW~W$g50,M1@@-N+v=oLhdp K2{:9ff' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
