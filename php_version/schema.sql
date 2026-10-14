CREATE DATABASE IF NOT EXISTS smartcourse CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE smartcourse;

CREATE TABLE IF NOT EXISTS subjects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(160) NOT NULL,
  code VARCHAR(40) NOT NULL UNIQUE,
  department VARCHAR(120) DEFAULT 'General',
  semester VARCHAR(80) DEFAULT 'Semester 1',
  outcomes TEXT,
  units TEXT,
  course_calendar TEXT,
  resources TEXT,
  website_overview TEXT,
  responsible_ai_policy TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS attendance (
  id INT AUTO_INCREMENT PRIMARY KEY,
  subject_id INT NOT NULL,
  student_id VARCHAR(80) NOT NULL,
  attendance_date DATE NOT NULL,
  status ENUM('Present','Absent','Late') NOT NULL DEFAULT 'Present',
  FOREIGN KEY(subject_id) REFERENCES subjects(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS marks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  subject_id INT NOT NULL,
  student_id VARCHAR(80) NOT NULL,
  assessment VARCHAR(160) NOT NULL,
  obtained DECIMAL(8,2) NOT NULL,
  maximum DECIMAL(8,2) NOT NULL,
  FOREIGN KEY(subject_id) REFERENCES subjects(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS research_papers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  subject_id INT NOT NULL,
  title VARCHAR(300) NOT NULL,
  authors VARCHAR(300),
  publication_year INT,
  doi_url VARCHAR(500),
  summary TEXT,
  verified BOOLEAN DEFAULT FALSE,
  FOREIGN KEY(subject_id) REFERENCES subjects(id) ON DELETE CASCADE
);

INSERT IGNORE INTO subjects(name,code,department,semester,outcomes,units,course_calendar,resources,website_overview,responsible_ai_policy)
VALUES
('Computer Science','CS101','Computer Science','Semester 1','CO1: Explain computing fundamentals (Understand)\nCO2: Apply algorithms to solve problems (Apply)','Programming foundations; Algorithms; Testing','Week 1: Introduction\nWeek 2: Core concepts','Lecture notes; practice worksheet','Computer Science course overview. Add the approved syllabus.','Disclose AI assistance, verify facts and citations, and protect private information.'),
('Artificial Intelligence','AI201','Computing','Semester 3','CO1: Explain AI concepts\nCO2: Apply learning methods','AI foundations; Search; Machine learning','Week 1: Introduction\nWeek 2: AI basics','Slides; verified research papers','AI course overview. Add the approved syllabus.','Disclose AI assistance, verify facts and citations, and protect private information.');
