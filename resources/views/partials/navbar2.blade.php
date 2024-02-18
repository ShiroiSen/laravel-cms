<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="flex items-center justify-around bg-gray-900 p-4 font-semibold">
        <!-- Bagian kiri -->
        <div class="flex items-center">
            <a href="/blogs" class="text-white hover:text-blue-700">
                <p id="myText" class="opacity-0 transition-opacity duration-1000">< Back</p>
            </a>
        </div>

        <!-- Bagian tengah -->
        <div class="flex items-center ">
            <a href="/dashboard" class="text-white hover:text-blue-700 py-2 px-3">Dashboard</a>
            <a href="/categories" class="text-white hover:text-blue-700 py-2 px-3">Categories</a>
            <a href="/blogs" class="text-white hover:text-blue-700 py-2 px-3">Blogs</a>
        </div>

        <!-- Bagian kanan -->
        <div class="flex items-center space-x-4">
            <a href="/mail" class="text-white hover:text-blue-700">Mail</a>
            <a href="#" class="text-white hover:text-blue-700">Profile</a>
        </div>
    </div>

    <script>
        setTimeout(function() {
            document.getElementById("myText").classList.add("opacity-100");
        }, 250);
    </script>
</body>
</html>