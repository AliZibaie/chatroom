<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body class="bg-subtle_gray">
    <form action="../app/authentication/loginFun.php" method="post" id="loginform">
        <div class="container  w-96 mx-auto mt-20 space-y-5 flex flex-col justify-between px-5 py-8 rounded-2xl bg-wood hover:bg-wood2 hover:shadow-2xl border-2 border-black">
            <!-- header title -->
            <div class="header flex justify-center text-3xl text-black">Login Form</div>
            <!-- username -->
            <div class="input-group flex flex-col space-y-5">
                <label for="username" class="text-2xl text-black">Username</label>
                <input type="text" name="username" id="username" class="border-2 border-gray-500 p-3 rounded-md text-lg focus:text-green-700 focus:outline-blue-700" placeholder="Enter your username">
            </div>
            <!-- password -->
            <div class="input-group flex flex-col space-y-5 relative">
                <label for="password" class="text-2xl text-black ">Password</label>
                <input type="password" name="password" id="password" class="border-2 border-gray-500 p-3 rounded-md text-lg focus:text-green-700 focus:outline-blue-700" placeholder="Enter your password">
                <div class="icons">
                    <iconify-icon icon="zondicons:view-show" class="absolute hide-password bottom-10 right-8" id=""></iconify-icon>
                    <iconify-icon icon="bxs:hide" class="absolute show-password top bottom-10 right-8" id=""></iconify-icon>
                </div>
            </div>
            <!-- links -->
            <div class="btn-group flex justify-between items-center">
                <button type="submit" class="bg-green-700 text-white py-2 px-6 rounded-full text-xl font-normal hover:bg-green-600 cursor-pointer">Login</button>
                <div href="" class="text-red-700 text-lg hover:text-red-500 cursor-pointer" id="signup">havent signed up yet?</div>
            </div>
            <!-- social media icons -->
            <div class="border 2xl:border-solid border-gray-500"></div>
            <div class="flex justify-between">
                <div class="bg-wood border border-gray-600 rounded-xl px-5 py-1 hover:bg-wood3">
                    <iconify-icon width="36" height="36" icon="devicon:facebook"></iconify-icon>
                </div>
                <div class="bg-wood border border-gray-600 rounded-xl px-5 py-1 hover:bg-wood3">
                    <iconify-icon width="36" height="36" icon="flat-color-icons:google"></iconify-icon>
                </div>
                <div class="bg-wood border border-gray-600 rounded-xl px-5 py-1 hover:bg-wood3">
                    <iconify-icon width="36" height="36" icon="basil:apple-solid"></iconify-icon>
                </div>
                <div class="bg-wood border border-gray-600 rounded-xl px-5 py-1 hover:bg-wood3">
                    <iconify-icon width="36" height="36" icon="logos:whatsapp-icon"></iconify-icon>
                </div>
            </div>
        </div>
    </form>
    <form action="../app/authentication/registerFun.php" method="get"  id="signupform">
        <div class="container mx-auto my-20 space-y-5 flex flex-col justify-between px-5 py-8 rounded-2xl bg-wood hover:bg-wood2 hover:shadow-2xl border-2 border-black" style="width: 500px;">
            <!-- header title -->
            <div class="header flex justify-center text-3xl text-black">Register Form</div>
            <!-- name -->
            <div class="input-group flex flex-col space-y-5">
                <label for="name" class="text-2xl text-black">Name</label>
                <input type="text" name="name2" id="name" class="border-2 border-gray-500 p-3 rounded-md text-lg focus:text-green-700 focus:outline-blue-700" placeholder="Enter your name">
            </div>
            <!-- username -->
            <div class="input-group flex flex-col space-y-5">
                <label for="username" class="text-2xl text-black">Username</label>
                <input type="text" name="username2" id="username" class="border-2 border-gray-500 p-3 rounded-md text-lg focus:text-green-700 focus:outline-blue-700" placeholder="Enter your username">
            </div>
            <!-- email -->
            <div class="input-group flex flex-col space-y-5">
                <label for="email" class="text-2xl text-black">Email</label>
                <input type="email" name="email" id="email" class="border-2 border-gray-500 p-3 rounded-md text-lg focus:text-green-700 focus:outline-blue-700" placeholder="Enter your email">
            </div>
            <!-- password -->
            <div class="input-group flex flex-col space-y-5">
                <label for="password" class="text-2xl text-black ">Password</label>
                <input type="password" name="password2" id="password" class="border-2 border-gray-500 p-3 rounded-md text-lg focus:text-green-700 focus:outline-blue-700" placeholder="Enter your password">
            </div>
            <!-- repeat password -->
            <div class="input-group flex flex-col space-y-5">
                <label for="password" class="text-2xl text-black ">Repeat Password</label>
                <input type="password" name="rpassword" id="password" class="border-2 border-gray-500 p-3 rounded-md text-lg focus:text-green-700 focus:outline-blue-700" placeholder="Enter your password">
            </div>
            <!-- links -->
            <div class="btn-group flex justify-between items-center">
                <button type="submit" class="bg-green-700 text-white py-2 px-6 rounded-full text-xl font-normal hover:bg-green-600 cursor-pointer">Sign Up</button>
                <div class="text-red-700 text-lg hover:text-red-500 cursor-pointer" id="login">already have an account? login here</div>
            </div>
            <!-- social media icons -->
            <div class="border 2xl:border-solid border-gray-500"></div>
            <div class="flex justify-between">
                <div class="bg-wood border border-gray-600 rounded-xl px-5 py-1 hover:bg-wood3">
                    <iconify-icon width="36" height="36" icon="devicon:facebook"></iconify-icon>
                </div>
                <div class="bg-wood border border-gray-600 rounded-xl px-5 py-1 hover:bg-wood3">
                    <iconify-icon width="36" height="36" icon="flat-color-icons:google"></iconify-icon>
                </div>
                <div class="bg-wood border border-gray-600 rounded-xl px-5 py-1 hover:bg-wood3">
                    <iconify-icon width="36" height="36" icon="basil:apple-solid"></iconify-icon>
                </div>
                <div class="bg-wood border border-gray-600 rounded-xl px-5 py-1 hover:bg-wood3">
                    <iconify-icon width="36" height="36" icon="logos:whatsapp-icon"></iconify-icon>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                wood: '#EDD59E',
                subtle_gray:'#EDF1FF',
                wood2:'#ebd193',
                wood3:'#e7c87e',
              }
            }
          }
        }
      </script>
      <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="../assets/js/login.js"></script>
      <script src='../assets/js/forms_jquery.js'>
      </script>
</body>
</html>