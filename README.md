# PHP MySQL Connection Example

This project demonstrates how to connect a PHP application to a MySQL database and display the results in an HTML table. The example includes the use of environment variables to configure database connection settings, as well as custom CSS for styling the table.

## Requirements

- PHP 8.1. or higher
- MySQL 8.0 or higher
- Ubuntu 22.04

## Setup

1. Make sure you have MySQL-PHP connector installed

```bash
sudo apt install php-mysql
sudo service apache2 restart
# If after run this tutorial, it do not works, consider to restart your system
```

2. Clone the repository to your local machine.

```bash
git clone https://github.com/biagolini/PhpMysqlConnection
```

3. Navigate to the project directory.

```bash
cd PhpMysqlConnection
```

4. Create a new MySQL database and import the sample data from `sampleDB.sql`.

5. Copy the `run.sh.example` file to `run.sh`.

```bash
cp run.sh.example run.sh
```

6. Edit the `run.sh` file and update the environment variables with your database connection settings, like:

```
export DB_HOST="your_database_host"
export DB_USERNAME="your_database_username"
export DB_PASSWORD="your_database_password"
export DB_NAME="your_database_name"
export DB_PORT="your_database_port"
```

7. Make the `run.sh` file executable.

```bash
chmod +x run.sh
```

8. Run the project using the `run.sh` script.

```bash
bash run.sh
```

9. Open your web browser and go to `http://localhost:8000`. You should see the data from the MySQL database displayed in a styled HTML table.

## Contributing

Feel free to submit issues, create pull requests, or fork the repository to help improve the project.

## License

This project is open-source and available under the MIT License. See the `LICENSE` file for more information.
