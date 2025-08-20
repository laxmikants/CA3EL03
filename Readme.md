# PHP, AJAX & jQuery with MySQL – Course Repository

Welcome to the course repository!  
This repo contains lecture notes, code examples, and lab practicals for the subject **PHP, AJAX, and jQuery with MySQL**.

---

## 📌 Learning Outcomes

- **CO1:** Identify exceptions and demonstrate filters in PHP. (*Understand, Apply*)  
- **CO2:** Apply file handling and utilize regular expressions. (*Apply*)  
- **CO3:** Implement cookies and sessions, and demonstrate sending email. (*Apply*)  
- **CO4:** Develop web solutions using Ajax and jQuery with PHP. (*Apply*)  
- **CO5:** Integrate PHP, Ajax, jQuery, and MySQL to analyze data-driven apps. (*Analyze*)  

---

## 📖 Unit I: Exception Handling and PHP Filters

- **Key Concepts**:  
  - Exception Handling in PHP: `try`, `throw`, `catch` blocks.  
  - `finally` block and its use in cleanup operations.  
  - Creating custom exception classes.  
  - Handling multiple exceptions using multiple `catch` blocks.  
  - Throwing exceptions multiple times, using default exceptions.  
  - PHP Filters: introduction and uses.  

---

## 📖 Unit II: Working with Files, Directories & Regular Expressions

- **Key Concepts**:  
  - File operations: opening, closing, copying, renaming, and deleting files.  
  - Fetching file and directory information.  
  - Uploading and downloading files in PHP.  
  - Understanding file & directory structures.  
  - Regular Expressions:  
    - Basics of regex in PHP.  
    - String matching and pattern matching.  
    - Splitting and replacing text using regex.  

---

## 📖 Unit III: Cookies, Sessions, and PHP Mail Function

- **Key Concepts**:  
  - **Cookies**:  
    - Introduction, syntax, creating cookies, storing data in cookies.  
    - Retrieving and deleting cookie values.  
  - **Sessions**:  
    - Introduction to sessions.  
    - Creating sessions, storing session variables.  
    - Destroying sessions.  
  - **Email in PHP**:  
    - Email background and Internet Mail Protocols.  
    - Structure of an email message.  
    - Sending email using PHP (`mail()` function).  

---

## 📖 Unit IV: Introduction to AJAX and jQuery

- **Key Concepts**:  
  - **AJAX**:  
    - Introduction, features, request–response cycle.  
    - AJAX events and interaction with PHP.  
  - **jQuery**:  
    - Introduction and features of jQuery.  
    - Uses of jQuery, library functions & basics.  
    - Selectors and attributes.  
    - Traversing DOM and handling events.  

---

## 📖 Unit V: Integrating PHP, AJAX & jQuery with MySQL Database

- **Key Concepts**:  
  - Integrating PHP forms with MySQL databases using sessions.  
  - PHP + AJAX + jQuery integration with MySQL.  
  - Retrieving and displaying database data dynamically using AJAX and jQuery.  
  - Building interactive applications with PHP, MySQL, and jQuery.  

---

## 🧑‍💻 Lab Practicals

1. Write a program to handle exception in PHP.  
2. Write a PHP program for creating custom exception handler.  
3. Write a PHP program for re-throwing exceptions.  
4. Write a program to implement filters in PHP.  
5. Write a PHP program to open and close a file.  
6. Write a PHP program to perform various operations on file such as copying, renaming, deleting and fetching information from file.  
7. Write a program to upload and download a file in PHP.  
8. Write a program to implement regular expression in PHP.  
9. Write a program to split string into array by regular expression.  
10. Write a program to create cookies and store data in cookies.  
11. Write a program to retrieve cookies value and delete cookies.  
12. Write a program to create session and store session value.  
13. Write a program to destroy session.  
14. Write a program to send email with PHP.  
15. Write a program to use Ajax in PHP form submitting.  
16. How to insert and retrieve data from database using Ajax.  
17. Write a program to use Ajax in PHP with jQuery.  
18. Write a program to retrieve data from database in PHP using Ajax.  
19. Create PHP form connects with database using session.  
20. Write a program to fetch data from database using jQuery, Ajax and PHP.  

---

## 📂 Repository Structure

- **php-ajax-course/**
  - **Unit-1-Exception-Handling/**
    - `notes.md` – Lecture notes for Unit 1  
    - **examples/** – PHP code examples for Unit 1  
  - **Unit-2-Files-Directories-Regex/**
    - `notes.md` – Lecture notes for Unit 2  
    - **examples/** – PHP code examples for Unit 2  
  - **Unit-3-Cookies-Sessions-Email/**
    - `notes.md` – Lecture notes for Unit 3  
    - **examples/** – PHP code examples for Unit 3  
  - **Unit-4-AJAX-jQuery/**
    - `notes.md` – Lecture notes for Unit 4  
    - **examples/** – PHP & jQuery code examples for Unit 4  
  - **Unit-5-PHP-AJAX-MySQL/**
    - `notes.md` – Lecture notes for Unit 5  
    - **examples/** – PHP + MySQL + AJAX integration examples  
  - `README.md` – Course overview, outcomes, units, and lab practicals


## 🛠️ Real-World Applications with PHP, MySQL, and AJAX

### 1. Student Management System 🎓
**Features:**
- Add, update, and delete student records.
- Manage attendance and grades.
- AJAX-powered search & filters.

**Tech Focus:** PHP (CRUD), MySQL (storage), AJAX (real-time search)

---

### 2. Online Polling / Voting System 🗳️
**Features:**
- Create polls and let users vote.
- Show results dynamically with AJAX (no page reload).
- Store results in MySQL.

**Tech Focus:** AJAX requests + jQuery DOM updates + PHP backend

---


### 3. Online Quiz Application 📝
**Features:**
- Users can take quizzes.
- AJAX-based question navigation.
- Results calculated and displayed instantly.

**Tech Focus:** PHP (logic), AJAX (navigation), MySQL (questions/answers)


## ⚡ Applications with PHP Frameworks

### 1. Blog Application (Laravel) 📰
**Features:**
- User authentication (register/login).
- Create, edit, and delete blog posts.
- Comment system with relationships.  
**Tech focus:** Laravel (Eloquent ORM, Blade templates, Auth system).

---

### 2. To-Do List Manager (CodeIgniter) ✅
**Features:**
- Add, edit, and mark tasks as completed.
- AJAX-based task updates without refresh.
- User session management.  
**Tech focus:** CodeIgniter (MVC structure, lightweight controllers, MySQL).

---

### 3. E-Commerce Store (Symfony) 🛍️
**Features:**
- Product listing with categories.
- Shopping cart with session handling.
- Checkout with Stripe/PayPal integration.  
**Tech focus:** Symfony components, Doctrine ORM, API integration.

---

### 4. Event Booking System (Laravel + Vue.js) 🎟️
**Features:**
- Create and manage events.
- Book tickets in real-time with Vue.js frontend.
- Payment gateway integration.  
**Tech focus:** Laravel API + Vue.js (SPA), MySQL.

---

### 5. REST API for Mobile App (Lumen) 📱
**Features:**
- Provide JSON-based API endpoints.
- JWT authentication.
- Scalable for mobile clients.  
**Tech focus:** Lumen (micro-framework), REST API, MySQL.