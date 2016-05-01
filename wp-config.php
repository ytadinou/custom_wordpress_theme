<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'fotografia_db');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'adinou');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6nY8{-%LNq2{i@&tw/Xx<RIN&p-D4uRLUH$$p!a|cv$x-9A!LU$%gaTm2.~oS_r1');
define('SECURE_AUTH_KEY',  '+:KnFO{a{jSTB7T+6A(VI%tD9;lZ|mG!=y2O~GMM|:9HQ]Fe(@~oA$r2g*8l]6|>');
define('LOGGED_IN_KEY',    'CehC_u3eVYOU@ML=pae89k7+t|ov5ma@F&`h)`W,BQ0twe-j?6j*QI(w OVA>J]0');
define('NONCE_KEY',        '+WJa(3I$+vO^n_yE=|N|=)d@n!V~~(|5IwDG$YhFqirTMIt7$@A4ej7Vj*WDL:LO');
define('AUTH_SALT',        '6-#=[g+B&t:V~||lxn5gL)|#*,&p~M 2lBJZBR/`g|m6onTMoMS_UyF+d-UJhZEO');
define('SECURE_AUTH_SALT', 'z#s&?|WsNQl]zDJ<~hU%iGZ^F-&9}duD:m4X.OrMML:SM/MbZ~6deUm%A=l~W>ll');
define('LOGGED_IN_SALT',   'b.-^M0<#I-DYu=/=8UC1p9<_d0#*u*pp7dWJkm{RgK4Ww^[j]#|Ip@{C6rv)W73.');
define('NONCE_SALT',       'usIyv[*:#+p}l-SRoPd!z&y1|T:l-?8D9k/)x+bI-,vIydDX&Y3=_qTB N^k@y1)');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
