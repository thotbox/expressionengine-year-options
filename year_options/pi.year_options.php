<?php

$plugin_info = array(
    'pi_name' => 'Thotbox Year Options',
    'pi_author' =>'Shane Woodward',
    'pi_description' => 'Generates options for select fields starting from current year',
    'pi_version' =>'1.0',
    'pi_usage' => year_options::usage()
);

class year_options {

    public function __construct() {
        $this->return_data = $this->output();
    }

    public function output() {
        $this->EE =& get_instance();
        $years = $this->EE->TMPL->fetch_param('years');
        $value_prefix = $this->EE->TMPL->fetch_param('value_prefix');
        $text_prefix = $this->EE->TMPL->fetch_param('text_prefix');
        $current_year = date('Y');
        $stop_year = $current_year - $years;

        $result = '';

        foreach (range($current_year, $stop_year) as $years) {
            $result .= '<option value="'.$value_prefix.$years.'">'.$text_prefix.$years.'</option>';
        }

        return $result;
    }

    public function usage() {
        ob_start();
    ?>
        Use {exp:year_options years="" value_prefix="" text_prefix=""} to output year options.
    <?php
        $text = ob_get_contents();
        ob_end_clean();
        return $text;
    }

}

?>