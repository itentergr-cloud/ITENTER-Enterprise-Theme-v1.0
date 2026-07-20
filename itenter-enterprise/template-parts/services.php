Harika. Devam ediyoruz.

# Sprint 1.4 — ITENTER Services Section

Bu bölümde hizmet alanını oluşturuyoruz. Yapı WordPress dinamik sisteme hazır olacak. İlk aşamada tasarımı ve HTML yapısını kuracağız; sonraki sprintte bunu Custom Post Type ile yönetilebilir hale getireceğiz.

Hedef:

✅ Modern SaaS kart tasarımı  
✅ ITENTER hizmetlerine özel içerik  
✅ SEO uyumlu H2/H3 yapısı  
✅ Hover animasyonları  
✅ Responsive Grid  
✅ WordPress'e hazır component yapısı  

---

## 1) `template-parts/services.php`

Oluştur:


template-parts/services.php


Kod:

php
<section 
id="services"
class="services-section section">


<div class="container">


<div class="section-header">


<span class="section-tag">

Our Solutions

</span>


<h2>

Powerful Technology
Solutions For Your Business

</h2>


<p>

ITENTER delivers scalable software,
cloud and digital transformation solutions.

</p>


</div>




<div class="services-grid">



<div class="service-card">


<div class="service-icon">

💻

</div>


<h3>

Custom Software Development

</h3>


<p>

Business-focused software solutions
designed for your unique needs.

</p>


</div>





<div class="service-card">


<div class="service-icon">

🌐

</div>


<h3>

Web Applications

</h3>


<p>

Modern, fast and secure web platforms
built with latest technologies.

</p>


</div>





<div class="service-card">


<div class="service-icon">

☁️

</div>


<h3>

Cloud Solutions

</h3>


<p>

Reliable cloud infrastructure and
digital transformation services.

</p>


</div>





<div class="service-card">


<div class="service-icon">

🤖

</div>


<h3>

Artificial Intelligence

</h3>


<p>

AI-powered automation and intelligent
business solutions.

</p>


</div>





<div class="service-card">


<div class="service-icon">

🔐

</div>


<h3>

Cyber Security

</h3>


<p>

Advanced security solutions to protect
your digital assets.

</p>


</div>





<div class="service-card">


<div class="service-icon">

📊

</div>


<h3>

IT Consulting

</h3>


<p>

Strategic technology consulting for
business growth.

</p>


</div>




</div>


</div>


</section>


---

# 2) Services CSS

Dosya:


assets/css/main.css


Ekle:

css
/*
=========================
SERVICES SECTION
=========================
*/


.services-section{

background:#ffffff;

}



.section-header{

text-align:center;

max-width:750px;

margin:0 auto 70px;

}



.section-tag{

color:#2563EB;

font-weight:700;

}



.section-header h2{

font-size:48px;

line-height:1.2;

color:#081120;

margin:20px 0;

}



.section-header p{

font-size:18px;

color:#64748B;

}





.services-grid{

display:grid;

grid-template-columns:

repeat(3,1fr);

gap:30px;

}




.service-card{

padding:40px 30px;

border-radius:30px;

background:white;

border:

1px solid #e2e8f0;

transition:.4s ease;

}



.service-card:hover{


transform:

translateY(-12px);


border-color:#2563EB;


box-shadow:

0 25px 60px

rgba(37,99,235,.15);


}





.service-icon{

width:70px;

height:70px;

display:flex;

align-items:center;

justify-content:center;

border-radius:20px;


background:

linear-gradient(
135deg,
#2563EB,
#7C3AED
);


font-size:32px;

margin-bottom:25px;

}




.service-card h3{

font-size:24px;

color:#081120;

}



.service-card p{

color:#64748B;

line-height:1.7;

}


---

# 3) Responsive

Ekle:

css
@media(max-width:900px){


.hero-container{

grid-template-columns:1fr;

}



.hero-content h1{

font-size:45px;

}



.services-grid{

grid-template-columns:1fr;

}


.section-header h2{

font-size:36px;

}


}


---

# GitHub Commit

Commit:


Sprint 1.4 - Services Section

- Added ITENTER services layout
- Added SaaS card design
- Added hover animations
- Added responsive grid


---

## Sonraki Sprint

# Sprint 1.5 — About ITENTER + Why Choose Us

Eklenecek:

- Şirket tanıtım alanı
- Misyon / Vizyon
- Teknoloji yaklaşımı
- Başarı rakamları
- Avantaj kartları
- Modern iki kolon tasarım

Devam ediyoruz.
