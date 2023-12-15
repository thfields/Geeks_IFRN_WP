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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'geeks' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' 3r1Ar9fW-EX7J%xC8U=s^!zpS!6i@*}Myq&63C`cb4Jv`)cA:6UC55_P#a4DVA3' );
define( 'SECURE_AUTH_KEY',  '@/DJ#&T2Fd9N=GBmIn/:W>ig:87*e;@z#SOX`r] f@VFDNsW.fh.RV9!Szbnt%gK' );
define( 'LOGGED_IN_KEY',    ',kGP~SPvHN]pC9E+DyT@ H7z*uZ$a,M* /KreC,a1#Lk067Fu%!#pEo3iVuiIpqp' );
define( 'NONCE_KEY',        ':W$QxZJ#_xc9Ki%dDZ5h.O[gySE$BJF3)9vo(.G11I/BKjd/U@>JmzW)nv(Uuh<N' );
define( 'AUTH_SALT',        '>MucD$89[-WibORO$*+2/:@~tkm@;C9QE7*~:[U9.Z-Ls BGAaFjz9g4E7ARUv_C' );
define( 'SECURE_AUTH_SALT', '*9e1K5q$2WDTkdf/:asO/}gNssfnc9/9UHxN~44L,E)-K:u(K<E.GQhr-N4e= :W' );
define( 'LOGGED_IN_SALT',   'yMxi>wwj_F%3--(#k.a(|[z8e5aZ+kFWnfB,k&BA&>oJHKcCqR2!66Te( XQ9P.y' );
define( 'NONCE_SALT',       'Yu|0 W4,)[>}P2.QoXDgJ@iQ}.X_uTTk!E^*]6`8)9U$/dj9|sG!u/q$7u05:E)s' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
