<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<section class="font-poppins ">
        <div class="hidden py-20 text-center bg-blue-100 dark:bg-gray-700 lg:block">
            <div class="max-w-6xl mx-auto mb-24">
                <span class="inline-block text-base font-medium text-red-600 dark:text-blue-300">Welcome !!</span>
                <h2 class="mb-6 font-semibold text-gray-800 text-7xl dark:text-gray-300">Sign Up</h2>
                <p class="mb-6 text-xl text-gray-500 ">Made with Love by Sayandeep</p>
            </div>
        </div>
        <div class="max-w-xl mx-auto ">
            <div class="w-full shadow-lg bg-gray-50 dark:bg-gray-800 mt-11 lg:-mt-36 lg:full p-7 rounded-3xl">
                <span class="flex justify-end mb-8">
                    <a href="<?= site_url('/') ?>" class="px-4 py-3 text-sm font-medium text-gray-100 bg-blue-700 hover:text-blue-200 rounded-lg">
                        Login
                    </a>
                </span>
                <div class="">
                    <form action="<?= base_url('/auth/register_user') ?>" method="post" class="p-0 m-0">
                    <?= csrf_field() ?>
                    <div class="mb-7">
                            <input type="name"
                                class="w-full px-4 py-4 bg-gray-200 rounded-lg dark:bg-gray-700 lg:py-5 dark:text-gray-300 "
                                name="nameuser" placeholder="Enter your Name">
                        </div>
                        <div class="mb-7">
                            <input type="email"
                                class="w-full px-4 py-4 bg-gray-200 rounded-lg dark:bg-gray-700 lg:py-5 dark:text-gray-300 "
                                name="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-6">
                            <div class="relative flex items-center">
                                <input type="password"
                                    class="w-full px-4 py-4 bg-gray-200 rounded-lg lg:py-5 dark:text-gray-300 dark:bg-gray-700 "
                                    name="password" placeholder="Enter password">
                            
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="relative flex items-center">
                                <input type="password"
                                    class="w-full px-4 py-4 bg-gray-200 rounded-lg lg:py-5 dark:text-gray-300 dark:bg-gray-700 "
                                    name="passwordconf" placeholder="re-enter the password">
                            
                            </div>
                        </div>
                        <button
                            class="w-full px-4 py-4 mt-6 font-medium text-gray-200 bg-blue-700 rounded-lg dark:bg-blue-500 hover:text-blue-200 "
                            type="submit">LOGIN</button>
                      
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>