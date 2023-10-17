<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>

    <style>
        div.logo {
            height: 200px;
            width: 155px;
            display: inline-block;
            opacity: 0.08;
            position: absolute;
            top: 2rem;
            left: 50%;
            margin-left: -73px;
        }
        body {
            height: 100%;
            background: #fafafa;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #777;
            font-weight: 300;
        }
        h1 {
            font-weight: lighter;
            letter-spacing: normal;
            font-size: 3rem;
            margin-top: 0;
            margin-bottom: 0;
            color: #222;
        }
        .wrap {
            max-width: 1024px;
            margin: 5rem auto;
            padding: 2rem;
            background: #fff;
            text-align: center;
            border: 1px solid #efefef;
            border-radius: 0.5rem;
            position: relative;
        }
        pre {
            white-space: normal;
            margin-top: 1.5rem;
        }
        code {
            background: #fafafa;
            border: 1px solid #efefef;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            display: block;
        }
        p {
            margin-top: 1.5rem;
        }
        .footer {
            margin-top: 2rem;
            border-top: 1px solid #efefef;
            padding: 1em 2em 0 2em;
            font-size: 85%;
            color: #999;
        }
        a:active,
        a:link,
        a:visited {
            color: #dd4814;
        }
    </style>
      <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<div class="flex items-center justify-center h-screen">
                                            <div class="flex-col space-y-4 text-center">
                                                <div class="text-5xl font-medium">Page not found</div>
                                                <div class="text-gray-500">Sorry, the page you're looking for isn't available.</div>
                                                <div class="flex items-center justify-center">
                                                    <div class="bg-fuchsia-600 px-4 py-1 text-white font-medium rounded-lg  hover:scale-105 cursor-pointer"><a href="<?= site_url('/')?>"><span class="text-white">Back to home</span></a></div>
                                
                                                </div>
                                            </div>
                                        </div>
                                
                                
                                
                                    <script src="https://cdn.tailwindcss.com"></script> 
</body>
</html>
