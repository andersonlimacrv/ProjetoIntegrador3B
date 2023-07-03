<?php

namespace App\Http;

use \Closure;
use Error;
use \Exception;

/**
 * Classe responsável por gerenciar as rotas da aplicação.
 */
class Router
{
    /**
     * URL atual da requisição.
     * @var string
     */
    private $url;

    /**
     * Rotas registradas.
     * @var array
     */
    private $routes = [];

    /**
     * Prefixo para todas as rotas.
     * @var string
     */
    private $prefix = '';

    /**
     * Objeto da classe Request.
     * @var Request
     */
    private $request;

    /**
     * Construtor da classe Router.
     *
     * @param string $url A URL atual da requisição.
     */
    public function __construct($url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * Define o prefixo para todas as rotas baseado na URL atual.
     * O prefixo é extraído da parte do caminho (path) da URL.
     */
    private function setPrefix()
    {   // informações da url atual
        $parseUrl = parse_url($this->url);
        // define o prefixo
        $this->prefix = $parseUrl['path'] ?? '';
    }

    private function addRoute($method, $route, $params = [])
    { // VALIDAÇÃO DOS PARAMETROS
        foreach ($params as $key => $value) {
            if ($value instanceof Closure) {
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }
        $patternRoute = '/^' . str_replace('/', '\/', $route) . '$';
        $this->routes[$method][$patternRoute] = $params;
    }
    public function get($route, $params = [])
    {
        return $this->addRoute('GET', $route, $params);
    }
    public function run()
    {
        try {
            throw new Exception("Página naaao encontradda, pai", 404);
        } catch (Exception $e) {
            return new Response($e->getCode(), $e->getMessage());
        }
    }
}
