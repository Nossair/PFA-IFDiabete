<?php
use Illuminate\Database\Seeder;
use App\Category ;
use App\Aliment ;
use App\Image ;

class DatabaseAlimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
	$category1 = new Category();
        $category1->name = "سـلـطـات و مـقـبـلات بـالـخـضـر";
        $category1->save();


        $category2 = new Category();
        $category2->name = "مـقـبـلات بـالـنـشـويـات";
        $category2->save();

        $category3 = new Category();
        $category3->name ="مــقــبــلات اخــرى";
        $category3->save();


	$category4 = new Category();
        $category4->name ="الوجبة الرئيسية";
        $category4->save();

        $category5 = new Category();
        $category5->name ="اللـحـوم و أسـمـاك و الـبـيـض";
        $category5->save();

        $category6 = new Category();
        $category6->name ="اللـحـوم المـحـولـة";
        $category6->save();

        $category7 = new Category();
        $category7->name ="الــخــضــر";
        $category7->save();

        $category8 = new Category();
        $category8->name ="قـطـانـي نـشـويـات";
        $category8->save();

        $category9= new Category();
        $category9->name ="حــســاء";
        $category9->save();

        $category10 = new Category();
        $category10->name ="خـبـز و نـشـويـات";
        $category10->save();

        $category11 = new Category();
        $category11->name ="رقــائــق الــذرة و حـبـوب الـصــبــاح";
        $category11->save();

        $category12 = new Category();
        $category12->name ="دقـيـق";
        $category12->save();

        $category13 = new Category();
        $category13->name ="الــفــواكــه الــطــريــة";
        $category13->save();

        $category14 = new Category();
        $category14->name ="الــفــواكــه الــجــافــة";
        $category14->save();

        $category15 = new Category();
        $category15->name ="الــفــواكــه الـزيـتـيـة";
        $category15->save();


	    $category16 = new Category();
        $category16->name ="الــحــلــيــب";
        $category16->save();

        $category17 = new Category();
        $category17->name ="يــاغــورت";
        $category17->save();

        $category18 = new Category();
        $category18->name ="ا جــبــان";
        $category18->save();

        $category19 = new Category();
        $category19->name ="المشروبات";
        $category19->save();

        $category20 = new Category();
        $category20->name ="أطباق الجهة الشرقية";
        $category20->save();

        $category21 = new Category();
        $category21->name ="منتوجات مكدونالدز";
        $category21->save();

        $category22 = new Category();
        $category22->name ="شــوكــولاطــة";
        $category22->save();

        $category23 = new Category();
        $category23->name ="مـــثـــلـــجــات";
        $category23->save();

        $category24 = new Category();
        $category24->name ="ســكــاكــر";
        $category24->save();

        $category25 = new Category();
        $category25->name ="حــلــويــات مــغــربــيــة";
        $category25->save();

        $category26 = new Category();
        $category26->name ="أطـبـاق أخــرى";
        $category26->save();

    $image1 = new Image();
	$aliment1 = new Aliment();
	$aliment1->name="حبة طماطم";
	$aliment1->glucide="4";
	$aliment1->quantite="100";
	$aliment1->category_id= $category1->id ;
	$aliment1->save();
        $image1->path="/images/".$aliment1->id.'.jpg';
        $image1->aliment_id=$aliment1->id ;
        $image1->save();

        $aliment2 = new Aliment();
        $aliment2->name="حبة خيار";
        $aliment2->glucide="2";
        $aliment2->quantite="120";
        $aliment2->category_id= $category1->id ;
	$aliment2->save();

	    $aliment3 = new Aliment();
        $aliment3->name="أوراق خص";
        $aliment3->glucide="2";
        $aliment3->quantite="100";
        $aliment3->category_id= $category1->id ;
	    $aliment3->save();

	    $aliment4 = new Aliment();
        $aliment4->name="بصل";
        $aliment4->glucide="5";
        $aliment4->quantite="50";
        $aliment4->category_id= $category1->id ;
	    $aliment4->save();

        $aliment5 = new Aliment();
        $aliment5->name="فلفل اخضر";
        $aliment5->glucide="3";
        $aliment5->quantite="100";
        $aliment5->category_id= $category1->id ;
	    $aliment5->save();


	    $aliment6 = new Aliment();
        $aliment6->name="فلفل احمر";
        $aliment6->glucide="5";
        $aliment6->quantite="100";
        $aliment6->category_id= $category1->id ;
	    $aliment6->save();

	    $aliment7 = new Aliment();
        $aliment7->name="بتراف";
        $aliment7->glucide="8";
        $aliment7->quantite="100";
        $aliment7->category_id= $category1->id ;
	    $aliment7->save();


        $image8 = new Image();
	    $aliment8 = new Aliment();
        $aliment8->name="كرمب";
        $aliment8->glucide="4";
        $aliment8->quantite="100";
	    $aliment8->category_id= $category1->id ;
	    $aliment8->save();


	$aliment9 = new Aliment();
        $aliment9->name="حبة جزر غير مطهي";
        $aliment9->glucide="7";
        $aliment9->quantite="100";
	$aliment9->category_id= $category1->id ;
	$aliment9->save();	

	$aliment10 = new Aliment();
        $aliment10->name="فطر";
        $aliment10->glucide="4";
        $aliment10->quantite="100";
	$aliment10->category_id= $category1->id ;
	$aliment10->save();

	$aliment11 = new Aliment();
        $aliment11->name="دنجال";
        $aliment11->glucide="4";
        $aliment11->category_id= $category1->id ;
	$aliment11->quantite="100";
	$aliment11->save();

	$aliment12 = new Aliment();
        $aliment12->name="قرع احمر - اخضر";
        $aliment12->glucide="5";
        $aliment12->quantite="100";
	$aliment12->category_id= $category1->id ;		
	$aliment12->save();	

	$aliment13 = new Aliment();
        $aliment13->name="الفول";
        $aliment13->glucide="6";
        $aliment13->quantite="100";
	$aliment13->category_id= $category1->id ;
	$aliment13->save();

	$aliment14 = new Aliment();
        $aliment14->name="الجلبانة";
        $aliment14->glucide="10";
        $aliment14->quantite="100";
	$aliment14->category_id= $category1->id ;
	$aliment14->save();

	$aliment15 = new Aliment();
        $aliment15->name="سلطة طماطم و خيار";
        $aliment15->glucide="3";
        $aliment15->quantite="100";
	$aliment15->category_id= $category1->id ;
	$aliment15->save();
	
	$aliment16 = new Aliment();
        $aliment16->name="سلطة طماطم و بصل";
        $aliment16->glucide="6";
        $aliment16->quantite="100";	
	$aliment16->category_id= $category1->id ;
	$aliment16->save();
	
	$aliment17 = new Aliment();
        $aliment17->name="سلطة طماطم و خص";
        $aliment17->glucide="3";
        $aliment17->quantite="100";
	$aliment17->category_id= $category1->id ;
	$aliment17->save();

	$aliment18 = new Aliment();
        $aliment18->name="سلطة مغربية طماطم و بصل";
        $aliment18->glucide="4";
        $aliment18->quantite="100";
	$aliment18->category_id= $category1->id ;
	$aliment18->save();

	$aliment19 = new Aliment();
        $aliment19->name="تكتوكة";
        $aliment19->glucide="4";
        $aliment19->quantite="100";
	$aliment19->category_id= $category1->id ;
	$aliment19->save();

        $image20 = new Image();
	    $aliment20 = new Aliment();
        $aliment20->name="بـقـولـة";
        $aliment20->glucide="5";
        $aliment20->quantite="100";
	    $aliment20->category_id= $category1->id ;
	    $aliment20->save();

        $image21 = new Image();
	    $aliment21 = new Aliment();
        $aliment21->name="زعلوك";
        $aliment21->glucide="4";
        $aliment21->quantite="100";
	    $aliment21->category_id= $category1->id ;
	    $aliment21->save();


	$aliment22 = new Aliment();
        $aliment22->name="سلطة أرز الذرة";
        $aliment22->glucide="50";
        $aliment22->quantite="250";
	$aliment22->category_id= $category2->id ;
	$aliment22->save();


	$aliment23 = new Aliment();
        $aliment23->name="سلطة معجنات";
        $aliment23->glucide="50";
        $aliment23->quantite="250";
	$aliment23->category_id= $category2->id ;
	$aliment23->save();

	$aliment24= new Aliment();
        $aliment24->name="سلطة معجنات بالخضر";
        $aliment24->glucide="40";
        $aliment24->quantite="250";
	$aliment24->category_id= $category2->id ;
	$aliment24->save();

	$aliment25 = new Aliment();
        $aliment25->name="قطاني مطهية";
        $aliment25->glucide="15";
        $aliment25->quantite="100";
	$aliment25->category_id= $category2->id ;
	$aliment25->save();

	$image26 = new Image();
	$aliment26 = new Aliment();
        $aliment26->name="بطاطس";
        $aliment26->glucide="20";
        $aliment26->quantite="100";
	$aliment26->category_id= $category2->id ;
	$aliment26->save();

	    $image27 = new Image();
	    $aliment27 = new Aliment();
        $aliment27->name=" أرز مطهي";
        $aliment27->glucide="20";
        $aliment27->quantite="100";
	    $aliment27->category_id= $category2->id ;
	    $aliment27->save();


	$aliment28 = new Aliment();
        $aliment28->name="معجنات مطهية";
        $aliment28->glucide="20";
        $aliment28->quantite="100";
	$aliment28->category_id= $category2->id ;
	$aliment28->save();

	$aliment29 = new Aliment();
        $aliment29->name="ذرة معلبة";
        $aliment29->glucide="20";
        $aliment29->quantite="100";
	$aliment29->category_id= $category2->id ;
	$aliment29->save();



	$aliment31 = new Aliment();
        $aliment31->name="كراتان خضر بالبيشاميل";
        $aliment31->glucide="17";
        $aliment31->quantite="200";
	$aliment31->category_id= $category3->id ;
	$aliment31->save();

	$aliment32 = new Aliment();
        $aliment32->name="بطاطس مقلية";
        $aliment32->glucide="40";
        $aliment32->quantite="100";
	$aliment32->category_id= $category3->id ;
	$aliment32->save();

	$aliment33 = new Aliment();
        $aliment33->name="كيش";
        $aliment33->glucide="20";
        $aliment33->quantite="100";
	$aliment33->category_id= $category3->id ;
	$aliment33->save();
		
	$aliment34 = new Aliment();
    $aliment34->name="مملحات محشوة بالخضر";
    $aliment34->glucide="20";
    $aliment34->quantite="100";
	$aliment34->category_id= $category3->id ;
	$aliment34->save();

	$aliment35 = new Aliment();
        $aliment35->name="كريب محشوة بالخضر";
        $aliment35->glucide="10";
        $aliment35->quantite="50";
	$aliment35->category_id= $category3->id ;
	$aliment35->save();

	$aliment38 = new Aliment();
        $aliment38->name="بسطيلة بالسمك";
        $aliment38->glucide="5";
        $aliment38->quantite="100";
	$aliment38->category_id= $category3->id ;
	$aliment38->save();

	$aliment39 = new Aliment();
        $aliment39->name="خضر معمرة بأرز";
        $aliment39->glucide="14";
        $aliment39->quantite="150";
	$aliment39->category_id= $category3->id ;
	$aliment39->save();	
	
	$aliment40 = new Aliment();
	$aliment40->name="كراتان خضر بدون البيشاميل ";
        $aliment40->glucide="10";
        $aliment40->quantite="200";
	$aliment40->category_id= $category3->id ;
	$aliment40->save();

	$aliment41 = new Aliment();
        $aliment41->name="بيتزا صغيرة";
        $aliment41->glucide="30";
        $aliment41->quantite="150";
	$aliment41->category_id= $category3->id ;
	$aliment41->save();	

	$aliment42 = new Aliment();
        $aliment42->name="بسطيلة بالدجاج";
        $aliment42->glucide="18";
        $aliment42->quantite="100";
	$aliment42->category_id= $category3->id ;
	$aliment42->save();

	$aliment43 = new Aliment();
    $aliment43->name="بيتزا";
    $aliment43->glucide="20";
    $aliment43->quantite="100";
	$aliment43->category_id= $category3->id ;
	$aliment43->save();


	$aliment45 = new Aliment();
	$aliment45->name="طاجين لحم بالخضر (100غ لحم+100غ خضر)";
    $aliment45->glucide="4";
	$aliment45->category_id= $category4->id ;
	$aliment45->save();

	$aliment46 = new Aliment();
        $aliment46->name="طاجين دجاج بالخضر والبطاطس (100غ دجاج+50غ خضر+100غ بطاطس)";
        $aliment46->glucide="20";
	$aliment46->category_id= $category4->id ;
	$aliment46->save();

	$aliment47 = new Aliment();
        $aliment47->name=" كـــســكــس(زلافة متوسطة) + 200غ خضر";
        $aliment47->glucide="55";
	$aliment47->category_id= $category4->id ;
	$aliment47->save();

	$aliment48 = new Aliment();
        $aliment48->name="(زلافة متوسطة) بــركــوكــش 250غ";
        $aliment48->glucide="50";
	$aliment48->category_id= $category4->id ;
	$aliment48->save();

	$aliment49 = new Aliment();
        $aliment49->name="طاجين الدجاج بالزيتون (10 حبات زيتون)";
        $aliment49->glucide="4";
	$aliment49->category_id= $category4->id ;
	$aliment49->save();

	$aliment50 = new Aliment();
        $aliment50->name="حساء العـدس + سمك 250غ عدس (زلا فة متوسطة)";
        $aliment50->glucide="40";
	$aliment50->category_id= $category4->id ;
	$aliment50->save();

	




	$aliment51 = new Aliment();
        $aliment51->name="دواجن (دجاج - ديك رومي - بط - حمام)";
        $aliment51->glucide="0";
	$aliment51->category_id= $category5->id ;
	$aliment51->save();

	$aliment52 = new Aliment();
        $aliment52->name="لحم (عجل - خروف - ماعز - جمل - حصان - ارنب)";
 	$aliment52->glucide="0";
	$aliment52->category_id= $category5->id ;
	$aliment52->save();
	
	$aliment53 = new Aliment();
        $aliment53->name="Gibier";
        $aliment53->glucide="0";
	$aliment53->category_id= $category5->id ;
	$aliment53->save();

	$aliment54 = new Aliment();
        $aliment54->name="أحشاء (قلب - كبد - كلي)";
        $aliment54->glucide="0";
	$aliment54->category_id= $category5->id ;
	$aliment54->save();

	$aliment55 = new Aliment();
        $aliment55->name="سمك";
        $aliment55->glucide="0";
	$aliment55->category_id= $category5->id ;
	$aliment55->save();

	$aliment56 = new Aliment();
        $aliment56->name="قشريات";
        $aliment56->glucide="0";
	$aliment56->category_id= $category5->id ;
	$aliment56->save();

	$aliment57 = new Aliment();
        $aliment57->name="بيض";
        $aliment57->glucide="0";
	$aliment57->category_id= $category5->id ;
	$aliment57->save();




	$aliment58 = new Aliment();
        $aliment58->name="بودان";
        $aliment58->glucide="0";
        $aliment58->quantite="100";
	$aliment58->category_id= $category6->id ;
	$aliment58->save();

	$aliment59 = new Aliment();
        $aliment59->name="نقانق";
        $aliment59->glucide="0";
        $aliment59->quantite="100";
	$aliment59->category_id= $category6->id ;
	$aliment59->save();

	$aliment60 = new Aliment();
        $aliment60->name="Hot dog";
        $aliment60->glucide="35";
        $aliment60->quantite="80";
	$aliment60->category_id= $category6->id ;
	$aliment60->save();

	$aliment61 = new Aliment();
        $aliment61->name="مورتد ";
        $aliment61->glucide="3";
        $aliment61->quantite="100";
	$aliment61->category_id= $category6->id ;
	$aliment61->save();

	$aliment62 = new Aliment();
        $aliment62->name="سمك معلب";
        $aliment62->glucide="0";
        $aliment62->quantite="100";
	$aliment62->category_id= $category6->id ;
	$aliment62->save();

	$aliment63 = new Aliment();
        $aliment63->name="Nuggets de poulet";
        $aliment63->glucide="12";
	$aliment63->category_id= $category6->id ;
        $aliment63->quantite="100";
	$aliment63->save();

	$aliment64 = new Aliment();
        $aliment64->name="سمك باني Pané";
        $aliment64->glucide="5";
        $aliment64->quantite="100";
	$aliment64->category_id= $category6->id ;
	$aliment64->save();

	$aliment65 = new Aliment();
        $aliment65->name="Suchi";
        $aliment65->glucide="6";
        $aliment65->quantite="30";
	$aliment65->category_id= $category6->id ;
	$aliment65->save();
	

	
	
	$aliment66 = new Aliment();
        $aliment66->name="جلبانة";
        $aliment66->glucide="20";
        $aliment66->quantite="200";
	$aliment66->category_id= $category7->id ;
	$aliment66->save();

	$aliment67 = new Aliment();
        $aliment67->name="فول";
        $aliment67->glucide="12";
        $aliment67->quantite="200";
	$aliment67->category_id= $category7->id ;
	$aliment67->save();
	
	$aliment68 = new Aliment();
        $aliment68->name="جزر مطهي";
        $aliment68->glucide="5";
        $aliment68->quantite="100";
	$aliment68->category_id= $category7->id ;
	$aliment68->save();	

	$aliment69 = new Aliment();
        $aliment69->name="لفت";
        $aliment69->glucide="3";
        $aliment69->quantite="100";
	$aliment69->category_id= $category7->id ;
	$aliment69->save();

	$aliment70 = new Aliment();
        $aliment70->name="قرنبيط";
        $aliment70->glucide="5";
        $aliment70->quantite="200";
	$aliment70->category_id= $category7->id ;
	$aliment70->save();

	$aliment71 = new Aliment();
        $aliment71->name="كرمب";
        $aliment71->glucide="5";
        $aliment71->quantite="200";
	$aliment71->category_id= $category7->id ;
	$aliment71->save();

	$aliment72 = new Aliment();
        $aliment72->name="لوبية شعرة";
        $aliment72->glucide="10";
        $aliment72->quantite="200";
	$aliment72->category_id= $category7->id ;
	$aliment72->save();

	$aliment73 = new Aliment();
        $aliment73->name="قوق";
        $aliment73->glucide="0";
        $aliment73->quantite="100";
	$aliment73->category_id= $category7->id ;
	$aliment73->save();

	$aliment74 = new Aliment();
        $aliment74->name="خرشف";
        $aliment74->glucide="5";
        $aliment74->quantite="200";
	$aliment74->category_id= $category7->id ;
	$aliment74->save();	

	$aliment75 = new Aliment();
        $aliment75->name="البسباس";
        $aliment75->glucide="5";
        $aliment75->quantite="200";
	$aliment75->category_id= $category7->id ;
	$aliment75->save();
	
	$aliment76 = new Aliment();
        $aliment76->name="سفرجل";
        $aliment76->glucide="6";
        $aliment76->quantite="100";
	$aliment76->category_id= $category7->id ;
	$aliment76->save();

	$aliment77 = new Aliment();
        $aliment77->name="قرع احمر";
        $aliment77->glucide="10";
        $aliment77->quantite="200";
	$aliment77->category_id= $category7->id ;
	$aliment77->save();

	$aliment78 = new Aliment();
        $aliment78->name="قرع اخضر";
        $aliment78->glucide="5";
        $aliment78->quantite="200";
	$aliment78->category_id= $category7->id ;
	$aliment78->save();

	$aliment79 = new Aliment();
        $aliment79->name="بورو";
        $aliment79->glucide="10";
        $aliment79->quantite="200";
	$aliment79->category_id= $category7->id ;
	$aliment79->save();

	$aliment80 = new Aliment();
        $aliment80->name="طماطم";
        $aliment80->glucide="5";
        $aliment80->quantite="200";
	$aliment80->category_id= $category7->id ;
	$aliment80->save();

	$aliment82 = new Aliment();
        $aliment82->name="خضر كسكس";
        $aliment82->glucide="15";
        $aliment82->quantite="200";
	$aliment82->category_id= $category7->id ;
	$aliment82->save();

	$aliment83 = new Aliment();
        $aliment83->name="ملوخية";
        $aliment83->glucide="5";
        $aliment83->quantite="200";
        $aliment83->category_id= $category7->id ;
        $aliment83->save();

	



	$aliment84 = new Aliment();
        $aliment84->name="ز فة عدس";
        $aliment84->glucide="40";
        $aliment84->quantite="250";
	$aliment84->category_id= $category8->id ;
        $aliment84->save();

	$aliment85 = new Aliment();
        $aliment85->name="بيصارة بالفول";
        $aliment85->glucide="40";
        $aliment85->quantite="250";
        $aliment85->category_id= $category8->id ;
	$aliment85->save();

	$aliment86 = new Aliment();
        $aliment86->name="بيصارة بالجلبانة";
        $aliment86->glucide="45";
        $aliment86->quantite="250";
	$aliment86->category_id= $category8->id ;
        $aliment86->save();

	$aliment87 = new Aliment();
        $aliment87->name="صحن متوسط كاران ";
        $aliment87->glucide="50";
        $aliment87->quantite="250";
	$aliment87->category_id= $category8->id ;
        $aliment87->save();

	$aliment88 = new Aliment();
        $aliment88->name=" ز فة لوبية البيضاء";
        $aliment88->glucide="50";
        $aliment88->quantite="250";
	$aliment88->category_id= $category8->id ;
        $aliment88->save();

	$aliment89 = new Aliment();
        $aliment89->name="كسكس";
        $aliment89->glucide="40";
        $aliment89->quantite="200";
	$aliment89->category_id= $category8->id ;
        $aliment89->save();

	$aliment90 = new Aliment();
        $aliment90->name="تشيشة";
        $aliment90->glucide="40";
        $aliment90->quantite="200";
        $aliment90->category_id= $category8->id ;
	$aliment90->save();

	$aliment91 = new Aliment();
        $aliment91->name="ارز";
        $aliment91->glucide="40";
        $aliment91->quantite="200";
        $aliment91->category_id= $category8->id ;
        $aliment91->save();

	$aliment92 = new Aliment();
        $aliment92->name="بركوكش";
        $aliment92->glucide="40";
        $aliment92->quantite="200";
        $aliment92->category_id= $category8->id ;
	$aliment92->save();

	$aliment93 = new Aliment();
        $aliment93->name="شربة شعرية";
        $aliment93->glucide="40";
        $aliment93->quantite="200";
        $aliment93->category_id= $category8->id ;
	$aliment93->save();
		
	$aliment94 = new Aliment();
        $aliment94->name="درة علبة";
        $aliment94->glucide="40";
        $aliment94->quantite="200";
	$aliment94->category_id= $category8->id ;
        $aliment94->save();

	$aliment95 = new Aliment();
        $aliment95->name="بطاطس مسلوقة";
        $aliment95->glucide="40";
        $aliment95->quantite="200";
        $aliment95->category_id= $category8->id ;
	$aliment95->save();

	$aliment96 = new Aliment();
        $aliment96->name="بطاطس في الفرن";
        $aliment96->glucide="40";
        $aliment96->quantite="200";
        $aliment96->category_id= $category8->id ;
	$aliment96->save();

	$aliment97 = new Aliment();
        $aliment97->name="بطاطس مهروسة";
        $aliment97->glucide="40";
        $aliment97->quantite="200";
       $aliment97->category_id= $category8->id ;
	 $aliment97->save();

	$aliment98 = new Aliment();
        $aliment98->name="بطاطس مقلية";
        $aliment98->glucide="40";
        $aliment98->quantite="100";
	$aliment98->category_id= $category8->id ;
        $aliment98->save();

	$aliment99 = new Aliment();
        $aliment99->name="فريت في الفرن";
        $aliment99->glucide="40";
        $aliment99->quantite="150";
	$aliment99->category_id= $category8->id ;
        $aliment99->save();

	$aliment100 = new Aliment();
        $aliment100->name="بطاطا حلوة";
        $aliment100->glucide="40";
        $aliment100->quantite="200";
	$aliment100->category_id= $category8->id ;
        $aliment100->save();

	$aliment101 = new Aliment();
        $aliment101->name="بطاطا قصبية";
        $aliment101->glucide="20";
        $aliment101->quantite="200";
	$aliment101->category_id= $category8->id ;
        $aliment101->save();

	$aliment102 = new Aliment();
        $aliment102->name="شيبس كيس";
        $aliment102->glucide="15";
        $aliment102->quantite="30";
	$aliment102->category_id= $category8->id ;
        $aliment102->save();

	$aliment103 = new Aliment();
        $aliment103->name="تابيوكا";
        $aliment103->glucide="50";
        $aliment103->quantite="100";
	$aliment103->category_id= $category8->id ;
        $aliment103->save();





	$aliment104 = new Aliment();
        $aliment104->name="Beignet de crevette";
        $aliment104->glucide="15";
        $aliment104->quantite="100";
	$aliment104->category_id= $category26->id ;
        $aliment104->save();

	$aliment105 = new Aliment();
        $aliment105->name="Calamar frit";
        $aliment105->glucide="7";
        $aliment105->quantite="100";
	$aliment105->category_id= $category26->id ;
        $aliment105->save();

	$aliment106 = new Aliment();
        $aliment106->name="طرطة خضر بالبطاطس";
        $aliment106->glucide="20";
        $aliment106->quantite="100";
	$aliment106->category_id= $category26->id ;
        $aliment106->save();





	$aliment107 = new Aliment();
        $aliment107->name=" ز لافة حساء بالخضر";
        $aliment107->glucide="6";
        $aliment107->quantite="250";
	$aliment107->category_id= $category9->id ;
        $aliment107->save();

	$aliment108 = new Aliment();
        $aliment108->name=" زلا فة  حساء بالخضر و البطاطس";
        $aliment108->glucide="12";
        $aliment108->quantite="250";
	$aliment108->category_id= $category9->id ;
        $aliment108->save();

	$aliment109 = new Aliment();
        $aliment109->name="حريرة مغربية ز لافة";
        $aliment109->glucide="25";
        $aliment109->quantite="100";
	$aliment109->category_id= $category9->id ;
        $aliment109->save();

	$aliment110 = new Aliment();
        $aliment110->name="حريرة مغربية بدون نشويات";
        $aliment110->glucide="4";
        $aliment110->quantite="250";
	$aliment110->category_id= $category9->id ;
        $aliment110->save();

	$aliment111 = new Aliment();
        $aliment111->name="حساء تشيشة بالحليب";
        $aliment111->glucide="25";
        $aliment111->quantite="250";
	$aliment111->category_id= $category9->id ;
        $aliment111->save();

	$aliment112 = new Aliment();
        $aliment112->name=" زلا فة عصيدة تشيشة";
        $aliment112->glucide="40";
        $aliment112->quantite="250";
	$aliment112->category_id= $category9->id ;
        $aliment112->save();

	$aliment113 = new Aliment();
        $aliment113->name="حساء معجنات بالمرق";
        $aliment113->glucide="20";
        $aliment113->quantite="250";
	$aliment113->category_id= $category9->id ;
        $aliment113->save();

	$aliment114 = new Aliment();
        $aliment114->name="أرز  بالحليب زلا فة";
        $aliment114->glucide="22";
        $aliment114->quantite="250";
	$aliment114->category_id= $category9->id ;
        $aliment114->save();

	$aliment115 = new Aliment();
        $aliment115->name=" حساء عدس بالخضر";
        $aliment115->glucide="25";
        $aliment115->quantite="250";
	$aliment115->category_id= $category9->id ;
        $aliment115->save();

	$aliment116 = new Aliment();
        $aliment116->name="حساء لوبية بيضاء بالخضر (لوبية بيضاء)";
        $aliment116->glucide="30";
        $aliment116->quantite="250";
	$aliment116->category_id= $category9->id ;
        $aliment116->save();






	$aliment117 = new Aliment();
        $aliment117->name="خبز كامل";
        $aliment117->glucide="50";
        $aliment117->quantite="100";
	$aliment117->category_id= $category10->id ;
        $aliment117->save();

	$aliment118 = new Aliment();
        $aliment118->name="خبز ابيض";
        $aliment118->glucide="55";
        $aliment118->quantite="100";
	$aliment118->category_id= $category10->id ;
        $aliment118->save();	

	$aliment119 = new Aliment();
        $aliment119->name="بغرير";
        $aliment119->glucide="50";
	$aliment119->category_id= $category10->id ;
        $aliment119->save();

	$aliment120 = new Aliment();
        $aliment120->name="مسمن";
        $aliment120->glucide="60";
        $aliment120->quantite="100";
	$aliment120->category_id= $category10->id ;
        $aliment120->save();

	$aliment121 = new Aliment();
        $aliment121->name="بيسكوت ";
        $aliment121->glucide="6";
        $aliment121->quantite="8";
	$aliment121->category_id= $category10->id ;
        $aliment121->save();

	$aliment122 = new Aliment();
        $aliment122->name="حرشة";
        $aliment122->glucide="70";
        $aliment122->quantite="100";
	$aliment122->category_id= $category10->id ;
        $aliment122->save();

	$aliment123 = new Aliment();
        $aliment123->name="مبسس";
        $aliment123->glucide="65";
        $aliment123->quantite="100";
	$aliment123->category_id= $category10->id ;
        $aliment123->save();

	$aliment124 = new Aliment();
        $aliment124->name="خبز محمص";
        $aliment124->glucide="15";
        $aliment124->quantite="20";
	$aliment124->category_id= $category10->id ;
        $aliment124->save();

	$aliment125 = new Aliment();
        $aliment125->name="خبز بالشوكو طة";
        $aliment125->glucide="45";
        $aliment125->quantite="70";
	$aliment125->category_id= $category10->id ;
        $aliment125->save();

	$aliment126 = new Aliment();
        $aliment126->name="خبز بالزبيب";
        $aliment126->glucide="42";
        $aliment126->quantite="80";
	$aliment126->category_id= $category10->id ;
        $aliment126->save();

	$aliment127 = new Aliment();
        $aliment127->name="ه لية";
        $aliment127->glucide="22";
        $aliment127->quantite="40";
	$aliment127->category_id= $category10->id ;
        $aliment127->save();

	$aliment128 = new Aliment();
        $aliment128->name="بطبوط";
        $aliment128->glucide="25";
        $aliment128->quantite="50";
	$aliment128->category_id= $category10->id ;
        $aliment128->save();

	$aliment129 = new Aliment();
        $aliment129->name="تريد";
        $aliment129->glucide="60";
        $aliment129->quantite="100";
	$aliment129->category_id= $category10->id ;
        $aliment129->save();

	$aliment130 = new Aliment();
        $aliment130->name="خبز الساندويتش";
        $aliment130->glucide="30";
        $aliment130->quantite="55";
	$aliment130->category_id= $category10->id ;
        $aliment130->save();


	$aliment131 = new Aliment();
        $aliment131->name="خبز البانيني";
        $aliment131->glucide="40";
        $aliment131->quantite="80";
	$aliment131->category_id= $category10->id ;
        $aliment131->save();


	$aliment132 = new Aliment();
        $aliment132->name="خبز الشاوارما";
        $aliment132->glucide="40";
        $aliment132->quantite="80";
	$aliment132->category_id= $category10->id ;
        $aliment132->save();


	$aliment133 = new Aliment();
        $aliment133->name="Corn flakes";
        $aliment133->glucide="20";
        $aliment133->quantite="25";
	$aliment133->category_id= $category11->id ;
        $aliment133->save();


	$aliment134 = new Aliment();
        $aliment134->name="Miel pops";
        $aliment134->glucide="35";
        $aliment134->quantite="25";
	$aliment134->category_id= $category11->id ;
        $aliment134->save();


	$aliment135 = new Aliment();
        $aliment135->name="Craky nuts";
        $aliment135->glucide="20";
        $aliment135->quantite="25";
	$aliment135->category_id= $category11->id ;
        $aliment135->save();


	$aliment136 = new Aliment();
        $aliment136->name="Frostie";
        $aliment136->glucide="20";
        $aliment136->quantite="25";
	$aliment136->category_id= $category11->id ;
        $aliment136->save();


	$aliment137 = new Aliment();
        $aliment137->name="Muesli";
        $aliment137->glucide="20";
        $aliment137->quantite="30";
	$aliment137->category_id= $category11->id ;
        $aliment137->save();


	$aliment138 = new Aliment();
        $aliment138->name="Fruit fibre";
        $aliment138->glucide="20";
        $aliment138->quantite="30";
	$aliment138->category_id= $category11->id ;
        $aliment138->save();


	$aliment139 = new Aliment();
        $aliment139->name="All bran";
        $aliment139->glucide="20";
        $aliment139->quantite="45";
	$aliment139->category_id= $category11->id ;
        $aliment139->save();


	$aliment140 = new Aliment();
        $aliment140->name="Special K";
        $aliment140->glucide="30";
        $aliment140->quantite="40";
	$aliment140->category_id= $category11->id ;
        $aliment140->save();


	$aliment141 = new Aliment();
        $aliment141->name="Special K Noisettes Amandes Effiliees ";
        $aliment141->glucide="30";
        $aliment141->quantite="40";
	$aliment141->category_id= $category11->id ;
        $aliment141->save();


	$aliment142 = new Aliment();
        $aliment142->name="Special K Aux 3 cereales completes";
        $aliment142->glucide="30";
        $aliment142->quantite="40";
	$aliment142->category_id= $category11->id ;
        $aliment142->save();


	$aliment143 = new Aliment();
        $aliment143->name="Special K Chocolat Noir ";
        $aliment143->glucide="30";
        $aliment143->quantite="40";
	$aliment143->category_id= $category11->id ;
        $aliment143->save();


	$aliment144 = new Aliment();
        $aliment144->name="Country store";
        $aliment144->glucide="30";
        $aliment144->quantite="40";
	$aliment144->category_id= $category11->id ;
        $aliment144->save();


	$aliment145 = new Aliment();
        $aliment145->name="Chocopops";
        $aliment145->glucide="35";
        $aliment145->quantite="25";
	$aliment145->category_id= $category11->id ;
        $aliment145->save();







	$aliment146 = new Aliment();
        $aliment146->name="ملعقة كبيرة مسحوق الخبز";
        $aliment146->glucide="7";
        $aliment146->quantite="10";
	$aliment146->category_id= $category12->id ;
        $aliment146->save();


	$aliment147 = new Aliment();
        $aliment147->name="دقيق ابيض";
        $aliment147->glucide="80";
        $aliment147->quantite="100";
	$aliment147->category_id= $category12->id ;
        $aliment147->save();


	$aliment148 = new Aliment();
        $aliment148->name="دقيق كامل";
        $aliment148->glucide="70";
        $aliment148->quantite="100";
	$aliment148->category_id= $category12->id ;
        $aliment148->save();


	$aliment149 = new Aliment();
        $aliment149->name="دقيق الخرطال";
        $aliment149->glucide="60";
        $aliment149->quantite="100";
	$aliment149->category_id= $category12->id ;
        $aliment149->save();


	$aliment150 = new Aliment();
        $aliment150->name="دقيق الذرة";
        $aliment150->glucide="85";
        $aliment150->quantite="100";
	$aliment150->category_id= $category12->id ;
	$aliment150->save();

	$aliment151 = new Aliment();
        $aliment151->name="دقيق ا رز";
        $aliment151->glucide="75";
        $aliment151->quantite="100";
	$aliment151->category_id= $category12->id ;
        $aliment151->save();

	$aliment152 = new Aliment();
        $aliment152->name="دقيق الصوجا";
        $aliment152->glucide="15";
        $aliment152->quantite="100";
	$aliment152->category_id= $category12->id ;
        $aliment152->save();

	$aliment153 = new Aliment();
        $aliment153->name="مايزينا";
        $aliment153->glucide="82";
        $aliment153->quantite="100";
	$aliment153->category_id= $category12->id ;
        $aliment153->save();




	$aliment154 = new Aliment();
        $aliment154->name="الليمون الحامض";
        $aliment154->glucide="2";
        $aliment154->quantite="100";
	$aliment154->category_id= $category13->id ;
        $aliment154->save();

	$aliment155 = new Aliment();
        $aliment155->name="الكيوي";
        $aliment155->glucide="10";
        $aliment155->quantite="100";
	$aliment155->category_id= $category13->id ;
        $aliment155->save();

	$aliment156 = new Aliment();
        $aliment156->name="مشمش";
        $aliment156->glucide="10";
        $aliment156->quantite="100";
	$aliment156->category_id= $category13->id ;
        $aliment156->save();

	$aliment157 = new Aliment();
        $aliment157->name="الدلاح";
        $aliment157->glucide="20";
        $aliment157->quantite="250";
	$aliment157->category_id= $category13->id ;
        $aliment157->save();

	$aliment158 = new Aliment();
        $aliment158->name="البتيخ";
        $aliment158->glucide="20";
        $aliment158->quantite="250";
	$aliment158->category_id= $category13->id ;
        $aliment158->save();

	$aliment159 = new Aliment();
        $aliment159->name="تين";
        $aliment159->glucide="18";
        $aliment159->quantite="100";
	$aliment159->category_id= $category13->id ;
        $aliment159->save();

	$aliment160 = new Aliment();
        $aliment160->name="رمان";
        $aliment160->glucide="15";
        $aliment160->quantite="200";
	$aliment160->category_id= $category13->id ;
        $aliment160->save();

	$aliment161 = new Aliment();
        $aliment161->name="فراولة";
        $aliment161->glucide="20";
        $aliment161->quantite="250";
	$aliment161->category_id= $category13->id ;
        $aliment161->save();

	$aliment162 = new Aliment();
        $aliment162->name="هندية";
        $aliment162->glucide="10";
        $aliment162->quantite="100";
	$aliment162->category_id= $category13->id ;
        $aliment162->save();

	$aliment163 = new Aliment();
        $aliment163->name="اناناس";
        $aliment163->glucide="20";
        $aliment163->quantite="180";
	$aliment163->category_id= $category13->id ;
        $aliment163->save();

	$aliment164 = new Aliment();
        $aliment164->name="كاكي";
        $aliment164->glucide="15";
        $aliment164->quantite="100";
	$aliment164->category_id= $category13->id ;
        $aliment164->save();

	$aliment165 = new Aliment();
        $aliment165->name="مانج";
        $aliment165->glucide="15";
        $aliment165->quantite="100";
	$aliment165->category_id= $category13->id ;
        $aliment165->save();
	
	$aliment166 = new Aliment();
        $aliment166->name="باباي";
        $aliment166->glucide="30";
        $aliment166->quantite="400";
	$aliment166->category_id= $category13->id ;
        $aliment166->save();
	
	$aliment167 = new Aliment();
        $aliment167->name="البرتقال";
        $aliment167->glucide="15";
        $aliment167->quantite="100";
	$aliment167->category_id= $category13->id ;
        $aliment167->save();	

	$aliment168 = new Aliment();
        $aliment168->name="ا جاص";
        $aliment168->glucide="12";
        $aliment168->quantite="100";
	$aliment168->category_id= $category13->id ;
        $aliment168->save();
	
	$aliment169 = new Aliment();
        $aliment169->name="موز";
        $aliment169->glucide="20";
        $aliment169->quantite="100";
	$aliment169->category_id= $category13->id ;
        $aliment169->save();

	$aliment170 = new Aliment();
        $aliment170->name="تفاح";
        $aliment170->glucide="10";
        $aliment170->quantite="100";
	$aliment170->category_id= $category13->id ;
        $aliment170->save();

	$aliment171 = new Aliment();
        $aliment171->name="برقوق";
        $aliment171->glucide="10";
        $aliment171->quantite="100";
	$aliment171->category_id= $category13->id ;
        $aliment171->save();

	$aliment172 = new Aliment();
        $aliment172->name="الخوخ";
        $aliment172->glucide="12";
        $aliment172->quantite="100";
	$aliment172->category_id= $category13->id ;
        $aliment172->save();

	$aliment173 = new Aliment();
        $aliment173->name="عـنـب";
        $aliment173->glucide="20";
        $aliment173->quantite="125";
	$aliment173->category_id= $category13->id ;
        $aliment173->save();

	$aliment174 = new Aliment();
        $aliment174->name="حب الملوك";
        $aliment174->glucide="20";
        $aliment174->quantite="125";
	$aliment174->category_id= $category13->id ;
        $aliment174->save();

	
	
	
	
	$aliment175 = new Aliment();
        $aliment175->name="تمر";
        $aliment175->glucide="20";
        $aliment175->quantite="30";
	$aliment175->category_id= $category14->id ;
        $aliment175->save();

	$aliment176 = new Aliment();
        $aliment176->name="تين مجفف";
        $aliment176->glucide="20";
        $aliment176->quantite="30";
	$aliment176->category_id= $category14->id ;
        $aliment176->save();

	$aliment177 = new Aliment();
        $aliment177->name="برقوق مجفف";
        $aliment177->glucide="20";
        $aliment177->quantite="30";
	$aliment177->category_id= $category14->id ;
        $aliment177->save();

	$aliment178 = new Aliment();
        $aliment178->name="مشمش مجفف";
        $aliment178->glucide="20";
        $aliment178->quantite="30";
	$aliment178->category_id= $category14->id ;
        $aliment178->save();

	$aliment179 = new Aliment();
        $aliment179->name="زبيب";
        $aliment179->glucide="20";
        $aliment179->quantite="30";
	$aliment179->category_id= $category14->id ;
        $aliment179->save();

	$aliment180 = new Aliment();
        $aliment180->name="موز مجفف";
        $aliment180->glucide="20";
        $aliment180->quantite="30";
	$aliment180->category_id= $category14->id ;
        $aliment180->save();

	$aliment181 = new Aliment();
        $aliment181->name="كمبوت الفواكه بدون سكر";
        $aliment181->glucide="15";
        $aliment181->quantite="100";
	$aliment181->category_id= $category14->id ;
        $aliment181->save();	

	$aliment182 = new Aliment();
        $aliment182->name="كمبوت الفواكه بالسكر";
        $aliment182->glucide="20";
        $aliment182->quantite="100";
	$aliment182->category_id= $category14->id ;
        $aliment182->save();

	$aliment183 = new Aliment();
        $aliment183->name="الزيتون ا خضر";
        $aliment183->glucide="8";
        $aliment183->quantite="100";
	$aliment183->category_id= $category15->id ;
        $aliment183->save();

	
	$aliment184 = new Aliment();
        $aliment184->name="الزيتون غير الناضج";
        $aliment184->glucide="3";
        $aliment184->quantite="100";
	$aliment184->category_id= $category15->id ;
        $aliment184->save();
	
	$aliment185 = new Aliment();
        $aliment185->name="لوز";
        $aliment185->glucide="17";
        $aliment185->quantite="100";
	$aliment185->category_id= $category15->id ;
        $aliment185->save();

	$aliment186 = new Aliment();
        $aliment186->name="كاوكاو";
        $aliment186->glucide="15";
        $aliment186->quantite="100";
	$aliment186->category_id= $category15->id ;
        $aliment186->save();

	$aliment187 = new Aliment();
        $aliment187->name="بلوط";
        $aliment187->glucide="40";
        $aliment187->quantite="100";
	$aliment187->category_id= $category15->id ;
        $aliment187->save();

	$aliment188 = new Aliment();
        $aliment188->name="جوز الكاجو";
        $aliment188->glucide="26";
	$aliment188->category_id= $category15->id ;
        $aliment188->quantite="100";
        $aliment188->save();

	$aliment189 = new Aliment();
        $aliment189->name="فستق";
        $aliment189->glucide="15";
        $aliment189->quantite="100";
	$aliment189->category_id= $category15->id ;
        $aliment189->save();

	$aliment190 = new Aliment();
        $aliment190->name="ml حليب مركز غير محلى";
        $aliment190->glucide="10";
        $aliment190->quantite="100";
	$aliment190->category_id= $category16->id ;
        $aliment190->save();
	
	$aliment191 = new Aliment();
        $aliment191->name="ml حليب مركز محلى";
        $aliment191->glucide="55";
        $aliment191->quantite="100";
	$aliment191->category_id= $category16->id ;
        $aliment191->save();

	$aliment192 = new Aliment();
        $aliment192->name="mlحليب صوجا";
        $aliment192->glucide="2";
        $aliment192->quantite="100";
	$aliment192->category_id= $category16->id ;
        $aliment192->save();

	$aliment193 = new Aliment();
        $aliment193->name=" gramme حليب بودرة";
        $aliment193->glucide="5";
        $aliment193->quantite="10";
        $aliment193->category_id= $category16->id ;
	$aliment193->save();

	$aliment194 = new Aliment();
        $aliment194->name="حليب منسم بالفواكه";
        $aliment194->glucide="10";
        $aliment194->quantite="100";
        $aliment194->category_id= $category16->id ;
	$aliment194->save();

	$aliment195 = new Aliment();
        $aliment195->name="ml حليب بالشك طة";
        $aliment195->glucide="20";
        $aliment195->quantite="100";
	$aliment195->category_id= $category16->id ;
        $aliment195->save();

	$aliment196 = new Aliment();
        $aliment196->name="رايبي";
        $aliment196->glucide="25";
	$aliment196->category_id= $category17->id ;
        $aliment196->save();

	$aliment197 = new Aliment();
        $aliment197->name="ياغورت طبيعي كاس";
        $aliment197->glucide="5";
	$aliment197->category_id= $category17->id ;
        $aliment197->save();

	$aliment198 = new Aliment();
        $aliment198->name="Petit suisse avec sucre";
        $aliment198->glucide="12";
        $aliment198->quantite="60";
	$aliment198->category_id= $category17->id ;
        $aliment198->save();

	$aliment199 = new Aliment();
        $aliment199->name="ياغورت للشرب";
        $aliment199->glucide="30";
        $aliment199->quantite="200";
	$aliment199->category_id= $category17->id ;
        $aliment199->save();

	$aliment200 = new Aliment();
        $aliment200->name="ياغورت محلى";
        $aliment200->glucide="20";
        $aliment200->quantite="100";
	$aliment200->category_id= $category17->id ;
        $aliment200->save();



	$aliment201 = new Aliment();
        $aliment201->name="جبن ابيض";
        $aliment201->glucide="5";
        $aliment201->quantite="100";
	$aliment201->category_id= $category18->id ;
        $aliment201->save();

	$aliment202 = new Aliment();
        $aliment202->name="Fontine";
        $aliment202->glucide="1.6";
        $aliment202->quantite="100";
	$aliment202->category_id= $category18->id ;
        $aliment202->save();

	$aliment203 = new Aliment();
        $aliment203->name="Feta";
        $aliment203->glucide="4.1";
        $aliment203->quantite="100";
	$aliment203->category_id= $category18->id ;
        $aliment203->save();

	$aliment204 = new Aliment();
        $aliment204->name="ricotta au lait ";
        $aliment204->glucide="3.6";
        $aliment204->quantite="100";
	$aliment204->category_id= $category18->id ;
        $aliment204->save();

	$aliment205 = new Aliment();
        $aliment205->name="Frommage cheddar";
        $aliment205->glucide="1.3";
        $aliment205->quantite="100";
	$aliment205->category_id= $category18->id ;
        $aliment205->save();





	$aliment206 = new Aliment();
        $aliment206->name="قهوة بدون سكر";
        $aliment206->glucide="0";
	$aliment206->category_id= $category19->id ;
        $aliment206->save();

	$aliment207 = new Aliment();
        $aliment207->name="شاي بدون سكر";
        $aliment207->glucide="0";
	$aliment207->category_id= $category19->id ;
        $aliment207->save();

	$aliment209 = new Aliment();
        $aliment209->name="مياه غازية بدون سكر";
        $aliment209->glucide="0";
	$aliment209->category_id= $category19->id ;
        $aliment209->save();

	$aliment210 = new Aliment();
        $aliment210->name="ماء الشرب";
        $aliment210->glucide="0";
	$aliment210->category_id= $category19->id ;
        $aliment1->save();

	$aliment211 = new Aliment();
        $aliment211->name="منقوع ا عشاب";
        $aliment211->glucide="0";
	$aliment211->category_id= $category19->id ;
        $aliment211->save();

	$aliment212 = new Aliment();
        $aliment212->name=" ml عصير الليمون الحامض";
        $aliment212->glucide="2";
        $aliment212->quantite="100";
	$aliment212->category_id= $category19->id ;
        $aliment212->save();

	$aliment213 = new Aliment();
        $aliment213->name="ml نكتار ";
        $aliment213->glucide="15";
        $aliment213->quantite="100";
	$aliment213->category_id= $category19->id ;
        $aliment213->save();

	$aliment214 = new Aliment();
        $aliment214->name= "ح2بات عصير برتقال بدون سكر";
        $aliment214->glucide="20";
	$aliment214->category_id= $category19->id ;
        $aliment214->save();

	$aliment215 = new Aliment();
        $aliment215->name="ml لبن";
        $aliment215->glucide="5";
        $aliment215->quantite="100";
	$aliment215->category_id= $category19->id ;
        $aliment215->save();

	$aliment216 = new Aliment();
        $aliment216->name="حليب";
        $aliment216->glucide="5";
        $aliment216->quantite="100";
	$aliment216->category_id= $category19->id ;
        $aliment216->save();

	$aliment217 = new Aliment();
        $aliment217->name="حليب بالشوكو طة";
        $aliment217->glucide="10";
        $aliment217->quantite="100";
	$aliment217->category_id= $category19->id ;
        $aliment217->save();

	$aliment218 = new Aliment();
        $aliment218->name="صو دا ليت‬‎";
        $aliment218->glucide="0";
	$aliment218->category_id= $category19->id ;
        $aliment218->save();

	$aliment219 = new Aliment();
        $aliment219->name="Big Mac قطعة واحدة";
        $aliment219->glucide="39";
	$aliment219->category_id= $category21->id ;
        $aliment219->save();

	$aliment220 = new Aliment();
        $aliment220->name="Cheese Burger قطعة واحدة";
        $aliment220->glucide="31";
	$aliment220->category_id= $category21->id ;
        $aliment220->save();

	$aliment221 = new Aliment();
        $aliment221->name="Royal Cheese قطعة واحدة";
        $aliment221->glucide="37";
	$aliment221->category_id= $category21->id ;
        $aliment221->save();

	$aliment222 = new Aliment();
        $aliment222->name="Ketchup";
        $aliment222->glucide="3";
        $aliment222->quantite="10";
	$aliment222->category_id= $category21->id ;
        $aliment222->save();

	$aliment223 = new Aliment();
        $aliment223->name="Frite (petite)";
        $aliment223->glucide="31";
        $aliment223->quantite="75";
	$aliment223->category_id= $category21->id ;
        $aliment223->save();

	$aliment224 = new Aliment();
        $aliment224->name="Frite (moyenne)";
        $aliment224->glucide="44";
        $aliment224->quantite="105";
	$aliment224->category_id= $category21->id ;
        $aliment224->save();

	$aliment225 = new Aliment();
        $aliment225->name="Frite (grande)";
        $aliment225->glucide="65";
        $aliment225->quantite="150";
	$aliment225->category_id= $category21->id ;
        $aliment225->save();

	$aliment226 = new Aliment();
        $aliment226->name="Potatoes (moyenne)";
        $aliment226->glucide="29";
        $aliment226->quantite="112";
	$aliment226->category_id= $category21->id ;
        $aliment226->save();

	$aliment227 = new Aliment();
        $aliment227->name="Potatoes (grande)";
        $aliment227->glucide="49";
        $aliment227->quantite="160";
	$aliment227->category_id= $category21->id ;
        $aliment227->save();

	$aliment228 = new Aliment();
        $aliment228->name="Sundae Nappage Arome Caramel";
        $aliment228->glucide="45";
	$aliment228->category_id= $category21->id ;
        $aliment228->save();

	$aliment229 = new Aliment();
        $aliment229->name="Sandae Nappage Arome Cacao";
        $aliment229->glucide="45";
	$aliment229->category_id= $category21->id ;
        $aliment229->save();

	$aliment230 = new Aliment();
        $aliment230->name="Sandae Nappage Arome Fraise";
        $aliment230->glucide="40";
	$aliment230->category_id= $category21->id ;
        $aliment230->save();

	
	$aliment231 = new Aliment();
        $aliment231->name="Brownie au chocolat";
        $aliment231->glucide="23";
	$aliment231->category_id= $category21->id ;
        $aliment231->save();

	$aliment232 = new Aliment();
        $aliment232->name="Mc Flurry MM’s";
        $aliment232->glucide="45";
	$aliment232->category_id= $category21->id ;
        $aliment232->save();




	$aliment233 = new Aliment();
        $aliment233->name="تريد";
        $aliment233->glucide="70";
	$aliment233->quantite="100";
	$aliment233->category_id= $category20->id ;
        $aliment233->save();
	
	$aliment234 = new Aliment();
        $aliment234->name="مبسس";
        $aliment234->glucide="65";
	$aliment234->quantite="100";
	$aliment234->category_id= $category20->id ;
        $aliment234->save();

	$aliment235 = new Aliment();
        $aliment235->name="كاران";
        $aliment235->glucide="35";
	$aliment235->quantite="200";
	$aliment235->category_id= $category20->id ;
        $aliment235->save();

	$aliment236 = new Aliment();
        $aliment236->name="بكبوكة";
        $aliment236->glucide="8";
	$aliment236->quantite="100";
	$aliment236->category_id= $category20->id ;
        $aliment236->save();

	$aliment237 = new Aliment();
        $aliment237->name="مقروط قطعة";
        $aliment237->glucide="5";
	$aliment237->quantite="12.5";
	$aliment237->category_id= $category20->id ;
        $aliment237->save();

	$aliment238 = new Aliment();
        $aliment238->name="بركوكش";
        $aliment238->glucide="35";
	$aliment238->quantite="200";
	$aliment238->category_id= $category20->id ;
        $aliment238->save();

	$aliment239 = new Aliment();
        $aliment239->name="كعك";
        $aliment239->glucide="56";
	$aliment239->quantite="100";
	$aliment239->category_id= $category20->id ;
        $aliment239->save();





	$aliment240 = new Aliment();
        $aliment240->name="شوكو طة بالحليب";
        $aliment240->glucide="50";
	$aliment240->quantite="100";
	$aliment240->category_id= $category22->id ;
        $aliment240->save();

	$aliment262 = new Aliment();
        $aliment262->name="شوكو طة سوداء";
        $aliment262->glucide="15";
	$aliment262->category_id= $category22->id ;
        $aliment262->save();

	$aliment263 = new Aliment();
        $aliment263->name="شوكو طة سوداء % 70";
        $aliment263->glucide="35";
	$aliment263->quantite="100";
	$aliment263->category_id= $category22->id ;
        $aliment263->save();

	$aliment264 = new Aliment();
        $aliment264->name="بودرة كاكاو مر بدون سكر";
        $aliment264->glucide="10";
	$aliment264->quantite="20";
	$aliment264->category_id= $category22->id ;
        $aliment264->save();

	$aliment265 = new Aliment();
        $aliment265->name="ودرة الشكو طة بالسكرقطعة1";
	$aliment265->quantite="20";
        $aliment265->glucide="15";
	$aliment265->category_id= $category22->id ;
        $aliment265->save();

	$aliment266 = new Aliment();
        $aliment266->name="Kinder Bueno قطعة 1";
        $aliment266->glucide="20";
	$aliment266->category_id= $category22->id ;
        $aliment266->save();

	$aliment267 = new Aliment();
        $aliment267->name="Kinder Chocolat قطعة 1";
        $aliment267->glucide="45";
	$aliment267->category_id= $category22->id ;
        $aliment267->save();

	$aliment268 = new Aliment();
        $aliment268->name="Kinder Circus";
        $aliment268->glucide="2.5";
	$aliment268->quantite="5";
	$aliment268->category_id= $category22->id ;
        $aliment268->save();

	$aliment270 = new Aliment();
        $aliment270->name="Kinder Country";
        $aliment270->glucide="8";
	$aliment270->quantite="23.5";
	$aliment270->category_id= $category22->id ;
        $aliment270->save();

	$aliment271 = new Aliment();
        $aliment271->name="Kinder Delice قطعة1";
        $aliment271->glucide="16";
	$aliment271->quantite="42";
	$aliment271->category_id= $category22->id ;
        $aliment271->save();

	$aliment272 = new Aliment();
        $aliment272->name="KITKAT";
        $aliment272->glucide="25";
	$aliment272->quantite="45";
	$aliment272->category_id= $category22->id ;
        $aliment272->save();

	$aliment273 = new Aliment();
        $aliment273->name="Lion";
        $aliment273->glucide="30";
	$aliment273->quantite="45";
	$aliment273->category_id= $category22->id ;
        $aliment273->save();

	$aliment274 = new Aliment();
        $aliment274->name="Mars";
        $aliment274->glucide="40";
	$aliment274->quantite="58";
	$aliment274->category_id= $category22->id ;
        $aliment274->save();

	$aliment275 = new Aliment();
        $aliment275->name="Snikers";
        $aliment275->glucide="30";
	$aliment275->quantite="60";
	$aliment275->category_id= $category22->id ;
        $aliment275->save();

	$aliment276 = new Aliment();
        $aliment276->name="Twix";
        $aliment276->glucide="35";
	$aliment276->quantite="58";
	$aliment276->category_id= $category22->id ;
        $aliment276->save();

	$aliment277 = new Aliment();
        $aliment277->name="Ferrero-rocher";
        $aliment277->glucide="5";
	$aliment277->quantite="12.5";
	$aliment277->category_id= $category22->id ;
        $aliment277->save();




	$aliment278 = new Aliment();
        $aliment278->name="Sorbet";
        $aliment278->glucide="15";
	$aliment278->quantite="50";
	$aliment278->category_id= $category23->id ;
        $aliment278->save();

	$aliment279 = new Aliment();
        $aliment279->name="Cornet";
        $aliment279->glucide="15";
	$aliment279->quantite="50";
	$aliment279->category_id= $category23->id ;
        $aliment279->save();

	$aliment280 = new Aliment();
        $aliment280->name="متلجات في الكؤوس الصغيرة";
        $aliment280->glucide="10";
	$aliment280->quantite="70";
	$aliment280->category_id= $category23->id ;
        $aliment280->save();

	$aliment281 = new Aliment();
        $aliment281->name="نوكا متلجة";
        $aliment281->glucide="25";
	$aliment281->quantite="120";
	$aliment281->category_id= $category23->id ;
        $aliment281->save();

	$aliment282 = new Aliment();
        $aliment282->name="Magnum";
        $aliment282->glucide="30";
	$aliment282->quantite="120";
	$aliment282->category_id= $category23->id ;
        $aliment282->save();

	$aliment283 = new Aliment();
        $aliment283->name="Barre glacée";
        $aliment283->glucide="20";
	$aliment283->quantite="50";
	$aliment283->category_id= $category23->id ;
        $aliment283->save();

	$aliment284 = new Aliment();
        $aliment284->name="Sundae glace ";
        $aliment284->glucide="30";
	$aliment284->quantite="145";
	$aliment284->category_id= $category23->id ;
        $aliment284->save();





	$aliment285 = new Aliment();
        $aliment285->name="سكاكر  قطعة1";
        $aliment285->glucide="15";
	$aliment285->quantite="30";
	$aliment285->category_id= $category24->id ;
        $aliment285->save();

	$aliment286 = new Aliment();
        $aliment286->name="مصاصة 1 ";
        $aliment286->glucide="10";
	$aliment286->quantite="10";
	$aliment286->category_id= $category24->id ;
        $aliment286->save();

	$aliment287 = new Aliment();
        $aliment287->name="كاراميل";
        $aliment287->glucide="5";
        $aliment287->quantite="5";
	$aliment287->category_id= $category24->id ;
        $aliment287->save();
	
	$aliment288 = new Aliment();
        $aliment288->name="علكة بالسكر";
        $aliment288->glucide="1";
        $aliment288->quantite="3";
	$aliment288->category_id= $category24->id ;
        $aliment288->save();

	$aliment289 = new Aliment();
        $aliment289->name="علكة بدون سكر";
        $aliment289->glucide="35";
        $aliment289->quantite="100";
	$aliment289->category_id= $category24->id ;
        $aliment289->save();

	$aliment290 = new Aliment();
        $aliment290->name="سكر";
        $aliment290->glucide="5";
        $aliment290->quantite="5";
	$aliment290->category_id= $category24->id ;
        $aliment290->save();

	$aliment291 = new Aliment();
        $aliment291->name="سكر";
        $aliment291->glucide="15";
        $aliment291->quantite="15";
	$aliment291->category_id= $category24->id ;
        $aliment291->save();

	$aliment292 = new Aliment();
        $aliment292->name="سكر بودرة";
        $aliment292->glucide="5";
        $aliment292->quantite="5";
	$aliment292->category_id= $category24->id ;
        $aliment292->save();


	$aliment293 = new Aliment();
        $aliment293->name="شباكية1";
        $aliment293->glucide="5.4";
        $aliment293->quantite="8";
	$aliment293->category_id= $category25->id ;
        $aliment293->save();

	$aliment294 = new Aliment();
        $aliment294->name="1 كعب الغزال";
        $aliment294->glucide="12.5";
        $aliment294->quantite="20";
	$aliment294->category_id= $category25->id ;
        $aliment294->save();

	$aliment295 = new Aliment();
        $aliment295->name="بريوات";
        $aliment295->glucide="10";
        $aliment295->quantite="15";
	$aliment295->category_id= $category25->id ;
        $aliment295->save();

	$aliment296 = new Aliment();
        $aliment296->name="غريبة باللوز";
        $aliment296->glucide="15";
        $aliment296->quantite="20";
	$aliment296->category_id= $category25->id ;
        $aliment296->save();

	$aliment297 = new Aliment();
        $aliment297->name="غريبة بهلة";
        $aliment297->glucide="15";
        $aliment297->quantite="20";
	$aliment297->category_id= $category25->id ;
        $aliment297->save();

	$aliment298 = new Aliment();
        $aliment298->name="مقروط";
        $aliment298->glucide="5";
        $aliment298->quantite="12.5";
	$aliment298->category_id= $category25->id ;
        $aliment298->save();

	$aliment299 = new Aliment();
        $aliment299->name="فقاص";
        $aliment299->glucide="53";
        $aliment299->quantite="100";
	$aliment299->category_id= $category25->id ;
        $aliment299->save();

	$aliment300 = new Aliment();
        $aliment300->name="كعك";
        $aliment300->glucide="53";
        $aliment300->quantite="100";
	$aliment300->category_id= $category25->id ;
        $aliment300->save();

	$aliment301 = new Aliment();
        $aliment301->name="سفوف بالسكر";
        $aliment301->glucide="57";
        $aliment301->quantite="100";
	$aliment301->category_id= $category25->id ;
        $aliment301->save();
	}
}


