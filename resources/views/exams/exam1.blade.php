
<head>
<title>Exam 1</title>
<link rel="stylesheet" type="text/css" href="{{  secure_asset('/exam/css.css') }}" />
<link rel="stylesheet" type="text/css" href="{{  url('/exam/css.css') }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

{{ for($open == "open"){
    if ($open == "close"){

    }
}}}
<div class="login-box" >
  <h2>الأمتحان الأول</h2>
  <form method ="Post" action="welldone">
  @csrf
  <div class='row'>
				<input type="email" placeholder="email" name='email' data-required="true" data-error-message="Your First Name is required">
			</div>
      <div class='row'>
				<input type="text" placeholder="id" name='id' data-required="true" data-error-message="Your First Name is required">
			</div>
  <fieldset>
    <legend>كيف استشهد  توما الرسول</legend>

    <div>
      <input type="radio" id="huey" name="1" value="قطع رأسه"
             checked>
      <label for="huey">قطع رأسه</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="1" value="رجما بالحجارة">
      <label for="dewey">رجما بالحجارة</label>
    </div>

    <div>
      <input type="radio" id="louie" name="1" value="طعنا بالرمح">
      <label for="louie">طعنا بالرمح</label>
    </div>
    <div>
      <input type="radio" id="louie" name="1" value="الصلب">
      <label for="louie"> الصلب </label>
    </div>
</fieldset>
<br>
<fieldset>
    <legend> خلق الله البحار و المحيطات في اليوم؟ </legend>

    <div>
      <input type="radio" id="huey" name="2" value="الثالث"
             checked>
      <label for="huey">الثالث</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="2" value="الرابع">
      <label for="dewey">الرابع</label>
    </div>

    <div>
      <input type="radio" id="louie" name="2" value="الخامس">
        <label for="louie">الخامس</label>
    </div>
    <div>
      <input type="radio" id="louie" name="2" value="السادس">
        <label for="louie">السادس</label>
    </div>
</fieldset>
<br>
<fieldset>
    <legend>من هو الهداف التاريخي ﻷكاس العالم ؟</legend>

    <div>
      <input type="radio" id="huey" name="3" value="رونالدو داليما"
             checked>
      <label for="huey">رونالدو داليما </label>
    </div>

    <div>
      <input type="radio" id="dewey" name="3" value="ميروسلاف كلوزة">
      <label for="dewey">ميروسلاف كلوزة</label>
    </div>

    <div>
      <input type="radio" id="louie" name="3" value="بيليه">
      <label for="louie">بيليه</label>
    </div>
    <div>
      <input type="radio" id="louie" name="3" value=">فرانز بوشكاش">
      <label for="louie">فرانز بوشكاش</label>
    </div>
</fieldset>
<br>
<fieldset>
    <legend> من الذي مد الله له عمره 15 عاما</legend>

    <div>
      <input type="radio" id="huey" name="4" value="حزقيال الملك">
      <label for="huey">حزقيال الملك</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="4" value="صموئيل النبي">
      <label for="dewey">صموئيل النبي</label>
    </div>

    <div>
      <input type="radio" id="louie" name="4" value="ايليا النبي">
      <label for="louie">ايليا النبي</label>
    </div>
    <div>
      <input type="radio" id="louie" name="4" value="داوود النبي و الملك">
      <label for="louie">داوود النبي و الملك</label>
    </div>
</fieldset>
<fieldset>
    <legend> كم عدد اصحاحات الأناجيل الأربعة</legend>

    <div>
      <input type="radio" id="huey" name="5" value="77">
      <label for="huey">77</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="5" value="89">
      <label for="dewey">89 </label>
    </div>

    <div>
      <input type="radio" id="louie" name="5" value="94">
      <label for="louie"> 94</label>
    </div>
    <div>
      <input type="radio" id="louie" name="5" value="103">
      <label for="louie">103 </label>
    </div>
</fieldset>

<fieldset>
    <legend> من هو اول قاضي لشعب بني اسرائيل</legend>

    <div>
      <input type="radio" id="huey" name="6" value="يائير الجلعادي">
      <label for="huey">يائير الجلعادي</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="6" value="يشوع">
      <label for="dewey">يشوع </label>
    </div>

    <div>
      <input type="radio" id="louie" name="6" value="جدعون">
      <label for="louie"> جدعون</label>
    </div>
    <div>
      <input type="radio" id="louie" name="6" value="عثنيئيل بن قناذ">
      <label for="louie">عثنيئيل بن قناذ </label>
    </div>
</fieldset>

<fieldset>
    <legend> المنتخب الفائز باول نسخة كاس العالم 1930</legend>

    <div>
      <input type="radio" id="huey" name="7" value="ايطاليا">
      <label for="huey">ايطاليا</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="7" value="البرازيل">
      <label for="dewey">البرازيل </label>
    </div>

    <div>
      <input type="radio" id="louie" name="7" value="اوروجواي">
      <label for="louie"> اوروجواي</label>
    </div>  
    <div>
      <input type="radio" id="louie" name="7" value="ألمانيا">
      <label for="louie">ألمانيا </label>
    </div>
</fieldset>

<fieldset>
    <legend>  اول الشعب  ابتكر لعبة الدومنو</legend>

    <div>
      <input type="radio" id="huey" name="8" value="الصيني">
      <label for="huey">الصيني</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="8" value="الايطالي">
      <label for="dewey">الايطالي </label>
    </div>

    <div>
      <input type="radio" id="louie" name="8" value="اليباني">
      <label for="louie"> اليباني</label>
    </div>
    <div>
      <input type="radio" id="louie" name="8" value="الدنماركي">
      <label for="louie">الدنماركي </label>
    </div>
</fieldset>
<fieldset>
    <legend> السينوفوبيا هي خوف من  </legend>

    <div>
      <input type="radio" id="huey" name="9" value="الادوات الحادة">
      <label for="huey">الادوات الحادة</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="9" value="المرتفعات">
      <label for="dewey">المرتفعات </label>
    </div>

    <div>
      <input type="radio" id="louie" name="9" value="الاماكن المغلقة">
      <label for="louie"> الاماكن المغلقة</label>
    </div>
    <div>
      <input type="radio" id="louie" name="9" value="الكلاب">
      <label for="louie">الكلاب </label>
    </div>
</fieldset>
<fieldset>
    <legend> الهداف التاريخي للدوري الانجليزي</legend>

    <div>
      <input type="radio" id="huey" name="10" value="واين روني">
      <label for="huey">واين روني</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="10" value="تيري هنري ">
      <label for="dewey">تيري هنري </label>
    </div>

    <div>
      <input type="radio" id="louie" name="10" value="الان شيرار">
      <label for="louie"> الان شيرار</label>
    </div>
    <div>
      <input type="radio" id="louie" name="10" value="كون اجويرو ">
      <label for="louie">كون اجويرو </label>
    </div>
</fieldset>
<input type="submit" value="submit">
  </form>
</div>