<?php 



if (is_admin()){
    $admin =  "
    <div class='dropdown absolute right-0'>

    <label tabindex='0' class='btn m-1 border-0 hover:bg-wood w-0 ' style='background-color:#2A323C;'><iconify-icon icon='ph:dots-three-outline-vertical-fill' width='20' height='20' class='hover:text-blue-700 text-white'></iconify-icon></label>
    <ul tabindex='0' class='bg-wood flex flex-col justify-center items-center space-y-6 dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-10'>
      <li><button type='submit' class='hover:bg-wood p-0'><iconify-icon icon='ic:baseline-delete' width='24' height='24' class='hover:text-green-900 text-red-900'></iconify-icon></button></li>
      <li><button type='submit' class='hover:bg-wood p-0'><iconify-icon icon='wpf:edit' width='24' height='24' class='hover:text-green-900 text-yellow-900'></iconify-icon></button></li>
    </ul>
    </div>";
}else{
    $admin = "";
}

























?>