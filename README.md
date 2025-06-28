# download and install XAMMP with php 8.0 version from https://www.apachefriends.org/download.html # open the XAMMP app and start Apache and mySql (ensure you are not running mysql on your machine or else it will conflict with the xamp mysql port. if you have, ensure to kill to port so that xamp can use the default port (3306))

# open the XAMMP htdocs directory (C:://XAMMP//htdocs ) and git clone the project

# open the project and run composer install

# Open application/config/config.php from the project folder

Set your base URL: config['base_url'] = 'http://localhost/blog_app/';

# Open application/config/database.php

Set your database credentials:

$db['default'] = array(
'dsn' => '', 'hostname' => 'localhost', 'username' => 'root', 'password' => '', 'database' => 'blog_db', 'dbdriver' => 'mysqli', // ... rest of the config remains the same
);

# In application/config/config.php: Set $config['csrf_protection'] = TRUE;

# Open phpMyAdmin (http://localhost/phpmyadmin)

Create a new database named "blog_db"

Run these SQL queries to create the tables: 

CREATE TABLE posts (
id int(11) NOT NULL AUTO_INCREMENT, title varchar(255) NOT NULL, content text NOT NULL, featured_image varchar(255) DEFAULT NULL, slug varchar(255) NOT NULL, created_at timestamp NOT NULL DEFAULT current_timestamp(), updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(), PRIMARY KEY (id), UNIQUE KEY slug (slug), UNIQUE KEY title (title)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE categories (
id int(11) NOT NULL AUTO_INCREMENT, name varchar(100) NOT NULL, slug varchar(100) NOT NULL, PRIMARY KEY (id), UNIQUE KEY name (name), UNIQUE KEY slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE post_categories (
id int(11) NOT NULL AUTO_INCREMENT, post_id int(11) NOT NULL, category_id int(11) NOT NULL, PRIMARY KEY (id), UNIQUE KEY post_category (post_id,`category_id`), KEY category_id (category_id), CONSTRAINT post_categories_ibfk_1 FOREIGN KEY (post_id) REFERENCES posts (id) ON DELETE CASCADE, CONSTRAINT post_categories_ibfk_2 FOREIGN KEY (category_id) REFERENCES categories (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# run the app on your browser http://localhost/blog_app/

# navigate to add post page and interact with the form. afterwards check the list_page
list page: http://localhost/blog_app/posts add post page : http://localhost/blog_app/posts/create
