# Projeto_Integrador_3B | DonateTrack

## Project Description:

This project aims to apply the knowledge acquired in Object Oriented Programming and Development for Mobile Devices to develop web applications that address real demands and propose improvements and new strategies in the data storage system of Instituto de Menores Dom Antônio Zattera.

[Description, Motivation and Theoretical Development of this Project.](https://docs.google.com/document/d/1u13RFOiA8z-nKeGTeGPy1pi8w-YcvwkOvG3sob0nZ0Y/edit?usp=sharing)


### Technologies Used

The following technologies will be utilized to achieve the proposed objective:

   - **PHP**: PHP will be used to develop the system's business logic, process requests, and interact with the data storage system.
   - **HTML**: HTML will be used for structuring the web pages and presenting the content to the users.
   - **CSS**: CSS will be used for styling and enhancing the visual appearance of the web application.
   - **JavaScript**: JavaScript will be employed to add interactivity and dynamic behavior to the web pages.

### Data Storage System

To handle the data storage operations, we have chosen **SQLite** as the database management system. SQLite is a lightweight, embedded, and easy-to-handle relational database that offers the necessary functionality for record creation, reading, updating, and deletion operations. Its inclusion within the project itself simplifies the setup and maintenance processes.

By leveraging the capabilities of these technologies, we aim to create a robust and efficient web application that meets the specific needs of Instituto de Menores Dom Antônio Zattera and contributes to improving their data storage system.

Please refer to the [documentation](/structure/structure.md/) for detailed information on how to set up and use the application. * 

## Installation

To install and run this project locally, follow the steps below:

1. Clone the repository:

   ```bash
   git clone https://github.com/andersonlimacrv/Projeto_Integrador_3B.git
   ```
   
2. Navigate to the project directory:

   ```bash
   cd repository
   ```

3. Install the necessary dependencies (not necessary at moment):


   ```bash
   npm install
   ```
4. Start the PHP server using XAMPP:

   - Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).
   - Open the XAMPP Control Panel >> Start Apache Module.
   - Copy the cloned project directory to the `htdocs` directory in the XAMPP installation directory. (ex: C:\xampp\htdocs on Windows)
   - Open a web browser and access `http://localhost/DonateTrack/` to access the application.
   - Download and install COMPOSER from the [official website](https://getcomposer.org/download/).
   
## Contributing

Contributions are welcome! If you want to contribute to this project, please follow these steps:

1. Fork this repository.
2. Create a new branch: `git checkout -b feature/your-feature-name`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature/your-feature-name`.
5. Submit a pull request.

Please make sure to update tests as appropriate and maintain a clean commit history.

## License

This project is licensed under the MIT License.
