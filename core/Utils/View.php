<?php

namespace App\Utils;

class View
{   // Variáveis padrão da view 
    private static $vars = [];
    /**
     * Metodo responsável por definir os dados iniciais da classe.
     *
     * @param array $vars array de variáveis

     */
    public static function init($vars = [])
    {
        self::$vars = $vars;
    }
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

        // Merge de variáveis da view
        $vars = array_merge(self::$vars, $vars);

        //CHAVES DO ARRAY DE VARIAVEIS
        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);

        return str_replace($keys, array_values($vars), $contentView);
    }
}
