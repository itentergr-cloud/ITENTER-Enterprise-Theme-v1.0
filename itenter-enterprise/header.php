php
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<div class="site-wrapper">


<header class="itenter-header" id="itenter-header">


<div class="container header-container">


<div class="site-logo">


<a href="<?php echo esc_url(home_url('/')); ?>">


<?php


if(has_custom_logo()){


the_custom_logo();


}

else{


echo '<span class="logo-text">ITENTER</span>';


}


?>


</a>


</div>




<nav class="main-navigation">


<?php


wp_nav_menu([

'theme_location'=>'primary_menu',

'menu_class'=>'itenter-menu',

'container'=>false,

'fallback_cb'=>false

]);


?>


</nav>





<div class="header-button">


<a href="#contact"
class="btn-primary">

Get Started

</a>


</div>




<button class="mobile-menu-toggle"
aria-label="Menu">


<span></span>

<span></span>

<span></span>


</button>



</div>


</header>


---

# 2) Header CSS

Dosya:


assets/css/main.css


Ekle:

css
/*
=========================
ITENTER HEADER
=========================
*/


.itenter-header{

position:fixed;

top:0;

left:0;

width:100%;

z-index:999;

padding:25px 0;

transition:.4s ease;

}


.itenter-header.scrolled{

background:

rgba(8,17,32,.85);

backdrop-filter:

blur(20px);

padding:15px 0;

border-bottom:

1px solid rgba(255,255,255,.1);

}



.header-container{

display:flex;

align-items:center;

justify-content:space-between;

}




.logo-text{

font-size:32px;

font-weight:800;

letter-spacing:-1px;


background:

linear-gradient(
90deg,
#2563EB,
#7C3AED,
#06B6D4
);


-webkit-background-clip:text;

-webkit-text-fill-color:transparent;

}




.itenter-menu{

display:flex;

gap:35px;

list-style:none;

margin:0;

padding:0;

}



.itenter-menu a{

color:#ffffff;

font-weight:500;

transition:.3s;

}


.itenter-menu a:hover{

color:#06B6D4;

}




.mobile-menu-toggle{

display:none;

background:none;

border:0;

}



.mobile-menu-toggle span{

display:block;

width:28px;

height:3px;

margin:6px;

background:#ffffff;

border-radius:5px;

}


---

# 3) Mobil Responsive

Ekle:

css
@media(max-width:900px){


.main-navigation{

display:none;

position:absolute;

top:90px;

left:5%;

width:90%;

background:#081120;

padding:30px;

border-radius:25px;

}



.main-navigation.active{

display:block;

}



.itenter-menu{

flex-direction:column;

gap:20px;

}



.header-button{

display:none;

}



.mobile-menu-toggle{

display:block;

}


}


---

# 4) JavaScript

Dosya:


assets/js/main.js


Güncelle:

javascript
document.addEventListener(
"DOMContentLoaded",
()=>{


const header =
document.querySelector(
"#itenter-header"
);



window.addEventListener(
"scroll",
()=>{


if(window.scrollY>50){

header.classList.add(
"scrolled"
);

}

else{

header.classList.remove(
"scrolled"
);

}


});



const toggle =
document.querySelector(
".mobile-menu-toggle"
);



const menu =
document.querySelector(
".main-navigation"
);



if(toggle){


toggle.addEventListener(
"click",
()=>{


menu.classList.toggle(
"active"
);


});


}



});


Harika. Devam ediyoruz.

# Sprint 3.4 — ITENTER Accessibility & Professional Standards

Bu sprintte temayı kurumsal standartlara daha uygun hale getiriyoruz.

Hedef:

✅ WCAG erişilebilirlik altyapısı  
✅ Klavye navigasyonu  
✅ ARIA etiketleri  
✅ Görsel alt metin kontrolü  
✅ Kontrast iyileştirmeleri  
✅ SEO + kullanıcı deneyimi geliştirmeleri  

---

# 1) Skip Link (Klavye Kullanımı)

`header.php`

`<body>` hemen sonrasına ekle:

php
<a 
class="skip-link"
href="#main-content">

Skip to content

</a>


---

# 2) Ana İçerik ID

`front-page.php`

Değiştir:

Eski:

html
<main>


Yeni:

html
<main id="main-content">


---

# 3) Skip Link CSS

`assets/css/components.css`

Ekle:

css
.skip-link{


position:absolute;


left:-999px;


top:20px;


background:#2563EB;


color:white;


padding:15px 25px;


border-radius:10px;


z-index:9999;


}



.skip-link:focus{


left:20px;


}


---

# 4) ARIA Menü Desteği

`header.php`

Mobil buton:

Eski:

html
<button class="mobile-menu-toggle">


Yeni:

html
<button 
class="mobile-menu-toggle"
aria-label="Open navigation menu"
aria-expanded="false">


---

# 5) JavaScript ARIA Güncellemesi

`mobile-menu.js`

Değiştir:

javascript
button.addEventListener(
'click',
()=>{


const expanded =
button.getAttribute(
'aria-expanded'
);



button.setAttribute(

'aria-expanded',

expanded === "true"
?
"false"
:
"true"

);



menu.classList.toggle(
'active'
);



});


---

# 6) Görsel Alt Text Sistemi

Tema içinde:

Yanlış:

php
<img src="image.jpg">


Doğru:

php
<img 
src="image.jpg"
alt="<?php echo esc_attr(get_the_title()); ?>">


---

# 7) WordPress Thumbnail Güvenliği

Kartlarda:

Eski:

php
the_post_thumbnail();


Yeni:

php
the_post_thumbnail(

'large',

[

'alt'=>the_title_attribute(

[
'echo'=>false

]

)

]

);


---

# 8) Kontrast Düzenlemeleri

`variables.css`

Güncelle:

css
:root{


--it-text:#0F172A;

--it-muted:#475569;


}


Daha yüksek okunabilirlik sağlar.

---

# 9) Form Accessibility

Contact form:

Ek:

html
<label>

Your Email

</label>


<input
type="email"
aria-label="Email Address">


---

# 10) SEO Accessibility Kontrolü

Kontrol listesi:


✓ Tek H1 kullanımı

✓ Doğru heading sıralaması

✓ Alt text

✓ Link açıklamaları

✓ Klavye erişimi

✓ Renk kontrastı

✓ Form label desteği


---

# GitHub Commit


Sprint 3.4 - Accessibility Standards

- Added skip navigation
- Added ARIA support
- Improved keyboard navigation
- Improved contrast
- Added accessibility improvements


---

# Sonraki Sprint

## Sprint 3.5 — Final QA & Launch Preparation

Yapılacaklar:

✅ WordPress tema testleri  
✅ PHP hata kontrolü  
✅ Mobil test  
✅ SEO kontrolü  
✅ Speed test hazırlığı  
✅ Production ayarları  
✅ Final v1.0 release checklist  

Bu sprintten sonra ITENTER Enterprise Theme yayına hazır hale gelecek.
