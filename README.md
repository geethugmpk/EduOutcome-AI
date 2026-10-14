# EduOutcome AI
### AI-Powered Educational Outcome Planning and Course Design

EduOutcome AI is an educational support platform designed to help faculty members plan courses, align learning outcomes, design assessments, and maintain academic records. The project aims to simplify educational planning and support Outcome-Based Education (OBE) practices through a structured digital interface.

## 🚀 Features

- **Course Planning:** Organize course details and academic planning activities.
- **Outcome-Based Education (OBE):** Support the planning and management of course outcomes.
- **CO–PO Mapping:** Organize Course Outcomes (COs) and Program Outcomes (POs) for outcome alignment.
- **Assessment Management:** Support assessment planning and related academic activities.
- **Bloom's Taxonomy:** Help categorize learning objectives according to cognitive levels.
- **Experiential Learning:** Support the organization of experiential learning activities.
- **Interactive Learning:** Provide a dedicated interface for interactive learning activities.
- **Academic Records and Reports:** Organize educational records and reporting information.
- **Research Support:** Provide a section for research-related academic activities.
- **Responsible AI:** Include a dedicated section for responsible AI considerations.
- **User Authentication:** Provide login and registration interfaces.

*Feature availability depends on the selected implementation and its current configuration.*

## 🛠️ Technology Stack

### Flask Implementation
- Python
- Flask
- HTML
- CSS
- Jinja2 templates

### PHP Implementation
- PHP
- SQL
- HTML
- CSS

### Development Tools
- Git
- GitHub
- Visual Studio Code (recommended)

## 📁 Project Structure

```text
EduOutcomes-AI/
├── README.md
├── .gitignore
├── LOGIN_SETUP.txt
├── docs/
│   └── DATABASE_SCHEMA.md
├── flask_app/
│   ├── app.py
│   ├── requirements.txt
│   ├── static/
│   │   ├── style.css
│   │   ├── learning-hero.svg
│   │   └── teacher-student.svg
│   └── templates/
│       ├── base.html
│       ├── dashboard.html
│       ├── planning.html
│       ├── assessment.html
│       ├── mapping.html
│       ├── obe.html
│       ├── bloom.html
│       ├── records.html
│       ├── reports.html
│       ├── research.html
│       ├── responsible.html
│       └── other templates...
└── php_version/
    ├── config.php
    ├── index.php
    ├── module.php
    ├── planning.php
    ├── records.php
    ├── research.php
    ├── schema.sql
    └── other PHP files...
```

## ⚙️ Installation and Setup

### Option 1: Run the Flask Application

**1. Clone the repository**

```bash
git clone https://github.com/geethugmpk/EduOutcome-AI.git
cd EduOutcome-AI
```

**2. Create a virtual environment**

Windows:

```powershell
python -m venv venv
.\venv\Scripts\Activate.ps1
```

**3. Install dependencies**

```bash
pip install -r flask_app/requirements.txt
```

**4. Run the application**

```bash
python flask_app/app.py
```

**5. Open the application**

Check the terminal for the local address printed by Flask, then open that address in your browser. The default development address is commonly `http://127.0.0.1:5000/`.

### Option 2: Run the PHP Implementation

1. Install a local PHP development environment, such as XAMPP.
2. Place the project’s `php_version` folder inside the appropriate web server directory.
3. Configure the database connection in `php_version/config.php`.
4. If a database is required, create it and import `php_version/schema.sql`.
5. Start Apache and the required database service.
6. Open the project through your local web server.

Follow the project configuration files and setup instructions for any additional requirements.

## 🎯 Project Objectives

- Simplify course design and academic planning.
- Support Course Outcome and Program Outcome alignment.
- Organize assessment planning and learning activities.
- Provide a structured digital workspace for faculty.
- Encourage responsible and effective use of AI in education.

## 🔒 Security and Privacy

- Never commit passwords, API keys, access tokens, or private database credentials.
- Store sensitive configuration values in environment variables.
- Use secure password hashing and appropriate session management.
- Use test data when developing and demonstrating the application.
- Review the `.gitignore` file before committing sensitive files.

## 🔮 Future Enhancements

Potential future improvements include:

- AI-assisted course outcome generation.
- Automated CO–PO mapping recommendations.
- Assessment question generation based on Bloom's Taxonomy.
- Learning outcome attainment analysis and visualization.
- Exportable academic reports.
- Integration with learning management systems.
- Explainable AI recommendations for educational planning.

These are proposed enhancements and may not be implemented in the current version.

## 🤝 Contributing

Contributions, suggestions, and improvements are welcome.

1. Fork the repository.
2. Create a feature branch.
3. Implement and test your changes.
4. Commit your changes with a descriptive message.
5. Submit a pull request.

## 📄 License

No license has been specified yet. Please add an appropriate open-source license before permitting others to reuse, modify, or distribute this project.

## 👩‍💻 Author

**EduOutcome AI Project**

GitHub Repository: https://github.com/geethugmpk/EduOutcome-AI

---

*EduOutcome AI — Supporting structured course design, educational outcome alignment, and digital academic planning.*
