<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حسابینو | نرم‌افزار حسابداری ابری</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <!-- Header -->
    <header style="position:fixed; top:0; left:0; width:100%; z-index:50;" class="flex justify-between items-center py-6 px-8">
        <div class="flex items-center gap-3">
            <img src="/images/logo.svg" alt="حسابینو" style="width:3rem; height:3rem;">
            <span style="font-size:2rem; font-weight:900; color:#2563eb;">حسابینو</span>
        </div>
        <div class="flex items-center gap-4">
            <a href="{{ route('login') }}" class="btn-outline">ورود</a>
            <a href="{{ route('register') }}" class="btn-primary">ثبت‌نام رایگان</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div style="flex:2; text-align:right;">
            <h1 style="font-size:2.5rem; font-weight:900; color:#2563eb; margin-bottom:1.5rem;">
                مدیریت مالی آسان و هوشمند<br>
                برای کسب‌وکارهای مدرن
            </h1>
            <p style="font-size:1.15rem; color:#64748b; margin-bottom:2rem;">
                با حسابینو، حسابداری و مدیریت مالی کسب‌وکارت را ساده، سریع و حرفه‌ای انجام بده.<br>
                راهکار ابری، امنیت بالا و ابزارهای هوشمند برای رشد و موفقیت شما.
            </p>
            <div style="display:flex; gap:1.5rem;">
                <a href="{{ route('register') }}" class="btn-primary">شروع رایگان</a>
                <a href="#features" class="btn-outline">آشنایی با امکانات</a>
            </div>
        </div>
        <div style="flex:1; display:flex; justify-content:center;">
            <img src="/images/hero-dashboard.png" alt="پیش‌نمایش حسابینو" class="hero-image">
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <h2 class="section-title">امکانات برجسته حسابینو</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div style="font-size:2.5rem; color:#3b82f6;">📊</div>
                <h3 style="font-size:1.1rem; font-weight:bold; color:#2563eb; margin:0.7rem 0;">داشبورد حرفه‌ای</h3>
                <p style="color:#64748b;">گزارش لحظه‌ای درآمد، هزینه، سود و زیان و نمودارهای تعاملی</p>
            </div>
            <div class="feature-card">
                <div style="font-size:2.5rem; color:#3b82f6;">🔒</div>
                <h3 style="font-size:1.1rem; font-weight:bold; color:#2563eb; margin:0.7rem 0;">امنیت و پشتیبانی ابری</h3>
                <p style="color:#64748b;">ذخیره‌سازی امن داده‌ها، نسخه‌پشتیبان خودکار و دسترسی ۲۴ ساعته</p>
            </div>
            <div class="feature-card">
                <div style="font-size:2.5rem; color:#3b82f6;">🤝</div>
                <h3 style="font-size:1.1rem; font-weight:bold; color:#2563eb; margin:0.7rem 0;">مدیریت مشتری و فاکتور</h3>
                <p style="color:#64748b;">ایجاد و ارسال فاکتور، مدیریت بدهکاران و ارتباط با مشتریان</p>
            </div>
        </div>
        <div style="text-align:center; margin-top:3rem;">
            <a href="{{ route('register') }}" class="btn-primary" style="font-size:1.2rem;">همین حالا ثبت‌نام کن!</a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <h2 class="section-title" style="margin-bottom:2rem;">نظرات کاربران</h2>
        <div style="display:flex; flex-wrap:wrap; gap:2rem; justify-content:center;">
            <div style="background:#fff; border:1px solid #dbeafe; padding:1.2rem; border-radius:1.2em; box-shadow:0 2px 8px #a5b4fc33; flex:1; min-width:240px;">
                <div style="display:flex; align-items:center; gap:0.7rem; margin-bottom:0.8rem;">
                    <img src="/images/user1.jpg" style="width:2.5rem; height:2.5rem; border-radius:50%; border:2px solid #60a5fa;">
                    <span style="font-weight:bold; color:#2563eb;">علی رضایی</span>
                </div>
                <p style="color:#64748b;">«حسابینو واقعاً کار حسابداری من رو ساده و سریع کرده. پشتیبانی عالی و محیط کاربری حرفه‌ای.»</p>
            </div>
            <div style="background:#fff; border:1px solid #dbeafe; padding:1.2rem; border-radius:1.2em; box-shadow:0 2px 8px #a5b4fc33; flex:1; min-width:240px;">
                <div style="display:flex; align-items:center; gap:0.7rem; margin-bottom:0.8rem;">
                    <img src="/images/user2.jpg" style="width:2.5rem; height:2.5rem; border-radius:50%; border:2px solid #60a5fa;">
                    <span style="font-weight:bold; color:#2563eb;">سمیه عباسی</span>
                </div>
                <p style="color:#64748b;">«امکانات گزارش‌گیری پیشرفته و امنیت داده‌ها خیلی برام مهم بود که حسابینو بهترینش رو داره.»</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <h2 class="section-title" style="margin-bottom:2rem;">سوالات متداول</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:2rem;">
            <div>
                <h4 style="font-weight:bold; color:#2563eb; margin-bottom:0.5rem;">آیا استفاده از حسابینو رایگان است؟</h4>
                <p style="color:#64748b;">بله! می‌توانید با ثبت‌نام رایگان از بخش زیادی از امکانات استفاده کنید.</p>
            </div>
            <div>
                <h4 style="font-weight:bold; color:#2563eb; margin-bottom:0.5rem;">آیا داده‌های من امن است؟</h4>
                <p style="color:#64748b;">تمام اطلاعات شما با امنیت بالا و نسخه‌پشتیبان ابری نگهداری می‌شود.</p>
            </div>
            <div>
                <h4 style="font-weight:bold; color:#2563eb; margin-bottom:0.5rem;">آیا نیاز به نصب نرم‌افزار دارم؟</h4>
                <p style="color:#64748b;">خیر. حسابینو کاملاً ابری و تحت وب است و نیاز به نصب ندارد.</p>
            </div>
            <div>
                <h4 style="font-weight:bold; color:#2563eb; margin-bottom:0.5rem;">آیا پشتیبانی دارد؟</h4>
                <p style="color:#64748b;">بله، تیم پشتیبانی ما همیشه پاسخگوی شماست.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        © {{ now()->year }} حسابینو | توسعه یافته توسط
        <a href="https://myparstech.ir" style="color:#2563eb; font-weight:bold;">myparstech.ir</a>
    </footer>
</body>
</html>
