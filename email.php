<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if (isset($_POST['Submit'])) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'maheshwaridhruva0@gmail.com';
        $mail->Password = 'ufuo dmrk zvay ikmy';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($_POST['email'], $_POST['uname']);
        $mail->addAddress('maheshwaridhruva0@gmail.com', 'Dhruva Maheshwari');
        $mail->addReplyTo($_POST['email'], $_POST['uname']);

        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];

        $mail->send();
        echo "<script> alert('Email sent successfully!')</script>";
    } catch (Exception $e) {
        echo "<script> alert('Mail could not be sent. Error: {$mail->ErrorInfo}')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Our Experts | Crop Protection</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #38a169 0%, #2f855a 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .input-focus:focus {
            border-color: #48bb78;
            box-shadow: 0 0 0 3px rgba(72, 187, 120, 0.2);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-green-50 to-green-100 min-h-screen flex items-center justify-center p-4 back">
    <!-- Navigation -->
    <nav class="flex fixed top-0 justify-between items-center bg-white shadow-md w-full px-6 py-4 z-10 b">
        <div class="flex items-center space-x-3">
            <img src="./image/a87020df-7af7-40d8-aba1-61c7819f1e46.jpg" alt="CropGuard Logo" class="h-10 w-10 rounded-full border-2 border-green-400">
            <h1 class="text-xl font-bold text-green-800 font-sans">Crop Protection</h1>
        </div>
        <div class="hidden md:flex items-center space-x-6">
            <a href="main.html" class="text-gray-700 hover:text-green-600 transition-colors flex items-center t">
                Home
            </a>
            <a href="weather.html" class="text-gray-700 hover:text-green-600 transition-colors flex items-center  t">
                Weather
            </a>
            <a href="./leader.html" class="text-gray-700 hover:text-green-600 transition-colors flex items-center t">
                Experts
            </a>
            <a href="contact.html" class="text-gray-700 hover:text-green-600 transition-colors flex items-center t">
                Contact
            </a>
                         <!-- for translate -->
                         <div  id="google_translate_element" class="t"></div>
            <button class="border-2  p-2 rounded-lg" id="dark" onclick="darkmode()">
                <img src="./image/img-30.svg" alt="" class="w-7 h-7">
            </button>
            <button class="border-2   p-2 rounded-lg hidden" id="light" onclick="darkmode()">
                <img src="./image/img-29.svg" alt="" class="w-7 h-7">
            </button>
        </div>

    </nav>

    <!-- Main Form -->
    <div class="w-full max-w-2xl mt-20">
        <form class="bg-white p-8 rounded-xl shadow-xl animate-fade-in b" method="post">
            <!-- From Email -->
            <div class="mb-6">
                <label class="block text-gray-700 mb-2 font-medium t" for="email">Enter Your Email</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </div>

                    <input type="email" name="email" required placeholder="emailaddress@gmail.com"
                        class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none input-focus transition" />
                </div>
            </div>

            <!-- for name -->
            <div class="mb-6">
                <label class="block text-gray-700 mb-2 font-medium t" for="name">Enter Your Name</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm0 2c-4 0-8 2-8 4v1a1 1 0 001 1h14a1 1 0 001-1v-1c0-2-4-4-8-4z" />
                        </svg>
                    </div>

                    <input type="name" name="uname" required placeholder="Enter Your Name"
                        class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none input-focus transition" />
                </div>
            </div>

            <!-- Subject -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2 font-medium t" for="subject">Subject</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="subject" name="subject" required placeholder="What's your question about?"
                        class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none input-focus transition" />
                </div>
            </div>

            <!-- Message -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2 font-medium t" for="message">Your Message</label>
                <textarea id="message" name="message" rows="6" required placeholder="Describe your issue or question in detail..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none input-focus transition "></textarea>
            </div>

            <!-- Send Button -->
            <button type="submit" name="Submit"
                class="w-full btn-gradient text-white font-semibold py-3 rounded-lg shadow-md transition duration-200 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
                Send Message
            </button>
        </form>

    </div>

    <script>
        function darkmode() {
            let dark = document.getElementsByClassName("b");
            for (let i = 0; i < dark.length; i++) {
                dark[i].classList.toggle("bg-black");
            }



            let text = document.getElementsByClassName("t");
            for (let i = 0; i < text.length; i++) {
                text[i].classList.toggle("text-white");
                text[i].classList.toggle("bg-black");


            }

            let text2 = document.getElementsByClassName("para");
            for (let i = 0; i < text2.length; i++) {
                text2[i].classList.toggle("bg-gradient-to-l");
                text2[i].classList.toggle("from-[#b2ef91]");
                text2[i].classList.toggle("to-[#fa9372]");
                text2[i].classList.toggle("bg-clip-text");
                text2[i].classList.toggle("text-transparent");
            }

            let text3 = document.getElementsByClassName("heading");
            for (let i = 0; i < text3.length; i++) {
                text3[i].classList.toggle("bg-gradient-to-l");
                text3[i].classList.toggle("from-[#5da92f]");
                text3[i].classList.toggle("to-[#9bd46a]");
                text3[i].classList.toggle("bg-clip-text");
                text3[i].classList.toggle("text-transparent");
            }

            let backcolor = document.getElementsByClassName("back");
            for (let i = 0; i < backcolor.length; i++) {
                backcolor[i].classList.toggle("bg-gradient-to-l");
                backcolor[i].classList.toggle("from-[#0e1c26]");
                backcolor[i].classList.toggle("via-[#2a454b]");
                backcolor[i].classList.toggle("to-[#294861]");
            }


            let fence = document.getElementsByClassName("fences");
            for (let i = 0; i < fence.length; i++) {
                fence[i].classList.toggle("bg-gray-600");
                // fence[i].classList.toggle("hover:bg-black");

            }


            let btn1 = document.getElementById("dark").classList.toggle("hidden");
            let btn2 = document.getElementById("light").classList.toggle("hidden");

        }

        function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en', // Page language
        includedLanguages: 'en,hi,te,ta,ml,pa,gu,ur,bn,mar,or,kn,mr,ma,ne,as,san,si,sd,sa,th,tl,el,ko,zh-CN', // Indian languages and others
        layout: google.translate.TranslateElement.SIMPLE
    }, 'google_translate_element');


    setTimeout(() => {
      const style = document.createElement('style');
      style.innerHTML = `

        .goog-te-gadget span {
          display: none !important;
        }

         .goog-te-combo {
          background-color: #f9fafb !important; /* Tailwind: bg-gray-50 */
          border: 1px solid #d1d5db !important;  /* Tailwind: border-gray-300 */
          padding: 0.2rem 0.7rem !important;     /* Tailwind: p-2 px-3 */
          border-radius: 0.5rem !important;       /* Tailwind: rounded-lg */
          font-size: .90rem !important;             /* Tailwind: text-base */
          color: #111827 !important;              /* Tailwind: text-gray-900 */
        }
      `;

    document.head.appendChild(style);
    });
    }
    </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>

</html>