# Laravel AI SDK Chatbot

## About the Project

This project was built to explore Laravel's official AI SDK and learn how to integrate large language models into a Laravel application.

The chatbot allows authenticated users to send messages, receive AI-generated responses, and continue conversations using persistent conversation history. The interface is powered by Livewire and Flux UI, providing a smooth, real-time chat experience without requiring a separate frontend framework.

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Screenshots](#screenshots)
- [Installation](#installation)
- [Project Structure](#project-structure)
- [How It Works](#how-it-works)
- [Future Improvements](#future-improvements)

## Features

- AI-powered chatbot built with Laravel AI SDK
- Persistent conversations with conversation memory
- Real-time chat experience using Livewire
- Thinking indicator while waiting for AI responses
- Graceful error handling for failed AI requests
- Modern responsive interface with Flux UI and Tailwind CSS
- Authentication support for logged-in users


## Tech Stack

### Backend
- **PHP 8.3+**
- **Laravel 13**

### Frontend
- **Livewire**
- **Flux UI**
- **Tailwind CSS**

### AI
- **Laravel AI SDK**
- **Google Gemini**

### Development Tools
- **Vite**
- **Composer**
- **NPM**

```text
User
   │
   ▼
Livewire Chat Component
   │
   ▼
Laravel Assistant Agent
   │
   ▼
Laravel AI SDK
   │
   ▼
Google Gemini
   │
   ▼
Assistant Response
   │
   ▼
Conversation Stored
   │
   ▼
Livewire UI Updates
```

## Installation

Follow these steps to run the project locally.

### 1. Clone the repository

```bash
git clone https://github.com/YOUR_USERNAME/laravel-ai-sdk-chatbot.git
```

### 2. Navigate into the project

```bash
cd laravel-ai-sdk-chatbot
```

### 3. Install PHP dependencies

```bash
composer install
```

### 4. Install JavaScript dependencies

```bash
npm install
```

### 5. Create the environment file

```bash
cp .env.example .env
```

> **Windows (Command Prompt):**

```cmd
copy .env.example .env
```

> **Windows (PowerShell):**

```powershell
Copy-Item .env.example .env
```

### 6. Generate the application key

```bash
php artisan key:generate
```

### 7. Configure your environment variables

Update your `.env` file with your database credentials and Gemini API key.

### 8. Run the database migrations

```bash
php artisan migrate
```

### 9. Start the development server

Open **two terminals**:

Terminal 1

```bash
php artisan serve
```

Terminal 2

```bash
npm run dev
```

Open your browser and visit:

```
http://127.0.0.1:8000
```

## Environment Variables

Create a `.env` file from `.env.example` and configure the following variables:

```env
APP_NAME="Laravel AI SDK Chatbot"

APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

GEMINI_API_KEY=your_gemini_api_key
```

## Project Structure

The project follows Laravel's standard directory structure, with custom AI and chat functionality organized as follows:

```text
app/
├── Ai/
│   └── Agents/
│       └── LaravelAssistant.php     # AI agent responsible for handling conversations
│
├── Livewire/
│   └── Chatbot.php                  # Livewire component for the chat interface
│
resources/
├── views/
│   └── livewire/
│       └── chatbot.blade.php        # Chatbot UI
│
routes/
└── web.php                          # Application routes

config/
└── ai.php                           # Laravel AI SDK configuration
```

### Key Components

- **LaravelAssistant** – Defines the AI agent and its behavior using the Laravel AI SDK.
- **Chatbot Livewire Component** – Handles user input, AI requests, conversation state, and UI updates.
- **Chatbot Blade View** – Renders the chat interface and displays messages.
- **AI Configuration** – Configures the AI provider and SDK settings.

## How It Works

When a user submits a message, the application follows this workflow:

1. The user enters a message in the chat interface.
2. Livewire validates and sends the message to the backend.
3. The Laravel AI SDK retrieves or creates the conversation.
4. The selected AI provider (Google Gemini) generates a response.
5. The assistant's response is stored in the conversation history.
6. Livewire updates the chat interface automatically without reloading the page.

## Future Improvements

Here are some features planned for future versions of the project:

-  Stream AI responses in real-time for a more natural chat experience.
-  Support multiple AI providers (OpenAI, Anthropic Claude, xAI Grok, etc.).
-  Allow users to upload files and ask questions about their contents.
-  Store and manage multiple conversations per user.
-  Add conversation search and filtering.
-  Support voice input and speech-to-text interactions.
-  Further improve the responsive design for mobile devices.
