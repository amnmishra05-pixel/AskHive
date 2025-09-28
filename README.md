# AskHive

AskHive is a PHP-based Q&A platform where users can ask questions, categorize them, and provide answers. The main focus of this project is functionality, including user login/signup, question posting, answering, and category-based question browsing.

> Note: The design is basic and still a work in progress, but all key features are fully functional.

### Features

1. User registration and login system
2. Users can create questions with a title, description, and category
3. Questions are organized by categories displayed on the homepage sidebar
4. Users can view the latest questions — newest questions appear at the top
5. Users can answer their own questions or answer others’ questions
6. Users can delete their own questions
7. Questions and answers are stored in a MySQL database managed with phpMyAdmin

### Technologies Used

- PHP

* MySQL (via phpMyAdmin)

+ HTML & CSS

- Bootstrap (for basic styling and responsiveness)

+ VS Code (development environment)

### Project Structure
askhive/
├── index.php
├── client/
│   ├── answer.php
│   ├── ask.php
│   ├── category.php
│   ├── categorylist.php
│   ├── commenFiles.php
│   ├── header.php
│   ├── login.php
│   ├── que-details.php
│   ├── questions.php
│   └── signup.php
├── common/
│   └── db.php
├── public/
│   └── style.css
└── server/
    └── request.php



### 🚀 Getting Started

1. Clone the repository

    git clone https://github.com/amnmishra05-pixel/AskHive.git

2. Import database.sql into your MySQL database using phpMyAdmin
3. Update database connection details in your PHP config file
4. Open the project folder in VS Code or your preferred editor
5. Run the project on a local PHP server (e.g., XAMPP, WAMP, or built-in PHP server)

### Notes

- _This project prioritizes backend functionality; the UI is simple and may be improved in the future._

* _It is a personal project aimed at learning PHP and building practical web applications._

### Contact

 _Feel free to get in touch for feedback or questions:_

+ **GitHub: amnmishra05-pixel**

- **Email: amn.mishra05@gmail.com**

* **Contact No.: 9990072628**

