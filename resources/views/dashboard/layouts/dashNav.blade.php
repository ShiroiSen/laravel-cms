<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <body>
        <div class="pt-20">
            <div class="font-sans">
                <div class=" flex">
                    <!-- Nav Dash -->
                    <div class="flex-1">
                        <div class="flex flex-wrap justify-around max-w-3xl mx-auto my-9">
                                <a href="/dashboard" class="text-xl {{ Request::is('dashboard') ? '!text-blue-700' : '' }}">Main Dashboard</a>
                                <a href="/dashboard/blogs" class="text-xl {{ Request::is('dashboard/blogs*') ? '!text-blue-700' : '' }}">Manage Blogs</a>
                            
                            @can('admin')
                                <a href="/dashboard/categories" class="text-xl {{ Request::is('dashboard/categories*') ? '!text-blue-700' : '' }}">Manage Categories</a>
                                <a href="/dashboard/confirms" class="text-xl {{ Request::is('dashboard/confirms*') ? '!text-blue-700' : '' }}">Manage confirmation</a>
                            @endcan
                        </div>
                        <div class="border-b border-black max-w-7xl mx-auto"></div>
                    </div>
                </div>
            </div>  
        </div>
    </body>
</body>
</html>