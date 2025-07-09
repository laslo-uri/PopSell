<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Us — PopSell</title>
    <link rel="icon" href="{{ asset('images/popsell-favicon.png') }}" type="image/png" />
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50 text-gray-800 flex items-center justify-center min-h-screen px-4">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        <h1 class="text-3xl font-bold mb-2 text-pink-600">Get in Touch</h1>
        <p class="mb-6 text-gray-600">Questions? Praise? Rants? We’re all ears — and ready to help.</p>

        <form method="POST" class="space-y-4">
            @csrf
            <input 
                type="text" 
                name="name" 
                placeholder="Your name (or cool nickname)" 
                required 
                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-500" 
            />

            <input 
                type="email" 
                name="email" 
                placeholder="Your email (for real, we promise no spam)" 
                required 
                class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-pink-500" 
            />

            <textarea 
                name="message" 
                rows="5" 
                placeholder="Write your message here... make it good!" 
                required 
                class="w-full border border-gray-300 rounded px-4 py-2 resize-y focus:outline-none focus:ring-2 focus:ring-pink-500"
            ></textarea>

            <button 
                type="submit" 
                class="w-full bg-pink-600 text-white font-semibold py-2 rounded hover:bg-pink-700 transition"
            >
                Send It!
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-gray-400">
            Or just yell really loud — but email works better. 📬
        </p>
    </div>
</body>
</html>
