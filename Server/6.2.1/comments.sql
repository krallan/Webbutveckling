-- auto-generated definition
CREATE TABLE comments
(
  `_id`   INT AUTO_INCREMENT,
  name    VARCHAR(255)                        NULL,
  email   VARCHAR(255)                        NULL,
  website VARCHAR(255)                        NULL,
  comment TEXT                                NULL,
  created TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);
