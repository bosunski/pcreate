CREATE TABLE posts (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR (255) NOT NULL,
  content TEXT NOT NULL,
  date_added DATETIME
);

CREATE TABLE users (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR (100) NOT NULL,
  password VARCHAR (100) NOT NULL
);

INSERT INTO users VALUES(null, 'bosunski', 'gabriel');
