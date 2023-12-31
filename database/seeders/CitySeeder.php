<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cities=[
            /* Start Cairo governorate_id:1 */

['governorate_id'=>1,'name_ar'=> 'الازبكية','name_en'=> 'Al Azbakeyah'],
['governorate_id'=>1,'name_ar'=> 'البساتين', 'name_en'=>'Al Basatin'],
['governorate_id'=>1,'name_ar'=> 'التبين','name_en'=> 'Tebin'],
['governorate_id'=>1,'name_ar'=> 'الخليفة', 'name_en'=>'El-Khalifa'],
['governorate_id'=>1,'name_ar'=> 'الدراسة', 'name_en'=>'El darrasa'],
['governorate_id'=>1,'name_ar'=> 'الدرب الاحمر','name_en'=> 'Aldarb Alahmar'],
['governorate_id'=>1,'name_ar'=> 'الزاوية الحمراء','name_en'=> 'Zawya al-Hamra'],
['governorate_id'=>1,'name_ar'=> 'الزيتون','name_en'=> 'El-Zaytoun'],
['governorate_id'=>1,'name_ar'=> 'الساحل','name_en'=> 'Sahel'],
['governorate_id'=>1,'name_ar'=> 'السلام', 'name_en'=>'El Salam'],
['governorate_id'=>1,'name_ar'=> 'السيدة زينب', 'name_en'=>'Sayeda Zeinab'],
['governorate_id'=>1,'name_ar'=> 'الشرابية','name_en'=> 'El Sharabeya'],
['governorate_id'=>1,'name_ar'=> 'مدينة الشروق', 'name_en'=>'Shorouk'],
['governorate_id'=>1,'name_ar'=> 'الظاهر','name_en'=> 'El Daher'],
['governorate_id'=>1,'name_ar'=> 'العتبة','name_en'=> 'Ataba'],
['governorate_id'=>1,'name_ar'=> 'القاهرة الجديدة', 'name_en'=>'New Cairo'],
['governorate_id'=>1,'name_ar'=> 'المرج', 'name_en'=>'El Marg'],
['governorate_id'=>1,'name_ar'=> 'عزبة النخل', 'name_en'=>'Ezbet el Nakhl'],
['governorate_id'=>1,'name_ar'=> 'المطرية', 'name_en'=>'Matareya'],
['governorate_id'=>1,'name_ar'=> 'المعادى', 'name_en'=>'Maadi'],
['governorate_id'=>1,'name_ar'=> 'المعصرة','name_en'=> 'Maasara'],
['governorate_id'=>1,'name_ar'=> 'المقطم', 'name_en'=>'Mokattam'],
['governorate_id'=>1,'name_ar'=> 'المنيل', 'name_en'=>'Manyal'],
['governorate_id'=>1,'name_ar'=> 'الموسكى','name_en'=> 'Mosky'],
['governorate_id'=>1,'name_ar'=> 'النزهة', 'name_en'=>'Nozha'],
['governorate_id'=>1,'name_ar'=> 'الوايلى', 'name_en'=>'Waily'],
['governorate_id'=>1,'name_ar'=> 'باب الشعرية', 'name_en'=>'Bab al-Shereia'],
['governorate_id'=>1,'name_ar'=> 'بولاق','name_en'=> 'Bolaq'],
['governorate_id'=>1,'name_ar'=> 'جاردن سيتى', 'name_en'=>'Garden City'],
['governorate_id'=>1,'name_ar'=> 'حدائق القبة', 'name_en'=>'Hadayek El-Kobba'],
['governorate_id'=>1,'name_ar'=> 'حلوان','name_en'=> 'Helwan'],
['governorate_id'=>1,'name_ar'=> 'دار السلام', 'name_en'=>'Dar Al Salam'],
['governorate_id'=>1,'name_ar'=> 'شبرا','name_en'=> 'Shubra'],
['governorate_id'=>1,'name_ar'=> 'طره','name_en'=> 'Tura'],
['governorate_id'=>1,'name_ar'=> 'عابدين', 'name_en'=>'Abdeen'],
['governorate_id'=>1,'name_ar'=> 'عباسية','name_en'=> 'Abaseya'],
['governorate_id'=>1,'name_ar'=> 'عين شمس', 'name_en'=>'Ain Shams'],
['governorate_id'=>1,'name_ar'=> 'مدينة نصر','name_en'=> 'Nasr City'],
['governorate_id'=>1,'name_ar'=> 'مصر الجديدة', 'name_en'=>'New Heliopolis'],
['governorate_id'=>1,'name_ar'=> 'مصر القديمة', 'name_en'=>'Masr Al Qadima'],
['governorate_id'=>1,'name_ar'=> 'منشية ناصر','name_en'=> 'Mansheya Nasir'],
['governorate_id'=>1,'name_ar'=> 'مدينة بدر', 'name_en'=>'Badr City'],
['governorate_id'=>1,'name_ar'=> 'مدينة العبور','name_en'=> 'Obour City'],
['governorate_id'=>1,'name_ar'=> 'وسط البلد','name_en'=> 'Cairo Downtown'],
['governorate_id'=>1,'name_ar'=> 'الزمالك','name_en'=> 'Zamalek'],
['governorate_id'=>1,'name_ar'=> 'قصر النيل','name_en'=> 'Kasr El Nile'],
['governorate_id'=>1,'name_ar'=> 'الرحاب', 'name_en'=>'Rehab'],
['governorate_id'=>1,'name_ar'=> 'القطامية','name_en'=> 'Katameya'],
['governorate_id'=>1,'name_ar'=> 'مدينتي','name_en'=> 'Madinty'],
['governorate_id'=>1,'name_ar'=> 'روض الفرج','name_en'=> 'Rod Alfarag'],
['governorate_id'=>1,'name_ar'=> 'شيراتون', 'name_en'=>'Sheraton'],
['governorate_id'=>1,'name_ar'=> 'الجمالية','name_en'=> 'El-Gamaleya'],
['governorate_id'=>1,'name_ar'=> 'العاشر من رمضان','name_en'=> '10th of Ramadan City'],
['governorate_id'=>1,'name_ar'=> 'الحلمية', 'name_en'=>'Helmeyat Alzaytoun'],
['governorate_id'=>1,'name_ar'=> 'النزهة الجديدة','name_en'=> 'New Nozha'],
['governorate_id'=>1,'name_ar'=> 'العاصمة الإدارية','name_en'=> 'Capital New'],
/* End Cairo governorate_id:1 */

/* Start Giza governorate_id:2 */
['governorate_id'=>2,'name_ar'=> 'الجيزة', 'name_en'=>'Giza'],
['governorate_id'=>2,'name_ar'=> 'السادس من أكتوبر', 'name_en'=>'Sixth of October'],
['governorate_id'=>2,'name_ar'=> 'الشيخ زايد', 'name_en'=>'Cheikh Zayed'],
['governorate_id'=>2,'name_ar'=> 'الحوامدية','name_en'=> 'Hawamdiyah'],
['governorate_id'=>2,'name_ar'=> 'البدرشين', 'name_en'=>'Al Badrasheen'],
['governorate_id'=>2,'name_ar'=> 'الصف','name_en'=> 'Saf'],
['governorate_id'=>2,'name_ar'=> 'أطفيح', 'name_en'=>'Atfih'],
['governorate_id'=>2,'name_ar'=> 'العياط', 'name_en'=>'Al Ayat'],
['governorate_id'=>2,'name_ar'=> 'الباويطي', 'name_en'=>'Al-Bawaiti'],
['governorate_id'=>2,'name_ar'=> 'منشأة القناطر','name_en'=> 'ManshiyetAl Qanater'],
['governorate_id'=>2,'name_ar'=> 'أوسيم', 'name_en'=>'Oaseem'],
['governorate_id'=>2,'name_ar'=> 'كرداسة','name_en'=> 'Kerdasa'],
['governorate_id'=>2,'name_ar'=> 'أبو النمرس', 'name_en'=>'Abu Nomros'],
['governorate_id'=>2,'name_ar'=> 'كفر غطاطي','name_en'=> 'Kafr Ghati'],
['governorate_id'=>2,'name_ar'=> 'منشأة البكاري', 'name_en'=>'Manshiyet Al Bakari'],
['governorate_id'=>2,'name_ar'=> 'الدقى', 'name_en'=>'Dokki'],
['governorate_id'=>2,'name_ar'=> 'العجوزة', 'name_en'=>'Agouza'],
['governorate_id'=>2,'name_ar'=> 'الهرم', 'name_en'=>'Haram'],
['governorate_id'=>2,'name_ar'=> 'الوراق','name_en'=> 'Warraq'],
['governorate_id'=>2,'name_ar'=> 'امبابة', 'name_en'=>'Imbaba'],
['governorate_id'=>2,'name_ar'=> 'بولاق الدكرور', 'name_en'=>'Boulaq Dakrour'],
['governorate_id'=>2,'name_ar'=> 'الواحات البحرية', 'name_en'=>'Al Wahat Al Baharia'],
['governorate_id'=>2,'name_ar'=> 'العمرانية', 'name_en'=>'Omraneya'],
['governorate_id'=>2,'name_ar'=> 'المنيب', 'name_en'=>'Moneeb'],
['governorate_id'=>2,'name_ar'=> 'بين السرايات', 'name_en'=>'Bin Alsarayat'],
['governorate_id'=>2,'name_ar'=> 'الكيت كات', 'name_en'=>'Kit Kat'],
['governorate_id'=>2,'name_ar'=> 'المهندسين','name_en'=> 'Mohandessin'],
['governorate_id'=>2,'name_ar'=> 'فيصل', 'name_en'=>'Faisal'],
['governorate_id'=>2,'name_ar'=> 'أبو رواش', 'name_en'=>'Abu Rawash'],
['governorate_id'=>2,'name_ar'=> 'حدائق الأهرام', 'name_en'=>'Hadayek Alahram'],
['governorate_id'=>2,'name_ar'=> 'الحرانية', 'name_en'=>'Haraneya'],
['governorate_id'=>2,'name_ar'=> 'حدائق اكتوبر', 'name_en'=>'Hadayek October'],
['governorate_id'=>2,'name_ar'=> 'صفط اللبن', 'name_en'=>'Saft Allaban'],
['governorate_id'=>2,'name_ar'=> 'القرية الذكية', 'name_en'=>'Smart Village'],
['governorate_id'=>2,'name_ar'=> 'ارض اللواء', 'name_en'=>'Ard Ellwaa'],
/* End Giza governorate_id:2 */

/* Start Alexandria governorate_id:3 */
['governorate_id'=>3,'name_ar'=> 'ابو قير', 'name_en'=>'Abu Qir'],
['governorate_id'=>3,'name_ar'=> 'الابراهيمية','name_en'=> 'Al Ibrahimeyah'],
['governorate_id'=>3,'name_ar'=> 'الأزاريطة', 'name_en'=>'Azarita'],
['governorate_id'=>3,'name_ar'=> 'الانفوشى', 'name_en'=>'Anfoushi'],
['governorate_id'=>3,'name_ar'=> 'الدخيلة','name_en'=> 'Dekheila'],
['governorate_id'=>3,'name_ar'=> 'السيوف', 'name_en'=>'El Soyof'],
['governorate_id'=>3,'name_ar'=> 'العامرية', 'name_en'=>'Ameria'],
['governorate_id'=>3,'name_ar'=> 'اللبان','name_en'=> 'El Labban'],
['governorate_id'=>3,'name_ar'=> 'المفروزة','name_en'=> 'Al Mafrouza'],
['governorate_id'=>3,'name_ar'=> 'المنتزه', 'name_en'=>'El Montaza'],
['governorate_id'=>3,'name_ar'=> 'المنشية','name_en'=> 'Mansheya'],
['governorate_id'=>3,'name_ar'=> 'الناصرية', 'name_en'=>'Naseria'],
['governorate_id'=>3,'name_ar'=> 'امبروزو','name_en'=> 'Ambrozo'],
['governorate_id'=>3,'name_ar'=> 'باب شرق', 'name_en'=>'Bab Sharq'],
['governorate_id'=>3,'name_ar'=> 'برج العرب', 'name_en'=>'Bourj Alarab'],
['governorate_id'=>3,'name_ar'=> 'ستانلى', 'name_en'=>'Stanley'],
['governorate_id'=>3,'name_ar'=> 'سموحة','name_en'=> 'Smouha'],
['governorate_id'=>3,'name_ar'=> 'سيدى بشر','name_en'=> 'Sgovernorate_idi Bishr'],
['governorate_id'=>3,'name_ar'=> 'شدس', 'name_en'=>'Shads'],
['governorate_id'=>3,'name_ar'=> 'غيط العنب', 'name_en'=>'Gheet Alenab'],
['governorate_id'=>3,'name_ar'=> 'فلمينج', 'name_en'=>'Fleming'],
['governorate_id'=>3,'name_ar'=> 'فيكتوريا', 'name_en'=>'Victoria'],
['governorate_id'=>3,'name_ar'=> 'كامب شيزار', 'name_en'=>'Camp Shizar'],
['governorate_id'=>3,'name_ar'=> 'كرموز', 'name_en'=>'Karmooz'],
['governorate_id'=>3,'name_ar'=> 'محطة الرمل','name_en'=> 'Mahta Alraml'],
['governorate_id'=>3,'name_ar'=> 'مينا البصل','name_en'=> 'Mina El-Basal'],
['governorate_id'=>3,'name_ar'=> 'العصافرة', 'name_en'=>'Asafra'],
['governorate_id'=>3,'name_ar'=> 'العجمي', 'name_en'=>'Agamy'],
['governorate_id'=>3,'name_ar'=> 'بكوس', 'name_en'=>'Bakos'],
['governorate_id'=>3,'name_ar'=> 'بولكلي','name_en'=> 'Boulkly'],
['governorate_id'=>3,'name_ar'=> 'كليوباترا', 'name_en'=>'Cleopatra'],
['governorate_id'=>3,'name_ar'=> 'جليم','name_en'=> 'Glim'],
['governorate_id'=>3,'name_ar'=> 'المعمورة','name_en'=> 'Al Mamurah'],
['governorate_id'=>3,'name_ar'=> 'المندرة', 'name_en'=>'Al Mandara'],
['governorate_id'=>3,'name_ar'=> 'محرم بك', 'name_en'=>'Moharam Bek'],
['governorate_id'=>3,'name_ar'=> 'الشاطبي', 'name_en'=>'Elshatby'],
['governorate_id'=>3,'name_ar'=> 'سيدي جابر','name_en'=> 'Sgovernorate_idi Gaber'],
['governorate_id'=>3,'name_ar'=> 'الساحل الشمالي', 'name_en'=>'North Coast/sahel'],
['governorate_id'=>3,'name_ar'=> 'الحضرة', 'name_en'=>'Alhadra'],
['governorate_id'=>3,'name_ar'=> 'العطارين','name_en'=> 'Alattarin'],
['governorate_id'=>3,'name_ar'=> 'سيدي كرير', 'name_en'=>'Sgovernorate_idi Kerir'],
['governorate_id'=>3,'name_ar'=> 'الجمرك', 'name_en'=>'Elgomrok'],
['governorate_id'=>3,'name_ar'=> 'المكس', 'name_en'=>'Al Max'],
['governorate_id'=>3,'name_ar'=> 'مارينا', 'name_en'=>'Marina'],
/* End Alexandria governorate_id:3 */

/* Start Dakahlia governorate_id:4 */
['governorate_id'=>4,'name_ar'=> 'المنصورة', 'name_en'=>'Mansoura'],
['governorate_id'=>4,'name_ar'=> 'طلخا', 'name_en'=>'Talkha'],
['governorate_id'=>4,'name_ar'=> 'ميت غمر','name_en'=> 'Mitt Ghamr'],
['governorate_id'=>4,'name_ar'=> 'دكرنس', 'name_en'=>'Dekernes'],
['governorate_id'=>4,'name_ar'=> 'أجا', 'name_en'=>'Aga'],
['governorate_id'=>4,'name_ar'=> 'منية النصر', 'name_en'=>'Menia El Nasr'],
['governorate_id'=>4,'name_ar'=> 'السنبلاوين', 'name_en'=>'Sinbillawin'],
['governorate_id'=>4,'name_ar'=> 'الكردي', 'name_en'=>'El Kurdi'],
['governorate_id'=>4,'name_ar'=> 'بني عبيد', 'name_en'=>'Bani Ubagovernorate_id'],
['governorate_id'=>4,'name_ar'=> 'المنزلة', 'name_en'=>'Al Manzala'],
['governorate_id'=>4,'name_ar'=> 'تمي الأمديد', 'name_en'=>'tami alamdgovernorate_id'],
['governorate_id'=>4,'name_ar'=> 'الجمالية', 'name_en'=>'aljamalia'],
['governorate_id'=>4,'name_ar'=> 'شربين', 'name_en'=>'Sherbin'],
['governorate_id'=>4,'name_ar'=> 'المطرية', 'name_en'=>'Mataria'],
['governorate_id'=>4,'name_ar'=> 'بلقاس', 'name_en'=>'Belqas'],
['governorate_id'=>4,'name_ar'=> 'ميت سلسيل','name_en'=> 'Meet Salsil'],
['governorate_id'=>4,'name_ar'=> 'جمصة','name_en'=> 'Gamasa'],
['governorate_id'=>4,'name_ar'=> 'محلة دمنة','name_en'=> 'Mahalat Damana'],
['governorate_id'=>4,'name_ar'=> 'نبروه', 'name_en'=>'Nabroh'],
/* End Dakahlia governorate_id:4 */

/* Start Red Sea governorate_id:5 */
['governorate_id'=>5,'name_ar'=> 'الغردقة','name_en'=> 'Hurghada'],
['governorate_id'=>5,'name_ar'=> 'رأس غارب', 'name_en'=>'Ras Ghareb'],
['governorate_id'=>5,'name_ar'=> 'سفاجا','name_en'=> 'Safaga'],
['governorate_id'=>5,'name_ar'=> 'القصير', 'name_en'=>'El Qusiar'],
['governorate_id'=>5,'name_ar'=> 'مرسى علم','name_en'=> 'Marsa Alam'],
['governorate_id'=>5,'name_ar'=> 'الشلاتين', 'name_en'=>'Shalatin'],
['governorate_id'=>5,'name_ar'=> 'حلايب', 'name_en'=>'Halaib'],
['governorate_id'=>5,'name_ar'=> 'الدهار','name_en'=> 'Aldahar'],
/* End Red Sea governorate_id:5 */

/* Start Beheira governorate_id:6 */
['governorate_id'=>6,'name_ar'=> 'دمنهور','name_en'=> 'Damanhour'],
['governorate_id'=>6,'name_ar'=> 'كفر الدوار', 'name_en'=>'Kafr El Dawar'],
['governorate_id'=>6,'name_ar'=> 'رشيد','name_en'=> 'Rashgovernorate_id'],
['governorate_id'=>6,'name_ar'=> 'إدكو','name_en'=> 'Edco'],
['governorate_id'=>6,'name_ar'=> 'أبو المطامير', 'name_en'=>'Abu al-Matamir'],
['governorate_id'=>6,'name_ar'=> 'أبو حمص', 'name_en'=>'Abu Homs'],
['governorate_id'=>6,'name_ar'=> 'الدلنجات', 'name_en'=>'Delengat'],
['governorate_id'=>6,'name_ar'=> 'المحمودية','name_en'=> 'Mahmoudiyah'],
['governorate_id'=>6,'name_ar'=> 'الرحمانية', 'name_en'=>'Rahmaniyah'],
['governorate_id'=>6,'name_ar'=> 'إيتاي البارود', 'name_en'=>'Itai Baroud'],
['governorate_id'=>6,'name_ar'=> 'حوش عيسى', 'name_en'=>'Housh Eissa'],
['governorate_id'=>6,'name_ar'=> 'شبراخيت', 'name_en'=>'Shubrakhit'],
['governorate_id'=>6,'name_ar'=> 'كوم حمادة','name_en'=> 'Kom Hamada'],
['governorate_id'=>6,'name_ar'=> 'بدر', 'name_en'=>'Badr'],
['governorate_id'=>6,'name_ar'=> 'وادي النطرون','name_en'=> 'Wadi Natrun'],
['governorate_id'=>6,'name_ar'=> 'النوبارية الجديدة', 'name_en'=>'New Nubaria'],
['governorate_id'=>6,'name_ar'=> 'النوبارية','name_en'=> 'Alnoubareya'],
/* End Beheira governorate_id:6 */

/* Start Fayoum governorate_id:7 */
['governorate_id'=>7,'name_ar'=> 'الفيوم', 'name_en'=>'Fayoum'],
['governorate_id'=>7,'name_ar'=> 'الفيوم الجديدة', 'name_en'=>'Fayoum El Gedgovernorate_ida'],
['governorate_id'=>7,'name_ar'=> 'طامية', 'name_en'=>'Tamiya'],
['governorate_id'=>7,'name_ar'=> 'سنورس', 'name_en'=>'Snores'],
['governorate_id'=>7,'name_ar'=> 'إطسا','name_en'=> 'Etsa'],
['governorate_id'=>7,'name_ar'=> 'إبشواي','name_en'=> 'Epschway'],
['governorate_id'=>7,'name_ar'=> 'يوسف الصديق', 'name_en'=>'Yusuf El Sediaq'],
['governorate_id'=>7,'name_ar'=> 'الحادقة','name_en'=> 'Hadqa'],
['governorate_id'=>7,'name_ar'=> 'اطسا', 'name_en'=>'Atsa'],
['governorate_id'=>7,'name_ar'=> 'الجامعة','name_en'=> 'Algamaa'],
['governorate_id'=>7,'name_ar'=> 'السيالة','name_en'=> 'Sayala'],
/* End Fayoum governorate_id:7 */

/* Start Gharbia governorate_id:8 */
['governorate_id'=>8,'name_ar'=> 'طنطا', 'name_en'=>'Tanta'],
['governorate_id'=>8,'name_ar'=> 'المحلة الكبرى', 'name_en'=>'Al Mahalla Al Kobra'],
['governorate_id'=>8,'name_ar'=> 'كفر الزيات','name_en'=> 'Kafr El Zayat'],
['governorate_id'=>8,'name_ar'=> 'زفتى', 'name_en'=>'Zefta'],
['governorate_id'=>8,'name_ar'=> 'السنطة','name_en'=> 'El Santa'],
['governorate_id'=>8,'name_ar'=> 'قطور', 'name_en'=>'Qutour'],
['governorate_id'=>8,'name_ar'=> 'بسيون', 'name_en'=>'Basion'],
['governorate_id'=>8,'name_ar'=> 'سمنود', 'name_en'=>'Samannoud'],
/* End Gharbia governorate_id:8 */

/* Start Ismailia governorate_id:9 */
['governorate_id'=>9,'name_ar'=> 'الإسماعيلية', 'name_en'=>'Ismailia'],
['governorate_id'=>9,'name_ar'=> 'فايد','name_en'=> 'Fayed'],
['governorate_id'=>9,'name_ar'=> 'القنطرة شرق', 'name_en'=>'Qantara Sharq'],
['governorate_id'=>9,'name_ar'=> 'القنطرة غرب','name_en'=> 'Qantara Gharb'],
['governorate_id'=>9,'name_ar'=> 'التل الكبير','name_en'=> 'El Tal El Kabier'],
['governorate_id'=>9,'name_ar'=> 'أبو صوير', 'name_en'=>'Abu Sawir'],
['governorate_id'=>9,'name_ar'=> 'القصاصين الجديدة','name_en'=> 'Kasasien El Gedgovernorate_ida'],
['governorate_id'=>9,'name_ar'=> 'نفيشة', 'name_en'=>'Nefesha'],
['governorate_id'=>9,'name_ar'=> 'الشيخ زايد', 'name_en'=>'Sheikh Zayed'],
/* End Ismailia governorate_id:9 */

/* Start Monufya governorate_id:10 */
['governorate_id'=>10,'name_ar'=> 'شبين الكوم','name_en'=> 'Shbeen El Koom'],
['governorate_id'=>10,'name_ar'=> 'مدينة السادات', 'name_en'=>'Sadat City'],
['governorate_id'=>10,'name_ar'=> 'منوف','name_en'=> 'Menouf'],
['governorate_id'=>10,'name_ar'=> 'سرس الليان','name_en'=> 'Sars El-Layan'],
['governorate_id'=>10,'name_ar'=> 'أشمون', 'name_en'=>'Ashmon'],
['governorate_id'=>10,'name_ar'=> 'الباجور', 'name_en'=>'Al Bagor'],
['governorate_id'=>10,'name_ar'=> 'قويسنا', 'name_en'=>'Quesna'],
['governorate_id'=>10,'name_ar'=> 'بركة السبع','name_en'=> 'Berkat El Saba'],
['governorate_id'=>10,'name_ar'=> 'تلا', 'name_en'=>'Tala'],
['governorate_id'=>10,'name_ar'=> 'الشهداء', 'name_en'=>'Al Shohada'],
/* Start Monufya governorate_id:10 */

/* StartMinya governorate_id:11 */
['governorate_id'=>11,'name_ar'=> 'المنيا', 'name_en'=>'Minya'],
['governorate_id'=>11,'name_ar'=> 'المنيا الجديدة', 'name_en'=>'Minya El Gedgovernorate_ida'],
['governorate_id'=>11,'name_ar'=> 'العدوة','name_en'=> 'El Adwa'],
['governorate_id'=>11,'name_ar'=> 'مغاغة', 'name_en'=>'Magagha'],
['governorate_id'=>11,'name_ar'=> 'بني مزار','name_en'=> 'Bani Mazar'],
['governorate_id'=>11,'name_ar'=> 'مطاي', 'name_en'=>'Mattay'],
['governorate_id'=>11,'name_ar'=> 'سمالوط','name_en'=> 'Samalut'],
['governorate_id'=>11,'name_ar'=> 'المدينة الفكرية', 'name_en'=>'Madinat El Fekria'],
['governorate_id'=>11,'name_ar'=> 'ملوي', 'name_en'=>'Meloy'],
['governorate_id'=>11,'name_ar'=> 'دير مواس', 'name_en'=>'Deir Mawas'],
['governorate_id'=>11,'name_ar'=> 'ابو قرقاص', 'name_en'=>'Abu Qurqas'],
['governorate_id'=>11,'name_ar'=> 'ارض سلطان','name_en'=> 'Ard Sultan'],
/* End Minya governorate_id:11 */

/* StartQalubia governorate_id:12 */
['governorate_id'=>12,'name_ar'=> 'بنها', 'name_en'=>'Banha'],
['governorate_id'=>12,'name_ar'=> 'قليوب', 'name_en'=>'Qalyub'],
['governorate_id'=>12,'name_ar'=> 'شبرا الخيمة', 'name_en'=>'Shubra Al Khaimah'],
['governorate_id'=>12,'name_ar'=> 'القناطر الخيرية','name_en'=> 'Al Qanater Charity'],
['governorate_id'=>12,'name_ar'=> 'الخانكة', 'name_en'=>'Khanka'],
['governorate_id'=>12,'name_ar'=> 'كفر شكر','name_en'=> 'Kafr Shukr'],
['governorate_id'=>12,'name_ar'=> 'طوخ', 'name_en'=>'Tukh'],
['governorate_id'=>12,'name_ar'=> 'قها', 'name_en'=>'Qaha'],
['governorate_id'=>12,'name_ar'=> 'العبور','name_en'=> 'Obour'],
['governorate_id'=>12,'name_ar'=> 'الخصوص', 'name_en'=>'Khosous'],
['governorate_id'=>12,'name_ar'=> 'شبين القناطر','name_en'=> 'Shibin Al Qanater'],
['governorate_id'=>12,'name_ar'=> 'مسطرد', 'name_en'=>'Mostorod'],
/* End Qalubia governorate_id:12 */

/* StartNew Valley governorate_id:13 */
['governorate_id'=>13,'name_ar'=> 'الخارجة','name_en'=> 'El Kharga'],
['governorate_id'=>13,'name_ar'=> 'باريس','name_en'=> 'Paris'],
['governorate_id'=>13,'name_ar'=> 'موط', 'name_en'=>'Mout'],
['governorate_id'=>13,'name_ar'=> 'الفرافرة','name_en'=> 'Farafra'],
['governorate_id'=>13,'name_ar'=> 'بلاط', 'name_en'=>'Balat'],
['governorate_id'=>13,'name_ar'=> 'الداخلة','name_en'=> 'Dakhla'],
/* End New Valley governorate_id:13 */

/* StartSouth Sinai governorate_id:14 */
['governorate_id'=>14,'name_ar'=> 'السويس', 'name_en'=>'Suez'],
['governorate_id'=>14,'name_ar'=> 'الجناين','name_en'=> 'Alganayen'],
['governorate_id'=>14,'name_ar'=> 'عتاقة', 'name_en'=>'Ataqah'],
['governorate_id'=>14,'name_ar'=> 'العين السخنة', 'name_en'=>'Ain Sokhna'],
['governorate_id'=>14,'name_ar'=> 'فيصل', 'name_en'=>'Faysal'],
/* End South Sinai governorate_id:14 */

/* Start Aswan governorate_id:15 */
['governorate_id'=>15,'name_ar'=> 'أسوان', 'name_en'=>'Aswan'],
['governorate_id'=>15,'name_ar'=> 'أسوان الجديدة', 'name_en'=>'Aswan El Gedgovernorate_ida'],
['governorate_id'=>15,'name_ar'=> 'دراو', 'name_en'=>'Drau'],
['governorate_id'=>15,'name_ar'=> 'كوم أمبو', 'name_en'=>'Kom Ombo'],
['governorate_id'=>15,'name_ar'=> 'نصر النوبة','name_en'=> 'Nasr Al Nuba'],
['governorate_id'=>15,'name_ar'=> 'كلابشة', 'name_en'=>'Kalabsha'],
['governorate_id'=>15,'name_ar'=> 'إدفو','name_en'=> 'Edfu'],
['governorate_id'=>15,'name_ar'=> 'الرديسية', 'name_en'=>'Al-Radisiyah'],
['governorate_id'=>15,'name_ar'=> 'البصيلية','name_en'=> 'Al Basilia'],
['governorate_id'=>15,'name_ar'=> 'السباعية','name_en'=> 'Al Sibaeia'],
['governorate_id'=>15,'name_ar'=> 'ابوسمبل السياحية','name_en'=> 'Abo Simbl Al Siyahia'],
// ['governorate_id'=>15,'name_ar'=> 'مرسى علم','name_en'=> 'Marsa Alam'],
/* End Aswan governorate_id:15 */

/* StartAssiut governorate_id:16 */
['governorate_id'=>16,'name_ar'=> 'أسيوط', 'name_en'=>'Assiut'],
['governorate_id'=>16,'name_ar'=> 'أسيوط الجديدة', 'name_en'=>'Assiut El Gedgovernorate_ida'],
['governorate_id'=>16,'name_ar'=> 'ديروط','name_en'=> 'Dayrout'],
['governorate_id'=>16,'name_ar'=> 'منفلوط','name_en'=> 'Manfalut'],
['governorate_id'=>16,'name_ar'=> 'القوصية', 'name_en'=>'Qusiya'],
['governorate_id'=>16,'name_ar'=> 'أبنوب', 'name_en'=>'Abnoub'],
['governorate_id'=>16,'name_ar'=> 'أبو تيج', 'name_en'=>'Abu Tig'],
['governorate_id'=>16,'name_ar'=> 'الغنايم','name_en'=>'El Ghanaim'],
['governorate_id'=>16,'name_ar'=> 'ساحل سليم','name_en'=> 'Sahel Selim'],
['governorate_id'=>16,'name_ar'=> 'البداري', 'name_en'=>'El Badari'],
['governorate_id'=>16,'name_ar'=> 'صدفا', 'name_en'=>'Sgovernorate_idfa'],
/* End Assut governorate_id:16 */

/* StartBani Sweif governorate_id:17 */
['governorate_id'=>17,'name_ar'=> 'بني سويف', 'name_en'=>'Bani Sweif'],
['governorate_id'=>17,'name_ar'=> 'بني سويف الجديدة', 'name_en'=>'Beni Suef El Gedgovernorate_ida'],
['governorate_id'=>17,'name_ar'=> 'الواسطى', 'name_en'=>'Al Wasta'],
['governorate_id'=>17,'name_ar'=> 'ناصر', 'name_en'=>'Naser'],
['governorate_id'=>17,'name_ar'=> 'إهناسيا', 'name_en'=>'Ehnasia'],
['governorate_id'=>17,'name_ar'=> 'ببا','name_en'=> 'beba'],
['governorate_id'=>17,'name_ar'=> 'الفشن', 'name_en'=>'Fashn'],
['governorate_id'=>17,'name_ar'=> 'سمسطا', 'name_en'=>'Somasta'],
['governorate_id'=>17,'name_ar'=> 'الاباصيرى', 'name_en'=>'Alabbaseri'],
['governorate_id'=>17,'name_ar'=> 'مقبل','name_en'=> 'Mokbel'],
/* End Bani Sweif governorate_id:17 */

/* StartPorSagovernorate_id gove,rnorate_id:8 */
['governorate_id'=>18,'name_ar'=> 'بورسعيد', 'name_en'=>'PorSagovernorate_id'],
['governorate_id'=>18,'name_ar'=> 'بورفؤاد','name_en'=> 'Port Fouad'],
['governorate_id'=>18,'name_ar'=> 'العرب', 'name_en'=>'Alarab'],
['governorate_id'=>18,'name_ar'=> 'حى الزهور','name_en'=> 'Zohour'],
['governorate_id'=>18,'name_ar'=> 'حى الشرق','name_en'=> 'Alsharq'],
['governorate_id'=>18,'name_ar'=> 'حى الضواحى', 'name_en'=>'Aldawahi'],
['governorate_id'=>18,'name_ar'=> 'حى المناخ','name_en'=> 'Almanakh'],
['governorate_id'=>18,'name_ar'=> 'حى مبارك', 'name_en'=>'Mubarak'],
/* End PorSagovernorate_id gove,rnorate_id:8 */

/* StartDamietta governorate_id:19 */
['governorate_id'=>19,'name_ar'=> 'دمياط','name_en'=> 'Damietta'],
['governorate_id'=>19,'name_ar'=> 'دمياط الجديدة', 'name_en'=>'New Damietta'],
['governorate_id'=>19,'name_ar'=> 'رأس البر','name_en'=> 'Ras El Bar'],
['governorate_id'=>19,'name_ar'=> 'فارسكور', 'name_en'=>'Faraskour'],
['governorate_id'=>19,'name_ar'=> 'الزرقا', 'name_en'=>'Zarqa'],
['governorate_id'=>19,'name_ar'=> 'السرو', 'name_en'=>'alsaru'],
['governorate_id'=>19,'name_ar'=> 'الروضة','name_en'=>'alruwda'],
['governorate_id'=>19,'name_ar'=> 'كفر البطيخ', 'name_en'=>'Kafr El-Batikh'],
['governorate_id'=>19,'name_ar'=> 'عزبة البرج', 'name_en'=>'Azbet Al Burg'],
['governorate_id'=>19,'name_ar'=> 'ميت أبو غالب', 'name_en'=>'Meet Abou Ghalib'],
['governorate_id'=>19,'name_ar'=> 'كفر سعد','name_en'=> 'Kafr Saad'],
/* End Damietta governorate_id:19 */

/* StartSharqia governorate_id:20 */
['governorate_id'=>20,'name_ar'=> 'الزقازيق','name_en'=> 'Zagazig'],
['governorate_id'=>20,'name_ar'=> 'العاشر من رمضان', 'name_en'=>'Al Ashr Men Ramadan'],
['governorate_id'=>20,'name_ar'=> 'منيا القمح', 'name_en'=>'Minya Al Qamh'],
['governorate_id'=>20,'name_ar'=> 'بلبيس','name_en'=> 'Belbeis'],
['governorate_id'=>20,'name_ar'=> 'مشتول السوق', 'name_en'=>'Mashtoul El Souq'],
['governorate_id'=>20,'name_ar'=> 'القنايات','name_en'=> 'Qenaiat'],
['governorate_id'=>20,'name_ar'=> 'أبو حماد', 'name_en'=>'Abu Hammad'],
['governorate_id'=>20,'name_ar'=> 'القرين','name_en'=> 'El Qurain'],
['governorate_id'=>20,'name_ar'=> 'ههيا', 'name_en'=>'Hehia'],
['governorate_id'=>20,'name_ar'=> 'أبو كبير', 'name_en'=>'Abu Kabir'],
['governorate_id'=>20,'name_ar'=> 'فاقوس', 'name_en'=>'Faccus'],
['governorate_id'=>20,'name_ar'=> 'الصالحية الجديدة', 'name_en'=>'El Salihia El Gedgovernorate_ida'],
['governorate_id'=>20,'name_ar'=> 'الإبراهيمية', 'name_en'=>'Al Ibrahimiyah'],
['governorate_id'=>20,'name_ar'=> 'ديرب نجم','name_en'=> 'Deirb Negm'],
['governorate_id'=>20,'name_ar'=> 'كفر صقر', 'name_en'=>'Kafr Saqr'],
['governorate_id'=>20,'name_ar'=> 'أولاد صقر','name_en'=> 'Awlad Saqr'],
['governorate_id'=>20,'name_ar'=> 'الحسينية','name_en'=> 'Husseiniya'],
['governorate_id'=>20,'name_ar'=> 'صان الحجر القبلية', 'name_en'=>'san alhajar alqablia'],
['governorate_id'=>20,'name_ar'=> 'منشأة أبو عمر','name_en'=> 'Manshayat Abu Omar'],
/* End Sharqia governorate_id:20 */

/* StartSouth Sinai governorate_id:21 */
['governorate_id'=>21,'name_ar'=> 'الطور', 'name_en'=>'Al Toor'],
['governorate_id'=>21,'name_ar'=> 'شرم الشيخ','name_en'=> 'Sharm El-Shaikh'],
['governorate_id'=>21,'name_ar'=> 'دهب', 'name_en'=>'Dahab'],
['governorate_id'=>21,'name_ar'=> 'نويبع', 'name_en'=>'Nuweiba'],
['governorate_id'=>21,'name_ar'=> 'طابا','name_en'=> 'Taba'],
['governorate_id'=>21,'name_ar'=> 'سانت كاترين', 'name_en'=>'Saint Catherine'],
['governorate_id'=>21,'name_ar'=> 'أبو رديس','name_en'=> 'Abu Redis'],
['governorate_id'=>21,'name_ar'=> 'أبو زنيمة','name_en'=> 'Abu Zenaima'],
['governorate_id'=>21,'name_ar'=> 'رأس سدر','name_en'=> 'Ras Sgovernorate_idr'],
/* End Sout Sinai governorate_id:21 */

/* StartKafr El Sheikh governorate_id:22 */
['governorate_id'=>22,'name_ar'=> 'كفر الشيخ', 'name_en'=>'Kafr El Sheikh'],
['governorate_id'=>22,'name_ar'=> 'وسط البلد كفر الشيخ', 'name_en'=>'Kafr El Sheikh Downtown'],
['governorate_id'=>22,'name_ar'=> 'دسوق','name_en'=> 'Desouq'],
['governorate_id'=>22,'name_ar'=> 'فوه', 'name_en'=>'Fooh'],
['governorate_id'=>22,'name_ar'=> 'مطوبس','name_en'=> 'Metobas'],
['governorate_id'=>22,'name_ar'=> 'برج البرلس','name_en'=> 'Burg Al Burullus'],
['governorate_id'=>22,'name_ar'=> 'بلطيم','name_en'=> 'Baltim'],
['governorate_id'=>22,'name_ar'=> 'مصيف بلطيم', 'name_en'=>'Masief Baltim'],
['governorate_id'=>22,'name_ar'=> 'الحامول','name_en'=> 'Hamol'],
['governorate_id'=>22,'name_ar'=> 'بيلا', 'name_en'=>'Bella'],
['governorate_id'=>22,'name_ar'=> 'الرياض', 'name_en'=>'Riyadh'],
['governorate_id'=>22,'name_ar'=> 'سيدي سالم','name_en'=> 'Sgovernorate_idi Sal,m'],
['governorate_id'=>22,'name_ar'=> 'قلين','name_en'=> 'Qellen'],
['governorate_id'=>22,'name_ar'=> 'سيدي غازي', 'name_en'=>'Sgovernorate_idi Gha,zi'],
/* En Kafr El Sheikh governorate_id:22 */

/* StartMatrouh governorate_id:23 */
['governorate_id'=>23,'name_ar'=> 'مرسى مطروح','name_en'=> 'Marsa Matrouh'],
['governorate_id'=>23,'name_ar'=> 'الحمام','name_en'=> 'El Hamam'],
['governorate_id'=>23,'name_ar'=> 'العلمين','name_en'=> 'Alamein'],
['governorate_id'=>23,'name_ar'=> 'الضبعة', 'name_en'=>'Dabaa'],
['governorate_id'=>23,'name_ar'=> 'النجيلة','name_en'=> 'Al-Nagila'],
['governorate_id'=>23,'name_ar'=> 'سيدي براني', 'name_en'=>'Sgovernorate_idi Bra,ni'],
['governorate_id'=>23,'name_ar'=> 'السلوم','name_en'=> 'Salloum'],
['governorate_id'=>23,'name_ar'=> 'سيوة', 'name_en'=>'Siwa'],
['governorate_id'=>23,'name_ar'=> 'مارينا', 'name_en'=>'Marina'],
['governorate_id'=>23,'name_ar'=> 'الساحل الشمالى','name_en'=> 'North Coast'],
/* End Matrouh governorate_id:23 */

/* StartLuxor governorate_id:24 */
['governorate_id'=>24,'name_ar'=> 'الأقصر','name_en'=> 'Luxor'],
['governorate_id'=>24,'name_ar'=> 'الأقصر الجديدة','name_en'=> 'New Luxor'],
['governorate_id'=>24,'name_ar'=> 'إسنا', 'name_en'=>'Esna'],
['governorate_id'=>24,'name_ar'=> 'طيبة الجديدة','name_en'=> 'New Tiba'],
['governorate_id'=>24,'name_ar'=> 'الزينية','name_en'=> 'Al ziynia'],
['governorate_id'=>24,'name_ar'=> 'البياضية', 'name_en'=>'Al Bayadieh'],
['governorate_id'=>24,'name_ar'=> 'القرنة', 'name_en'=>'Al Qarna'],
['governorate_id'=>24,'name_ar'=> 'أرمنت', 'name_en'=>'Armant'],
['governorate_id'=>24,'name_ar'=> 'الطود', 'name_en'=>'Al Tud'],
/* End Luxor governorate_id:24 */

/* StartQena governorate_id:25 */
['governorate_id'=>25,'name_ar'=> 'قنا','name_en'=> 'Qena'],
['governorate_id'=>25,'name_ar'=> 'قنا الجديدة','name_en'=> 'New Qena'],
['governorate_id'=>25,'name_ar'=> 'ابو طشت', 'name_en'=>'Abu Tesht'],
['governorate_id'=>25,'name_ar'=> 'نجع حمادي','name_en'=> 'Nag Hammadi'],
['governorate_id'=>25,'name_ar'=> 'دشنا','name_en'=> 'Deshna'],
['governorate_id'=>25,'name_ar'=> 'الوقف','name_en'=> 'Alwaqf'],
['governorate_id'=>25,'name_ar'=> 'قفط', 'name_en'=>'Qaft'],
['governorate_id'=>25,'name_ar'=> 'نقادة','name_en'=> 'Naqada'],
['governorate_id'=>25,'name_ar'=> 'فرشوط', 'name_en'=>'Farshout'],
['governorate_id'=>25,'name_ar'=> 'قوص', 'name_en'=>'Quos'],
/* End Qena governorate_id:25 */

/* StartNorth Sinai governorate_id:26 */
['governorate_id'=>26,'name_ar'=> 'العريش','name_en'=> 'Arish'],
['governorate_id'=>26,'name_ar'=> 'الشيخ زويد','name_en'=> 'Sheikh Zowagovernorate_id'],
['governorate_id'=>26,'name_ar'=> 'نخل','name_en'=> 'Nakhl'],
['governorate_id'=>26,'name_ar'=> 'رفح', 'name_en'=>'Rafah'],
['governorate_id'=>26,'name_ar'=> 'بئر العبد','name_en'=> 'Bir al-Abed'],
['governorate_id'=>26,'name_ar'=> 'الحسنة','name_en'=> 'Al Hasana'],
/* End North Sinai governorate_id:26 */

['governorate_id'=>1,'name_ar'=> 'الازبكية','name_en'=> 'Al Azbakeyah'],
['governorate_id'=>1,'name_ar'=> 'البساتين', 'name_en'=>'Al Basatin'],
['governorate_id'=>1,'name_ar'=> 'التبين','name_en'=> 'Tebin'],
['governorate_id'=>1,'name_ar'=> 'الخليفة', 'name_en'=>'El-Khalifa'],
        ];


        foreach($cities as $city){
            City::create([
                'name'=>$city['name_en'],
                'governorate_id'=>$city['governorate_id']
            ]);
        }
        
    }
}
