<?php
/*==========================================================
  FILE: database.sql
  Run this in phpMyAdmin or MySQL CLI to create the database.
  Replace 'voting_system' if you want a different DB name.
==========================================================*/

-- CREATE DATABASE IF NOT EXISTS voting_system
--   CHARACTER SET utf8mb4
--   COLLATE utf8mb4_unicode_ci;
--
-- USE voting_system;

-- ── Candidates ──────────────────────────────────────────
CREATE TABLE IF NOT EXISTS candidates (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    full_name   VARCHAR(120) NOT NULL UNIQUE,
    info_tag    VARCHAR(60)  NOT NULL DEFAULT '',
    image_url   VARCHAR(255) NOT NULL DEFAULT '',
    category    ENUM('Head Boy','Head Girl') NOT NULL,
    votes       INT          NOT NULL DEFAULT 0,
    INDEX idx_category (category)
) ENGINE=InnoDB;

-- ── Students ────────────────────────────────────────────
CREATE TABLE IF NOT EXISTS students (
    id                INT AUTO_INCREMENT PRIMARY KEY,
    full_name         VARCHAR(120) NOT NULL UNIQUE,
    student_id        VARCHAR(8)   NOT NULL UNIQUE,   -- e.g. '0451'
    password          VARCHAR(50)  NOT NULL,
    voted_head_boy    TINYINT(1)   NOT NULL DEFAULT 0,
    voted_head_girl   TINYINT(1)   NOT NULL DEFAULT 0,
    voted_for_boy     VARCHAR(120) NOT NULL DEFAULT '',
    voted_for_girl    VARCHAR(120) NOT NULL DEFAULT '',
    INDEX idx_name (full_name),
    INDEX idx_student_id (student_id)
) ENGINE=InnoDB;

-- ── Comments ────────────────────────────────────────────
CREATE TABLE IF NOT EXISTS comments (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    voter_name      VARCHAR(120) NOT NULL,
    voter_student_id VARCHAR(8)  NOT NULL DEFAULT '',
    voted_for_boy   VARCHAR(120) NOT NULL DEFAULT '',
    voted_for_girl  VARCHAR(120) NOT NULL DEFAULT '',
    comment_text    TEXT         NOT NULL,
    created_at      TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_voter (voter_name),
    INDEX idx_time (created_at)
) ENGINE=InnoDB;

-- ── Default Candidates ──────────────────────────────────
INSERT INTO candidates (full_name, info_tag, image_url, category) VALUES
('Nashon Abel',       'Excellence',   'https://i.pravatar.cc/100?img=11', 'Head Boy'),
('Ramadhani Shabani', 'Leadership',   'https://i.pravatar.cc/100?img=12', 'Head Boy'),
('Ablazaki Nmchewa',  'Innovation',   'https://i.pravatar.cc/100?img=13', 'Head Boy'),
('Fatuma Mwinyi',     'Excellence',   'https://i.pravatar.cc/100?img=47', 'Head Girl'),
('Aisha Ally',        'Innovation',   'https://i.pravatar.cc/100?img=45', 'Head Girl'),
('Halima Said',       'Service',      'https://i.pravatar.cc/100?img=44', 'Head Girl')
ON DUPLICATE KEY UPDATE full_name=VALUES(full_name);
?>
