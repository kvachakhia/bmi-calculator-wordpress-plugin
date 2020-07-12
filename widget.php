<?php
wp_enqueue_style('style-bmi', plugin_dir_url(__FILE__) . 'assets/style.css');
wp_enqueue_script('bmi_calc', plugin_dir_url(__FILE__) . 'assets/bmi-calculator.js');

$translation_array = [
    //სათაური
    'interp1' => __('ძაალიან გამხდარი', 'bmi-calculator-diweb'),
    'interp2' => __('ნორმალური წონა', 'bmi-calculator-diweb'),
    'interp3' => __('ჭარბი წონა', 'bmi-calculator-diweb'),
    'interp4' => __('მორბიდული სიმსუქნე ტიპი 1.', 'bmi-calculator-diweb'),
    'interp5' => __('მორბიდული სიმსუქნე ტიპი 2.', 'bmi-calculator-diweb'),
    'interp6' => __('მორბიდული სიმსუქნე ტიპი 3.', 'bmi-calculator-diweb'),
    'interp7' => __('სუპერჭარბწონიანობა', 'bmi-calculator-diweb'),
    //ტექსტი
    'txtbody1' => __('აუცილებელია ვიზიტი ენდოკრინოლოგთან და მის მიერ დანიშნული სწორი კვების რეჟიმის დაცვა.', 'bmi-calculator-diweb'),
    'txtbody2' => __('თქვენი  წონა ნორმალურია, განაგრძეთ არსებული კვების რეჟიმი და ცხოვრების სტილი!', 'bmi-calculator-diweb'),
    'txtbody3' => __('აუცილებელია ვიზიტი ენდოკრინლოგთან და ფსიქოლოგთან და მათ მიერ დანიშნული სწორი კვების რეჟიმის და რეკომენდაციების დაცვა', 'bmi-calculator-diweb'),
    'txtbody4' => __('აუცილებელია ვიზიტი ენდოკრინოლოგთან, ფსიქოლოგთან, კარდიოლოგთან და თერაპევტთან, იმ შემთხვევაში თუ პაციენტს აღენიშნება რომელიმე ისეთი თანხმლები დაავადება როგორიცაა შაქრიანი დიაბეტი, არტერიული ჰიპერტონია, დისლიპიდემია, გულის იშემიური დაავადება, თავის ტვინის სისხლის მიმოქცევის მოშლის ნიშნები, პიკვიკის სინდრომი, ძვალსახსროვანი სისტემის დეგენრაციული პათოლოგიები, ინიშნება კონსერვატიული რეაბილიტაციური თერაპია მინიმუმ 6 თვის განმავლობაში და მისი უეფექტობის შემთხვევაში შესაძლებელია დაისვას საკითხი ბარიატრიული ოპერაციის შესახებ', 'bmi-calculator-diweb'),
    'txtbody5' => __('ნაჩვენებია მულტიდისციპლინარული გუნდის მიერ (ფსიქოლოგი, ენდოკრინოლოგი, კარდიოლოგი, თერაპევტი, ბარიატრიული ქირურგი) პაციენტის მდგომარეობის შეფასება და ბარიატრიული ქირურგიული მკურნალობის საკითხის გადაწყვეტა სათანადო მომზადების შემდგომ.', 'bmi-calculator-diweb'),

    //Alert
    'info' => __('შეიყვანეთ სწორი ინფორმაცია', 'bmi-calculator-diweb'),
];

wp_localize_script('bmi_calc', 'object_name', $translation_array);

// Enqueued script with localized data.
wp_enqueue_script('bmi_calc');

?>

<form name="bmi"  method="post">

    <div class="form-group">
        <label for="gender"><?php echo __('სქესი', 'bmi-calculator-diweb') ?> : </label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="male"  checked="">
            <label class="form-check-label" for="male">
                <?php echo __('მამრობითი', 'bmi-calculator-diweb') ?>
            </label>
        </div>
        <div class="form-check ">
            <input class="form-check-input" type="radio" name="sex" id="female" >
            <label class="form-check-label" for="female">
                <?php echo __('მდედრობითი', 'bmi-calculator-diweb') ?>
            </label>
        </div>
    </div>

    <div class="form-group">
        <label for="wt"><?php echo __('წონა(კგ)', 'bmi-calculator-diweb') ?>:</label>
        <input type="text" class="form-control" id="wt" name="wt" >
    </div>

    <div class="form-group">
        <label for="ht"><?php echo __('სიმაღლე', 'bmi-calculator-diweb') ?>:</label>
        <input type="text" class="form-control" id="ht" name="ht" >
    </div>

    <button type="button" onclick="bmiCalc(this.form)" class="btn btn-primary"><?php echo __('გამოთვლა', 'bmi-calculator-diweb') ?></button>
    <!-- <input type="button" name="button" value="გამოთვლა" onclick="bmiCalc(this.form)"> -->

    <div class="form-group">

    </div>

    <div class="row">
        <div class="col">
            <label for="bmi"><?php echo __('მასის ინდექსი', 'bmi-calculator-diweb') ?>:</label>
            <input type="text" class="form-control" name="bmi" id="bmi" readonly>
            <?php echo __('კგ/მ', 'bmi-calculator-diweb') ?><sup>2</sup>
        </div>
        <div class="col">
            <label for="bmi"><br></label>
            <input type="text" class="form-control" name="interp" id="interp" readonly>
        </div>
    </div>

    <div class="form-group">
        <label for="txtbody"></label>
        <textarea name="txtbody" class="form-control" id="txtbody" cols="30" rows="10" readonly></textarea>
    </div>



</form>
