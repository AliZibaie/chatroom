<?php
session_start();
$online_user = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
</head>

<body class="bg-subtle_gray relative">
    <?php require_once 'homepage_parts/header.php' ?>
    <main class="relative pb-2 w-full h-full">
        <?php require_once 'homepage_parts/profile.php' ?>
        <div class='  flex my-10 mx-auto w-full relative flex justify-center h-full'>
            <?php require_once 'homepage_parts/leftside.php'; ?>
            <div class='w-2/4 '>
                <diV class='w-100 bg-wood border-2 border-black p-5 flex flex-col overflow-y-auto relative' style='height:500px;'>
                <form action="" method="post">
                    <?php require_once 'homepage_parts/public_chat.php'; ?>
                    </form>
                </div>
                <?php require_once 'homepage_parts/sendMessage.php'; ?>
            </div>


        </div>
    </main>

    <!-- <form action="bolbol.php" method="get">
        <div class='dropdown'>
            <label tabindex='0' class='btn m-1 border-0 hover:bg-wood w-0 text-black bg-black' style='background-color:#E0B589;'><iconify-icon icon='ph:dots-three-outline-vertical-fill' width='20' height='20' class='hover:text-green-900 text-black'></iconify-icon></label>
            <ul tabindex='0' class='bg-wood flex flex-col justify-center items-center space-y-6 dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-10'>
                <li><button type='submit' class='hover:bg-wood p-0'><iconify-icon icon='ic:baseline-delete' width='24' height='24' class='hover:text-green-900 text-red-900'></iconify-icon></button></li>
                <li><button type='submit' class='hover:bg-wood p-0'><iconify-icon icon='wpf:edit' width='24' height='24' class='hover:text-green-900 text-yellow-900'></iconify-icon></button></li>
            </ul>
        </div>
    </form> -->








    <!-- scripts -->

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        wood: '#EDD59E',
                        wood2: '#ebd193',
                        wood3: '#e7c87e',
                        subtle_gray: '#EDF1FF',
                    }
                }
            }
        }
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script>
        $('#profile-content').hide();
        $(document).ready(function() {
            $('#profile').on('click', () => {
                $('#profile-content').toggle();
            })
        });
        $(document).ready(function() {
            $('#close-profile-jquery').on('click', () => {
                $('#profile-content').hide();
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#private-room').on('click', () => {
                $('#private-chats').toggle();
            })
        });
    </script>
    <script>
        $(".<?php $uniqueId2 ?>").hide();
        $(document).ready(function() {
            $(".<?php $uniqueId ?>").on('click', () => {
                $(".<?php $uniqueId2 ?>").toggle();
            })
        });
        $(".<?php $uniqueId4 ?>").hide();
        $(document).ready(function() {
            $(".<?php $uniqueId3 ?>").on('click', () => {
                $(".<?php $uniqueId4 ?>").toggle();
            })
        });
    </script>
    <script>
        // Initialization for ES Users
        import {
            Dropdown,
            Ripple,
            initTE,
        } from "tw-elements";

        initTE({
            Dropdown,
            Ripple
        });
    </script>
</body>

</html>