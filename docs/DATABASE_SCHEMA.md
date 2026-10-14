# Database schema overview

## Flask / SQLAlchemy tables
- `subject`: multi-subject course profile and course planning fields, plus website content, case study, assessment draft, policy, improvement plan.
- `attendance`: subject_id, student_id, date, status.
- `mark`: subject_id, student_id, assessment, obtained, maximum.
- `research_paper`: subject_id, title, authors, year, DOI/source URL, summary, user verification flag.
- `quiz_question`: subject_id, question, answer.

All child records use foreign keys to the subject table. SQLAlchemy creates the SQLite schema at startup.

## Production improvements
For the full institutional release, add separate tables for students, enrollments, program outcomes, course outcomes, CO–PO mapping, units, assessments, assessment questions, question-to-CO mappings, submissions, feedback, users, roles, audit logs and AI conversation citations. Apply database migrations and role-based row-level security.
