
<head>
<title>Exam 2</title>
<link rel="stylesheet" type="text/css" href="{{  secure_asset('/exam/css.css') }}" />
<link rel="stylesheet" type="text/css" href="{{  url('/exam/css.css') }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<div class="login-box">
  <h2>الأمتحان الثاني</h2>
  <form method ="Post" action="welldone2">
  @csrf
      <div class='row'>
				<input type="email" placeholder="email" name='email' data-required="true" data-error-message="Your First Name is required">
			</div>
      <div class='row'>
				<input type="text" placeholder="id" name='id' data-required="true" data-error-message="Your First Name is required">
			</div>
  <fieldset>
    <legend>كم عدد الرسائل التي كتبها بولس الرسولا </legend>

    <div>
      <input type="radio" id="huey" name="1" value="11"
             checked>
      <label for="huey">11</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="1" value="14">
      <label for="dewey">14</label>
    </div>

    <div>
      <input type="radio" id="louie" name="1" value="18">
      <label for="louie">18</label>
    </div>
    <div>
      <input type="radio" id="louie" name="1" value="21">
      <label for="louie">21</label>
    </div>
</fieldset>
<br>
<fieldset>
    <legend>من هو اول تلميذ من الاثني عشر نال اكليل الشهداء </legend>

    <div>
      <input type="radio" id="huey" name="2" value="بطرس الرسول"
             checked>
      <label for="huey">بطرس الرسول</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="2" value="اندراوس الرسول">
      <label for="dewey">اندراوس الرسول</label>
    </div>

    <div>
      <input type="radio" id="louie" name="2" value="يوحنا بن ذبدي">
        <label for="louie">يوحنا بن ذبدي</label>
    </div>
    <div>
      <input type="radio" id="louie" name="2" value="يعقوب بن ذبدي">
        <label for="louie">يعقوب بن ذبدي</label>
    </div>
</fieldset>
<br>
<fieldset>
    <legend> الهداف التاريخي لمنتخب اسبانيا </legend>

    <div>
      <input type="radio" id="huey" name="3" value="دافيد فيا"
             checked>
      <label for="huey">دافيد فيا</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="3" value="فيرناندو توريس">
      <label for="dewey">فيرناندو توريس</label>
    </div>

    <div>
      <input type="radio" id="louie" name="3" value="راؤول جونزليس">
      <label for="louie">راؤول جونزليس</label>
    </div>
    <div>
      <input type="radio" id="louie" name="3" value="اندرياس انيستا">
      <label for="louie">اندرياس انيستا</label>
    </div>
</fieldset>
<br>
<fieldset>  
    <legend>ما هي عاصمة دولة بولندا</legend>

    <div>
      <input type="radio" id="huey" name="4" value="وارسو"
             checked>
      <label for="huey">وارسو</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="4" value="فيينا ">
      <label for="dewey">فيينا </label>
    </div>

    <div>
      <input type="radio" id="louie" name="4" value="لوكسمبورج">
      <label for="louie">لوكسمبورج</label>
    </div>
    <div>
      <input type="radio" id="louie" name="4" value="دبلن">
      <label for="louie">دبلن</label>
    </div>
</fieldset>
<fieldset>  
    <legend>اول دولة استخدم شعبها ساعة اليد</legend>

    <div>
      <input type="radio" id="huey" name="5" value="سويسرا"
             checked>
      <label for="huey">سويسرا</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="5" value="بريطانيا ">
      <label for="dewey">بريطانيا </label>
    </div>

    <div>
      <input type="radio" id="louie" name="5" value="فرنسا">
      <label for="louie">فرنسا</label>
    </div>
    <div>
      <input type="radio" id="louie" name="5" value="النمسا">
      <label for="louie">النمسا</label>
    </div>
</fieldset>
<fieldset>  
    <legend>من هو اول رجل تزوج امرأتين حسب الكتاب المقدس </legend>

    <div>
      <input type="radio" id="huey" name="6" value="يعقول"
             checked>
      <label for="huey">يعقول</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="6" value="لامك ">
      <label for="dewey">لامك </label>
    </div>

    <div>
      <input type="radio" id="louie" name="6" value="ابراهيم">
      <label for="louie">ابراهيم</label>
    </div>
    <div>
      <input type="radio" id="louie" name="6" value="طوبيا">
      <label for="louie">طوبيا</label>
    </div>
</fieldset>

<fieldset>  
    <legend>اكثر القارات تنظيما لكاس العالم </legend>

    <div>
      <input type="radio" id="huey" name="7" value="اوروبا"
             checked>
      <label for="huey">اوروبا</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="7" value="امريكا الجنوبية ">
      <label for="dewey">امريكا الجنوبية </label>
    </div>

    <div>
      <input type="radio" id="louie" name="7" value="امريكا الشمالية">
      <label for="louie">امريكا الشمالية</label>
    </div>
    <div>
      <input type="radio" id="louie" name="7" value="اسيا">
      <label for="louie">اسيا</label>
    </div>
</fieldset>

<fieldset>  
    <legend>مااسم العبد الذي صار مساعد لبولس  الرسول  </legend>

    <div>
      <input type="radio" id="huey" name="8" value="افتيخوس"
             checked>
      <label for="huey">افتيخوس</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="8" value="ألداد ">
      <label for="dewey">ألداد </label>
    </div>

    <div>
      <input type="radio" id="louie" name="8" value="ويمبريس">
      <label for="louie">ويمبريس</label>
    </div>
    <div>
      <input type="radio" id="louie" name="8" value="انسيموس">
      <label for="louie">انسيموس</label>
    </div>
</fieldset>
<fieldset>  
    <legend>كم يبلغ عدد الاعبين في رياضة كرة السله </legend>

    <div>
      <input type="radio" id="huey" name="9" value="4"
             checked>
      <label for="huey">4</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="9" value="5">
      <label for="dewey">5 </label>
    </div>

    <div>
      <input type="radio" id="louie" name="9" value=" 6">
      <label for="louie">6</label>
    </div>
    <div>
      <input type="radio" id="louie" name="9" value="7">
      <label for="louie">7</label>
    </div>
</fieldset>
<fieldset>  
    <legend>ما الدولة المبتكرة للعبة الشطرنج </legend>

    <div>
      <input type="radio" id="huey" name="10" value="السويد"
             checked>
      <label for="huey">السويد</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="10" value="النرويج ">
      <label for="dewey">النرويج </label>
    </div>

    <div>
      <input type="radio" id="louie" name="10" value="الهند">
      <label for="louie">الهند </label>
    </div>
    <div>
      <input type="radio" id="louie" name="10" value="اليابان">
      <label for="louie">اليابان</label>
    </div>
</fieldset>
<input type="submit" value="submit">

  </form>
</div>