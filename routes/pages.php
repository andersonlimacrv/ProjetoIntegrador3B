<?php


use \App\Http\Response;
use \App\Controller\Pages\HomeController;
use \App\Controller\Pages\DonationEditController;
use \App\Controller\Pages\DonationListController;
use \App\Controller\Pages\DonateController;
use \App\Model\Entity\Donation;
use \App\Utils\View;


//ROTA HOME GET
$obRouter->get('/', [
    function () {
        return new Response(200, HomeController::getHome());
    }
]);

//ROTA HOME POST
$obRouter->post('/', [
    function () {
        return new Response(200, HomeController::getHome());
    }
]);

// ROTA DE CADASTRO DE DOAÇÕES GET
$obRouter->get('/doar', [
    function () {
        return new Response(200, DonateController::getDonate());
    }
]);

// ROTA DE CADASTRO DE DOAÇÕES POST 
$obRouter->post('/doar', [
    function () {
        // Processa os dados do formulário
        // ...

        // Exemplo: Verifica se ocorreu algum erro ao processar os dados
        $error = false; // Defina essa variável com base na validação ou manipulação dos dados

        if (!$error) {
            $message = 'Doação realizada com sucesso!';
            $alertType = 'success';
        } else {
            $message = 'Erro ao processar a doação. Por favor, tente novamente.';
            $alertType = 'danger';
        }

        // Renderiza a página com a mensagem
        return new Response(200, DonateController::getDonate(['message' => $message, 'alertType' => $alertType]));
    }
]);

// ROTA DE VISUALIZAÇÃO DE DOAÇÕES GET
$obRouter->get('/visualizar', [
    function () {
        return new Response(200, DonationListController::getViewDonations());
    }
]);

// ROTA DE VISUALIZAÇÃO DE DOAÇÕES POST
$obRouter->post('/visualizar', [
    function () {
        return new Response(200, DonationListController::getViewDonations());
    }
]);

// ROTA DE EDIÇÃO DE DOAÇÕES GET
$obRouter->get('/editar', [
    function () {
        return new Response(200, DonationEditController::getHome());
    }
]);

// ROTA DE EDIÇÃO DE DOAÇÕES POST
$obRouter->post('/editar', [
    function () {
        return new Response(200, DonationEditController::getHome());
    }
]);


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Captura os dados do formulário
    $formData = $_POST;

    // Chama a função process_form e passa os dados do formulário e a conexão PDO
    process_form($formData);
}

function process_form($formData)
{
    $db = new PDO('sqlite:database.sqlite', '', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);

    $donation = new Donation(1, 'John Doe', 'Shirt'); // Exemplo de instância de doação
    $donation->donationSave($formData, $db);

    // Redirecionar para a página de sucesso
    header("Location: /donatetrack/visualizar");
    exit(); // Certifica-se de que o script seja encerrado após o redirecionamento
}


// Recupera os resultados das doações
/* try {
    $db = new PDO('sqlite:database.sqlite', '', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);

    // Consulta SQL para recuperar as doações
    $sql = "SELECT * FROM donations";
    $stmt = $db->query($sql);

    // Recupera os resultados em um array
    $doacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // Variáveis para enviar para a função render()
    $vars = [
        'name' => 'Nome da Página',
        'doacoes' => $doacoes
    ];

    // Renderiza a página HTML com as variáveis
    $html = View::render('DonationListVew', $vars);
    // Exibe a página HTML renderizada
    echo $html;
} catch (PDOException $e) {
    // Tratamento de erros na conexão com o banco de dados
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
} */