<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">
    @include('layouts.navbar')
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold">Contact Us</h1>
            <p class="mt-4 text-lg">We'd love to hear from you! Send us a message and we'll get back to
                you as soon as possible.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-2xl font-semibold mb-4">Get In Touch</h2>
                <p class=" mb-6">Feel free to reach out to us via email or phone for any inquiries or
                    support.</p>

                <div class="mb-6">
                    <h3 class="font-semibold">Email</h3>
                    <p>darin@gmail.com</p>
                </div>

                <div class="mb-6">
                    <h3 class="font-semibold">Phone</h3>
                    <p>+631234567890</p>
                </div>

                <div>
                    <h3 class="font-semibold">Address</h3>
                    <p>Lapu-Lapu City</p>
                </div>
            </div>

            <div class="bg-gray-800 p-8 shadow-lg rounded-lg">
                <form id="contactForm" onsubmit="handleSubmit(event)">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block  font-semibold mb-2">Name</label>
                        <input type="text" name="name" id="name" required
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black"
                            placeholder="Your Name">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block  font-semibold mb-2">Email</label>
                        <input type="email" name="email" id="email" required
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black"
                            placeholder="Your Email">
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block  font-semibold mb-2">Message</label>
                        <textarea name="message" id="message" required rows="5"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black"
                            placeholder="Your Message"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-600 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div id="thankYouModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-gray-800 rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold mb-4">Thank You!</h2>
            <p>Your message has been sent successfully.</p>
            <button onclick="closeModal()"
                class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Close
            </button>
        </div>
    </div>

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            document.getElementById('thankYouModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('thankYouModal').classList.add('hidden');
            document.getElementById('contactForm').reset();
        }
    </script>
</body>

</html>
