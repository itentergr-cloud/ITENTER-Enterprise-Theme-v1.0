Harika. Devam ediyoruz.

# Sprint 1.3 — ITENTER Hero Section

Bu bölüm, ziyaretçinin ilk gördüğü alan olacak. SoftOne tarzı kurumsal teknoloji hissini verecek ancak ITENTER için özgün olacak.

Hedef:

✅ OnePage ana ekran  
✅ Büyük teknoloji başlığı  
✅ Yazılım şirketi mesajı  
✅ Dashboard görsel alanı  
✅ Cloud / AI / Security kartları  
✅ CTA butonları  
✅ Animasyon altyapısı  
✅ SEO uyumlu H1  

---

## 1) `front-page.php`

Konum:


itenter-enterprise/front-page.php


Kod:

php
<?php

get_header();


get_template_part(
    'template-parts/hero'
);


get_template_part(
    'template-parts/services'
);


get_template_part(
    'template-parts/contact'
);


get_footer();

?>


---

## 2) Hero Dosyası

Oluştur:


template-parts/hero.php


Kod:

php
<section class="itenter-hero">


<div class="hero-bg"></div>


<div class="container hero-container">


<div class="hero-content">


<div class="hero-tag">

ITENTER Information Technology

</div>



<h1>

Digital Solutions
For The
<span>
Future Of Business
</span>

</h1>



<p>

We design and develop powerful software,
cloud and technology solutions that help
companies grow faster.

</p>




<div class="hero-buttons">


<a href="#contact"
class="btn-primary">

Start Your Project

</a>



<a href="#services"
class="btn-outline">

Our Solutions

</a>


</div>




<div class="hero-stats">


<div>

<strong>
150+
</strong>

<span>
Projects
</span>

</div>



<div>

<strong>
40+
</strong>

<span>
Clients
</span>

</div>



<div>

<strong>
99%
</strong>

<span>
Success
</span>

</div>



</div>


</div>





<div class="hero-visual">


<div class="software-dashboard">


<div class="dashboard-top">

<span></span>
<span></span>
<span></span>

</div>



<div class="dashboard-body">


<div class="dashboard-code">

&lt;ITENTER /&gt;

<br>

<span>
Software Platform
</span>


</div>




<div class="solution-cards">


<div>

☁️

<h4>
Cloud
</h4>


</div>



<div>

🤖

<h4>
AI
</h4>


</div>



<div>

🔐

<h4>
Security
</h4>


</div>



</div>



</div>


</div>


</div>


</div>


</section>


---

# 3) Hero CSS

Dosya:


assets/css/main.css


Ekle:

css
/*
=========================
ITENTER HERO
=========================
*/


.itenter-hero{

min-height:100vh;

display:flex;

align-items:center;

position:relative;

overflow:hidden;

background:#081120;

}




.hero-bg{

position:absolute;

inset:0;


background:


radial-gradient(
circle at 20% 30%,
rgba(37,99,235,.35),
transparent 35%
),


radial-gradient(
circle at 80% 70%,
rgba(124,58,237,.35),
transparent 35%
);

}



.hero-container{

position:relative;

z-index:2;

display:grid;

grid-template-columns:
1fr 1fr;

gap:70px;

align-items:center;

}



.hero-tag{

display:inline-block;

padding:10px 20px;

border-radius:50px;

background:
rgba(255,255,255,.08);

color:#06B6D4;

margin-bottom:25px;

}




.hero-content h1{

font-size:70px;

line-height:1.05;

color:white;

}



.hero-content h1 span{


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



.hero-content p{

font-size:20px;

line-height:1.7;

color:#cbd5e1;

}



.btn-outline{


padding:16px 32px;

border-radius:50px;

border:

1px solid rgba(255,255,255,.3);

color:white;

margin-left:15px;

}




.hero-stats{

display:flex;

gap:50px;

margin-top:50px;

}



.hero-stats strong{

display:block;

font-size:40px;

color:white;

}



.hero-stats span{

color:#94a3b8;

}


---

## 4) Dashboard CSS

css
.software-dashboard{

padding:35px;

border-radius:35px;

background:

rgba(255,255,255,.08);

border:

1px solid rgba(255,255,255,.15);

backdrop-filter:

blur(25px);

animation:

floating 5s infinite;

}



@keyframes floating{

50%{

transform:translateY(-20px);

}

}



.dashboard-top span{

display:inline-block;

width:12px;

height:12px;

border-radius:50%;

background:#2563EB;

margin-right:8px;

}



.dashboard-code{

margin-top:30px;

padding:25px;

background:#020617;

border-radius:20px;

color:#06B6D4;

}



.solution-cards{

display:grid;

grid-template-columns:
repeat(3,1fr);

gap:15px;

margin-top:20px;

}



.solution-cards div{

background:
rgba(255,255,255,.08);

padding:20px;

border-radius:20px;

text-align:center;

color:white;

}


---

# GitHub Commit


Sprint 1.3 - ITENTER Hero Section

- Added OnePage hero
- Added technology dashboard
- Added CTA buttons
- Added animated background
- Added responsive hero foundation


---

Bir sonraki aşama:

## Sprint 1.4 — Services Section

Eklenecek:

- WordPress dinamik hizmet sistemi
- 6 teknoloji kartı
- Hover animasyonları
- SEO uyumlu başlık yapısı
- Admin panelinden yönetilebilir servisler

Devam ediyoruz.
