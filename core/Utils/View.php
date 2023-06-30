<?php

namespace App\utils;

class View
{
    /**
     * Metodo para retornar o CONTEÚdo da View
     *
     * @param string $view 
     * @throws Exception if the view cannot be rendered.
     * @return string
     */
    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/View/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }
    /**
     * Metodo para RENDERIZAR uma View
     *
     * @param string $view -> nome da view
     * @param array $vars -> variaveis de renderização (string / numerico)
     * @return string
     */
    public static function render($view, $vars = [])
    {
        //conteudo da view
        $contentView = self::getContentView($view);

        echo "<pre>";
        print_r($vars);
        echo "</pre>";
        exit;
        return $contentView;
    }
}
