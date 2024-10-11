# International Telephone Input

This WordPress project includes a form that collects user email addresses and phone numbers (with country codes). After submission, the data is stored in the database and can be viewed in the WordPress Admin dashboard.

## Project Setup

1. **Install WordPress:**
   - Set up your WordPress instance using your preferred method (local or web server).
   
2. **Add the Custom Code:**
   - Follow the instructions provided in the `functions.php` file to add the custom form and validation logic.
   - Ensure the necessary database tables (`phone_numbers` and `email_addresses`) are created.

3. **Install Required Plugins:**
   - Install and activate [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) plugin (if not already installed).

## How to Use

1. **Fill the Form:**
   - Go to the following URL on your WordPress site: `/submit-form/`
   - Fill in the email and phone number (with country code) fields and submit the form.

2. **Form Validation:**
   - The form has validation checks for:
     - Valid email address format.
     - Correct phone number format with country code.
   - If there are any issues with the input, you will see an inline error message under the respective field in red.

3. **Thank You Page:**
   - After successfully submitting the form, you will be redirected to the "Thank You" page where the submitted data is displayed.

## Admin Dashboard

1. **View Submissions:**
   - After form submission, you can view all the submitted data in the WordPress Admin dashboard.
   - Go to **Dashboard > User Submissions** to see a list of all the submitted form data in a tabular format.

## Key Features

- Inline error messages for incorrect input.
- Country code selection for phone numbers.
- Data stored securely in the WordPress database.
- Easy access to submission data from the admin dashboard.
