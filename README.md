# Tapp-Summarizer

## Project Overview
**Tapp-Summarizer** is a Laravel-based application that provides users with a powerful tool to upload and summarize PDF documents. This app simplifies the process of extracting key information from lengthy PDFs, providing concise summaries in just a few clicks. It is designed for both guest and authenticated users, each with specific summarization limits.

## Features
- **PDF Summarization:** Upload a PDF document and receive a summarized version of its content.
- **Guest Users:**
  - Can summarize up to **5 PDFs** for free.
  - After reaching the limit, users need to authenticate to continue summarizing more PDFs.
- **Authenticated Users:**
  - Can summarize up to **10 PDFs**.
  - Users can sign up or log in to increase their summary limit.
- **User-friendly Interface:** A chat-like interface for uploading PDFs and receiving summaries.
- **File Management:** Easily track how many summaries you’ve used and how many remain.

## Installation

### Prerequisites
Ensure you have the following installed:
- PHP (>= 8.2)
- Composer
- Laravel (11.x)
- MySQL or any other supported database

### Steps to Set Up

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-repo/tapp-summarizer.git
   cd tapp-summarizer
   ```

2. **Install Dependencies:**
    Use Composer to install all required dependencies:
    ```bash
    composer update
    ```

3. **Set Up Environment Configuration:**
    Copy the example environment file .env.example to .env
    ```bash
    cp .env.example .env
    ```
    Open the .env file and update your database, mail, and other necessary configurations.

4. **Generate the Application Key:**
    Generate a new application key using the Laravel artisan command:
    ```bash
    php artisan key:generate
    ```

5. **Run Database Migrations:**
    Set up the database by running the migrations:
    ```bash
    php artisan migrate
    ```

6. **Serve the Application:**
    Start the Laravel development server:
    ```bash
    php artisan serve
    ```

    Your application will be accessible at http://localhost:8000.

## Usage

### Guest Users
- **Limit:** Guest users are allowed to summarize up to **5 PDFs**.
- After the limit is reached, guest users will need to authenticate (sign up or log in) to summarize additional PDFs.

### Authenticated  Users
- **Limit:** Authenticated users can summarize up to **10 PDFs**.
- After logging in, authenticated users have a higher limit to summarize more documents.

### Steps to Summarize a PDF
- **Upload a PDF:** Click on the upload button and select a PDF file from your device.
- **Get the Summary:** After uploading, the app processes the PDF and provides a summary of its contents.
- **Track Your Usage:** View how many summaries you’ve used and how many you have left in your account.

### Authentication
- **Guest Mode:** Users can use the summarizer in guest mode, but only up to 5 PDFs.
- **Sign Up/Login:** Register or log in to access more features and increase the limit to 10 PDFs.

## License
This project is developed by [Asif Mostofa Sazid](https://bd.linkedin.com/in/asifsazid) under the supervision of [Tappware Solution Ltd](https://tappware.com/) and is licensed under [MIT license](https://opensource.org/licenses/MIT). For more information, please refer to the LICENSE file in this repository.