# EduOutcome AI — Flask + SQLite + PHP starter

A teaching-workflow prototype with ten course-design modules, manual syllabus fields, Bloom's Taxonomy question drafts, CO–PO mapping, and downloadable subject reports. The Flask version includes a username-or-email login, registration, password hashing, session logout, a refreshed responsive theme, and a local SVG education illustration.

## Run on Windows (PowerShell)

1. Extract this ZIP to a normal folder, for example `E:\FDP\EduOutcome_AI_Flask_PHP_Project`.
2. Open PowerShell and enter the Flask folder:

   ```powershell
   cd E:\FDP\EduOutcome_AI_Flask_PHP_Project\flask_app
   ```

3. Create/activate a virtual environment if you do not already have one in this folder:

   ```powershell
   python -m venv .venv
   .\.venv\Scripts\Activate.ps1
   ```

4. Install requirements and run:

   ```powershell
   python -m pip install -r requirements.txt
   python app.py
   ```

5. Open `http://127.0.0.1:5000`. New users can create an account; sign in using either their username or email address and password.

## Login features

- Register with username, email, and a password of at least 8 characters.
- Login with either username or email address.
- Passwords are stored as Werkzeug password hashes, not plaintext.
- Protected Flask pages redirect to login when signed out; the sign-out action clears the session.
- Sessions use HTTP-only cookies and SameSite=Lax.

## Important prototype note

This is a local development/capstone prototype. Existing sample subjects and course records are shared in the application database between registered accounts; the current version does **not** provide per-user ownership or authorization for individual subjects. Do not put confidential student information in it or deploy it publicly as-is. Before production use, configure a strong random `SECRET_KEY` environment variable, HTTPS, CSRF protection, account recovery/rate limits, and per-user data permissions. The PHP starter is provided separately and does not include the Flask login feature.

## Existing database

The app uses SQLite by default and creates/migrates its tables on startup. Keep your existing database file backed up before replacing application files. Do not delete the database if you want to retain your course records.


## Latest update
- CO–PO mapping supports CO1–CO5 and common Engineering PO1–PO11.
- Bloom question papers can be exported as Word (.docx), PDF, and JPG from the Bloom’s Taxonomy page.
- Install updated requirements with `pip install -r requirements.txt`.
