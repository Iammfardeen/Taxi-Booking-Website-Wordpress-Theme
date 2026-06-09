# NCR Travel Company – WordPress Theme

Designed and developed by [Fardeen Ahmad](https://github.com/iammfardeen) at **Weblix Studios**.

**Version:** 1.0.0  
**Requires WordPress:** 5.8+  
**Requires PHP:** 7.4+  
**Elementor Compatible:** ✅ Yes

---

## 📦 Installation

1. Log in to your WordPress admin dashboard
2. Go to **Appearance → Themes → Add New → Upload Theme**
3. Upload the `ncr-travel-company.zip` file
4. Click **Activate**
5. Done! 🎉

---

## ⚙️ Initial Setup

### 1. Set Your Homepage
- Go to **Settings → Reading**
- Select **"A static page"**
- Set **Homepage** to a page called `Home` (or any page using the default template)
- The `front-page.php` template will load automatically

### 2. Configure Business Details
- Go to **Appearance → Customize → Business Info**
- Update:
  - Phone Number
  - WhatsApp Number (digits only, e.g. `919818545508`)
  - Email Address
  - Office Address
  - Instagram URL

### 3. Set Up Navigation Menu
- Go to **Appearance → Menus → Create New Menu**
- Add pages: Home, Our Fleet, Blog, About Us, Contact
- Assign to **Primary Navigation** location

### 4. Create Required Pages
Create these pages in **Pages → Add New** and assign the correct template:

| Page Title          | Template              |
|---------------------|-----------------------|
| Home                | (Default / Front Page)|
| About Us            | About Us              |
| Our Fleet           | Our Fleet             |
| Blog                | (Set as Posts page)   |
| Privacy Policy      | (Default page)        |
| Terms & Conditions  | (Default page)        |
| Disclaimer          | (Default page)        |
| Contact             | (Default page)        |

### 5. Blog Setup
- Go to **Settings → Reading**
- Set **Posts page** to your Blog page

---

## 🔌 Elementor Integration

This theme is **fully compatible with Elementor** and Elementor Pro.

1. Install Elementor from **Plugins → Add New**
2. On any page, click **Edit with Elementor**
3. All custom CSS variables and fonts are pre-loaded
4. The theme's color palette and fonts are available inside Elementor's design panel
5. Use **full-width** page template for Elementor pages

### Recommended Elementor Settings:
- Go to **Elementor → Settings → General**
- Set default page width to `1180px`

---

## 🎨 Customisation

### Colors (via CSS Variables)
All colors are defined as CSS variables in `style.css`:
```css
--blue-900: #0A1628;   /* Deep Navy - headings, backgrounds */
--blue-600: #1565C0;   /* Primary Blue - buttons, links */
--blue-400: #2196F3;   /* Light Blue - accents */
--accent2:  #00BCD4;   /* Cyan - gradient accents */
```
Edit these to rebrand instantly.

### Fonts
Change fonts in `functions.php` → `ncr_scripts()` — replace the Google Fonts URL.

### Adding Routes
The `front-page.php` has a `$routes` array you can edit directly, OR:
- Create posts using the **Routes** custom post type in the admin sidebar
- Each route supports custom fields: `distance`, `duration`, `tags`

### Adding Fleet
Use the **Fleet** custom post type to add/edit cabs with full ACF support.

---

## 📧 Form Notifications

Enquiry forms send email notifications to the address set in:
**Appearance → Customize → Business Info → Email Address**

To test, submit any form and check the inbox.

---

## 📱 Mobile

The theme is fully responsive. The hamburger menu appears on screens below 768px.

---

## 🚀 Performance Tips

1. Install **WP Super Cache** or **W3 Total Cache**
2. Use **Smush** or **ShortPixel** to compress images
3. Enable **GZIP compression** in your hosting panel
4. Use a CDN for static assets

---

## 🆘 Support

- 📞 Developer enquiries: +91-9818545508
- 📧 Email: ncrtravelco@gmail.com
- WhatsApp: https://wa.me/919818545508

---

<p align="center">
  Built with ❤️ by <strong>Fardeen Ahmad</strong> at <strong>Weblix Studios</strong> · New Delhi, India
</p>
