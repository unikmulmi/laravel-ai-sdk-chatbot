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

### AI
- **Laravel AI SDK**
- **Google Gemini**

### Frontend
- **Livewire**
- **Flux UI**
- **Tailwind CSS**

### Development Tools
- **Vite**
- **Composer**
- **NPM**

## How It Works

When a user submits a message, the application follows this workflow:

1. The user enters a message in the chat interface.
2. Livewire validates and sends the message to the backend.
3. The Laravel AI SDK retrieves or creates the conversation.
4. The selected AI provider (Google Gemini) generates a response.
5. The assistant's response is stored in the conversation history.
6. Livewire updates the chat interface automatically without reloading the page.
