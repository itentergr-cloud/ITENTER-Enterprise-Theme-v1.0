Harika. Devam ediyoruz.

# Sprint 1.9 — Contact + Footer + OnePage Final Assembly

Bu bölüm ile ITENTER OnePage ana sayfa yapısının temel bölümleri tamamlanmış olacak.

Hedef:

✅ İletişim alanı  
✅ Telefon / e-mail / adres bilgileri  
✅ Form alanı  
✅ CTA bölümü  
✅ Premium footer  
✅ Sosyal medya alanı  
✅ SEO için iletişim verileri  

---

# 1) `template-parts/contact.php`

Dosya:


template-parts/contact.php


Kod:

php
<section 
id="contact"
class="contact-section section">


<div class="container">


<div class="contact-grid">


<div class="contact-content">


<span class="section-tag">

Contact ITENTER

</span>


<h2>

Let's Build Your
Digital Future Together

</h2>


<p>

Have a software project or digital
transformation idea? Our technology team
is ready to help.

</p>



<div class="contact-info">


<div>

<strong>
Email
</strong>

<a href="mailto:info@itenter.gr">

info@itenter.gr

</a>

</div>




<div>

<strong>
Website
</strong>

<a href="https://itenter.gr">

itenter.gr

</a>

</div>




<div>

<strong>
Location
</strong>

<span>

Greece

</span>

</div>


</div>


</div>





<div class="contact-form-box">


<form>


<input 
type="text"
placeholder="Your Name">



<input
type="email"
placeholder="Email Address">



<input
type="text"
placeholder="Company">



<textarea
placeholder="Your Message">
</textarea>



<button
class="btn-primary">

Send Message

</button>


</form>


</div>



</div>


</div>


</section>


---

# 2) Footer

Dosya:


footer.php


Güncelle:

php
<footer class="itenter-footer">


<div class="container">


<div class="footer-grid">



<div>


<div class="footer-logo">

ITENTER

</div>


<p>

Information Technology
Software Solutions

</p>


</div>





<div>


<h4>

Solutions

</h4>


<ul>

<li>Software</li>

<li>Cloud</li>

<li>AI</li>

<li>Security</li>

</ul>


</div>





<div>


<h4>

Company

</h4>


<ul>

<li>About</li>

<li>Projects</li>

<li>Contact</li>

</ul>


</div>





<div>


<h4>

Follow

</h4>


<ul>

<li>LinkedIn</li>

<li>Facebook</li>

<li>Instagram</li>

</ul>


</div>



</div>





<div class="footer-bottom">


© <?php echo date('Y'); ?>

ITENTER Information Technology.

All Rights Reserved.


</div>



</div>


</footer>


</div>


<?php wp_footer(); ?>


</body>

</html>


---

# 3) Contact CSS

`assets/css/main.css`

Ekle:

css
/*
=========================
CONTACT
=========================
*/


.contact-section{

background:white;

}



.contact-grid{


display:grid;


grid-template-columns:

1fr 1fr;


gap:70px;


align-items:center;


}




.contact-content h2{


font-size:48px;


color:#081120;


}




.contact-content p{


color:#64748B;


font-size:18px;


line-height:1.7;


}



.contact-info{


margin-top:40px;


}



.contact-info div{


margin-bottom:20px;


}



.contact-info strong{


display:block;


color:#081120;


}



.contact-info a{


color:#2563EB;


}




.contact-form-box{


background:#f8fafc;


padding:40px;


border-radius:30px;


}




.contact-form-box input,

.contact-form-box textarea{


width:100%;


padding:16px;


margin-bottom:20px;


border-radius:15px;


border:1px solid #e2e8f0;


font-size:16px;


}




.contact-form-box textarea{


height:150px;


}


---

# 4) Footer CSS

css
/*
=========================
FOOTER
=========================
*/


.itenter-footer{


background:#081120;


color:white;


padding:80px 0 30px;


}




.footer-grid{


display:grid;


grid-template-columns:

repeat(4,1fr);


gap:40px;


}




.footer-logo{


font-size:35px;


font-weight:800;


background:

linear-gradient(
90deg,
#2563EB,
#06B6D4
);


-webkit-background-clip:text;


-webkit-text-fill-color:transparent;


}



.itenter-footer h4{


margin-bottom:20px;


}



.itenter-footer ul{


list-style:none;


padding:0;


}



.itenter-footer li{


margin-bottom:12px;


color:#94a3b8;


}



.footer-bottom{


margin-top:50px;


padding-top:30px;


border-top:

1px solid rgba(255,255,255,.1);


color:#94a3b8;


text-align:center;


}


---

# 5) Responsive

Ekle:

css
@media(max-width:900px){


.contact-grid{


grid-template-columns:1fr;


}



.footer-grid{


grid-template-columns:

repeat(2,1fr);


}


}


---

# GitHub Commit


Sprint 1.9 - Contact Footer OnePage Complete

- Added contact section
- Added company information
- Added premium footer
- Completed OnePage structure


---

# 🎉 Bu aşama sonunda:

ITENTER OnePage temel yapısı tamamlandı:

✅ Header  
✅ Hero  
✅ Services  
✅ About  
✅ Products  
✅ Technology  
✅ Portfolio  
✅ Statistics  
✅ Testimonials  
✅ Contact  
✅ Footer  

---

## Sonraki Büyük Aşama: Sprint 2

Artık statik tasarımdan gerçek WordPress sistemine geçiyoruz:

### Sprint 2.0 — Dynamic WordPress CMS

Yapılacaklar:

- Custom Post Type: Services
- Custom Post Type: Projects
- Custom Post Type: Testimonials
- Theme Options Panel
- Dynamic Logo
- Dynamic Hero
- Admin panel yönetimi
- SEO altyapısı

Bu aşama temayı gerçek bir premium WordPress ürünü haline getirecek.
