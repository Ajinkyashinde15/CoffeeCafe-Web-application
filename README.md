# CoffeeCafe-Web-application
A jQuery Mobile web application which will help them sell coffee to staff who work in local businesses. It concept is to have a coffee ordering app which has a quick and simple ordering process, allowing customers to order from their phone no matter where they currently are.

Account Types
The web application will have two different account types:
•	Customer: A customer can register and then log into the system to place an order
•	Staff: The staff can view the orders which have been placed, and update the status of an order from “ordered” to “delivered”.

 
Specific Requirements
•	When the application first loads, the user should have the option to register or to login to application. A new account should contain basic information such as name, address and telephone number.
•	At any time, the user should have the ability to edit their own profile.
•	When the application loads, the user should be able to place a new order in the system.
•	An order consists of, the type of coffee they would like; the size of the coffee; the quantity of the coffee and the address they would like the coffee to be delivered to.
•	One an order has been made, the order information and details of what they ordered should be stored in a database table with a timestamp of when the order was placed.
•	When the order has been placed, they should be redirected to a page saying “Your order is on its way!”
•	A user should be able to see a list of orders which they have placed.
•	At any time, the user should have the ability to log back out of the application.

•	The admin should have a separate login page, where once they log into the system, they should see a list of the orders that have been placed.
•	When the admin is viewing the orders, they should have the ability to select an individual order and change the status to “Delivered!”

•	Storing passwords in plain text is a security issue that should be avoided. When users register for a new account, the password that they enter should be hashed and salted.

•	All input fields should be validated using client side validation, checking for length and blank values.

•	After any user has logged in, a session should be started storing their username for greeting the user. 

•	After a user has finished with the system, an option should exist to logout and destroy the current session.

•	As the company is sensitive to automated attacks, a CAPTCHA should be added onto the login page to ensure that automated bots cannot login.

•	The database structure should be designed and implemented ensuring that each record can be easily identified if a single order needs to be referenced (Primary key, Auto Increment).




