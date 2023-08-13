<header class="px-3 py-3" style="background-color: #292F33;">
        <div class="containerborder-gray-500 flex justify-between items-center py-2">
            <h1 class="w-64 text-3xl text-red-600 font-semibold">Bolbol Chat</h1>
            <form action="" method='post'>
                <button type="submit" id="profile" class="bg-green-800 rounded-full px-4 py-2 text-xl font-medium text-black" style="background-color: #98B4D4;" name='logout'>
                Logout
                </button>
            </form>
        </div>
    </header>
<?php if (isset($_POST["logout"])) {
    echo "
    <script>
    $(document).ready(function(){
            $('*').hide()
      })
    </script>
    <html>
    <body class='bg-black'>
        <h1 class='text-blue-900 text-9xl w-full mx-auto flex jusify-center items-center mt-48'>Good night $online_user</h1>
    </body>
    </html>
    ";
    session_destroy();
    header("Refresh:3,url=../index.php");
    exit;
}
?>