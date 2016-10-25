CREATE TABLE IF NOT EXISTS tasks (
    task_id     INT AUTO_INCREMENT PRIMARY KEY,
    subject     VARCHAR (255)        DEFAULT NULL,
    start_date  DATE                 DEFAULT NULL,
    end_date    DATE                 DEFAULT NULL,
    description VARCHAR (400)        DEFAULT NULL
);