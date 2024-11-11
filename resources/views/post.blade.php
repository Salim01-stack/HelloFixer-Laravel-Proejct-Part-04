@extends('layouts.app3')

<!-- Assuming you have a layout file -->


@section('content')
<section class="contact_section layout_padding">
    <head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
           
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
@endsection
