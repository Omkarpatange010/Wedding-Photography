# 📸 Wedding Photography Website

A **Wedding Photography** web application with **frontend UI**, **backend integration**, and **database connectivity**, deployed on a **Three-Tier AWS Architecture**.

---

## 🚀 Features
- **Home Page** – Elegant landing page with photography showcase
- **Gallery** – Displays wedding photography collections
- **Services** – Detailed list of photography packages
- **Contact Form** – Submit inquiries via PHP backend
- **User Registration & Login** – Secure authentication with PHP & MySQL
- **Payment Page** – Payment processing interface
- **Reviews** – User feedback and testimonials
- **Responsive Design** – Styled with CSS for modern UI/UX

---

## 📂 Project Structure
wedding-photography/
│── home.html
│── home.css
│── gallery.html
│── gallery.css
│── services.html
│── services1.html
│── services2.html
│── services3.html
│── services4.html
│── services5.html
│── services6.html
│── services.css
│── contact.html
│── contact.css
│── contact.php
│── login.html
│── login.css
│── login.php
│── registration.html
│── payment.html
│── payment.php
│── successPage.html
│── review.html
│── review.css
│── database.php
│── style.css
│── mc.png
│── pp.png


---

## 🏗️ Architecture (AWS Three-Tier)
This project is deployed on **AWS Three-Tier Architecture**:

1. **Presentation Tier (Frontend)**  
   - HTML, CSS, JavaScript  
   - Hosted on AWS EC2 (public subnet) or S3 + CloudFront  

2. **Application Tier (Backend)**  
   - PHP files (`login.php`, `contact.php`, `payment.php`)  
   - Runs on Apache/Nginx inside a private subnet EC2 instance  

3. **Database Tier**  
   - MySQL hosted on **AWS RDS** (private subnet)  
   - Connected via `database.php`  

4. **Networking Setup**  
   - **VPC** with public & private subnets  
   - **Route Tables** for traffic flow  
   - **Internet Gateway (IGW)** for frontend access  
   - **NAT Gateway** for backend → internet traffic  
   - **Security Groups & NACLs** for security  

---

AWS Deployment (Three-Tier)

Create a VPC with public & private subnets.

Configure Route Tables, IGW, and NAT Gateway.

Launch EC2 instances for frontend & backend.

Deploy MySQL on AWS RDS (private subnet).

Update database.php with RDS endpoint, username, and password.

Attach Security Groups to allow HTTP/HTTPS and DB connections.

Use CloudFront + S3 (optional) for static file hosting (images, CSS, JS).

📸 Screens (Pages)

home.html → Homepage

gallery.html → Wedding gallery

services.html → Services offered

contact.html → Contact form

login.html / registration.html → User auth

payment.html / payment.php → Payment integration

review.html → Client reviews

The diagram will include In ThreeTier Architecture:

VPC

Public Subnet → EC2 (Frontend / Web Tier)

Private Subnet → EC2 (Backend / App Tier)

Private Subnet → RDS (Database Tier)

Internet Gateway + NAT Gateway

Route Tables showing connectivity

## 🏗️ Architecture Diagram  
![Architecture](images/vpc.png)
![Architecture](images/VPC.drawio.png)
