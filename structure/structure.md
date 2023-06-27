Estrutura de diretórios:

┏━ core
┃  ┣━ controllers
┃  ┃  ┣━ HomeController.php
┃  ┃  ┣━ DonationController.php
┃  ┃  ┣━ ItemController.php
┃  ┃  ┣━ ViewDonationController.php
┃  ┃  ┗━ EditItemController.php
┃  ┣━ models
┃  ┃  ┣━ Donation.php
┃  ┃  ┗━ Item.php
┃  ┣━ views
┃  ┃  ┣━ home.php
┃  ┃  ┣━ donation.php
┃  ┃  ┣━ item.php
┃  ┃  ┣━ view_donation.php
┃  ┃  ┗━ edit_item.php
┃  ┗━ classes
┃     ┣━ Item.php
┃     ┣━ Dation.php
┃     ┗━ Donor.php
┃
┣━ public
┃  ┣━ index.php
┃  ┣━ img
┃  ┗━ assets
┃     ┣━ css
┃     ┃  ┣━ home.css
┃     ┃  ┣━ donation.css
┃     ┃  ┣━ item.css
┃     ┃  ┣━ view_donation.css
┃     ┃  ┗━ edit_item.css
┃     ┗━ js
┃        ┣━ home.js
┃        ┣━ donation.js
┃        ┣━ item.js
┃        ┣━ view_donation.js
┃        ┗━ edit_item.js
┃
┣━ config
┃  ┗━ database.php
┃
┣━ tests
┃  ┣━ TestHomeController.php
┃  ┣━ TestDonationController.php
┃  ┣━ TestItemController.php
┃  ┣━ TestViewDonationController.php
┃  ┗━ TestEditItemController.php
┃
┣━ composer.json
┗━ README.md


- `core` (diretório principal do aplicativo)
  - `controllers` (diretório para os controladores)
    - `HomeController.php` (controlador da página inicial)
    - `DonationController.php` (controlador do controle de doações)
    - `ItemController.php` (controlador do controle de cadastro de itens de doação)
    - `ViewDonationController.php` (controlador da visualização de doações)
    - `EditItemController.php` (controlador da edição de itens cadastrados)
  - `models` (diretório para os modelos)
    - `Donation.php` (modelo para doações)
    - `Item.php` (modelo para itens de doação)
  - `views` (diretório para as visualizações)
    - `home.php` (visualização da página inicial)
    - `donation.php` (visualização do controle de doações)
    - `item.php` (visualização do controle de cadastro de itens de doação)
    - `view_donation.php` (visualização da visualização de doações)
    - `edit_item.php` (visualização da edição de itens cadastrados)
  - `classes` (diretório para as classes auxiliares)
    - `Item.php`
    - `Dation.php`
    - `Donor.php`
- `public` (diretório público acessível via navegador)
  - `index.php` (arquivo de entrada do aplicativo)
  - `img` (diretório para imagens)
  - `assets` (diretório para recursos)
    - `css` (diretório para arquivos de estilo CSS)
      - `home.css`
      - `donation.css`
      - `item.css`
      - `view_donation.css`
      - `edit_item.css`
    - `js` (diretório para arquivos JavaScript)
      - `home.js`
      - `donation.js`
      - `item.js`
      - `view_donation.js`
      - `edit_item.js`
- `config` (diretório para arquivos de configuração)
  - `database.php` (arquivo de configuração para as informações de conexão com o banco de dados)
- `tests` (diretório para os testes)
  - `TestHomeController.php`
  - `TestDonationController.php`
  - `TestItemController.php`
  - `TestViewDonationController.php`
  - `TestEditItemController.php`
- `composer.json` (arquivo de configuração do Composer)
- `README.md` (arquivo de documentação do projeto)


