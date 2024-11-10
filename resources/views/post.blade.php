<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Box</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}"> <!-- Link to your CSS -->
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo01.png') }}" alt="logo" width="125px">
                        </a>
                        <span class="site-name" id="site-name">HelloFixer</span>
                    </div>
    
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="{{ url('/') }}" class="menu-item" data-key="home">Home</a></li>
                            <li><a href="{{ url('/about-us') }}" class="menu-item" data-key="about">About</a></li>
                            <li><a href="{{ url('/contact') }}" class="menu-item" data-key="contact">Contact</a></li>
                            <li>
                                <a href="{{ url('/products') }}" class="dropdown-toggle" data-toggle="dropdown"
                                    data-key="services">Services <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                <li><a href="{{ url('/service1') }}" data-key="service1">Air Conditioner <br>And Appliance</a></li>
    
                                    <li><a href="{{ url('/service2') }}" data-key="service2">Television And LED</a></li>
                                    <li><a href="{{ url('/service3') }}" data-key="service3">Water Purifier</a></li>
                                    <li><a href="{{ url('/service4') }}" data-key="service4">Carpenter</a></li>
                                    <li><a href="{{ url('/service5') }}" data-key="service5">Electrician</a></li>
                                    <li><a href="{{ url('/service6') }}" data-key="service6">Plumber</a></li>
                                    <li><a href="{{ url('/service7') }}" data-key="service7">Inverter And Battery</a></li>
                                    <li><a href="{{ url('/service8') }}" data-key="service8">Car Repairing</a></li>
                                    <li><a href="{{ url('/service9') }}" data-key="service9">CCTV Camera</a></li>
                                    <li><a href="{{ url('/service10') }}" data-key="service10">Cleaning Services</a></li>
                                    <li><a href="{{ url('/service11') }}" data-key="service11">Interior Design</a></li>
                                    <li><a href="{{ url('/service12') }}" data-key="service12">Welding</a></li>
                                </ul>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-key="languages">
                                    Languages <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onclick="changeLanguage('en')">
                                            <img src="https://flagsapi.com/US/flat/32.png" alt="US Flag"
                                                style="width: 20px; margin-right: 5px;">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="changeLanguage('bn')">
                                            <img src="https://flagsapi.com/BD/flat/32.png" alt="Bangladesh Flag"
                                                style="width: 20px; margin-right: 5px;">
                                            বাংলা
                                        </a>
                                    </li>
                                </ul>
                            </li>
    
                            <li><a href="{{ url('/account') }}" class="menu-item" data-key="account">Account</a></li>
                            <li><a href="{{ url('/faq') }}" class="menu-item" data-key="faq">FAQ's</a></li>
                            <li><a href="{{ url('/faq') }}" class="menu-item" data-key="faq">Feedback</a></li>
                        </ul>
                    </nav>
                </div>
                </div> <!-- Close navbar -->
            </div> <!-- Close container -->
        </div> <!-- Close header -->
    </header>

    <!-- Main content section -->
    <main>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: radial-gradient(#fff, #ffffff);
            height: 100vh;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header-container > form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header-container {
            text-align: center;
        }

        .header-container > h1 {
            font-size: 50px;
            margin: 30px;
            text-shadow: 2px 2px rgb(200, 200, 200);
        }

        .input-box {
            width: 300px;
            margin-bottom: 15px;
            text-align: left;
        }

        .input-box input,
        .input-box textarea,
        .custom-file-upload {
            width: 300px; /* Match all box sizes */
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .input-box textarea {
            height: 100px;
            

        }

        .custom-file-upload {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 2px dashed #cacaca;
            background-color: rgba(255, 255, 255, 1);
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .custom-file-upload .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-file-upload .icon svg {
            height: 80px;
        }

        .custom-file-upload .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-file-upload .text span {
            font-weight: 400;
            color: rgba(75, 85, 99, 1);
        }

        .custom-file-upload input {
            display: none;
        }

        .preview-container img {
            max-width: 100%;
            height: auto;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .preview-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 1000px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 20px;
            border-radius: 10px;
            margin: 50px;
            background-color: rgba(255, 255, 255, 1);
        }

        .preview-container > img {
            height: 100px;
        }

        .upload-button {
            padding: 10px;
            width: 300px; /* Match all box sizes */
            border-radius: 10px;
            border: none;
            font-size: 15px;
            background-color: rgba(255, 255, 255, 1);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            cursor: pointer;
        }

        .uploaded-image-container {
            display: flex;
            flex-direction: column;
            width: 400px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 10px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 1);
            margin-top: 30px;
            height: 140px;
        }

        .uploaded-image-container > h2{
            margin: 2px;
            text-shadow: 2px 2px rgb(200, 200, 200);
        }

        .images {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            overflow-y: auto;
        }

        .images > img {
            height: 150px;
            width: 300px;
            margin: 5px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .images > img:hover {
            transform: scale(1.05);
        }
        .upload-button {
    background-color: green; /* Green background */
    color: white; /* White text color */
    border: none; /* Removes border */
    padding: 10px 20px; /* Adds padding */
    font-size: 16px; /* Adjusts font size */
    cursor: pointer; /* Changes cursor to pointer when hovering */
    border-radius: 5px; /* Optional: Adds rounded corners */
    transition: background-color 0.3s ease; /* Smooth background color change */
}

.upload-button:hover {
    background-color: darkgreen; /* Darker green when hovered */
}

        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
}

.navbar
{
    display: flex;
    align-items: center;
    padding: 20px;
}

nav{
    flex: 1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style-type: none;
}
nav ul li{
    display: inline-block;
    margin-right: 20px;
}
a{
    text-decoration: none;
    color: #555;
}
p{
    color: #555;
}
.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.col-2{
    flex-basis: 50%;
    min-width: 300px;
}
.col-2 img{
    max-width: 100%;
    padding: 50px 0;
}
.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
}
.btn{
    display: inline-block;
    background: #ff523b;
    color: white;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
}
.btn:hover{
    background: #563434;
}
.header{
    background: radial-gradient(#fff,#ffd6d6);
}
.header .row{
    margin-top: 70px;
}
.categories{
    margin: 70px 0;
}
.col-3{
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}
.col-3 img{
    width: 100%;
}
.small-container{
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.col-4{
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
}
.col-4 img{
    width: 100%;
}
.title{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555;
}
.title::after{
    content: '';
    background: #ff523b;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}

/* Ensure the body takes up the full height */
html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

/* Main content should grow and take up available space */
main {
    flex-grow: 1;
}

/* Footer styles */
.footer {
    background: black;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
    margin-top: auto; /* Pushes footer to the bottom */
    display: flex; /* Enable flexbox */
    flex-direction: column; /* Stack footer columns vertically */
    align-items: center; /* Center horizontally */
    justify-content: center; /* Center vertically */
    text-align: center; /* Center text inside each column */
}

.footer p {
    color: #8a8a8a;
}

.footer h3 {
    color: #fff;
    margin-bottom: 20px;
}

.footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4 {
    min-width: 250px;
    margin-bottom: 20px;
}

.footer-col-1 {
    flex-basis: 30%;
}

.footer-col-2 {
    flex: 1;
    text-align: center;
}

.footer-col-2 img {
    width: 180px;
    margin-bottom: 20px;
}

.footer-col-3, .footer-col-4 {
    flex-basis: 12%;
    text-align: center;
}

ul {
    list-style-type: none;
}

.app-logo {
    margin-top: 20px;
}

.app-logo img {
    width: 140px;
}

.footer hr {
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}

.copyright {
    text-align: center;
}

.menu-icon {
    width: 28px;
    margin-left: 20px;
    display: none;
}



.form-container{
    background: #fff;
    width: 300px;
    height: 400px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    margin: auto;
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}
.form-container span{
    font-weight: bold;
    padding: 0 10px;
    color: #555;
    cursor: pointer;
    width: 100px;
    display: inline-block;
}
.form-btn{
    display: inline-block;
}
.form-container form{
    max-width: 300px;
    padding: 0 20px;
    position: absolute;
    top: 130px;
    transition: transform 1s;
}
form input{
    width: 100%;
    height: 30px;
    margin: 10px 0;
    padding: 0 10px;
    border: 1px solid #ccc;
}
form .btn{
    width: 100%;
    border: none;
    cursor: pointer;
    margin: 10px 0;
}
form .btn:focus{
    outline: none;
}


/* Extra for menu*/
 /* Basic styles for MenuItems */
 #MenuItems {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    #MenuItems li {
        position: relative;
        padding: 8px;
    }

    /* Dropdown styling */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 100px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        z-index: 1;
        list-style: none;
        padding: 10px 0;
        margin: 0;
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    /* Dropdown item styling */
    .dropdown-content li {
        padding: 8px 16px;
    }

    .dropdown-content li a {
        text-decoration: none;
        color: #333;
        display: block;
    }

    .dropdown-content li a:before {
        text-decoration: none;
        color: #333;
        display: block;
    }

    .dropdown-content li a:hover {
        background-color: #f0f0f0;
    }

    /* Show dropdown on hover */
    .dropdown:hover .dropdown-content {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    /* Ensuring the parent li maintains proper spacing */
    .dropdown {
        cursor: pointer;
        padding-right: 20px;
    }

    /* Adjusting the positioning of the navigation */
    .navbar nav {
        position: relative;
        top: 6px;
        /* Move upward by 10px */
        right: -250px;
        /* Move to the right by 20px */
    }

    /* Basic styles for MenuItems */
    #MenuItems {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        align-items: center;
        /* Center vertically */
    }

    /* Adjust the dropdown positioning */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 100px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        z-index: 1;
        list-style: none;
        padding: 10px 0;
        margin: 0;
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .dropdown-content li {
        padding: 8px 16px;
    }

    .dropdown-content li a {
        text-decoration: none;
        color: #333;
        display: block;
    }

    .dropdown-content li a:hover {
        background-color: #f0f0f0;
    }

    /* Show dropdown on hover */
    .dropdown:hover .dropdown-content {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    /* Ensuring the parent li maintains proper spacing */
    .dropdown {
        cursor: pointer;
        padding-right: 20px;
    }

    .logo {
        display: flex;
        /* Aligns the logo and site name horizontally */
        align-items: centre;
        /* Center the items vertically */
        transform: translateX(-300%);
    }

    .site-name {
        font-size: 24px;
        /* Adjust the font size as needed */
        font-weight: 600;
        /* Bold font for the name */
        color: #333;
        /* Color for the text */
        margin-left: 15px;
        /* Space between the logo and the name */
        animation: fadeIn 1s ease-in-out;
        /* Apply the animation */
    }

    /* Navigation menu styles */
    nav {
        margin-top: -20px;
        /* Reduced space between logo and nav */
    }

    #MenuItems {
        list-style: none;
        /* Remove bullet points */
        padding: 0;
        /* Remove default padding */
        margin-left: 10px;
        /* Space between the menu and the logo/text */
    }
    #MenuItems li {
        position: relative;
        padding: 10px;
    }


    #MenuItems a {
        text-decoration: none;
        /* Remove underline from links */
        color: #050505;
        /* Text color */
        font-weight: bold;
        /* Make the text bold */
        font-size: 18px;
        /* Increase text size */
    }

    .small-container {
        width: 90%;
        margin: auto;
    }

    /* Animation keyframes */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            /* Start completely transparent */
            transform: translateY(-20px);
            /* Start slightly above */
        }

        100% {
            opacity: 1;
            /* End fully visible */
            transform: translateY(0);
            /* End at the original position */
        }
    }

    .nav {
        list-style: none;
        /* Remove default list styling */
        padding: 0;
        /* Remove default padding */
        margin: 0;
        /* Remove default margin */
    }

    .nav>li {
        position: relative;
        /* Position relative for dropdown positioning */
    }

    .dropdown-menu {
        display: none;
        /* Hide dropdown by default */
        position: absolute;
        /* Position absolutely for dropdown */
        top: 100%;
        /* Position it below the parent element */
        left: 0;
        /* Align left */
        z-index: 1000;
        /* Ensure it appears above other content */
    }

    .dropdown:hover .dropdown-menu {
        display: block;
        /* Show dropdown on hover */
    }

    .dropdown-menu li {
        white-space: nowrap;
        /* Prevent wrapping of menu items */
    }

    .dropdown-menu a {
        display: block;
        /* Make the links block level for better click area */
        padding: 8px 16px;
        /* Add padding for clickable area */
        text-decoration: none;
        /* Remove underline from links */
    }

    .dropdown-menu a:hover {
        background-color: #f1f1f1;
        /* Change background on hover */
    }

    #copyright {
        text-align: center;
    }


    </style>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="header-container">

                <form action="./endpoint/upload.php" method="POST" enctype="multipart/form-data">
                    <!-- Title Box -->
                    <div class="input-box">
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" placeholder="Enter title here" required>
                    </div>

                    <!-- Description Box -->
                    <div class="input-box">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" placeholder="Enter description here" required></textarea>
                    </div>

                    <!-- Image Upload -->
                    <label class="custom-file-upload" for="file">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24">
                                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="text">
                            <span>Click to upload image</span>
                        </div>
                        <input type="file" name="file[]" id="file" multiple>
                    </label>

                    <div class="preview-container" style="display: none;">
                        <!-- Preview of selected images -->
                    </div>

                    <button type="submit" class="upload-button" style="display: none;">Upload Image</button>
                </form>
            </div>

            <div class="uploaded-image-container">
                <h2>Uploaded Images:</h2>
                <!-- Display uploaded images here -->
            </div>

        </div>
    </div>

    <script>
        document.getElementById('file').addEventListener('change', handleFileSelect);

        function handleFileSelect(event) {
            const previewContainer = document.querySelector('.preview-container');
            const uploadedImageContainer = document.querySelector('.uploaded-image-container');
            const uploadButton = document.querySelector('.upload-button');
            previewContainer.style.display = '';
            uploadButton.style.display = '';
            uploadedImageContainer.style.display = 'none';

            const files = event.target.files;
            for (const file of files) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const image = document.createElement('img');
                    image.src = e.target.result;
                    previewContainer.appendChild(image);
                };

                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>

    </main>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <p>&copy; 2024 HelloFixer. All rights reserved.</p>
                <ul class="footer-links">
                    <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms') }}">Terms of Service</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Include JS files -->
    <script src="{{ asset('js/app1.js') }}"></script>
</body>

</html>
