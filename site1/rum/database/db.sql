CREATE TABLE IF NOT EXISTS USERS (
    id VARCHAR(10) PRIMARY KEY,
    username varchar(30) NOT NULL,
    password varchar(255) NOT NULL,
    name varchar(50) NOT NULL,
    status varchar(20) NOT NULL,
    id_level int,
    privillege binary DEFAULT 0,
    join_date datetime DEFAULT CURRENT_TIMESTAMP
)   ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS CLIENT (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(50) NOT NULL
)   ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS PROJECT (
    id VARCHAR(10) PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    start_date date NOT NULL,
    end_date date NOT NULL,
    status VARCHAR(10) DEFAULT "ACTIVE",
    total_effort FLOAT NOT NULL,
    real_cost FLOAT,
    id_client INT, 
    CONSTRAINT FK_PC FOREIGN KEY (id_client) REFERENCES CLIENT(id) ON DELETE SET NULL
)   ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS WORKS_ON (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_dev VARCHAR(10),
    CONSTRAINT FK_WOD FOREIGN KEY (id_dev) REFERENCES USERS(id),
    id_pm VARCHAR(10) ,
    CONSTRAINT FK_WOP FOREIGN KEY (id_pm) REFERENCES USERS(id),
    type VARCHAR(5),
    id_project VARCHAR(10),
    CONSTRAINT FK_Work_on_Project FOREIGN KEY (id_project) REFERENCES PROJECT(id)
)   ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS WORKS_HOUR(
    id_works_on INT PRIMARY KEY,
    CONSTRAINT FK_WHWO FOREIGN KEY (id_works_on) REFERENCES WORKS_ON(id) ON DELETE CASCADE,
    week date NOT NULL,
    percent FLOAT NOT NULL
)   ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS LEVEL (
    id INT AUTO_INCREMENT PRIMARY KEY,
    level VARCHAR(10) NOT NULL
)   ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE USERS
ADD CONSTRAINT FK_USER_LEVEL FOREIGN KEY (id_level) REFERENCES LEVEL(id) ON DELETE SET NULL;