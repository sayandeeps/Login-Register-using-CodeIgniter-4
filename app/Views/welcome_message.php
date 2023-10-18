<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<section class=" font-poppins">
        <div
            class="relative z-10 flex items-center h-screen py-16 overflow-hidden lg:bg-blue-900 lg:dark:bg-gray-800 2xl:py-44">
            <div
                class="absolute top-0 left-0 w-full h-full lg:bg-blue-900 dark:bg-bg-gray-700 lg:bottom-0 lg:h-auto lg:w-4/12">
                <img src="https://i.postimg.cc/XJBZvxHp/first.jpg" alt=""
                    class="hidden object-cover w-full h-full lg:block">
            </div>
            <div class="relative max-w-6xl px-4 mx-auto">
                <div class="justify-center max-w-xl mx-auto lg:max-w-5xl">
                    <div class="flex flex-wrap items-center -mx-4">
                        <div class="w-full px-4 lg:w-2/5">
                            <div class="z-10 w-full p-10 shadow-md bg-gray-50 dark:bg-gray-900 rounded-lg ">
                                <h2 class="text-xl font-bold leading-tight mb-7 md:text-2xl dark:text-gray-300">
                                    Login to your account</h2>
                                    <?php if (isset($validation)) : ?>
                                        <div class = "col-12 bg-gray-100" >
                                            <div class = "bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role= "alert">
                                                <?= $validation->listErrors() ?>
                                    </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (isset($error)) : ?>
                                        <div class = "col-12 bg-gray-100" >
                                            <div class = "bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role= "alert">
                                                Invalid Email or Password
                                    </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (isset($success)) : ?>
                                        <div class = "col-12 bg-gray-100" >
                                            <div class = "p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role= "alert">
                                                success
                                    </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if (isset($deleted)) : ?>
                                        <div class = "col-12 bg-gray-100" >
                                            <div class = "bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role= "alert">
                                                User Deleted Successfully
                                    </div>
                                    </div>
                                    <?php endif; ?>

                                <form action="/auth/login" method="post" class="mt-4">
                                    <?= csrf_field() ?>
                                    <div>
                                        <label for="" class="block text-gray-700 dark:text-gray-300">Email:</label>
                                        <input type="text"
                                            class="w-full px-4 py-3 mt-2 bg-gray-200 rounded-lg dark:text-gray-100 dark:bg-gray-800"
                                            name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="mt-4">
                                        <div>
                                            <label for="" class="text-gray-700 dark:text-gray-300 ">Password:</label>
                                            <div class="relative flex items-center mt-2">
                                                <input type="password"
                                                    class="w-full px-4 py-3 bg-gray-200 rounded-lg dark:text-gray-400 dark:bg-gray-800 "
                                                    name="password" placeholder="Enter password">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="w-full px-4 py-3 mt-4 font-semibold text-gray-700 bg-yellow-400 rounded-lg hover:text-gray-700 hover:bg-blue-200 "
                                        type="submit">LOGIN</button>
                                    <div class="mt-4 text-gray-700  dark:text-gray-300">
                                        Need
                                        an account?
                                        <a href="<?= site_url('auth/register') ?>" class="font-semibold text-blue-700 hover:underline">
                                            Create an account </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="hidden w-full px-6 mb-16 lg:w-3/5 lg:mb-0 lg:block">
                            <span
                                class="flex items-center justify-center w-20 h-20 mx-auto text-gray-900 bg-yellow-400 rounded-lg dark:bg-yellow-300 mb-9">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </span>
                            <h2
                                class="text-4xl font-bold text-center text-gray-100 dark:text-gray-400 mb-9 lg:text-6xl ">
                                Welcome to my login and register using Codeignitor 4</h2>
                            <p class="text-xl font-semibold text-center text-gray-200 dark:text-gray-500 ">Made with love by Sayandeep</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>
</html>