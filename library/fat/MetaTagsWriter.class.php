<?php

class MetaTagsWriter {
    public static function getMetaTags($controller, $action, $arrParameters) {
        $title = '';
        if(isset($controller)) {
            $title_bfr_pipe = ucwords(str_replace('-', ' ', FatUtility::camel2dashed(substr($controller, 0, -(strlen('controller'))))));
            $title_aftr_pipe = ucwords(str_replace('-', ' ', FatUtility::camel2dashed($action)));
        }
        
        switch(true)
        {
            case (strlen($title_bfr_pipe) > 0 && strlen($title_aftr_pipe) > 0 ):
                $title = '<title>'.$title_bfr_pipe.' | '.$title_aftr_pipe.'</title>';
                break;
            default:
                $title = '<title>'.$_SERVER["SERVER_NAME"].'</title>';
                break;
        }

        return $title;
        
    }
}

?>