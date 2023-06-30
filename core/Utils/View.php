<?php

namespace App\Utils;

class View
{
    /**
     * Metodo para retornar o CONTEÚDO da View
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

        //CHAVES DO ARRAY DE VARIAVEIS
        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);

        return str_replace($keys, array_values($vars), $contentView);
    }
}
