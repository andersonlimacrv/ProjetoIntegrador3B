<?php

namespace App\Http;

/**
 * Classe responsável por representar uma resposta HTTP.
 */
class Response
{
    /**
     * Código HTTP da resposta.
     *
     * @var int
     */
    private $httpCode = 200;

    /**
     * Cabeçalhos da resposta.
     *
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteúdo da resposta.
     *
     * @var string
     */
    private $contentType = "text/html";

    /**
     * Conteúdo da resposta.
     *
     * @var string
     */
    private $content;

    /**
     * Construtor da classe Response.
     *
     * @param int    $httpCode     O código HTTP da resposta.
     * @param string $content      O conteúdo da resposta.
     * @param string $contentType  O tipo de conteúdo da resposta (opcional, padrão: 'text/html').
     */
    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->contentType = $contentType;
        $this->setContentType($contentType);
    }

    /**
     * Define o tipo de conteúdo da resposta e adiciona o cabeçalho correspondente.
     *
     * @param string $contentType O tipo de conteúdo da resposta.
     * @return void
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * Adiciona um cabeçalho à resposta.
     *
     * @param string $key   A chave do cabeçalho.
     * @param string $value O valor do cabeçalho.
     * @return void
     */
    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    /**
     * Envia os cabeçalhos HTTP para a resposta.
     *
     * @return void
     */ public function sendHeaders()
    {
        // STATUS
        http_response_code($this->httpCode);

        // ENVIAR CABEÇALHOS
        foreach ($this->headers as $key => $value) {
            header($key . ': ' . $value);
        }
    }

    /**
     * Envia a resposta HTTP ao cliente.
     *
     * @return void
     */
    public function sendResponse()
    {
        // ENVIA CABEÇALHOS
        $this->sendHeaders();

        // IMPRIME CONTEÚDO
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}