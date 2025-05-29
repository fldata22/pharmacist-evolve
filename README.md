# Pharmacist Evolve Website

A modern Laravel application with Vue.js and Inertia.js for empowering overseas pharmacists to succeed in the UK.

## 🚀 Features

- **Modern Landing Page** - Professionally designed homepage with hero section, services overview, testimonials, and call-to-action sections
- **Responsive Design** - Fully responsive design that works on desktop, tablet, and mobile
- **Professional Navigation** - Clean navigation with dropdown menus and mobile-friendly interface
- **Service Pages** - Dedicated pages for Group Mentoring School, OSPAP Transition Coaching, and Workforce Integration
- **Contact & Booking** - Contact forms and consultation booking functionality (placeholder)

## 🛠️ Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Vue.js 3
- **SPA Framework**: Inertia.js
- **Styling**: Tailwind CSS
- **Build Tool**: Vite
- **Database**: SQLite (default)

## 📦 Installation

1. **Clone or navigate to the project directory**
   ```bash
   cd pharmacist-evolve
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Set up environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Run migrations**
   ```bash
   php artisan migrate
   ```

## 🏃‍♂️ Quick Start

### Option 1: Use the Start Script
```bash
./start-servers.sh
```

### Option 2: Manual Start
```bash
# Terminal 1 - Start Vite dev server
npm run dev

# Terminal 2 - Start Laravel server
php artisan serve --port=8002
```

Then visit: **http://127.0.0.1:8002**

## 📁 Project Structure

```
pharmacist-evolve/
├── app/
│   └── Http/Controllers/
│       └── HomeController.php
├── resources/
│   ├── css/
│   │   └── app.css              # Tailwind CSS imports
│   ├── js/
│   │   ├── Components/
│   │   │   ├── Logo.vue         # Custom logo component
│   │   │   ├── Navigation.vue   # Main navigation
│   │   │   └── Footer.vue       # Site footer
│   │   ├── Layouts/
│   │   │   └── AppLayout.vue    # Main layout wrapper
│   │   ├── Pages/
│   │   │   ├── Home.vue         # Landing page (complete)
│   │   │   ├── About.vue        # About page (placeholder)
│   │   │   ├── Services.vue     # Services overview
│   │   │   ├── Contact.vue      # Contact page
│   │   │   ├── Testimonials.vue # Testimonials page
│   │   │   ├── BookConsultation.vue # Booking page
│   │   │   └── Services/
│   │   │       ├── GroupMentoring.vue
│   │   │       ├── OSPAPCoaching.vue
│   │   │       └── WorkforceIntegration.vue
│   │   └── app.js               # Main JavaScript entry
│   └── views/
│       └── app.blade.php        # Inertia root template
├── routes/
│   └── web.php                  # Application routes
├── tailwind.config.js           # Tailwind configuration
├── vite.config.js              # Vite configuration
└── package.json                # Node dependencies
```

## 🎨 Design Features

### Landing Page Sections:
1. **Hero Section** - "Advancing Pharmaceutical Care Through Innovation"
2. **Services Overview** - Three main service cards with icons
3. **How We Support You** - Three key benefits with visual icons
4. **Testimonials** - Client success stories
5. **Partners** - Partner organization logos (placeholder)
6. **Call-to-Action** - Book consultation and contact options

### Navigation:
- Logo with custom design
- Services dropdown menu
- About Us, Testimonials, Contact
- Book Consultation CTA button
- Mobile-responsive hamburger menu

### Color Scheme:
- Primary: Orange (#f97316)
- Secondary: Gray tones
- Accent: Orange variations for hover states

## 🔧 Development

### Available Commands:
```bash
# Start development servers
npm run dev              # Start Vite dev server
php artisan serve        # Start Laravel server

# Build for production
npm run build            # Build assets for production

# Laravel commands
php artisan migrate      # Run database migrations
php artisan make:controller ControllerName
php artisan make:model ModelName

# Asset commands
npm run dev              # Development build with hot reload
npm run build            # Production build
```

### Adding New Pages:
1. Create Vue component in `resources/js/Pages/`
2. Add route in `routes/web.php`
3. Create controller if needed
4. Update navigation in `Navigation.vue`

## 🌐 Live URLs

- **Main Site**: http://127.0.0.1:8002
- **Vite Dev Server**: http://localhost:5173

## 📝 Customization

### Updating Content:
- **Hero Section**: Edit `resources/js/Pages/Home.vue`
- **Services**: Update service cards in Home.vue and individual service pages
- **Testimonials**: Modify testimonial data in Home.vue
- **Navigation**: Update links in `resources/js/Components/Navigation.vue`
- **Footer**: Edit `resources/js/Components/Footer.vue`

### Styling:
- **Colors**: Update `tailwind.config.js`
- **Fonts**: Modify font imports in `resources/css/app.css`
- **Logo**: Edit `resources/js/Components/Logo.vue`

## 🚀 Deployment

1. **Build assets**:
   ```bash
   npm run build
   ```

2. **Set up production environment**:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Configure web server** to point to `public/` directory

## 📞 Support

For questions about the codebase or customizations, refer to:
- Laravel Documentation: https://laravel.com/docs
- Vue.js Documentation: https://vuejs.org
- Inertia.js Documentation: https://inertiajs.com
- Tailwind CSS Documentation: https://tailwindcss.com

## 🎉 What's Next?

**Ready for Enhancement:**
- Add real client testimonials and photos
- Integrate partner logos
- Implement contact form backend processing
- Add booking system with calendar integration
- Create blog/content management system
- Set up email notifications
- Add analytics tracking
- Implement user authentication (if needed)

---

**Built with ❤️ for Pharmacist Evolve - Empowering Overseas Pharmacists to Succeed in UK**
