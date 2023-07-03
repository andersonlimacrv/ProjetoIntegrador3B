<?php

namespace App\Http;

class Request
{
    /**
     * Método HTTP da requisição
     * @var string
     */
    private $httpMethod;

    /**
     * URI da página (rota)
     * @var string
     * */
    private $uri;

    /**
     *  Dados da requisição URL($_GET)
     * @var string
     */
    private $queryParams = [];

    /**
     * Variaveis recebidas no POST da página($_POST)
     * @var array
     * */
    private $postVars = [];

    /**
     * Cabeçalho da requisição
     * @var array
     * */
    private $headers = [];

    /**
     * Construtor da Classe Request
     * */
    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Método responsável por retornar o metodo HTTP da requisição
     * @return string The HTTP method.
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     * Método responsável por retornar a URI da requisição.
     * @return string A URI.
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Método responsável por retornar os parâmetros da URL da requisição.
     * @return array Os parâmetros da URL.
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * Método responsável por retornar as variáveis ​​POST da requisição.
     * @return array As variáveis ​​POST.
     */
    public function getPostVars()
    {
        return $this->postVars;
    }

    /**
     * Método responsável por retornar os cabeçalhos da requisição.
     * @return array Os cabeçalhos.
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}