<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="output.css">
</head>
<body>
    

<div class="max-w-sm mx-auto flex items-center justify-center min-h-screen">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Email
                </th>
                <td class="px-6 py-4">
                    <?php
                        echo $_POST['email'];
                    ?>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Nama
                </th>
                <td class="px-6 py-4">
                    <?php
                        echo $_POST['nama'];
                    ?>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    NIM
                </th>
                <td class="px-6 py-4">
                    <?php
                        echo $_POST['NIM'];
                    ?>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Fakultas
                </th>
                <td class="px-6 py-4">
                    <?php
                        echo $_POST['fakultas'];
                    ?>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Jurusan
                </th>
                <td class="px-6 py-4">
                    <?php
                        echo $_POST['jurusan'];
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <form action="index.php" method="post">
                    <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Logout</button>
                    </form>
                </th>
            </tr>
        </tbody>
    </table>
   
</div>

</body>
</html>