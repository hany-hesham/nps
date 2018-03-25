<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function _lang($line, $label = '')
    {
        $CI =& get_instance();
        if (is_array($label) && count($label) > 0) {
            $_line = vsprintf($CI->lang->line(trim($line)), $label);
        } else {
            $_line = @sprintf($CI->lang->line(trim($line)), $label);
        }

        return $_line;
    }

?>
