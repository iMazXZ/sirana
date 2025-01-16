<nav class="container mx-auto bg-white pt-4 flex justify-between items-center px-4">
    <div>
        <a href="/">
            <img src="https://i.ibb.co.com/jyRv50s/LOGO-SIRANA.png" alt="Logo Sirana" class="w-auto h-8 md:h-10">
        </a>
    </div>
    <button id="drawer-toggle" class="md:hidden text-blue-500 text-2xl">☰</button>
    <ul id="navbar" class="hidden md:flex space-x-4">
        <li><a href="/" class="text-blue-500 hover:underline">Home</a></li>
        <li><a href="/news" class="text-blue-500 hover:underline">Berita</a></li>
        <li><a href="/struktur" class="text-blue-500 hover:underline">Struktur Organisasi</a></li>
        <li><a href="/dashboard" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded">Dashboard</a></li>
    </ul>
</nav>
<div id="drawer" class="fixed inset-0 bg-white z-50 hidden px-4">
    <div class="flex justify-end p-4">
        <button id="drawer-close" class="text-blue-500">✖</button>
    </div>
    <ul class="flex flex-col list-none space-y-4 p-4">
        <li><a href="/" class="text-blue-500 hover:underline">Home</a></li>
        <li><a href="/news" class="text-blue-500 hover:underline">Berita</a></li>
        <li><a href="/struktur" class="text-blue-500 hover:underline">Struktur Organisasi</a></li>
        <li class="hidden md:block"><a href="/dashboard" class="bg-yellow-500 text-white font-bold py-2 px-4 mt-4 rounded">Dashboard</a></li>
    </ul>
</div>
<script>
    const drawerToggle = document.getElementById('drawer-toggle');
    const drawer = document.getElementById('drawer');
    const drawerClose = document.getElementById('drawer-close');

    drawerToggle.addEventListener('click', () => {
        drawer.classList.toggle('hidden');
    });

    drawerClose.addEventListener('click', () => {
        drawer.classList.add('hidden');
    });
</script>
