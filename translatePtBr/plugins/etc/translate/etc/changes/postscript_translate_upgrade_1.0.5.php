<?php

$className = 'translate_upgrade_1_0_5';


/**
 * Installs any additional data after the plugins are installed
 * (before they are enabled)
 *
 */
class postscript_install_translate
{
    /**
     *
     * @return boolean  True on success, else false
     */
    function execute()
    {
        $src = MAX_PATH.'/plugins/translate/default.lang.php';
        $dest = MAX_PATH.'/lib/max/language/pt_BR/default.lang.php';
        return copy( $src, $dest );
    }
}