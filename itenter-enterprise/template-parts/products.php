Harika, devam ediyoruz.

# Sprint 1.6 — Products & Technology Stack

Bu bölüm ITENTER'ın sadece hizmet veren değil, ürün ve teknoloji geliştiren bir yazılım şirketi olduğunu gösterecek.

Hedef:

✅ Ürün tanıtım alanı  
✅ ERP / CRM / Business Software yapısı  
✅ Teknoloji ekosistemi  
✅ Modern kart tasarımı  
✅ Logo grid sistemi  
✅ Animasyon altyapısı  

---

# 1) `template-parts/products.php`

Oluştur:


template-parts/products.php


Kod:

php
<section 
id="products"
class="products-section section">


<div class="container">


<div class="section-header">


<span class="section-tag">

Our Products

</span>


<h2>

Smart Software Products
For Modern Businesses

</h2>


<p>

Powerful digital solutions designed
to simplify business processes.

</p>


</div>




<div class="products-grid">



<div class="product-card">


<div class="product-icon">

📊

</div>


<h3>

Business Management Platform

</h3>


<p>

Integrated solutions for finance,
operations and business automation.

</p>


<a href="#">

Learn More →

</a>


</div>





<div class="product-card">


<div class="product-icon">

🤝

</div>


<h3>

CRM Solutions

</h3>


<p>

Customer relationship management
systems that improve productivity.

</p>


<a href="#">

Learn More →

</a>


</div>





<div class="product-card">


<div class="product-icon">

☁️

</div>


<h3>

Cloud Applications

</h3>


<p>

Secure cloud-based applications
available everywhere.

</p>


<a href="#">

Learn More →

</a>


</div>


</div>


</div>


</section>


---

# 2) Technology Stack Bölümü

Oluştur:


template-parts/technology.php


Kod:

php
<section class="technology-section section">


<div class="container">


<div class="section-header">


<span class="section-tag">

Technology

</span>


<h2>

Built With Modern Technologies

</h2>


<p>

We use reliable and scalable
technologies to create future-ready
solutions.

</p>


</div>




<div class="technology-grid">


<div>
React
</div>


<div>
Laravel
</div>


<div>
.NET
</div>


<div>
Node.js
</div>


<div>
Python
</div>


<div>
Flutter
</div>


<div>
AWS
</div>


<div>
Azure
</div>


<div>
Docker
</div>


<div>
Kubernetes
</div>



</div>



</div>


</section>


---

# 3) `front-page.php`

Sıralamaya ekle:

php
get_template_part(
    'template-parts/products'
);


get_template_part(
    'template-parts/technology'
);


Yeni yapı:


Hero

Services

About

Products

Technology

Contact


---

# 4) CSS

`assets/css/main.css`

Ekle:

css
/*
=========================
PRODUCTS
=========================
*/


.products-section{

background:white;

}



.products-grid{

display:grid;

grid-template-columns:

repeat(3,1fr);

gap:30px;

}



.product-card{


padding:40px;

border-radius:30px;

background:#ffffff;

border:

1px solid #e2e8f0;

transition:.4s;

}



.product-card:hover{


transform:translateY(-10px);


box-shadow:

0 25px 70px

rgba(37,99,235,.15);


}



.product-icon{

font-size:45px;

margin-bottom:25px;

}



.product-card h3{

font-size:26px;

color:#081120;

}



.product-card p{

color:#64748B;

line-height:1.7;

}



.product-card a{

color:#2563EB;

font-weight:700;

}


---

# 5) Technology CSS

css
/*
=========================
TECHNOLOGY
=========================
*/


.technology-section{

background:#081120;

}



.technology-section h2,

.technology-section p{

color:white;

}



.technology-grid{


display:grid;


grid-template-columns:

repeat(5,1fr);


gap:20px;


}



.technology-grid div{


padding:30px 20px;


background:

rgba(255,255,255,.08);



border:

1px solid

rgba(255,255,255,.15);



border-radius:20px;



text-align:center;



color:white;



font-weight:700;



transition:.3s;



}



.technology-grid div:hover{


background:

linear-gradient(
135deg,
#2563EB,
#7C3AED
);


transform:translateY(-8px);


}


---

# Responsive

Ekle:

css
@media(max-width:900px){


.products-grid{

grid-template-columns:1fr;

}



.technology-grid{

grid-template-columns:

repeat(2,1fr);

}


}


---

# GitHub Commit


Sprint 1.6 - Products & Technology Stack

- Added ITENTER products section
- Added technology ecosystem
- Added modern card layouts
- Added responsive design


---

## Sonraki Sprint

# Sprint 1.7 — Portfolio + Case Studies

Eklenecek:

- Proje vitrin alanı
- Kategori filtreleme
- Case study kartları
- Müşteri başarı hikayeleri
- WordPress Custom Post Type hazırlığı

Devam ediyoruz.
