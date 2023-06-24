Estrutura de diretórios:

- app
  - Controllers
  - Models
  - Views
- config
- public
  - css
  - js
- resources
  - lang
  - views
- storage
  - logs
  - uploads
- tests
- vendor
- .env
- composer.json
- index.php

**app**: Contém a lógica principal da aplicação.

- **Controllers**: Armazena os controladores da aplicação, responsáveis por receber as requisições do usuário e orquestrar as ações apropriadas.
- **Models**: Contém os modelos de dados da aplicação, que representam as entidades do sistema e suas regras de negócio.
- **Views**: Armazena os arquivos de visualização da aplicação, normalmente no formato de templates, que são usados para exibir informações aos usuários.

**config**: Armazena arquivos de configuração da aplicação, como configurações de banco de dados, configurações de autenticação, etc. É uma boa prática separar as configurações do código principal da aplicação.

**public**: Pasta acessível publicamente, onde geralmente ficam os arquivos acessíveis pelo navegador.

- **css**: Armazena os arquivos de estilo CSS utilizados na aplicação.
- **js**: Contém os arquivos JavaScript utilizados na aplicação.
- **ing**: Contém os arquivos de imagem utilizados na aplicação.

**resources**: Pasta que contém recursos adicionais para o desenvolvimento.

- **lang**: Armazena arquivos de idioma ou tradução, utilizados para suportar múltiplos idiomas na aplicação.
- **views**: Contém visualizações parciais ou templates utilizados pelas views principais da aplicação. É uma prática comum separar as views em subpastas relevantes, como layouts, partials, etc.

**storage**: Pasta utilizada para armazenar arquivos gerados pela aplicação.

- **logs**: Contém arquivos de logs da aplicação, úteis para registro de erros, depuração, etc.
- **uploads**: Pasta utilizada para o armazenamento de arquivos enviados pelos usuários ou gerados pela aplicação.

**tests**: Pasta utilizada para escrever testes automatizados para a aplicação. É uma prática recomendada adotar testes para garantir a qualidade do código e a funcionalidade correta da aplicação.

**vendor**: Pasta utilizada para armazenar bibliotecas e dependências de terceiros instaladas via gerenciador de pacotes, como o Composer.

**.env**: Arquivo de configuração do ambiente, onde você pode definir variáveis de ambiente, como chaves de API, configurações de ambiente, etc.

**composer.json**: Arquivo de configuração do Composer, usado para gerenciar as dependências do projeto.

**index.php**: Ponto de entrada principal da aplicação, onde as solicitações do cliente são recebidas e o roteamento para os controladores apropriados é feito.
