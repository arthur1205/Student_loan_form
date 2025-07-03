Student Bank Loan Form

This is a simple and clean web application built for collecting student loan application details. It's a beginner friendly full stack project using HTML, CSS, PHP, and MySQL — all written from scratch without any frameworks.

The form takes user details like name, age, gender, email, phone number, and additional info, and stores them in a local MySQL database.


Tech Stack

Frontend: HTML + CSS  
Backend: PHP  
Database: MySQL (via phpMyAdmin)  
Server: XAMPP (Apache + MySQL)


Folder Structure

Bankloan/
index.html - Frontend form
index.php - PHP script to store form data in DB
style.css - CSS for styling the form
bg.png - Background image (optional)


How to Run This Project Locally

1. Install XAMPP if not already installed.
2. Copy the `Bankloan` folder to:
C:/xampp/htdocs/
3. Start Apache & MySQL from the XAMPP control panel.
4. Open phpMyAdmin from your browser:  
http://localhost/phpmyadmin
5. Create a new database called Student_bank_loan.
6. Inside that database, run the following SQL query to create a table:
sql
CREATE TABLE trip (Sno INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50),age INT,gender VARCHAR(10),email,VARCHAR(50),phone VARCHAR(20),other TEXT,dt DATETIME DEFAULT CURRENT_TIMESTAMP);
7. Open your browser and go to:  
http://localhost/Bankloan/index.html
8. Fill the form and hit submit. the data will be stored in your database 

Features

Responsive form layout
Clean and user-friendly UI
Stores submissions in MySQL database
Minimal and focused code — no bloat

To-Do (Future Enhancements)

[ ] Add client-side and server-side form validation
[ ] Use prepared statements to prevent SQL injection
[ ] Display success or error message on the same page
[ ] Show submitted records (admin panel)

Author

Built with patience and late nights by Koteswara durga vara prasad a beginner who’s serious about learning full-stack development.

This was a mini project I built to test and understand how HTML, PHP, and MySQL all work together.

Disclaimer

This is a beginner project for educational purposes only. It does not include security measures like form validation or SQL injection prevention. Please don’t use it in production without improving it.


Final Words

If you're just starting out, keep building small projects like this. Every single form, database connection, and bug fix is one step closer to becoming a real full-stack developer.