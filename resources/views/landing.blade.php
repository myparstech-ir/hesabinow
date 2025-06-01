<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حسابینو | نرم‌افزار حسابداری ابری</title>
    <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
    <link rel="icon" href="/favicon.ico">
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen flex flex-col justify-between font-sans">

    <!-- Header -->
    <header class="w-full flex justify-between items-center py-6 px-8 bg-white/80 shadow-lg fixed top-0 left-0 z-50 backdrop-blur">
        <div class="flex items-center gap-3">
            <img src="/logo.svg" alt="حسابینو" class="w-12 h-12">
            <span class="text-2xl font-extrabold text-blue-700">حسابینو</span>
        </div>
        <div class="flex items-center gap-4">
            <a href="{{ route('login') }}" class="px-5 py-2 border border-blue-600 text-blue-700 rounded-xl hover:bg-blue-50 transition">ورود</a>
            <a href="{{ route('register') }}" class="px-5 py-2 bg-blue-700 text-white rounded-xl hover:bg-blue-800 shadow transition">ثبت‌نام رایگان</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="flex flex-col-reverse md:flex-row justify-between items-center pt-36 md:pt-44 pb-12 px-4 md:px-32 gap-8">
        <div class="w-full md:w-2/3 text-right">
            <h1 class="text-4xl md:text-5xl font-extrabold text-blue-700 leading-tight mb-6">
                مدیریت مالی آسان و هوشمند<br>
                برای کسب‌وکارهای مدرن
            </h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8">
                با حسابینو، حسابداری و مدیریت مالی کسب‌وکارت را ساده، سریع و حرفه‌ای انجام بده. <br>
                راهکار ابری، امنیت بالا و ابزارهای هوشمند برای رشد و موفقیت شما.
            </p>
            <div class="flex gap-4">
                <a href="{{ route('register') }}" class="bg-blue-700 text-white px-7 py-3 rounded-xl text-lg font-bold hover:bg-blue-800 transition shadow-lg">شروع رایگان</a>
                <a href="#features" class="px-7 py-3 border border-blue-600 text-blue-700 rounded-xl text-lg hover:bg-blue-50 transition">آشنایی با امکانات</a>
            </div>
        </div>
        <div class="w-full md:w-1/3 flex justify-center">
            <img src="/images/hero-dashboard.png" alt="پیش‌نمایش حسابینو" class="max-w-[340px] md:max-w-full rounded-3xl shadow-2xl border-4 border-blue-100">
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 px-4 md:px-32 bg-white/80 rounded-t-3xl shadow-inner">
        <h2 class="text-3xl font-extrabold text-blue-700 mb-10 text-center">امکانات برجسته حسابینو</h2>
        <div class="grid md:grid-cols-3 gap-10">
            <div class="bg-blue-50 p-6 rounded-2xl shadow hover:scale-105 transition">
                <div class="text-5xl text-blue-500 mb-4 text-center">📊</div>
                <h3 class="text-xl font-bold mb-2 text-blue-700 text-center">داشبورد حرفه‌ای</h3>
                <p class="text-gray-600 text-center">گزارش لحظه‌ای درآمد، هزینه، سود و زیان و نمودارهای تعاملی</p>
            </div>
            <div class="bg-blue-50 p-6 rounded-2xl shadow hover:scale-105 transition">
                <div class="text-5xl text-blue-500 mb-4 text-center">🔒</div>
                <h3 class="text-xl font-bold mb-2 text-blue-700 text-center">امنیت و پشتیبانی ابری</h3>
                <p class="text-gray-600 text-center">ذخیره‌سازی امن داده‌ها، نسخه‌پشتیبان خودکار و دسترسی ۲۴ ساعته</p>
            </div>
            <div class="bg-blue-50 p-6 rounded-2xl shadow hover:scale-105 transition">
                <div class="text-5xl text-blue-500 mb-4 text-center">🤝</div>
                <h3 class="text-xl font-bold mb-2 text-blue-700 text-center">مدیریت مشتری و فاکتور</h3>
                <p class="text-gray-600 text-center">ایجاد و ارسال فاکتور، مدیریت بدهکاران و ارتباط با مشتریان</p>
            </div>
        </div>
        <div class="text-center mt-14">
            <a href="{{ route('register') }}" class="bg-blue-700 text-white px-8 py-3 rounded-xl text-xl font-bold hover:bg-blue-800 shadow-lg transition">همین حالا ثبت‌نام کن!</a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 px-4 md:px-32">
        <h2 class="text-2xl font-extrabold text-blue-700 mb-8 text-center">نظرات کاربران</h2>
        <div class="flex flex-col md:flex-row gap-8 justify-center">
            <div class="bg-white border border-blue-100 p-6 rounded-xl shadow flex-1">
                <div class="flex items-center gap-3 mb-3">
                    <img src="/images/user1.jpg" class="w-10 h-10 rounded-full border-2 border-blue-400" alt="user1">
                    <span class="font-bold text-blue-700">علی رضایی</span>
                </div>
                <p class="text-gray-600">
                    «حسابینو واقعاً کار حسابداری من رو ساده و سریع کرده. پشتیبانی عالی و محیط کاربری حرفه‌ای.»
                </p>
            </div>
            <div class="bg-white border border-blue-100 p-6 rounded-xl shadow flex-1">
                <div class="flex items-center gap-3 mb-3">
                    <img src="/images/user2.jpg" class="w-10 h-10 rounded-full border-2 border-blue-400" alt="user2">
                    <span class="font-bold text-blue-700">سمیه عباسی</span>
                </div>
                <p class="text-gray-600">
                    «امکانات گزارش‌گیری پیشرفته و امنیت داده‌ها خیلی برام مهم بود که حسابینو بهترینش رو داره.»
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-14 px-4 md:px-32 bg-blue-50 rounded-b-3xl shadow-inner">
        <h2 class="text-2xl font-extrabold text-blue-700 mb-8 text-center">سوالات متداول</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h4 class="font-bold text-blue-700 mb-1">آیا استفاده از حسابینو رایگان است؟</h4>
                <p class="text-gray-600 mb-4">بله! می‌توانید با ثبت‌نام رایگان از بخش زیادی از امکانات استفاده کنید.</p>
            </div>
            <div>
                <h4 class="font-bold text-blue-700 mb-1">آیا داده‌های من امن است؟</h4>
                <p class="text-gray-600 mb-4">تمام اطلاعات شما با امنیت بالا و نسخه‌پشتیبان ابری نگهداری می‌شود.</p>
            </div>
            <div>
                <h4 class="font-bold text-blue-700 mb-1">آیا نیاز به نصب نرم‌افزار دارم؟</h4>
                <p class="text-gray-600 mb-4">خیر. حسابینو کاملاً ابری و تحت وب است و نیاز به نصب ندارد.</p>
            </div>
            <div>
                <h4 class="font-bold text-blue-700 mb-1">آیا پشتیبانی دارد؟</h4>
                <p class="text-gray-600 mb-4">بله، تیم پشتیبانی ما همیشه پاسخگوی شماست.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 px-4 md:px-32 text-center text-gray-500 text-sm mt-10">
        © {{ now()->year }} حسابینو | توسعه یافته توسط <a href="https://myparstech.ir" class="text-blue-700 font-bold hover:underline">myparstech.ir</a>
    </footer>

</body>
</html>
