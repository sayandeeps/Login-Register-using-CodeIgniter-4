<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<div class="flex items-center h-screen w-full justify-center">

<div class="max-w-xs">
    <div class="bg-white shadow-xl rounded-lg py-3">
        <div class="photo-wrapper p-2">
            <!--writable/uploads/13_sam_1697677946_c2447cc0d3cc192aad62.png-->
            <img class="w-32 h-32 rounded-full mx-auto" src="<?= PHOTOPATH.$avatar ?>" alt="John Doe">


        </div>
        <div class="p-2">
            <h3 class="text-center text-xl text-gray-900 font-medium leading-8"><?= $username ?></h3>
            <div class="text-center text-gray-400 text-xs font-semibold">
                <p><?= $designation ?> </p>
            </div>
            <!-- <form action="/auth/uploadpic" method= "post" enctype="multipart/form-data" >
                <div class="input-group">
                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="userfile"
                    aria-describedby="inputGroupFileAddon01">
                    
                </div>
                <div class="input-group-prepend">
                    <button class="input-group-text" id="inputGroupFileAddon01" type="submit">Upload</button>
                </div>
                </div>
            </form> -->

            <section class="flex items-center  font-poppins ">
        <div class="justify-center flex-1 max-w-6xl py-1 mx-auto text-center lg:py-10 ">
            <div class="" x-data="{ open: false }">
                <button
                    class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium"
                    @click="open = true">Change Image</button>
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
                    style="background-color: rgba(0,0,0,.5);" x-show="open">
                    <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl  md:max-w-4xl md:p-6 lg:p-8 "
                        @click.away="open = false">
                        <button @click="open = false"
                            class="float-right  hover:text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-6 h-6 bi bi-x" viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </button>
                        <div class="flex flex-wrap ">
                            <div class="w-full px-4 mb-10 md:w-1/2 md:mb-0">
                                <img src="<?= PHOTOPATH.$avatar ?>"
                                    class="object-cover w-full h-full rounded">
                            </div>
                            <div class="w-full px-4 md:w-1/2 ">
                                <h2 class="mb-4 text-3xl font-bold text-gray-700 ">
                                    Upload Your Image
                                </h2>
                                <p class="mb-4 text-base text-gray-500 ">
                                    Made with love by Sayandeep
                                </p>

                                <span class="block rounded-md shadow-sm ">
                                <form action="/auth/uploadpic" method= "post" enctype="multipart/form-data" >
                                    <input type="file"
                                        class="w-full px-4 py-4 mb-4 bg-gray-100 border border-gray-200 rounded  "
                                        name="userfile">
                                    <button
                                        class="inline-flex justify-center w-full px-4 py-4 text-white bg-blue-500 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 hover:bg-blue-700" type="submit">
                                        Upload
                                    </button>
                                </form>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  

            <section class=" ">
        <div class="justify-center flex-1 max-w-6xl py-1 mx-auto text-center lg:py-10 ">
            <div class="" x-data="{ open: false }">
                <button
                    class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium"
                    @click="open = true">Edit details</button>
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
                    style="background-color: rgba(0,0,0,.5);" x-show="open">
                    <div class="h-auto p-6 mx-2 text-left bg-white rounded-md shadow-xl  md:max-w-4xl "
                        @click.away="open = false">
                        <div class="flex items-start justify-between mb-6">
                            <div class="p-2 bg-blue-100 rounded-full ">
                            <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M1 5h1.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 1 0 0-2H8.576a3.228 3.228 0 0 0-6.152 0H1a1 1 0 1 0 0 2Zm18 4h-1.424a3.228 3.228 0 0 0-6.152 0H1a1 1 0 1 0 0 2h10.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 0 0 0-2Zm0 6H8.576a3.228 3.228 0 0 0-6.152 0H1a1 1 0 0 0 0 2h1.424a3.228 3.228 0 0 0 6.152 0H19a1 1 0 0 0 0-2Z"/>
</svg>
                            </div>
                            <button @click="open = false"
                                class="border border-transparent  hover:text-blue-600 "
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-8 h-8 bi bi-x" viewBox="0 0 16 16">
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="mb-6 leading-normal text-center">
                            <h1 class="mb-2 text-lg font-bold text-gray-700  ">Add or edit you personal information</h1>
                            <p class="mb-6 text-sm font-medium text-gray-400  ">Made with love by Sayandeep</p>
                            <form action="<?= site_url('/auth/edit') ?>" method="post" class="">
                            <input class="w-full p-3 mb-4 text-sm font-medium bg-gray-100 border rounded-md  focus:border-blue" name="address" type="text" placeholder="Enter your address">
<input class="w-full p-3 mb-4 text-sm font-medium bg-gray-100 border rounded-md  focus:border-blue" name="designation" type="text" placeholder="Enter your designation">
<input class="w-full p-3 mb-4 text-sm font-medium bg-gray-100 border rounded-md  focus:border-blue" name="phone" type="text" placeholder="Enter your phone">

                        </div>
                        <span class="justify-center  rounded-md  md:flex">
                            <button @click="open = false"
                                class="inline-flex justify-center w-full px-4 py-2 mb-4 text-blue-500 border border-blue-500 rounded-md   md:mb-0 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 hover:text-gray-100 hover:bg-blue-600">
                                Cancel
                            </button>
                            <button
                            class="inline-flex justify-center w-full px-4 py-2 mb-4 text-white border border-blue-500 rounded-md  md:mb-0 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 hover:text-gray-100 bg-blue-600" type="submit">
                                Submit
                            </button>
                        </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

            <table class="text-xs my-3">
                <tbody><tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                    <td class="px-2 py-2"><?= $address ?></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                    <td class="px-2 py-2"><?= $phone ?></td>
                </tr>
                <tr>
                    <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                    <td class="px-2 py-2"><?= $email ?></td>
                </tr>
            </tbody></table>

            <div class="text-center my-3">
                <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="/auth/logout">Log Out</a>
               
            </div>
            <div class="text-center my-3">
                <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="/auth/deleteuser">Delete Account</a>
               
            </div>

        </div>
    </div>
</div>

</div>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>