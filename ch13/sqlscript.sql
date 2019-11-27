create database todos;
use todos;

create table mytodos (id INTEGER PRIMARY KEY AUTO_INCREMENT, description TEXT NOT NULL, completed BOOLEAN NOT NULL);

INSERT INTO mytodos (description, completed) VALUES('Go to the store', false);

INSERT INTO mytodos (description, completed) VALUES('Go to school', true);

INSERT INTO mytodos (description, completed) VALUES('Go to the gym', false);
