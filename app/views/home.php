<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>E-Library</title>
</head>
<body id="body">
   <dir style="padding-right: 15px;padding-top: 8px;"> 
       <i class="fas fa-bars toggle-menu" id="menu-show"></i>
       <p class="tog-menu-p" >القائمه</p>
 </dir>
        <nav id="nav" >
            <ul class = "nav-menu">
                <li><a href="">أدخل حسابك أو سجل الان</a></li>
                <li><a href="">الرئيسية</a></li>
                <li><a href="">من نحن </a></li>
                <li><a href="">اتصل بنا</a></li>
                <li><a href="">المساعدة</a></li>
                <li><a href="">سياسة الخصوصيه</a></li>
            </ul>
            <div class="nav-cuntery"><span>اليمن</span>&nbsp;<span>YER</span>  </div>
            <!-- <div class="nav-cuntery-somble">YER</div> -->
          <!-- <div class=>English</div> -->
          <div class=""nav-change-langege" onchange ="ChangeLang()">
            <select id ="SelectLag">
                
                <option value="rtl">English</option>
                <option value="ltr">عربي</option>
            </select>
        </div>
        </div>
        </nav>
        
        <header>
            <div class="log"><img src="assets/img/logo.png"  alt=""></div>
            <div class="search-form-container">
            <form action="" class="search-form">
                <i class="fas fa-search"></i>
                <input type="search" placeholder ="البحث">
            </form>
            <div class="buy-log"><i class="fas fa-shopping-cart"></i></div>
        </div>
        </header>
        <main id="main-div">
           <div class="slide">
             <figure class="slide-img-frame">
                <!-- <img src="assets/img/3.jpg" id ="last-clone" alt=""> -->
                 <img src="assets/img/1.jpg" alt="">
                 <img src="assets/img/2.jpg" alt="">
                 <img src="assets/img/3.jpg" alt="">
                 <img src="assets/img/1.jpg" alt="">
                 <img src="assets/img/2.jpg" alt="">
                 <img src="assets/img/3.jpg" alt="">
                 <img src="assets/img/1.jpg" alt="">
                 <img src="assets/img/2.jpg" alt="">
                 <img src="assets/img/3.jpg" alt="">
                 <!-- <img src="assets/img/1.jpg" id ="first-clone" alt=""> -->
             </figure>
             <!-- <button  id="prevBtn" class="prevBtn">Prevs</button>
             <button id="nextBtn"   class="NextBtn">Next</button> -->
             
             <div class="icons-of-phote">
             <i id="prevBtn" class="fas fa-angle-right change-background fa-2x"></i>
             <i  id="nextBtn"  class="fas fa-angle-left change-background fa-2x"></i>
            </div>
           </div>
           <section class="section-card-parent">
               <div class="section-card">
                <i class="fas fa-book"></i>
                      <p>ديني</p>
               </div>
               <div style="color: orangered;" class="section-card">
                <i style="color: orangered;" class="fas fa-book"></i>
                      <p>تاريخ</p>
               </div>
               <div style="color: purple;" class="section-card">
                <i style="color: purple;"  class="fas fa-book"></i>
                      <p>روايات</p>
               </div>
               <div style="color: red;"  class="section-card">
                <i style="color: red;"  class="fas fa-book"></i>
                      <p>سياسة</p>
               </div>
               <div style="color: blue;"  class="section-card">
                <i style="color: blue;" class="fas fa-book"></i>
                      <p>اقتصاد</p>
               </div>
               <div class="section-card">
                <i class="fas fa-book"></i>
                      <p>طبخ</p>
               </div>
               <div class="section-card">
                <i class="fas fa-book"></i>
                      <p>تربيه</p>
               </div>
               <div class="section-card">
                <i class="fas fa-book"></i>
                      <p>وطينه</p>
               </div>
               
           </section>
           <div class="main-body">
                <section class="offers">
                    <div class="card one">
                        <img id="boy-bag" src="assets/img/offer-1.jpg" alt="">
                        <p> حفاب اولاد</p>
                        <div class="time-container">
                            <h2 id="days2">00</h2> 
                            <small>days</small>
                            <h2 id="hours2">00</h2> 
                            <small>hours</small>
                            <h2 id="minutes2">00</h2> 
                            <small>mintes</small>
                            <h2 id="seconds2">00</h2> 
                            <small>seconds</small>
                        </div>
                    </div>
                    <div class="card tow">
                        <img id="girl-bag" src="assets/img/offer-2.jpg" alt="">
                        <p>حقاب بناتيه</p>
                        <div class="time-container">
                            <h2 id="days3">00</h2> 
                            <small>days</small>
                            <h2 id="hours3">00</h2> 
                            <small>hours</small>
                            <h2 id="minutes3">00</h2> 
                            <small>mintes</small>
                            <h2 id="seconds3">00</h2> 
                            <small>seconds</small>
                        </div>
                    </div>
                    <div class="card three">
                        <img id="sport-bag" src="assets/img/offer-3.jpg" alt="">
                        <p>حقاب رياضيه</p>
                        <div class="time-container">
                            <h2 id="days">00</h2> 
                            <small>days</small>
                            <h2 id="hours">00</h2> 
                            <small>hours</small>
                            <h2 id="minutes">00</h2> 
                            <small>mintes</small>
                            <h2 id="seconds">00</h2> 
                            <small>seconds</small>
                        </div>
                    </div>
                    <!-- <div class="card-4">
                        <img src="" alt="">
                        <p></p>
                        <div></div>
                    </div> -->
                </section>
                  <section class="catgers" id = "cat-section">
                      <aside class="cat-descrip">
                            <div>
                                <a href="#">الرئيسية</a> / <a href="#">الكتب العربية</a> / <a href="#">كتب إلكترونية</a>
                            </div> 
                            <article>كتب إلكترونيه</article> 
                      </aside>
                        <section class="books" id="book-cat">
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book1.jpg" alt=""></div>
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book2.jpg" alt=""></div>
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book3.jpg" alt=""></div>
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book4.jpg" alt=""></div>
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book6.jpg" alt=""></div>
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book1.jpg" alt=""></div>
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book2.jpg" alt=""></div>
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book3.jpg" alt=""></div>
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book4.jpg" alt=""></div>
                            <div class="book-img-container"><img onclick="callImage(this);"  class="book-img" src="assets/img/catagers/books/book6.jpg" alt=""></div>
                            <section class="icons-of-phote">
                                <i id="prevBtnBook" class="fas fa-angle-right change-background fa-2x"></i>
                                <i  id="nextBtnBook"  class="fas fa-angle-left change-background fa-2x"></i>
                               </section>  
                        </section>
                   <!-- <button  id="prevBtnBook" class="prevBtn">Prevs</button>
             <button id="nextBtnBook"   class="NextBtn">Next</button>
              -->
               
                  </section>
           </div>
        
        </main>
        <div id="PopUp">
            <button id="btn-display" >X</button>
            <div class="More"> <a href="paiges/detels.html">More Deteals</a>
                <i class="fas fa-angle-down change-background fa-2x"></i>
            </div>
            <img src="assets/img/offer-2.jpg" alt="" id="imgView">
        </div>
        <div class="catger-group">
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/wheach1.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/whatch4.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/whatch5.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/whatch3.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/whatch5.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/phones/phone3.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/phones/phone4.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/phones/phone3.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/accesseries/access1.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/accesseries/access2.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/accesseries/access3.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/accesseries/access5.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/wheach1.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/wheach1.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/wheach1.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/wheach1.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
        <div class="catg-card">
            <img src="assets/img/catagers/whatches/whatch3.jpg" alt="">
            <h2>ساعه</h2>
        <small> رياضي لون سماء</small>
        <h4>ر.س 99</h4>
         <div class="icon-catgere-card">
        <span><i class="far fa-star"></i></span>
        <span><i class="far fa-share-square"></i></span>
        <span><i class="fas fa-shopping-basket"></i></span>
    </div>
        </div>
    </div> 
    <footer>
        <div class="footer-1">
             <div class="first-line" style="display: none;"> 
        <div clasbigs="first-line">أنضم إلى نشرتنا البريد</div>
        <div class="first-line">خدمة العملاء</div>
        <div class="first-line">خدمات</div>
        <div class="first-line">روابط سريعه</div>
        <div class="first-line">عن جرير</div>
        <div class="enter-email">
            <form action="" style="float:right;">
                <input type="email" placeholder="أدخل بريدك الاكتروني"> 
                <button>إشترك</button>
            </form>
        </div>
    </div>
    <div class="col1 ">أنضم إلى نشرتنا البريد</div>
    <div class="col2 ">خدمة العملاء</div>
    <div class="col3">خدمات</div>
    <div class="col4 ">روابط سريعه</div>
    <div class="col5 ">عن جرير</div>
    <div class="col1 enter-email  big-f">
        <form action="" style="float:right;">
            <input type="email" placeholder="أدخل بريدك الاكتروني"> 
            <button>إشترك</button>
        </form>
    </div>
        
        <div class="col2">مبيعات الشركات</div>
        <div class="col3">خدمة تقصيد المشريات </div>
        <div class="col4">إصدارات جرير</div>
        <div class="col5">من حن</div>
        <div class="col2">الأسالة المتكررة</div>
        <div class="col3">خدمات مابعد البيع</div>
        <div class="col4">قارئ الجزيره</div>
      

        <div class="col5">الحوكمة</div>

        
        <div class="col2">دليل التسوق الطبوعات</div>
        <div class="col3">خدمة الحماية الشامله</div>
        <div class="col4">شركاء برامج المكافئات</div>
        <div class="col5">علاقات المستثمرين والتقارير</div>
        <!-- form here rebeated  -->
        <div class="col2">مواقع المعارض</div>
        <div class="col3">حماية أجهزة أبل</div>
        <div class="col4 take-two-line"> خدمة شركات الإتصالات</div> 
        <div class="col5">الاستدامة</div>

        <div class="col2">سياسة الضمان</div>
        <div class="col3">بطاقة خصم جرير</div>
        <!-- <div class="col4">قارئ الجزيره</div> -->
        
        <div class="col5">الأخبار</div>
        
        <div class="col1">تواصل معنا</div>
        <div class="col2">سياسة الاسترجاع والستبدال</div>
        <div class="col3">بطاقة جرير للهدايا</div>
        <!-- <div class="col4">شركاء برامج المكافئات</div> -->
        <div class="col5">فرص العمل</div>
    </div>
    <div class="footer-2">
        
    </div>
    </footer>
    <div class="login-regest " id="login-regest">
        <div class="container">
          <div class="header">
              <h2>تسجيل الدخول</h2>
          </div>
          <form class="form" id="form">
            <div class="form-control">
                <input type="text"
                placeholder="البريد الإكتروني أو الجوال" id="email">
            </div>
            <div class="form-control">
                <input type="text"
                placeholder="كلمة السر" id="password" >
            </div>
            <button type="submit" id="btn-allowed">تسجيل الدخول</button>
              
          </form>
          <section class="resgest">
          <p> ليس لديك حساب</p>
          <div class="creat" type="submit" id="btn-regest"
            "> إنشاء حساب جديد</div>
        </section>
        </div>
    </div>
    <!-- <div class="regester"> -->
        <div class="regest" id="regest">
            <div class="container">
              <div class="header">
                  <h2>إنشاء حساب</h2>
              </div>
              <form class="form" id="form">
                <div class="form-control">
                    <input type="text"
                    placeholder="رقم الجوال" id="phone">
                    <label for="">سوف نرسل للك رمز التحقق عن طريق رسالة نصيه</label>
                </div>
                <div class="form-control">
                    <button type="submit">إرسال رمز التحقق</button>
                </div>
                <div class="form-control">
                    <input type="text"
                    placeholder=" الاسم الاول" id="frist-name" >
                </div>
                <div class="form-control">
                    <input type="text"
                    placeholder=" اسم العالة " id="last-name" >
                </div>
                <div class="form-control">
                    <input type="email"
                    placeholder="البريد الالكتروني" id="reg-email" >
                </div>
                <div class="form-control">
                    <input type="email"
                    placeholder=" تاكيد البريد الاكتروني " id="check-email" >
                </div>
                <div class="form-control">
                    <input type="password"
                    placeholder="كلمة السر" id="password" >
                </div>
                <button type="submit" id="btn-allowed">إنشاء حساب</button>
                  
              </form>
         
            </section>
            </div>
        </div>

    <!-- </div> -->
    
    <script src="assets/js/app.js">
    </script>
</body>
</html>