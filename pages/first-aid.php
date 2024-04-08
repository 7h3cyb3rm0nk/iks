<?php
include("../connection.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <main class="grid min-h-screen w-full place-items-center bg-gray-900">
        <div class="flex w-[30rem] rounded bg-white" x-data="{ search: '' }">
            <input type="search" class="w-full border-none bg-transparent px-4 py-1 text-gray-900 focus:outline-none" placeholder="Search" x-model="Search" />
            <button class="m-2 rounded px-4 py-2 font-semibold text-gray-100" :class="(search) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'" :disabled="!search">SEARCH</button>
        </div>
    </main>
</body>

</html>