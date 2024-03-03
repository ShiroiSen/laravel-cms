<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="pt-20">
        <div class="font-sans">
            <div class=" flex">
                <!-- Nav Dash -->
                <div class="flex-1">
                    <div class="flex flex-row justify-around max-w-lg mx-auto my-9">
                        <a href="/dashboard" class="text-xl {{ Request::is('dashboard') ? '!text-blue-700' : '' }}">General Info</a>
                        <a href="/dashboard/blogs" class="text-xl {{ Request::is('dashboard/blogs*') ? '!text-blue-700' : '' }}">Manage Blogs</a>
                    </div>
                    <div class="border-b border-black max-w-7xl mx-auto"></div>
                </div>
            </div>
        </div>  
    </div>
</body>
</html>